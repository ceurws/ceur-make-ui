//-- will store the Recent Workshops data, that would be pulled from the Server
var RECENT_WORKSHOPS_LIST = [];
var autosave_TIMER;	//-- timer that will be attached to auto-save functionality
var autosave_INTEVAL = 1000 * 20;	//-- perform auto-save every 20000 ms (ie. every 20 sec)

//-- data send to server for storing in database
function send_to_db_storage( json_data )
{
	//-- stop the auto-saving
	STOP_auto_save();
	
	$('#card_createworkshop_main').show();
	$('#card_createworkshop_submenu').hide();
	$('#saved_workshops').hide();
	$('#card_tableofcontents').show();
	
	$.ajax({
		type: 'POST',
		url: 'storage/save.php',
		data: json_data,
		contentType: "application/json",
		dataType: 'json'
	})
	.done(function(data) {
		console.log( 'Workshop Contents Has Been Saved in Database!' );
		
		if( ! data.error )	//-- if no errors
			M.toast({html:'Workshop Contents Has Been Saved in Database!', displayLength: 3000, classes: 'rounded'}) ;			
	})
	.fail(function(error) {
		console.log(error);		
	})
	.always(function() {
		console.log( 'ALWAYS-Workshop Contents Has Been Saved in Database!' );
		$('#saved_workshops').hide();	//-- hide the "Recent Workshops" section
		
		//-- display the Put-Form box
		$('#putform_card').show();
		
		//-- update the link for downloading the put-form
		var a = document.getElementById('putformDownload');
		a.href = "userDirectories/"+sessionStorage.userId+"/output/put-form.odt" ;
		a.setAttribute('target', '_blank');
						
	});
}


//-- fetches all recent workshops
function get_all_recent_workshops()
{
	$.getJSON( "storage/get_workshops.php", function( resp ) {
		$('#saved_workshops .workshops_list').empty();
		
		if( resp.error )		//-- if error or no data found
		{			
			$('#saved_workshops .card-title a').addClass('disabled');
			
			$('#saved_workshops p').html('Sorry! No recent workshops found in database!');
		}
		else
		{		
			$('#saved_workshops .card-title a').removeClass('disabled');
			
			$('#saved_workshops p').html('');
			
			var i = 0;
			
			//-- loop through each records from database
			$.each( resp.data, function() { 
				var workshop = jQuery.parseJSON( this.json_data );
				workshop = workshop[0];
				
				RECENT_WORKSHOPS_LIST.push( workshop );
				
				//var workshop_date = new Date( workshop.date ).toDateString();
				var workshop_date = format_datetime( this.created_time );
				
				$('#saved_workshops .workshops_list').append( '<a href="#" data-workshop_index="'+ i +'">'+ (i+1) +'. '+ workshop.title.full +' ( '+ workshop_date +' )</a>' );
				i++;
			});
		}	
	});
}	

//-- misc code to display date and time properly
function format_datetime( datetime )
{
	var date = new Date( datetime );
	
	var temp_d = date.toDateString().substring(3);
	
	var hours = date.getHours();
	var minutes = date.getMinutes();
	var ampm = hours >= 12 ? 'pm' : 'am';
	hours = hours % 12;
	hours = hours ? hours : 12; // the hour '0' should be '12'
	minutes = minutes < 10 ? '0'+minutes : minutes;
	var strTime = hours + ':' + minutes + ' ' + ampm;
  
	return temp_d + ', ' + strTime;
}

//-- call on page load, to get all the recent workshops
get_all_recent_workshops();



