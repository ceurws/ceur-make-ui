jQuery(document).ready(function($){	
	//-- when a paper (file) is selected by the user
	$('#dynamicInputPapers').on('change', '.tablecontents_paper_file', function(){
		uploadTCpaper( this.files[0], this );
	});
	
	//-- upload the file to server and get the details about the paper
	function uploadTCpaper( blobFile, uploadbtn_ele ) {
		$('#fullscreen_loader').css('display', 'flex');
		
		var fd = new FormData();
		fd.append("fileToUpload", blobFile);

		$.ajax({
			url: "paper/upload.php",
			type: "POST",
			data: fd,
			processData: false,
			contentType: false,
			success: function(response) {
				var parent = $(uploadbtn_ele).parent().parent().parent().parent();
				if( response.error )	//-- if error
				{
					$(parent).find('.tableofcontents_page_from').val('').focus();
					$(parent).find('.tableofcontents_page_to').val('').focus();
					
					$(parent).find('.tableofcontents_page_to').data('total_pages', '0');	//-- store total pages count
					
					alert( response.msg );
				}
				else	//-- if successful
				{
					$(parent).find('.tableofcontents_page_from').val('1').focus();							//-- page : from
					$(parent).find('.tableofcontents_page_to').val( response.data.total_pages ).focus();	//-- page : to					
					$(parent).find('.tableofcontents_paper_title').val( response.data.paper_title ).focus();//-- paper title
					$(parent).find('.tableofcontents_paper_author').val( response.data.author ).focus();//-- paper title
					
					$(parent).find('.tableofcontents_page_to').data('total_pages', response.data.total_pages);	//-- store total pages count
				}
			  
				re_calculate_pages_to_from();	//-- to re-calculate the to & from page counts
				
				$('#fullscreen_loader').hide();
			},
			error: function(jqXHR, textStatus, errorMessage) {
			   console.log(errorMessage);  //-- error
			   alert('Something went wrong!');
			   
			   $('#fullscreen_loader').hide();
			}
		});
	}  
});	
	
//-- recalculates the to & from page numbers for all the papers, based on the total number of pages
function re_calculate_pages_to_from()
{
	var page_start = 1;
	for( var i = 0; i < $('.tablecontents_paper_file').length; i++ )
	{
		var total_pages = $('#paperTo' + i).data('total_pages');
		
		if( total_pages === undefined )
		{
			$('#paperFrom' + i).val('');
			$('#paperTo' + i).val('');
			
			return;
		}
		
		total_pages = parseInt( total_pages );
		
		var page_end = ( page_start + total_pages ) - 1;
		
		$('#paperFrom' + i).val( page_start );
		$('#paperTo' + i).val( page_end );
		
		page_start += total_pages;
	}
}
