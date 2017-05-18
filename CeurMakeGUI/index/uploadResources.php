<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>Ceur Make</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/jquery.steps.css" rel="stylesheet">

</head>
<body>
  <nav class="blue-grey darken-1" role="navigation">
    <div class="nav-wrapper container"><a id="logo-container" href="#" class="brand-logo">CEUR Make</a>
      <ul class="right hide-on-med-and-down">
        <li><a href="index.html"> Home</a></li>
        <li><a href="Proceedings.html"> Proceedings</a></li>
        <li><a href="Publish.html"> Publish</a></li>
        <li><a href="Issue.html"> Issues</a></li>

      </ul>

      <ul id="nav-mobile" class="side-nav">
        <li><a href="#">Navbar Link</a></li>
      </ul>
      <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
    </div>
  </nav>
  <div class="section no-pad-bot" id="index-banner">
    <div class="container">
    <div class="row">
          <div class="card grey lighten-5 card-custom">
            <div class="card-content black-text">
              <h4 class="header  blue-grey-text">Scientific Proceedings With Ceur Make (SPCM)</h4>
              <h5 class="header light">Publish The Workshop using Ceur Make Utility</h5>
              <h6 class="header light">Ceur Make Workflow for Generating Workshop Resources</h6>
            </div>
          </div>
      </div>
      <div class="row">
        <div class="row">
         <div id="uniquename">
            <div class="col s6">
              <div class="card grey lighten-3">
              <div class="card-content black-text">
              <span class="card-title">
                      <a class="btn-floating btn-small waves-effect waves-light green disabled" onClick="" id="workshopLink"><i class="material-icons">check</i></a>  Create Workshop</span>
                      <div class="divider"></div>
                      <br/>
              <p>Simple easy to use step by step form for creating Workshop. Contains all the necessary elements to be added
              in workshop.</p>
              </div>
              <div class="card-action spacingWorkshop">
                      <a class="waves-effect waves-light btn " id="createWorkshop" href="javascript:showContentForWorkshop('uniquename')">Generate</a>
                      <a class="waves-effect waves-light btn disabled" id="downloadWorkshop" href="#" >Download</a>
              </div>
              </div>
            </div>
            <div class="col s6">
              <div class="card grey lighten-3">
              <div class="card-content black-text">
              <span class="card-title">
                      <a class="btn-floating btn-small waves-effect waves-light green disabled" onClick="" id="tocLink"><i class="material-icons">check</i></a>Upload Zip From Easy Chair</span>
                      <div class="divider"></div>
                      <br/>
                <div class="file-field input-field">
                      <div class="btn">
                        <span>File</span>
                        <input id="sortpicture" type="file"  name="sortpic" >
                      </div>
                      <div class="file-path-wrapper">
                        <input class="file-path validate" type="text">
                      </div>
                </div>
              </div>
              <div class="card-action">
                        
                      <a class="waves-effect waves-light btn " id="submitForm" href="javascript:submitZip()">Generate</a>
                      <a class="waves-effect waves-light btn " id="downloadToc" href="#" >Download TOC</a>
                <!--      <a class="waves-effect waves-light btn" href="javascript:HideContent('uniquename')" id="createToc">Generate</a> -->
              </div>
              </div>
            </div>
        </div>
        </div>
        <div class="row" >
            <div class="col s6" id="uniquename0">
              <div class="card grey lighten-3">
              <div class="card-content black-text">
              <span class="card-title">
                      <a class="btn-floating btn-small waves-effect waves-light green" onClick="" id="workshopLink"><i class="material-icons">check</i></a>  Copyrights Form</span>
                      <div class="divider"></div>
                      <br/>
              <p>Simple easy to use step by step form for creating Workshop. Contains all the necessary elements to be added
              in workshop.</p>
              </div>
              <div class="card-action">
                      <a class="waves-effect waves-light btn "  id="rightsDownload"  href="#">Download</a>
              </div>
              </div>
            </div>
            <div class="col s6" id="uniquename2">
              <div class="card grey lighten-3">
               <div class="card-content black-text">
              <span class="card-title">
                      <a class="btn-floating btn-small waves-effect waves-light green" onClick="" id="workshopLink"><i class="material-icons">check</i></a>  Index File</span>
                      <div class="divider"></div>
                      <br/>
              <p>Simple easy to use step by step form for creating Workshop. Contains all the necessary elements to be added
              in workshop.</p>
              </div>
              <div class="card-action">
                      <a class="waves-effect waves-light btn" id="indexDownload"  href="#">Download</a>
              </div>
              </div>
            </div>
        </div>
         <div class="row" >
          <div id="uniquename3">
            <div class="col s6">
              <div class="card grey lighten-3">
              <div class="card-content black-text">
              <span class="card-title">
                      <a class="btn-floating btn-small waves-effect waves-light green" onClick="" id="workshopLink"><i class="material-icons">check</i></a>  Bibtex Database</span>
                      <div class="divider"></div>
                      <br/>
              <p>Simple easy to use step by step form for creating Workshop. Contains all the necessary elements to be added
              in workshop.</p>
              </div>
              <div class="card-action">
                      <a class="waves-effect waves-light btn" id="bibDownload"  href="#">Download</a>
              </div>
              </div>
            </div>
            <div class="col s6">
              <div class="card grey lighten-3">
              <div class="card-content black-text">
              <span class="card-title">
                      <a class="btn-floating btn-small waves-effect waves-light green" onClick="" id="workshopLink"><i class="material-icons">check</i></a>  Zip Archive</span>
                      <div class="divider"></div>
                      <br/>
              <p>Simple easy to use step by step form for creating Workshop. Contains all the necessary elements to be added
              in workshop.</p>
              </div>
              <div class="card-action">
                      <a class="waves-effect waves-light btn" id="zipDownload"  href="#">Download</a>
              </div>
              </div>
            </div>
         </div>
        </div>
      </div>
     <div id= "workshopForm">
      <div class="card grey lighten-5 card-custom">
        <div class="card-content ">
                        <span class="card-title">Generate Workshop For Proceedings</span>
                        <p>I am a very simple card. I am good at containing small bits of information.
                               I am convenient because I require little markup to use effectively.</p>
                        <br/>
                        <div id="wizard2">
                                <h1>Metadata</h1>
                                <div id="metadata">
                                   <div id="titleMetadata">
                                     <fieldset>
                                       <legend> Workshop Metadata</legend>
                                        <fieldset>
                                         <legend>Title Description</legend>

                                          <div class="row">
                                            <div class="input-field col s6">
                                              <input id="id" type="text" class="validate">
                                              <label for="id">ID</label>
                                              <span id="idError" class="error" style="display:none">Please enter numbers only.</span>
                                            </div>
                                            <div class="input-field col s6">
                                              <input id="acronym" type="text" class="validate">
                                              <label for="acronym">Acronym</label>
                                              <span id="acronymError" class="error" style="display:none">Please enter capital alphabet or numbers.</span>
                                            </div>
                                            <div class="input-field col s12">
                                              <input id="volume" type="text" class="validate">
                                              <label for="volume">Volume</label>
                                              <span id="volumeError" class="error" style="display:none">You can only enter alphanumerics with hyphen.</span>
                                            </div>
                                            <div class="input-field col s12">
                                              <input id="fullTitle" type="text" class="validate">
                                              <label for="fulltitle">Full Title</label>
                                              <span id="fullTitleError" class="error" style="display:none">Please Enter Alphabets or Space only</span>
                                            </div>
                                           </div>
                                           </fieldset>
                                           <div class="row">
                                            <div class="input-field col s4">
                                              <input id="volumeNumber" type="text" class="validate">
                                              <label for="volumeNumber">Volume Number</label>
                                              <span id="volumeNumberID" class="error" style="display:none">Please enter numbers or hyphen.</span>
                                            </div>
                                            <div class="input-field col s4">
                                              <select id="language">
                                                <option value="1">Option 1</option>
                                              </select>
                                              <label for="language">Language</label>
                                            </div>
                                            <div class="input-field col s4">
                                              <input id="date" type="text" class="validate">
                                              <label for="date">Date</label>
                                              <span id="dateError" class="error" style="display:none">Please enter date in a valid date format</span>
                                            </div>
                                            <div class="input-field col s12">
                                              <input id="homePage" type="text" class="validate">
                                              <label for="homePage">Home Page</label>
                                              <span id="homePageError" class="error" style="display:none">Please enter a valid URL.</span>
                                            </div>
                                            <div class="input-field col s6">
                                              <input id="location" type="text" class="validate">
                                              <label for="location">Location Of Event</label>
                                              <span id="locationError" class="error" style="display:none">Please enter a valid Address.</span>
                                            </div>
                                             <div class="input-field col s6">
                                              <input id="linkLocation" type="text" class="validate">
                                              <label for="linkLocation">Link To Location Of Event</label>
                                              <span id="linkLocationError" class="error" style="display:none">Please enter a valid URL.</span>
                                            </div>
                                           </div>
                                        </fieldset>
                                     <br/>
                                   </div>
                                </div>

                                <h1>Conference</h1>
                                <div id="conference">
                                  <br/>
                                  <br/>
                                  <br/>
                                  <fieldset>
                                    <legend> Conference Metadata *(Optional)</legend>
                                    <div class="row">
                                       <div class="input-field col s12">
                                              <input id="acronymConference" type="text" class="validate">
                                              <label for="acronymConference">Acronym Of The Conference</label>
                                              <span id="acronymConferenceError" class="error" style="display:none">Please enter capital alphabets or number.</span>
                                       </div>
                                       <div class="input-field col s12">
                                              <input id="fullName" type="text" class="validate">
                                              <label for="fullName">Full Name Of the Conference</label>
                                              <span id="fullNameError" class="error" style="display:none">You can only enter alphanumeric or whitespace.</span>
                                       </div>
                                       <div class="input-field col s12">
                                              <input id="homepageConference" type="text" class="validate">
                                              <label for="homepageConference">Homepage Of The Conference</label>
                                              <span id="homepageConferenceError" class="error" style="display:none">Please enter a valid URL.</span>
                                       </div>
                                    </div>
                                  </fieldset>
                                </div>
                                
                                <h1>Editors</h1>
                                <div id="editors">
                                  <fieldset>
                                    <legend>Editors
                                          <a class="btn-floating tooltipped btn-large waves-effect waves-light green" onClick="addEditor('addEditors');" data-position="bottom" data-delay="50" data-tooltip="Add an Editor"><i class="material-icons">add</i></a>
                                          <a class="btn-floating tooltipped btn-large waves-effect waves-light red" onClick="removeEditor('addEditors');" data-position="bottom" data-delay="50" data-tooltip="Delete Last Editor"><i class="material-icons">remove</i></a>
                                          <a class="btn-floating tooltipped btn-large waves-effect waves-light blue" onClick="sortEditor();" id="sortIcon" data-position="bottom" data-delay="50" data-tooltip="Sorted Editors for Output"><i class="material-icons">sort</i></a>
                                    </legend>
                                    <div id="addEditors">
                                    <div id="editor0">
                                      <fieldset>
                                        <legend>Editor 0</legend>
                                        <div class="row">
                                          <div class="input-field col s12">
                                              <input id="nameEditor0" type="text" class="validate">
                                              <label for="nameEditor0">Name of The Editor</label>
                                              <span id="nameEditorError0" class="error" style="display:none">Please enter alphabets only.</span>
                                          </div>
                                          <div class="input-field col s12">
                                              <input id="affiliationEditor0" type="text" class="validate">
                                              <label for="affiliationEditor0">Affiliation Of The Editor</label>
                                              <span id="affiliationEditorError0" class="error" style="display:none">Please enter alpha numerics.</span>
                                          </div>
                                          <div class="input-field col s12">
                                              <select id="countryEditor0">
                                                <option value="1">Option 1</option>
                                              </select>
                                              <label for="countryEditor0">Country Of The Editor</label>
                                          </div>
                                          <div class="input-field col s12">
                                              <input id="homepageEditor0" type="text" class="validate">
                                              <label for="homepageEditor0">Homepage Of The Editor</label>
                                              <span id="homepageEditorError0" class="error" style="display:none">Please enter a valid URL</span>
                                          </div>
                                        </div>
                                      </fieldset>
                                    </div>
                                    </div>
                                    <br/>
                                  </fieldset>
                                </div>
                        </div>
        </div>
     </div>
  </div>
  <div id="loader">
    <div id="loading">
        <div class="card grey lighten-5 card-custom">
          <div class="card-content ">
               <br/>
               <br/>
               <div class="progress">
                <div class="indeterminate"></div>
                </div>
               <br/>
               <br/>
          </div>
        </div>
    </div>
  </div>