//-- when a Recent Workshop is clicked, load up the data..
$('#saved_workshops').on('click', '.workshops_list a', function(e){	
	//-- get the selected WORKSHOP's index
	var i = $(this).data('workshop_index');
	
	//-- get the selected WORKSHOP's data
	var SELECTED_WORKSHOP = RECENT_WORKSHOPS_LIST[ i ];
	
	console.log( SELECTED_WORKSHOP );
	
	//-- fill the data
	$('#id').val( SELECTED_WORKSHOP.title.id );
	$('#acronym').val( SELECTED_WORKSHOP.title.acronym );
	$('#volume').val( SELECTED_WORKSHOP.title.volume );
	$('#fullTitle').val( SELECTED_WORKSHOP.title.full );
	$('#volumeNumber').val( SELECTED_WORKSHOP.title.volume );	
	
	$('#acronymConference').val( SELECTED_WORKSHOP.conference.acronym );
	$('#fullName').val( SELECTED_WORKSHOP.conference.full );
	$('#homepageConference').val( SELECTED_WORKSHOP.conference.homepage );
	
	//-- language
	$('#language').find('option[value="'+ SELECTED_WORKSHOP.language +'"]').prop('selected', true);
	$('#language').formSelect();
	
	//-- workshop_series
	if( SELECTED_WORKSHOP.workshop_series )
	{	
		$('#workshop_series').find('option[value="'+ SELECTED_WORKSHOP.workshop_series +'"]').prop('selected', true);
		$('#workshop_series').formSelect();
	}
	
	$('#date').val( SELECTED_WORKSHOP.date );
	$('#homePage, #homepageConference').val( SELECTED_WORKSHOP.homepage );
	$('#location').val( SELECTED_WORKSHOP.location );
	$('#linkLocation').val( SELECTED_WORKSHOP.locationlink );
	
	//-- EDITORS
	var total_editors = SELECTED_WORKSHOP.editors.length;
	var j = 0;
	while( j < total_editors )
	{
		$('#nameEditor' + j).val( SELECTED_WORKSHOP.editors[ j ].name );
		$('#affiliationEditor' + j).val( SELECTED_WORKSHOP.editors[ j ].affiliation );
		$('#homepageEditor' + j).val( SELECTED_WORKSHOP.editors[ j ].homepage );
		
		//-- country
		$('#countryEditor' + j + ' option').each(function() {
			if( $(this).text() == SELECTED_WORKSHOP.editors[ j ].country ) {
				$(this).prop('selected', true);
				$('#countryEditor' + j).formSelect();	
			}
		});

		j++;	//-- increment the counter
		
		if( j < total_editors )	//-- if there's still more EDITORS
		{	
			addEditor('addEditors');	//-- dynamically add the next EDITOR empty fields, inorder to fill in the next iteration
		}	
	}
		
	M.updateTextFields();	//-- to move the labels for the prefilled textboxes to go out (MaterializeCSS)
	
	//-- show the Workshop Form page
	showContentForWorkshop('uniquename');
	
	e.preventDefault();
});


//-- when the main "Create Workshop" button is pressed
$('#createWorkshop').on('click', function(e){
	e.preventDefault();
	
	if( is_USER_logged_in )
	{	
		$('#card_createworkshop_main').hide();
		$('#card_createworkshop_submenu').show();
		$('#saved_workshops').show();
		$('#card_tableofcontents').hide();
	}
	else
	{	
		$('#card_createworkshop_main').hide();				
		$('#card_tableofcontents').hide();
		$('#workshopForm').show();
	}
});


//-- for tooltip top popup
$('.tooltipped').tooltip();


//------------------------------------------------------------------------------------------------------------------------

//-- check whether there's any auto-saved contents
function check_auto_save()
{	
	var saved_data = localStorage.getItem('createWorkshop_autosave');
	
	//-- no auto-saved data found
	if ( saved_data === null ) {
		//-- show the blank Create Workshop form
		showContentForWorkshop('uniquename');
		
		START_auto_save(); 	//-- start saving
		
		return;	//-- exit the function
	}	
	

	//-- Ask confirmation for restoring auto-saved data
	if( confirm("An auto-save data is found. Do you want to restore it?") )	//-- if "yes"
	{
		//-- restore the auto-saved data
		RESTORE_auto_save();	
	}
		
	//-- show the Create Workshop form
	showContentForWorkshop('uniquename');
	
	START_auto_save(); 	//-- start saving
}


//-- start the timer for auto-saving
function START_auto_save()
{
	//-- clear the previous auto-saved data (if any). Because we are saving fresh contents now
	CLEAR_auto_saved_data();
	
	autosave_TIMER = window.setInterval(function () {
		
		//-- do the saving..
		DO_auto_save();
		
	}, autosave_INTEVAL);
}


//-- stop the timer for auto-save
function STOP_auto_save()
{
	if( autosave_TIMER != null ) {
		window.clearInterval( autosave_TIMER ); 
		autosave_TIMER = null;
	}
	
	//-- clear the auto-saved data (if any)
	CLEAR_auto_saved_data();
}


//-- clear the auto-saved data from browser
function CLEAR_auto_saved_data()
{
	var saved_data = localStorage.getItem('createWorkshop_autosave');
	
	//-- if auto-saved data found
	if ( saved_data !== null ) {
		//-- remove the auto-saved data since we are submitting the form
		localStorage.removeItem('createWorkshop_autosave');
	}
}


