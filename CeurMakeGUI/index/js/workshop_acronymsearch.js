var dblp_acronyms_DB;
jQuery(document).ready(function($){	

	//$('body').on('keypress', '#acronymConference', function(){
	$('#acronymConference').keyup(function(){
		var txt = $.trim( $(this).val() );
		if( txt.length > 1 )
		{
			search_acronym_dblp_db( txt, this );
		}	
	});
	
	//-- to decode the html entities present in the api responses
	function htmlDecode(value) {
		return $("<div/>").html(value).text();
	}

	function search_acronym_dblp_db( query, ele )
	{
		query = encodeURI( query );
		
		var xhr = new XMLHttpRequest();
		xhr.open("GET", "api/acronym_search.php?query=" + query, !0);				
		xhr.send();
		xhr.onreadystatechange = function ()
		{
			if (xhr.readyState === 4 && xhr.status === 200)
			{			
				api_response = JSON.parse( xhr.responseText );
				console.log(api_response);
				
				//-- api response status is OK
				if( api_response.error == false )
				{	
					dblp_acronyms_DB = api_response.data;
					
					var temp = {};
					$.each( api_response.data, function(){
						temp[ this.info.acronym ] = null;
					});
					
					$(ele).autocomplete({
						data: temp,
						onAutocomplete: function(val){
							console.log( val );
							
							//-- search..
							for(var i = 0; i < dblp_acronyms_DB.length; i++)
							{															
								if( htmlDecode( dblp_acronyms_DB[i].info.acronym ) == val )
								{									
									console.log('found');
									
									var t_fullname = dblp_acronyms_DB[i].info.venue.replace(/ *\([^)]*\) */g, "");
									$('#fullName').val( t_fullname );
									
									M.updateTextFields();	//-- to move the labels for the prefilled textboxes to go inside (MaterializeCSS)
									
									break;
								}	
							}
						}	  
					});
					
					var instance = M.Autocomplete.getInstance(ele);
					instance.open();
				}
				
			}
	   }
	   
	   
		
	}
	
	/*
	https://dblp.uni-trier.de/faq/How+to+use+the+dblp+search+API
+-------
https://dblp.org/search/venue/api?q=3d
*/

});