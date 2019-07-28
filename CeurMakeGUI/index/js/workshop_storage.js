//-- will store the Recent Workshops data, that would be pulled from the Server
var RECENT_WORKSHOPS_LIST = [];

//-- data send to server for storing in database
function send_to_db_storage( json_data )
{
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
	
	$('#card_createworkshop_main').hide();
	$('#card_createworkshop_submenu').show();
	$('#saved_workshops').show();
	$('#card_tableofcontents').hide();
});


//-- for tooltip top popup
$('.tooltipped').tooltip();
