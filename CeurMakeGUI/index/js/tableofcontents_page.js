jQuery(document).ready(function($){	

	$('body').on('keypress', '.tableofcontents_paper_title', function(){
		var txt = $.trim( $(this).val() );
		if( txt.length >= 3 )
		{
			search_paper_dblp_db( txt, this );
		}	
	});
	
	//-- to decode the html entities present in the api responses
	function htmlDecode(value) {
		return $("<div/>").html(value).text();
	}

	function search_paper_dblp_db( query, ele )
	{
		query = encodeURI( query );
		
		var xhr = new XMLHttpRequest();
		xhr.open("GET", "api/paper_search.php?query=" + query, !0);				
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
					dblp_papers_DB = api_response.data;
					
					var temp = {};
					$.each( api_response.data, function(){
						temp[ this.info.title ] = null;
					});
					
					$(ele).autocomplete({
						data: temp,
						onAutocomplete: function(val){
							console.log( val );
							
							//-- search..
							for(var i = 0; i < dblp_papers_DB.length; i++)
							{															
								if( htmlDecode( dblp_papers_DB[i].info.title ) == val )
								{									
									console.log('found');
									
									var parent = $(ele).parent().parent().parent();
									var paper_index = $(ele).data('paper_index');
									
									//-- clear authors
									while( authorArray[paper_index] > 0 )
									{
										removeAuthor( 'authors' + paper_index );
									}
									$(paper_index + 'author0').val('');
									
									//-- if "pages" field is present
									if( dblp_papers_DB[i].info.pages )
									{
										var pages = dblp_papers_DB[i].info.pages.split('-');		//-- eg: 24-30
										
										$(parent).find('.tableofcontents_page_from').val( pages[0] );
										$(parent).find('.tableofcontents_page_from').focus();
										
										$(parent).find('.tableofcontents_page_to').val( pages[1] );
										$(parent).find('.tableofcontents_page_to').focus();
									}
									else
									{																				
										$(parent).find('.tableofcontents_page_from').val( '' );																			
										$(parent).find('.tableofcontents_page_to').val( '' );										
									}	
									
									//-- if "authors" fields are found
									if( dblp_papers_DB[i].info.authors )
									{
										if( dblp_papers_DB[i].info.authors.author.length > 0 )
										{
											if( Array.isArray( dblp_papers_DB[i].info.authors.author ) )
											{
												for( var j = 0; j < dblp_papers_DB[i].info.authors.author.length; j++ )
												{
													var author_input_box_id = 'input#' + paper_index + 'author' + j;
													
													$(parent).find( author_input_box_id ).val( dblp_papers_DB[i].info.authors.author[j] );
													$(parent).find( author_input_box_id ).focus();
													
													if( j != dblp_papers_DB[i].info.authors.author.length - 1 )	//-- if not the last author to be added..
													{
														$(parent).find( 'a.green' ).trigger('click');	//-- trigger clicking the "+" button, so that new input box is created which would be filled by the author name on the next iteration
													}	
												}
											}
											else
											{												
												var author_input_box_id = 'input#' + paper_index + 'author0';
												
												$(parent).find( author_input_box_id ).val( dblp_papers_DB[i].info.authors.author );
												$(parent).find( author_input_box_id ).focus();
											}
										}
									}
									
									
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
https://dblp.org/search/publ/api?q=sanjeev+saxena
*/

});