</div>
      <br><br>

    </div>

   <footer class="page-footer blue-grey darken-2">
    <div class="container">
      <div class="row">
        <div class="col l6 s12">
          <h5 class="white-text">CEUR-WS</h5>
          <p class="grey-text text-lighten-4">CEUR-WS.org is an online publication service for editors of scientific proceedings, in particular workshop proceedings.</p>

        </div>
        <div class="col l3 s12">
          <h5 class="white-text">Important</h5>
          <ul>
            <li><a class="white-text" href="http://ceur-ws.org/HOWTOSUBMIT.html">How to Submit</a></li>
            <li><a class="white-text" href="http://ceur-ws.org/HOWTOSUBMIT.html#FAQ">FAQ</a></li>
            <li><a class="white-text" href="https://github.com/ceurws/ceur-make">Ceur Make</a></li>
            <li><a class="white-text" href="http://ceur-ws.org/index.html">Old</a></li>
          </ul>
        </div>
        <div class="col l3 s12">
          <h5 class="white-text">General</h5>
          <ul>
            <li><a class="white-text" href="http://ceur-ws.org/ceurws-timeline.txt">Timeline</a></li>
            <li><a class="white-text" href="https://ceurws.wordpress.com/">Blog</a></li>
            <li><a class="white-text" href="http://ceur-ws.org/CEURWS-TEAM.html">Team</a></li>
            <li><a class="white-text" href="http://ceur-ws.org/CEURWS-VALUES.html">Core Values</a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="footer-copyright">
      <div class="container">
      Copyrights @ <a class="orange-text text-lighten-3" href="http://ceur-ws.org">Ceur Make 2016</a>
      </div>
    </div>
  </footer>


  <!--  Scripts-->
  <script src="./jquery/jquery-2.2.0.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>
  <script src="./jquery/jquery.steps.min.js"></script>
  <script>
  //Variables:

    //Variables Table of Contents Form

      //Variables output passing manage Extract
          var sendFormOneData;
      //----------------------------------
   //Variables from Workshop.XML
        //Gobal
          var workshopArray = [] ;
        //--------------------------------
        //Variable from Editors
          var editorCounter = 0 ;
          var editorLimit = 40 ;
          var editorArray =[] ;
          var sortedEditorArray = [] ;
          var boolSorted = 0 ;
        //--------------------------------
        //Vatiable Workshop MetaData
          var tempTitleMetaData = [] ;
          var tempTitleTab = [] ;
          var tempConferenceTab = [] ;
          var zipName;
        //--------------------------------
        //Transition Variables -----------
          var boolFromTOCToWorkshop = 1;
          var boolFromChairToWorkshop = 0 ;
          var boolFromWorkshopToChair = 0 ;
        //--------------------------------
        //Loading Select Arrays Cont & Lang
          var countriesArray ;
          var languagesArray ;
        //--------------------------------
   //----------------------------------
          
  //regularExpression Variables-----------

        var alphaNumeric = new RegExp(/^[a-z\d\-_\s]+$/i);
        var alphaNumericNotMust = new RegExp(/^[a-z\d\-_\s]*$/i);
        var alpha = new RegExp(/^[A-Za-z\s]+$/i);
        var numberAndSpace = new RegExp("/^[0-9 ]+$/") ;
        var numberOnly = new RegExp(/^[0-9]+$/) ;
        var capitalLettersNumbers = new RegExp(/^[A-Z0-9]+$/);
        var volNumber = new RegExp(/^\Vol-[0-9]+$/);
        var email = new RegExp("/^(([^<>()\[\]\.,;:\s@\"]+(\.[^<>()\[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i") ;
        var hyperLink = new RegExp(/[-a-zA-Z0-9@:%_\+.~#?&//=]{2,256}\.[a-z]{2,4}\b(\/[-a-zA-Z0-9@:%_\+.~#?&//=]*)?/i) ;
        var emptyString = new RegExp("/^[\s]*$/");
        var dateYYYYMMDD = new RegExp(/^\d{4}-\d{1,2}-\d{1,2}$/);
        var address = new RegExp(/^[a-zA-Z0-9\s,'-]*$/i);

  //-----------------------------------

//Functions:

          //Initializers

                $(document).ready(function() {

                    $('.modal-trigger').leanModal();
                    document.getElementById('uniquename2').style.display = "none";
                    document.getElementById('uniquename0').style.display = "none";   
                    document.getElementById('uniquename3').style.display = "none";
                    document.getElementById('workshopForm').style.display = "none";
                    document.getElementById('downloadToc').className = "waves-effect waves-light btn disabled" ;
                    document.getElementById('loader').style.display = "none" ;                
                
                    init();
                    initTwo();
                     
                    //checking if the session already exists or is it a new session....
                    if( sessionStorage.userIdEasyChair == null)
                    {
                          // making the directories for the particular user...
                          var xhr = new XMLHttpRequest();
                          xhr.open("POST", "generateUserFolderEasyChair.php", !0);
                          xhr.setRequestHeader("Content-Type", "application/json;charset=UTF-8");
                          xhr.send();
                          xhr.onreadystatechange = function ()
                          {
                              if (xhr.readyState === 4 && xhr.status === 200)
                              {
                              // in case we reply back from server
                                      jsondata = xhr.responseText;
                                      // Check browser support
                                      if (typeof(Storage) !== "undefined")
                                      {
                                          // Store
                                          sessionStorage.setItem("userIdEasyChair", jsondata);
                                          console.log(sessionStorage.userIdEasyChair);
                                      } else
                                      {
                                           alert("Sorry, your browser does not support Web Storage...");
                                      }
                              }
                         }

                    }
        
                   

                });


          //-----------------------------------------------------------------------------------------
          
          //file Upload 
          
           function submitZip()
          {
                var file_data = $('#sortpicture').prop('files')[0];
                var form_data = new FormData();
                var fileName ;
                form_data.append('file', file_data);
                console.log(form_data);                             
                $.ajax({
                url: 'extract.php', // point to server-side PHP script 
                dataType: 'text',  // what to expect back from the PHP script, if anything
                cache: false,
                contentType: false,
                processData: false,
                data:form_data,                     
                type: 'post',
                success: function(php_script_response){
                        
                    console.log(php_script_response); // display response from the PHP script, if any
                    fileName = php_script_response ;
                    manageExtract( fileName ) ;
                }
                });
                  
                
                
          }
          
          
          function manageExtract( fileName )
          {
                hideContainerContent();   
                sendFormOneData = {
                           fileName: fileName ,
                           sessions: sessionStorage.userIdEasyChair
                   } ;

                console.log(sendFormOneData) ;

                var data = JSON.stringify(sendFormOneData);
                var xhr = new XMLHttpRequest();
                xhr.open("POST", "ManagingExtract.php", !0);
                xhr.setRequestHeader("Content-Type", "application/json;charset=UTF-8");
                xhr.send(data);
                xhr.onreadystatechange = function () {
                if (xhr.readyState === 4 && xhr.status === 200) {
                        
                                // in case we reply back from server
                                jsondata = xhr.responseText;
                                console.log(jsondata);
                                Materialize.toast('Your Easy Chair source files are being uploaded', 4000, 'rounded') // 'rounded' is the class I'm applying to the toast
                                boolFromChairToWorkshop = 1;
                                document.getElementById('downloadToc').className = "waves-effect waves-light btn" ;
                                document.getElementById('tocLink').className = "btn-floating btn-small waves-effect waves-light green";
                                document.getElementById('submitForm').className = "waves-effect waves-light btn disabled" ;
                                var a = document.getElementById('downloadToc'); //or grab it by tagname etc
                                a.href = "easyChair/"+sessionStorage.userIdEasyChair+"/output/toc.xml" ;
                                a.setAttribute('target', '_blank');
                                uploadedProceeding();
                                
                                if( boolFromWorkshopToChair == 1 )
                                {
                                        
                                        resourceCreation( );
                                        
                                }
                        }
                }
                  
          }
          
          //-------------------------------------------------------------------------------------------

    //Div Display Functions

        function HideContent(d) {

                document.getElementById(d).style.display = "none";
                document.getElementById('loader').style.display = "none" ;

        }

        function showContentForWorkshop(d)
        {
                document.getElementById(d).style.display = "none";
                document.getElementById('workshopForm').style.display = "initial" ;
                document.getElementById('loader').style.display = "none" ;
           

        }

        function hideContainerContent()
        {
           document.getElementById('uniquename').style.display = "none" ;
           document.getElementById('uniquename2').style.display = "none" ;
           document.getElementById('uniquename3').style.display = "none" ;
           document.getElementById('uniquename0').style.display = "none" ;
           document.getElementById('workshopForm').style.display = "none" ;
           document.getElementById('loader').style.display = "initial" ;
        }

        function afterWorkshopCreation()
        {
           document.getElementById('uniquename').style.display = "initial" ;
           document.getElementById('uniquename0').style.display = "initial" ;
           document.getElementById('uniquename2').style.display = "initial" ;
           document.getElementById('uniquename3').style.display = "initial" ;
           document.getElementById('workshopForm').style.display = "none" ;
           document.getElementById('loader').style.display = "none" ;
           document.getElementById("createWorkshop").href = "#" ;
           document.getElementById("createWorkshop").className = "waves-effect waves-light btn disabled" ;
           document.getElementById('workshopLink').className = "btn-floating btn-small waves-effect waves-light green";
           document.getElementById('tocLink').className = "btn-floating btn-small waves-effect waves-light green";
           document.getElementById('downloadWorkshop').className = "waves-effect waves-light btn" ;
           //Materialize.toast('Workshop Contents Has Been Successfully Created!', 3000, 'rounded') ;
        }
        
        function workshopCreated( )
        {
           document.getElementById('uniquename').style.display = "initial" ;
           document.getElementById('workshopForm').style.display = "none" ;
           document.getElementById('loader').style.display = "none" ;
           document.getElementById("createWorkshop").href = "#" ;
           document.getElementById("createWorkshop").className = "waves-effect waves-light btn disabled" ;
           document.getElementById('workshopLink').className = "btn-floating btn-small waves-effect waves-light green";
           document.getElementById('downloadWorkshop').className = "waves-effect waves-light btn" ;
           boolFromWorkshopToChair = 1 ;
           Materialize.toast('Workshop Contents Has Been Successfully Created!', 3000, 'rounded') ;
        }
        
        function uploadedProceeding( )
        {
           document.getElementById('uniquename').style.display = "initial" ;
           document.getElementById('workshopForm').style.display = "none" ;
           document.getElementById('loader').style.display = "none" ;
           Materialize.toast('Proceeding Content From Easy Chair Has Been Uploaded', 3000, 'rounded') ;
        }

    //----------------------------------------------------------------------------------------------

   //Helper Function--------------------------------------------------------------------------------
        function sleep(milliseconds) {
          var start = new Date().getTime();
          for (var i = 0; i < 1e7; i++) {
            if ((new Date().getTime() - start) > milliseconds){
              break;
            }
          }
}
   //-------------------------------------------------------------------------------------------------

  
          // Workshop Form Basic Functions

                var wizard = $("#wizard2").steps({


                        onStepChanging: function(e, currentIndex, newIndex)
                        {

                                if( currentIndex == 0 && newIndex == 1)
                                {
                                        var result = validatingMetaData(0) ;

                                        if( result == 0 )
                                                return 1;
                                        else
                                                return 0;
                                        return 1;
                                }

                                if( currentIndex == 1 && newIndex == 2)
                                {
                                        
                                       var result = validatingConference(0) ;

                                        if( result == 0 )
                                                return 1;
                                        else
                                                return 0;
                                        
                                        return 1;
                                }

                                if( currentIndex == 2 && newIndex == 0 )
                                {
                                        var result = validatingEditors(0) ;

                                        if( result == 0 )
                                                return 1;
                                        else
                                                return 0;
                                        
                                        return 1;    
                                }

                                if( currentIndex == 2 && newIndex == 1)
                                {       
                                        var result = validatingEditors(0) ;

                                        if( result == 0 )
                                                return 1;
                                        else
                                                return 0;
                                        
                                        return 1;    

                                }

                                if( currentIndex == 1 && newIndex == 0 )
                                {
                                       var result = validatingConference(0) ;

                                        if( result == 0 )
                                                return 1;
                                        else
                                                return 0;
                                        
                                        return 1;       
                                }

                                if( currentIndex == 0 && newIndex == 2)
                                {
                                        var result = validatingMetaData(0) ;

                                        if( result == 0 )
                                                return 1;
                                        else
                                                return 0;
                                        return 1;
                                        
                                }

                                return 1 ;

                        },

                        onStepChanged: function (event, currentIndex, priorIndex)
                        {

                                if (currentIndex === 1 && priorIndex === 0)
                                {
                                        var id = document.getElementById('id').value ;
                                        var acronym = document.getElementById('acronym').value ;
                                        var fullTitle = document.getElementById('fullTitle').value ;
                                        var volume = document.getElementById('volume').value ;

                                        var volumeNumber = document.getElementById('volumeNumber').value ;
                                        var language = document.getElementById('language');
                                        var languageStr = language.options[language.selectedIndex].value;
                                        console.log(languageStr);
                                        var date = document.getElementById('date').value ;
                                        var homePage = document.getElementById('homePage').value ;
                                        var location = document.getElementById('location').value ;
                                        var linkLocation = document.getElementById('linkLocation').value ;

                                        tempTitleMetaData.push({

                                                id:id,
                                                acronym:acronym,
                                                full: fullTitle,
                                                volume: volume
                                        }) ;

                                        tempTitleTab.push({

                                                number: volumeNumber,
                                                homepage: homePage,
                                                language: languageStr,
                                                location: location,
                                                date: date
                                        });

                                }
                                if(currentIndex === 0 && priorIndex === 1)
                                {
                                        console.log("comingBack")
                                }
                                if(currentIndex === 2 &&  priorIndex === 1)
                                {
                                        var acronymConference = document.getElementById('acronymConference').value ;
                                        var fullName = document.getElementById('fullName').value ;
                                        var homepageConference = document.getElementById('homepageConference').value ;

                                        tempConferenceTab.push({

                                                acronym: acronymConference,
                                                full: fullName,
                                                homepage: homepageConference
                                        });

                                }
                                if(currentIndex === 1 && priorIndex === 2)
                                {
                                        console.log("comingBack3to2")
                                }
                                if(currentIndex === 2 && priorIndex === 0 )
                                {

                                }
                                if( currentIndex === 0 && priorIndex === 2)
                                {
                                        console.log("comingBackFrom2to1")
                                }



                        },

                        onFinishing: function (event, currentIndex)
                        {
                                 var result = validatingEditors(0) ;

                                        if( result == 0 )
                                                return 1;
                                        else
                                                return 0;
                                        
                                        return 1;        

                        },

                        onFinished: function (event, currentIndex)
                        {
                            //hide container content
                            hideContainerContent() ;

                             var tempSortingArray = [] ;
                             var finalEditorsArray = [];
                                
                             //first get the editor form values .....
                             for( i = 0 ; i < editorCounter + 1 ; i++ )
                             {
                                           var country = document.getElementById('countryEditor'+i);
                                           var countryStr = country.options[country.selectedIndex].text;
                                     
                                           editorArray.push({

                                                   name: document.getElementById('nameEditor' + i).value,
                                                   affiliation: document.getElementById('affiliationEditor' + i).value,
                                                   country: countryStr,
                                                   homepage: document.getElementById('homepageEditor' + i).value
                                           }) ;

                                           tempSortingArray.push(document.getElementById('nameEditor' + i).value) ;
                             }

                            tempSortingArray.sort();
                            console.log(tempSortingArray );
                               
                                //sortingAlgorithimForEditors
                                for( j = 0 ; j < editorCounter +1 ; j++ )
                                {
                                        for( k = 0 ; k < editorCounter +1 ; k++ )
                                        {
                                                if( editorArray[k].name == tempSortingArray[j] )
                                                {
                                                        sortedEditorArray.push( editorArray[k] ) ;
                                                }
                                        }
                                }
                        
                             if( boolSorted == 1 )
                                        finalEditorsArray = sortedEditorArray ;    
                                    else
                                        finalEditorsArray = editorArray ;    
                                
                            //making the whole dataToSendVariable
                            workshopArray.push({

                                    title: tempTitleMetaData[0],
                                    number: tempTitleTab[0].number,
                                    homepage: tempTitleTab[0].homepage,
                                    language: tempTitleTab[0].language,
                                    location: tempTitleTab[0].location,
                                    date: tempTitleTab[0].date,
                                    conference:tempConferenceTab[0],
                                    editors: finalEditorsArray,
                                    fileName: sessionStorage.userIdEasyChair
                            }) ;

                            console.log(workshopArray);

                            //sending ajax request to create Workshop.xml
                            var data = JSON.stringify(workshopArray);
                            var xhr = new XMLHttpRequest();
                            xhr.open("POST", "workshopCreateEasyChair.php", !0);
                            xhr.setRequestHeader("Content-Type", "application/json;charset=UTF-8");
                            xhr.send(data);
                            xhr.onreadystatechange = function ()
                            {
                                if (xhr.readyState === 4 && xhr.status === 200)
                                {
                                        // in case we reply back from server
                                        jsondata = xhr.responseText;
                                        console.log(jsondata);
                                        
                                        var a = document.getElementById('downloadWorkshop'); //or grab it by tagname etc
                                        a.href = "easyChair/"+sessionStorage.userIdEasyChair+"/output/workshop.xml" ;
                                        a.setAttribute('target', '_blank');
                                        copyrightsFormCreation( );
                                        
                                        
                                        if( boolFromChairToWorkshop == 1 )
                                        {
                                                resourceCreation( );
                                        }

                                        
                                }
                           }

                           
                           
                        }

                });
          
                function copyrightsFormCreation( )
                {
                        var data = JSON.stringify(workshopArray);
                        var xhr = new XMLHttpRequest();
                        xhr.open("POST", "easyChair/"+sessionStorage.userIdEasyChair+"/output/copyright.php", !0);
                        xhr.setRequestHeader("Content-Type", "application/json;charset=UTF-8");
                        xhr.send(data);
                        xhr.onreadystatechange = function ()
                        {
                                if (xhr.readyState === 4 && xhr.status === 200)
                                {
                                // in case we reply back from server
                                        jsondata = xhr.responseText;
                                         workshopCreated();
                                        displayCopyright();
                                }
                        }
                        
                }
          
                function displayCopyright()
                {
                        a = document.getElementById('rightsDownload');
                        a.href = "easyChair/"+sessionStorage.userIdEasyChair+"/output/copyright-form.txt" ;
                        a.setAttribute('target', '_blank');
                        
                        document.getElementById('uniquename0').style.display = "initial" ; 
                }
          
                function resourceCreation( )
                {
                           var data = JSON.stringify(workshopArray);
                            var xhr = new XMLHttpRequest();
                            xhr.open("POST", "easyChair/"+sessionStorage.userIdEasyChair+"/output/doc.php", !0);
                            xhr.setRequestHeader("Content-Type", "application/json;charset=UTF-8");
                            xhr.send(data);
                            xhr.onreadystatechange = function ()
                            {
                                if (xhr.readyState === 4 && xhr.status === 200)
                                {
                                // in case we reply back from server
                                        jsondata = xhr.responseText;
                                        //after Workshop Creation
                                        afterWorkshopCreation();
                                        downloadables( );
                                }
                           }

                        
                }
          
                function downloadables( )
                {
                        var zipName = document.getElementById('id').value + (document.getElementById('date').value).slice(0,4) ;
                        
                        var a = document.getElementById('downloadToc'); //or grab it by tagname etc
                        a.href = "easyChair/"+sessionStorage.userIdEasyChair+"/output/toc.xml" ;
                        a.setAttribute('target', '_blank');
                        a = document.getElementById('rightsDownload');
                        a.href = "easyChair/"+sessionStorage.userIdEasyChair+"/output/copyright-form.txt" ;
                        a.setAttribute('target', '_blank');
                        a = document.getElementById('bibDownload');
                        a.href = "easyChair/"+sessionStorage.userIdEasyChair+"/output/ceur-ws/temp.bib" ;
                        a.setAttribute('target', '_blank');
                        a = document.getElementById('zipDownload');
                        a.href = "easyChair/"+sessionStorage.userIdEasyChair+"/output/"+zipName+".zip" ;
                        a.setAttribute('target', '_blank');
                        a = document.getElementById('indexDownload');
                        a.href = "easyChair/"+sessionStorage.userIdEasyChair+"/output/ceur-ws/index.html" ;
                        a.setAttribute('target', '_blank');
                }


          //-----------------------------------------------------------------------------------------



       //-----------------------------------------------------------------------------------------
       //Editors -- Workshop Creation ------------------------------------------------------------

          function addEditor( divName )
          {
               if (editorCounter == editorLimit)  {
                          alert("You have reached the limit of adding editors" + editorCounter + " inputs");
                     }
                     else {
                          
                          var selectEditor = "<select id='countryEditor"+(editorCounter+1)+"'><option value='1'>Option 1</option></select><label for='countryEditor"+(editorCounter+1)+"'>Country Of The Editor</label>";
                          
                          var newdiv = document.createElement('div');
                          newdiv.id ="editor"+(editorCounter+1);
                          newdiv.innerHTML = "<fieldset><legend>Editor "+ (editorCounter + 1) +"</legend><div class='row'><div class='input-field col s12'><input id='nameEditor"+(editorCounter + 1 )+"' type='text' class='validate'><label for='nameEditor"+ (editorCounter + 1 ) +"'>Name of The Editor</label><span id='nameEditorError"+(editorCounter + 1 )+"' class='error' style='display:none'>Please enter alphabets only.</span></div><div class='input-field col s12'><input id='affiliationEditor"+(editorCounter+1)+"' type='text' class='validate'><label for='affiliationEditor"+(editorCounter+1)+"'>Affiliation Of The Editor</label><span id='affiliationEditorError"+(editorCounter+1)+"' class='error' style='display:none'>Please enter alpha numerics.</span></div><div class='input-field col s12'>"+selectEditor+"</div><div class='input-field col s12'><input id='homepageEditor"+(editorCounter+1)+"' type='text' class='validate'><label for='homepageEditor"+(editorCounter+1)+"'>Homepage Of The Editor</label><span id='homepageEditorError"+(editorCounter+1)+"' class='error' style='display:none'>Please enter a valid URL</span></div></div></fieldset>";
                          
                          document.getElementById(divName).appendChild(newdiv);
                          var selectId = '#countryEditor'+(editorCounter+1);
                          selectForCountries(selectId);
                          editorCounter++;
                     }
          }

          function removeEditor( divName )
          {
                  if (editorCounter == 0 )  {
                          alert("You have only one editor element which is mandatory");
                     }
                     else {

                          var div = document.getElementById("editor" + editorCounter);
                          div.parentNode.removeChild(div);
                          editorCounter--;
                     }

          }
          
          function sortEditor( )
          {
              if( boolSorted == 0 )
              {
                      boolSorted = 1;
                      document.getElementById("sortIcon").className = "btn-floating btn-large disabled" ;

                      
              }else if ( boolSorted == 1 )
              {
                      boolSorted = 0 ;
                      document.getElementById("sortIcon").className = "btn-floating tooltipped btn-large waves-effect waves-light blue" ;
              }
               
          }

       //-----------------------------------------------------------------------------------------


      //funtion form validations------------------------------------------------------------------

          function validatingMetaData( boolTemp )
          {
                  boolTemp = 0 ;
                  clearingMetaDataErrorSpan( ) ;

                  if ( !( numberOnly.test( document.getElementById('id').value )) )
                  {
                        document.getElementById('idError').style.display = "initial" ;
                        boolTemp++;

                  }

                  if( !(capitalLettersNumbers.test(document.getElementById('acronym').value)))
                  {
                       document.getElementById('acronymError').style.display = "initial" ;
                       boolTemp++ ;
                  }

                  if ( !( alphaNumeric.test(document.getElementById('fullTitle').value )))
                  {
                        document.getElementById('fullTitleError').style.display = "initial" ;
                        boolTemp++;
                  }

                  if( !(alphaNumeric.test(document.getElementById('volume').value)))
                  {
                        document.getElementById('volumeError').style.display = "initial" ;
                        boolTemp++;
                  }
                
                  if( !(volNumber.test(document.getElementById('volumeNumber').value )))
                  {
                       document.getElementById('volumeNumberID').style.display = "initial" ;
                       boolTemp++;
                  }
                  
                  if( !(dateYYYYMMDD.test(document.getElementById('date').value )) )
                  {
                       document.getElementById('dateError').style.display = "initial" ;
                       boolTemp++;
                     
                  }
                     
                  if( !(hyperLink.test(document.getElementById('homePage').value )) )
                  {
                       document.getElementById('homePageError').style.display = "initial" ;
                       boolTemp++;
                  }
                  
                  if( !(address.test(document.getElementById('location').value )) )
                  {
                       document.getElementById('locationError').style.display = "initial" ;
                       boolTemp++;
                  }
                     
                  if( !(hyperLink.test(document.getElementById('linkLocation').value )) )
                  {
                       document.getElementById('linkLocationError').style.display = "initial" ;
                       boolTemp++;
                  }
                  
                  return boolTemp ;

          }

          function validatingConference( boolTemp )
          {
                  boolTemp = 0 ;
                  clearingConferenceErrorSpan();
                  
                  if ( !( capitalLettersNumbers.test( document.getElementById('acronymConference').value )) )
                  {
                        document.getElementById('acronymConferenceError').style.display = "initial" ;
                        boolTemp++;

                  }
                  
                  if ( !( alphaNumeric.test( document.getElementById('fullName').value )) )
                  {
                        document.getElementById('fullNameError').style.display = "initial" ;
                        boolTemp++;

                  }
                  
                  if ( !( hyperLink.test( document.getElementById('homepageConference').value )) )
                  {
                        document.getElementById('homepageConferenceError').style.display = "initial" ;
                        boolTemp++;

                  }

                  return boolTemp ;
                  
          }

          function validatingEditors( boolTemp )
          {
                  clearingEditorsErrorSpan();
                  boolTemp = 0 ;
                  
                  for( var i = 0 ; i < editorCounter +1 ; i++ )
                  {
                        if ( !( alpha.test( document.getElementById('nameEditor'+i).value )) )
                        {
                                document.getElementById('nameEditorError'+i).style.display = "initial" ;
                                boolTemp++;

                        }
                        
                        if ( !( alphaNumeric.test( document.getElementById('affiliationEditor'+i).value )) )
                        {
                                document.getElementById('affiliationEditorError'+i).style.display = "initial" ;
                                boolTemp++;

                        }
                        
                        if ( !( hyperLink.test( document.getElementById('homepageEditor'+i).value )) )
                        {
                                document.getElementById('homepageEditorError'+i).style.display = "initial" ;
                                boolTemp++;

                        }
                   
                          
                  }
                  
                  return boolTemp ;       

          }

     //-------------------------------------------------------------------------------------------

    // clearing form Error Spans------------------------------------------------------------------

        function clearingMetaDataErrorSpan( )
        {
                //clear the MetaData before checking for errors
                   document.getElementById('idError').style.display = "none" ;
                   document.getElementById('acronymError').style.display = "none" ;
                   document.getElementById('fullTitleError').style.display = "none" ;
                   document.getElementById('volumeError').style.display = "none" ;

                   document.getElementById('volumeNumberID').style.display = "none" ;
                   document.getElementById('dateError').style.display = "none" ;
                   document.getElementById('homePageError').style.display = "none" ;
                   document.getElementById('locationError').style.display = "none" ;
                   document.getElementById('linkLocationError').style.display = "none" ;

        }
          
        function clearingConferenceErrorSpan( )
        {
                
                document.getElementById('acronymConferenceError').style.display = "none" ;
                document.getElementById('fullNameError').style.display = "none" ;
                document.getElementById('homepageConferenceError').style.display = "none" ;  
        }
          
        function clearingEditorsErrorSpan( )
        {
                for( var i = 0 ; i < editorCounter +1 ; i++ )
                {
                        document.getElementById('nameEditorError' + i).style.display = "none" ;
                        document.getElementById('affiliationEditorError' + i).style.display = "none" ;
                        document.getElementById('homepageEditorError' + i).style.display = "none" ;
                }
        }
    //-------------------------------------------------------------------------------------------

    //Loading JSON FOR COUNTRIES-----------------------------------------------------------------
          
           function loadJSON(callback) {   
                    var xobj = new XMLHttpRequest();
                        xobj.overrideMimeType("application/json");
                    xobj.open('GET', 'json/countries.json', true); // Replace 'my_data' with the path to your file
                    xobj.onreadystatechange = function () {
                          if (xobj.readyState == 4 && xobj.status == "200") {
                            // Required use of an anonymous callback as .open will NOT return a value but simply returns undefined in asynchronous mode
                            callback(xobj.responseText);
                          }
                    };
                    xobj.send(null);  
           }

           function init() {
                 loadJSON(function(response) {
                  // Parse JSON string into object
                     countriesArray = JSON.parse(response);
                         console.log(countriesArray);
                         selectForCountries("#countryEditor0");
                          $('select').material_select();
                 });
           }
     //-SELECT FOR COUNTRIES-----------------------------------------------------------------------
          
          function selectForCountries( selectId )
          {
               var $selectDropdown = $(selectId).empty().html(' ');

                for ( i=0 ; i < ( countriesArray.length  ) ; i++ )
                {
                //document.getElementById('ses').appendChild("<option value='option"+i+"'>"+sessionsArray[i]+"</option>");

                        var value = 'value' + i ;

                        $selectDropdown.append($("<option></option>").attr("value",value).text(countriesArray[i].name));
                        $selectDropdown.trigger('contentChanged');

                }


                // re-initialize (update)
                $('select').material_select();    
          }

    //-------------------------------------------------------------------------------------------
          
    //-Loading JSON FOR LANGUAGES----------------------------------------------------------------
          
             
        function loadJSONTwo(callback) {   

                    var xobj = new XMLHttpRequest();
                        xobj.overrideMimeType("application/json");
                    xobj.open('GET', 'json/languages.json', true); // Replace 'my_data' with the path to your file
                    xobj.onreadystatechange = function () {
                          if (xobj.readyState == 4 && xobj.status == "200") {
                            // Required use of an anonymous callback as .open will NOT return a value but simply returns undefined in asynchronous mode
                            callback(xobj.responseText);
                          }
                    };
                    xobj.send(null);  
        }

        function initTwo() {
                 loadJSONTwo(function(response) {
                  // Parse JSON string into object
                    languagesArray = JSON.parse(response);
                         console.log(languagesArray);
                          selectForLanguage();
                          $('select').material_select();
                 });
        }

     //-SELECT FOR LANGUAGES-----------------------------------------------------------------------
             
        function selectForLanguage( )
        {
                var $selectDropdown = $('#language').empty().html(' ');
                
                for ( var i=0 ; i < languagesArray.length ; i++ )
                {
                //document.getElementById('ses').appendChild("<option value='option"+i+"'>"+sessionsArray[i]+"</option>");

                        var value = languagesArray[i].code ;

                        $selectDropdown.append($("<option></option>").attr("value",value).text(languagesArray[i].name));
                        $selectDropdown.trigger('contentChanged');

                }


                // re-initialize (update)
                $('select').material_select();
        }
          
    //-------------------------------------------------------------------------------------------
        //Title Case Function------------------------------------------------------------------------
    
      String.prototype.toTitleCase = function() {
        var i, j, str, lowers, uppers;
        str = this.replace(/([^\W_]+[^\s-]*) */g, function(txt) {
          return txt.charAt(0).toUpperCase() + txt.substr(1).toLowerCase();
        });

        // Certain minor words should be left lowercase unless 
        // they are the first or last words in the string
        lowers = ['A', 'An', 'The', 'And', 'But', 'Or', 'For', 'Nor', 'As', 'At', 
        'By', 'For', 'From', 'In', 'Into', 'Near', 'Of', 'On', 'Onto', 'To', 'With'];
        for (i = 0, j = lowers.length; i < j; i++)
          str = str.replace(new RegExp('\\s' + lowers[i] + '\\s', 'g'), 
            function(txt) {
              return txt.toLowerCase();
            });

        // Certain words such as initialisms or acronyms should be left uppercase
        uppers = ['Id', 'Tv'];
        for (i = 0, j = uppers.length; i < j; i++)
          str = str.replace(new RegExp('\\b' + uppers[i] + '\\b', 'g'), 
            uppers[i].toUpperCase());

        return str;
     }
    //---------------------------------------------------------------------------------------------
  </script>

  </body>
</html>