//-- perform the saving functionality
function DO_auto_save()
{
	//-- if the "ID" field is not entered, then prevent the auto-save, assuming the user has not filled any info
	if( $.trim( $('#id').val() ) == '' )
		return;
	
	//-- read the data
	var temp_data = {
		'workshop_series': $('#workshop_series').val(),
		'title' : {
			'id' 		: $('#id').val(),
			'acronym' 	: $('#acronym').val(),
			'volume' 	: $('#volume').val(),
			'full' 		: $('#fullTitle').val()			
		},
		'number' 		: $('#volumeNumber').val(),
		'language' 		: $('#language').val(),
		'date' 			: $('#date').val(),		
		'homepage' 		: $('#homePage').val(),
		'location' 		: $('#location').val(),
		'locationlink' 	: $('#linkLocation').val(),
		'conference' : {			
			'acronym' 	: $('#acronymConference').val(),
			'full' 		: $('#fullName').val(),
			'homepage' 	: $('#homepageConference').val()
		},
		'editors' : []		
	};
	
	//-- total number of editors
	var total_editors = $('#addEditors > div').length;
	
	//-- get the data of each Editor
	for( var i = 0; i < total_editors; i++ )
	{
		var temp_editor = {
			'name'			: $('#nameEditor' + i).val(),
			'affiliation'	: $('#affiliationEditor' + i).val(),
			'country'		: $('#countryEditor' + i + ' option:selected').text(),
			'homepage'		: $('#homepageEditor' + i).val()
		};
		
		temp_data['editors'].push( temp_editor );
	}	
	
	//-- convert it to JSON string
	var temp_json = JSON.stringify( temp_data );
	
	//-- store the data as JSON in browser's localStorage
	localStorage.setItem('createWorkshop_autosave', temp_json);
	
	console.log( 'Auto-saved at : ' +  format_datetime(Date.now()) );
}


//-- restore the auto-saved data
function RESTORE_auto_save()
{
	//-- get the data from Browser's localStorage	
	var temp = localStorage.getItem('createWorkshop_autosave');
	
	//-- parse the JSON string into Object
	SAVED_DATA = JSON.parse( temp );
	
	//-- assign the data
	$('#id').val( SAVED_DATA.title.id );
	$('#acronym').val( SAVED_DATA.title.acronym );
	$('#volume').val( SAVED_DATA.title.volume );
	$('#fullTitle').val( SAVED_DATA.title.full );
		
	$('#volumeNumber').val( SAVED_DATA.number );
	
	//-- language
	$('#language').find('option[value="'+ SAVED_DATA.language +'"]').prop('selected', true);
	$('#language').formSelect();
	
	//-- workshop series
	if( SAVED_DATA.workshop_series )
	{
		$('#workshop_series').find('option[value="'+ SAVED_DATA.workshop_series +'"]').prop('selected', true);
		$('#workshop_series').formSelect();
	}
	
	$('#date').val( SAVED_DATA.date );
	$('#homePage').val( SAVED_DATA.homepage );
	$('#location').val( SAVED_DATA.location );
	$('#linkLocation').val( SAVED_DATA.locationlink );
	
	$('#acronymConference').val( SAVED_DATA.conference.acronym );	
	$('#fullName').val( SAVED_DATA.conference.full );	
	$('#homepageConference').val( SAVED_DATA.conference.homepage );	

	//-- total number of editors
	var total_editors = SAVED_DATA.editors.length;
	
	//-- get the data of each Editor
	var i = 0;
	while( i < total_editors )
	{
		$('#nameEditor' + i).val( SAVED_DATA.editors[ i ].name );
		$('#affiliationEditor' + i).val( SAVED_DATA.editors[ i ].affiliation );		
		$('#homepageEditor' + i).val( SAVED_DATA.editors[ i ].homepage );		
		
		//-- country
		$('#countryEditor' + i + ' option').each(function() {
			if( $(this).text() == SAVED_DATA.editors[ i ].country ) {
				$(this).prop('selected', true);
				$('#countryEditor' + i).formSelect();	
			}
		});
		
		i++;	//-- increment the counter
		
		if( i < total_editors )	//-- if there's still more EDITORS
		{	
			addEditor('addEditors');	//-- dynamically add the next EDITOR empty fields, inorder to fill in the next iteration
		}
	}	
	
	M.updateTextFields();	//-- to move the labels for the prefilled textboxes to go out (MaterializeCSS)
}


//-------------------------------------------------------------------------------------------

