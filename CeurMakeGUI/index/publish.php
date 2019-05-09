<?php
	$page_title = 'Ceur Make';
	
	include_once '_inc/header.php';
?>
<!--This view presents user with option of generating workshop proceedings using one of the two available choices i.e 
    Generating completely using CEUR Make or going with Easy Chair resource files.
-->  
  <div class="section no-pad-bot" id="index-banner">
    <div class="container">
    <div class="row">
          <div class="card grey lighten-5 card-custom">
            <div class="card-content black-text">
              <h4 class="header  blue-grey-text">Scientific Proceedings With Ceur Make (SPCM)</h4>    
              <h5 class="header light">Publish The Workshop using Ceur Make Utility</h5>
              <h6 class="header light">Choose any one of the following workflows and get the workshop resources.</h6>
            </div>
          </div>
      </div>
      <div class="row">
        <div class="row" id="uniquename">
            <div class="col s6">
              <div class="card grey lighten-3">
              <div class="card-content black-text">
              <span class="card-title">Using Ceur Make</span>
              <div class="divider"></div>
              <br/>
              <p>Use CEUR MAKE interface built on CEUR Make utiltiy in order to provide you ease of use in creating input files and getting the submission package.</p>
              </div>
              <div class="card-action">
                <a class="waves-effect waves-light btn" href="publishPage.php" >Generate</a>
               <!-- <a class="waves-effect waves-light btn"  href="uploadResources.php">Upload</a> -->
              </div>
              </div>
            </div>
            <div class="col s6">
              <div class="card grey lighten-3">
              <div class="card-content black-text">
              <span class="card-title">Easy Chair</span>
              <div class="divider"></div>
              <br/>
              <p>Based on Easy Chair input files, you can use our web interface to get the desired submission package and output files. </p>
              </div>
              <div class="card-action">
                <a class="waves-effect waves-light btn "  href="easyChairUpload.php">Upload</a>
              </div>
              </div>
            </div>
        </div>
      </div>
      </div>
      <br><br>

    </div>
  

	<!-- Footer -->
	<?php include_once '_inc/footer.php'; ?>
	<!-- /Footer -->
	
  </body>
</html>
