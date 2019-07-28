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
					
					alert( response.msg );
				}
				else	//-- if successful
				{
					$(parent).find('.tableofcontents_page_from').val('1').focus();							//-- page : from
					$(parent).find('.tableofcontents_page_to').val( response.data.total_pages ).focus();	//-- page : to					
					$(parent).find('.tableofcontents_paper_title').val( response.data.paper_title ).focus();//-- paper title
					$(parent).find('.tableofcontents_paper_author').val( response.data.author ).focus();//-- paper title
				}
			  
			  
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