//-- when "Clear" button is pressed
$('#btnClearAll').on('click', function(e){
	e.preventDefault();
	
	//-- confirmation
	var isConfirmed = confirm("Do you really want to perform this action? Click OK to continue.");
	if( ! isConfirmed  ) return false;
	
	//-- get the current tab's index
	var current_tab = $("#wizard2").steps("getCurrentIndex");
	
	if( current_tab == 0 )	//-- Metadata Tab
	{
		//-- select the first item in workshop series
		$('#workshop_series').find('option').first().prop('selected', true);
		$('#workshop_series').formSelect();
		
		//-- empty the contents of the input fields
		$('#id, #acronym, #volume, #fullTitle, #volumeNumber, #date, #homePage, #location, #linkLocation').val('');
		
		//-- select the first item in language
		$('#language').find('option').first().prop('selected', true);
		$('#language').formSelect();
	}
	else if( current_tab == 1 )	//-- Conference Tab
	{
		//-- empty the contents of the input fields
		$('#acronymConference, #fullName, #homepageConference').val('');
		
	}
	else if( current_tab == 2 )	//-- Editors Tab
	{	
		//-- total number of editors
		var total_editors = $('#addEditors > div').length;
		
		//-- remove all editors except the first one (index 1 onwards)
		for( var i = 1; i < total_editors; i++ )
		{
			$('#editor' + i).remove();
		}
		
		//-- empty the contents of the first Editor
		$('#nameEditor0, #affiliationEditor0, #homepageEditor0').val('');	
		
		//-- select the first option as Country for the first Editor
		$('#countryEditor0 option').first().prop('selected', true);
		$('#countryEditor0').formSelect();
	}
	
	M.updateTextFields();	//-- to move the labels for the prefilled textboxes to go inside (MaterializeCSS)
});


//-- when mouse enter the "Clear" button 
$('#btnClearAll').on('mouseenter', function(e){
	//-- get the current tab's index
	var current_tab = $("#wizard2").steps("getCurrentIndex");
	
	if( current_tab == 0 )	//-- Metadata Tab
	{
		$('#btnClearAll').attr('title', 'Clear Metadata contents');
	}
	else if( current_tab == 1 )	//-- Conference Tab
	{
		$('#btnClearAll').attr('title', 'Clear Conference contents');
	}
	else if( current_tab == 2 )	//-- Editors Tab
	{
		$('#btnClearAll').attr('title', 'Clear Editor contents');
	}
});	




//------------------------------------------------------------------------
// dynamic validation
//------------------------------------------------------------------------

$('#id').on('focusout', function(){
	$('#idError').hide();
	validateAlphaNumeric('id', 'idError') ;
});

$('#acronym').on('focusout', function(){
	$('#acronymError').hide();
	if( !(capitalLettersNumbers.test(document.getElementById('acronym').value)))
	{
	   document.getElementById('acronymError').style.display = "initial" ;	
	}
});	

$('#fullTitle').on('focusout', function(){
	$('#fullTitleError').hide();
	validateAlphaNumeric( 'fullTitle', 'fullTitleError' );
});	

$('#volume').on('focusout', function(){
	$('#volumeError').hide();
	validateAlphaNumeric('volume', 'volumeError');
});	

$('#date').on('change', function(){
	$('#dateError').hide();
	if( !(dateYYYYMMDD.test(document.getElementById('date').value )) )
	{
	   document.getElementById('dateError').style.display = "initial" ;	   
	}
});	


$('#homePage').on('focusout', function(){
	$('#homePageError').hide();
	if( !(hyperLink.test(document.getElementById('homePage').value )) )
	{
	   document.getElementById('homePageError').style.display = "initial" ;	   
	}
});			

$('#location').on('focusout', function(){
	$('#locationError').hide();
	if( !(address.test(document.getElementById('location').value )) )
	{
	   document.getElementById('locationError').style.display = "initial" ;	   
	}
});		

$('#linkLocation').on('focusout', function(){
	$('#linkLocationError').hide();
	if( !(hyperLink.test(document.getElementById('linkLocation').value )) )
	{
	   document.getElementById('linkLocationError').style.display = "initial" ;	   
	}
});	

$('#acronymConference').on('change', function(){
	$('#acronymConferenceError').hide();
	if ( !( capitalLettersNumbersNotMust.test( document.getElementById('acronymConference').value )) )
	{
		document.getElementById('acronymConferenceError').style.display = "initial" ;		
	}
});	

$('#fullName').on('focusout', function(){
	$('#fullNameError').hide();
	if ( !( alphaNumericNotMust.test( document.getElementById('fullName').value )) )
	{
		document.getElementById('fullNameError').style.display = "initial" ;		
	}
});	

$('#homepageConference').on('focusout', function(){
	$('#homepageConferenceError').hide();
	if ( $.trim( document.getElementById('homepageConference').value ).length != 0 )	//-- if user has entered a Conference home page link, then validate
	{
		if ( !( hyperLinkNotMust.test( document.getElementById('homepageConference').value )) )
		{
			document.getElementById('homepageConferenceError').style.display = "initial" ;
		}
	}
});		