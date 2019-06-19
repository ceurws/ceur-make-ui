<?php
	include_once '_inc/common.php';
	
	$page_title = 'Ceur Make';
	
	include_once '_inc/header.php';
?>
<!--This view generates stepwise wizard for publishing proceedings using CEUR Make Workflow. The workflow in which user is required to create
    Table of Contents and Workshop artifact and based on that artifacts we generate standard submission artifacts.
-->  
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
        <div class="row" >
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
              <div class="card-action">
                      <a class="waves-effect waves-light btn " id="createWorkshop" href="javascript:showContentForWorkshop('uniquename')">Generate</a>
                      <a class="waves-effect waves-light btn disabled" id="downloadWorkshop" href="">Download</a>
              </div>
              </div>
            </div>
            <div class="col s6">
              <div class="card grey lighten-3">
              <div class="card-content black-text">
              <span class="card-title">
                      <a class="btn-floating btn-small waves-effect waves-light green disabled" onClick="" id="tocLink"><i class="material-icons">check</i></a>  Create Table Of Contents </span>
                      <div class="divider"></div>
                      <br/>
              <p>Simple easy to use step by step form for creating Table Of Contents. Contains all the necessary elements to be added
              in table of contents.</p>
              </div>
              <div class="card-action">
                      <a class="waves-effect waves-light btn" href="javascript:HideContent('uniquename')" id="createToc">Generate</a>
                      <a class="waves-effect waves-light btn disabled" id="downloadToc" href="">Download</a>
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
      <div id="tocForm">
                        <div class="card grey lighten-5 card-custom">
                    <div class="card-content ">
                            <span class="card-title">Generate Table of Contents</span>
                            <p>I am a very simple card. I am good at containing small bits of information.
                               I am convenient because I require little markup to use effectively.</p>
                            <br/>
                                <div id="wizard">
                                <h1>Add Sessions</h1>
                                <div>
                                        <div class="row">
                                                <div class="col s10">
                                                        <h5>Kindly add The titles of Sessions to be included in your Workshop:</h5>
                                                </div>
                                                <div class="col s1">
                                                        <a class="btn-floating btn-large waves-effect waves-light green" onClick="addInput('dynamicInput');"><i class="material-icons">add</i></a>
                                                </div>
                                                <div class="col s1">
                                                        <a class="btn-floating btn-large waves-effect waves-light red" onClick="removeInput('dynamicInput');"><i class="material-icons">remove</i></a>
                                                </div>
                                        </div>
                                <div class="Sessions" id="dynamicInput">
                                        <div class="input-field col s12" id="arab0" >
                                                <input id="Session0" type="text" class="validate" required >
                                                <label for="Session0">Session0</label>
                                                <span id="SessError0" style="display:none" class="error" >Please enter alphabets from A-Z or characters from 0-9.</span>
                                        </div>
                                </div>
                                </div>

                                <h1>Add Papers</h1>
                                <div>
                                        <div class="row">
                                                <div class="col s10">
                                                        <h5>Add Papers and Associated Details for Table of Contents</h5>
                                                </div>
                                                <div class="col s1">
                                                        <a class="btn-floating btn-large waves-effect waves-light green" onClick="addPaper('dynamicInputPapers');"><i class="material-icons">add</i></a>
                                                </div>
                                                <div class="col s1">
                                                        <a class="btn-floating btn-large waves-effect waves-light red" onClick="removePaper('dynamicInputPapers');"><i class="material-icons">remove</i></a>
                                                </div>
                                        </div>
                                        <div class="Papers" id="dynamicInputPapers">
                                                <div id="Paper0">
                                                        <fieldset>
                                                        <legend>Paper 0 </legend>
                                                             <div class="input-field col s12">
                                                                <select id="ses0">
                                                                <option value="1">Option 1</option>
                                                                </select>
                                                                <label>Session *(optional)</label>
                                                             </div>
                                                             <div class="row">
                                                                <div class="input-field col s7">
                                                                <input id="paperTitle0" type="text" data-paper_index="0" class="tableofcontents_paper_title autocomplete validate">
                                                                <label for="paperTitle0">Paper Title </label>
                                                                <span id="paperTitleError0" style="display:none" class="error">Paper title can contain only Alphanumeric Characters (A-Z) and (0-9).</span>
                                                             </div>
                                                             <div class="input-field col s1">
                                                             <h6>Page Number</h6>
                                                             </div>
                                                             <div class="input-field col s2">
                                                                <input id="paperFrom0" type="text" class="tableofcontents_page_from validate" >
                                                                <label for="paperFrom0"  >From</label>
                                                                <span id="paperFromError0" style="display:none" class="error">Enter Number</span>
                                                             </div>
                                                             <div class="input-field col s2">
                                                                <input id="paperTo0" type="text" class="tableofcontents_page_to validate" >
                                                                <label for="paperTo0" >To</label>
                                                                <span id="errorTo0" style="display:none" class="error">Enter Number</span>
                                                             </div>
                                                             </div>
                                                             <fieldset>
                                                                <legend>Authors of the Paper <span>   <a class="btn-floating btn-small waves-effect waves-light green" onClick="addAuthor('authors0');"><i class="material-icons">add</i></a> <a class="btn-floating btn-small waves-effect waves-light red" onClick="removeAuthor('authors0');"><i class="material-icons">remove</i></a></span></legend>
                                                                <div class="input-field col s7" id="authors0" >
																	<input id="0author0" type="text" class="validate">
																	<label for="0author0" >Author 0</label>
																	<span id="0authorError0" style="display:none" class="error">Please add valid author name.</span>
																</div>
                                                             </fieldset>
                                                             <br/>
                                                        </fieldset>
                                                        <br/>
                                                </div>

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
                                              <span id="idError" class="error" style="display:none">Please enter a valid ID</span>
                                            </div>
                                            <div class="input-field col s6">
                                              <input id="acronym" type="text" class="validate">
                                              <label for="acronym">Acronym</label>
                                              <span id="acronymError" class="error" style="display:none">Please enter capital alphabet or numbers.</span>
                                            </div>
                                            <div class="input-field col s12">
                                              <input id="volume" type="text" class="validate">
                                              <label for="volume">Volume Title</label>
                                              <span id="volumeError" class="error" style="display:none">You can only enter alphanumerics with hyphen.</span>
                                            </div>
                                            <div class="input-field col s12">
                                              <input id="fullTitle" type="text" class="validate">
                                              <label for="fulltitle">Full Title</label>
                                              <span id="fullTitleError" class="error" style="display:none">Please enter alphabets, numbers or space only</span>
                                            </div>
                                           </div>
                                           </fieldset>
                                           <div class="row">
                                            <div class="input-field col s4">
                                              <input id="volumeNumber" type="text" class="validate" value="vol-">
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
                                              <input id="date" type="text" class="validate datepicker">
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
                                    <legend> Conference Metadata</legend>
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
                                              <span id="nameEditorError0" class="error" style="display:none">Please enter a valid text.</span>
                                          </div>
                                          <div class="input-field col s12">
                                              <input id="affiliationEditor0" type="text" class="validate">
                                              <label for="affiliationEditor0">Affiliation Of The Editor</label>
                                              <span id="affiliationEditorError0" class="error" style="display:none">Please enter a valid text.</span>
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

	<!-- Footer -->
	<?php include_once '_inc/footer.php'; ?>
	<!-- /Footer -->

  <script>

  //Variables:

    //Variables Table of Contents Form
       // <!--  variables form Sessions-->
          var counter = 0;
          var limit = 40;
          var sessionsArray = [] ;          // an empty array of length 0
       //---------------------------------

      //Variables from Papers
          var counterPaper = 0 ;
          var limitPaper = 40 ;
          var authorArray = [];
          authorArray.push(0) ;
      //----------------------------------

      //Variables output passing
          var sessions = [] ;
          var sendFormOneData;
          var uniquenameZero ;
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
        //--------------------------------

        //Transition Variables -----------
          var boolFromTOCToWorkshop = 0 ;
          var boolFromWorkshopToToc = 0 ;
        //--------------------------------
        //Loading Select Arrays Cont & Lang
          var countriesArray ;
          var languagesArray ;
        //--------------------------------
   //----------------------------------

  //regularExpression Variables-----------

        var alphaNumeric = new RegExp(/^[a-z\d\-_\s]+$/i);
        var alphaNumericNotMust = new RegExp(/^[a-z\d\-_\s]*$/i);
        var alpha = new RegExp(/^[A-Za-z\s]+$/);
        var numberAndSpace = new RegExp("/^[0-9 ]*$/") ;
        var numberOnly = new RegExp(/^[0-9]*$/) ;
        var volNumber = new RegExp(/^\Vol-[0-9]+$/);
        var capitalLettersNumbers =  new RegExp(/^[A-Z0-9]+$/);
        var capitalLettersNumbersNotMust =  new RegExp(/^[A-Z0-9]*$/);
        var email = new RegExp("/^(([^<>()\[\]\.,;:\s@\"]+(\.[^<>()\[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i") ;
        var hyperLink = new RegExp(/[-a-zA-Z0-9@:%_\+.~#?&//=]{2,256}\.[a-z]{2,4}\b(\/[-a-zA-Z0-9@:%_\+.~#?&//=]*)?/i) ;
        var hyperLinkNotMust = new RegExp(/[-a-zA-Z0-9@:%_\+.~#?&//=]{2,256}\.[a-z]{2,4}\b(\/[-a-zA-Z0-9@:%_\+.~#?&//=]*)*$/i) ;
        var emptyString = new RegExp("/^[\s]*$/");
        var dateYYYYMMDD = new RegExp(/^\d{4}-\d{1,2}-\d{1,2}$/);
        var address = new RegExp(/^[a-zA-Z0-9\s,'-]*$/i);

  //-----------------------------------

//Functions:

          //Initializers

                $(document).ready(function() {
					
					//-- non-deletable "vol-" text in Volume Number field
					$("#volumeNumber").keydown(function(e) {
						var oldvalue=$(this).val();
						var field=this;
						setTimeout(function () {
							if(field.value.indexOf('vol-') !== 0) {
								$(field).val(oldvalue);
							} 
						}, 1);
					});
					
					//-- function to move the cursor to the end of the string
					function SetCaretAtEnd(elem) {
						var elemLen = elem.value.length;
						// For IE Only
						if (document.selection) {
							// Set focus
							elem.focus();
							// Use IE Ranges
							var oSel = document.selection.createRange();
							// Reset position to 0 & then set at end
							oSel.moveStart('character', -elemLen);
							oSel.moveStart('character', elemLen);
							oSel.moveEnd('character', 0);
							oSel.select();
						}
						else if (elem.selectionStart || elem.selectionStart == '0') {
							// Firefox/Chrome
							elem.selectionStart = elemLen;
							elem.selectionEnd = elemLen;
							elem.focus();
						} // if
					} 
	
					//-- move cursor to the end of the text, when the input field gets focus (eg: during Tab press)
					$("#volumeNumber").on('focus', function(e) {
						SetCaretAtEnd(this);
					});
					
					//-------------------------------------------------------------
					
                    $('.modal-trigger').modal();
                    document.getElementById('uniquename2').style.display = "none";
                    document.getElementById('uniquename0').style.display = "none";
                    document.getElementById('uniquename3').style.display = "none";
                    document.getElementById('tocForm').style.display ="none";
                    document.getElementById('workshopForm').style.display = "none";
                    document.getElementById('loader').style.display = "none" ;

                    init();
                    initTwo();

                    //checking if the session already exists or is it a new session....
                    if( sessionStorage.userId == null)
                    {
                          // making the directories for the particular user...
                          var xhr = new XMLHttpRequest();
                          xhr.open("POST", "generateUserFolder.php", !0);
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
                                          sessionStorage.setItem("userId", jsondata);
                                          console.log(sessionStorage.userId);
                                      } else
                                      {
                                           alert("Sorry, your browser does not support Web Storage...");
                                      }
                              }
                         }

                    }

                });




          //-----------------------------------------------------------------------------------------

    //Div Display Functions

        function HideContent(d) {

        document.getElementById(d).style.display = "none";
        document.getElementById('tocForm').style.display ="initial";
        document.getElementById('loader').style.display = "none" ;
        document.getElementById('uniquename0').style.display = "none" ;

        }

        function showContentForWorkshop(d)
        {

                   document.getElementById(d).style.display = "none";
                   document.getElementById('tocForm').style.display = "none" ;
                   document.getElementById('workshopForm').style.display = "initial" ;
                   document.getElementById('loader').style.display = "none" ;

        }

        function hideContainerContent()
        {
           document.getElementById('uniquename').style.display = "none" ;
           document.getElementById('uniquename2').style.display = "none" ;
           document.getElementById('uniquename3').style.display = "none" ;
           document.getElementById('uniquename0').style.display = "none" ;
           document.getElementById('tocForm').style.display = "none" ;
           document.getElementById('workshopForm').style.display = "none" ;
           document.getElementById('loader').style.display = "initial" ;
        }

        function afterTocCreation()
        {
           document.getElementById('uniquename').style.display = "initial" ;
           if( uniquenameZero == 1 )
           {
                   document.getElementById('uniquename0').style.display = "initial" ;
           }
           document.getElementById('tocForm').style.display = "none" ;
           document.getElementById('workshopForm').style.display = "none" ;
           document.getElementById('loader').style.display = "none" ;
           document.getElementById('tocLink').className = "btn-floating btn-small waves-effect waves-light green";
           document.getElementById('downloadToc').className = "waves-effect waves-light btn" ;
           document.getElementById('createToc').className = "waves-effect waves-light btn disabled" ;
           document.getElementById("createToc").href = "#" ;
           boolFromTOCToWorkshop = 1 ;
           M.toast({html:'Table Of Contents Has Been Successfully Created!', displayLength:3000, classes:'rounded'}) ;

           var a = document.getElementById('downloadToc'); //or grab it by tagname etc
           a.href = "userDirectories/"+sessionStorage.userId+"/output/toc.xml" ;
           a.setAttribute('target', '_blank');
        }

        function afterWorkshopCreation()
        {
           document.getElementById('uniquename').style.display = "initial" ;
           document.getElementById('tocForm').style.display = "none" ;
           document.getElementById('workshopForm').style.display = "none" ;
           document.getElementById('loader').style.display = "none" ;
           document.getElementById("createWorkshop").href = "#" ;
           document.getElementById("createWorkshop").className = "waves-effect waves-light btn disabled" ;
           document.getElementById('workshopLink').className = "btn-floating btn-small waves-effect waves-light green";
           document.getElementById('downloadWorkshop').className = "waves-effect waves-light btn" ;
           boolFromWorkshopToToc = 1 ;
           M.toast({html:'Workshop Contents Has Been Successfully Created!', displayLength: 3000, classes: 'rounded'}) ;

           var a = document.getElementById('downloadWorkshop'); //or grab it by tagname etc
           a.href = "userDirectories/"+sessionStorage.userId+"/output/workshop.xml" ;
           a.setAttribute('target', '_blank');
        }


        function afterResourceCreation()
        {
                document.getElementById('uniquename').style.display = "initial" ;
                document.getElementById('uniquename2').style.display = "initial" ;
                document.getElementById('uniquename3').style.display = "initial" ;

                var zipName = document.getElementById('id').value + (document.getElementById('date').value).slice(0,4) ;

                a = document.getElementById('rightsDownload');
                a.href = "userDirectories/"+sessionStorage.userId+"/output/copyright-form.txt" ;
                a.setAttribute('target', '_blank');

                a = document.getElementById('bibDownload');
                a.href = "userDirectories/"+sessionStorage.userId+"/output/ceur-ws/temp.bib" ;
                a.setAttribute('target', '_blank');

                a = document.getElementById('zipDownload');
                a.href = "userDirectories/"+sessionStorage.userId+"/output/"+zipName+".zip" ;
                a.setAttribute('target', '_blank');

                a = document.getElementById('indexDownload');
                a.href = "userDirectories/"+sessionStorage.userId+"/output/ceur-ws/index.html" ;
                a.setAttribute('target', '_blank');


                M.toast({html:'You Can Now Download The Resources !!', displayLength: 3000, classes: 'rounded'}) ;
        }

        function scriptGenerator( )
        {
                var data = JSON.stringify(workshopArray);
                var xhr = new XMLHttpRequest();
                xhr.open("POST", "userDirectories/"+sessionStorage.userId+"/output/doc.php", !0);
                xhr.setRequestHeader("Content-Type", "application/json;charset=UTF-8");
                xhr.send(data);
                xhr.onreadystatechange = function ()
                {
                        if (xhr.readyState === 4 && xhr.status === 200)
                        {
                                if( boolFromWorkshopToToc)
                                        afterTocCreation();
                                if( boolFromTOCToWorkshop)
                                        copyrightsFormCreation();

                                // in case we reply back from server
                                jsondata = xhr.responseText;
                                afterResourceCreation();
                        }
                }
        }

        function refreshSelect( selectId )
        {
                var $selectDropdown = $(selectId).empty().html(' ');

                for ( i=0 ; i < counter+1 ; i++ )
                {
                //document.getElementById('ses').appendChild("<option value='option"+i+"'>"+sessionsArray[i]+"</option>");

                        var value = 'value' + i ;

                        $selectDropdown.append($("<option></option>").attr("value",value).text(sessionsArray[i]));
                        $selectDropdown.trigger('contentChanged');

                }


                // re-initialize (update)
                $('select').formSelect();
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

   //Form Table Of Contents:

          //Initializers

                $(document).ready(function() {

                    $('select').formSelect();

                });

          //-----------------------------------------------------------------------------------------
          //TOC FORM BASIC Functions
                $("#wizard").steps({



            onStepChanged: function (event, currentIndex, priorIndex)
            {

                        if (currentIndex === 1 && priorIndex === 0)
                        {
                            //get element values of all the sesions in order to be displayed
                            // to select element in the next step of the form
                                for ( i = 0 ; i < counter+1  ; i++)
                                {
                                        sessionsArray.push (document.getElementById('Session'+i).value.toTitleCase() );
                                        console.log(sessionsArray[i]);
                                }

                                var $selectDropdown = $("#ses0").empty().html(' ');

                                 for ( i=0 ; i < counter+1 ; i++ )
                                {
                                        //document.getElementById('ses').appendChild("<option value='option"+i+"'>"+sessionsArray[i]+"</option>");

                                        var value = 'value' + i ;

                                        $selectDropdown.append($("<option></option>").attr("value",value).text(sessionsArray[i]));
                                        $selectDropdown.trigger('contentChanged');

                                }

                                // re-initialize (update)
                                        $('select').formSelect();

                        }


            },

            onStepChanging: function(e, currentIndex, newIndex) {

                        if( currentIndex == 0 && newIndex == 1)
                        {
                              var tempFalse = 0 ;

                              //clearing form errors.............

                              for ( var i = 0 ; i < counter + 1 ; i++ )
                                document.getElementById('SessError' + i ).style.display = "none" ;

                              //form validation for sessions.....
                              for ( var i =0 ; i < counter + 1 ; i++ )
                              {
                                 var temp =  document.getElementById('Session' + i ).value ;

                                 if( alphaNumericNotMust.test(temp) )
                                 {
                                         //
                                 }else
                                 {
                                    document.getElementById('SessError' + i ).style.display = "initial" ;
                                    tempFalse++;
                                 }

                              }

                              if( tempFalse == 0 )
                                return 1 ;
                              else
                                return 0 ;

                        }

                        if( currentIndex == 1 && newIndex == 0 )
                                return 1 ;


            },

            onFinishing: function (event, currentIndex)
            {
                var tempCheck = 0 ;

                //clearing form errors to revalidate
                for ( var i = 0 ; i < counterPaper + 1 ; i++ )
                {
                        //clearing other tabs .....................
                        document.getElementById('paperTitleError' + i ).style.display = "none" ;
                        document.getElementById('errorTo' + i ).style.display = "none" ;
                        document.getElementById('paperFromError' + i ).style.display = "none" ;
                        //clearing authors error span ..............
                        for ( var j = 0 ; j < authorArray[i] + 1 ; j++ )
                        {
                            document.getElementById(i+'authorError'+ j).style.display = 'none';
                            console.log(i+" "+authorArray[i]+" " + j);

                        }


                }


                //form validation of last step .....
                for ( var i = 0 ; i < counterPaper + 1 ; i ++ )
                {
                        //tesing paperTitle
                        var tempPaperTitle = document.getElementById('paperTitle' + i ).value ;

                        if( !(alphaNumeric.test(tempPaperTitle))  )
                        {
                           document.getElementById('paperTitleError' + i ).style.display = "initial" ;
                           tempCheck++ ;
                        }

                        if( !(numberOnly.test(document.getElementById('paperTo' + i ).value))  )
                        {
                           document.getElementById('errorTo' + i ).style.display = "initial" ;
                           tempCheck++ ;
                        }

                         if( !(numberOnly.test(document.getElementById('paperFrom' + i ).value))  )
                        {
                           document.getElementById('paperFromError' + i ).style.display = "initial" ;
                           tempCheck++ ;
                        }

                        // checking authors section
                       for ( var j = 0 ; j < authorArray[i] + 1 ; j++ )
                       {
                          var tempAuthor = document.getElementById(i+'author'+ j).value ;
                          console.log(tempAuthor);

                          //if( !(alpha.test(tempAuthor)) )
						  if( jQuery.trim(tempAuthor) == '' )	//-- checks whether the Author name is empty or not.
                          {
                             document.getElementById(i+'authorError'+ j).style.display = "initial" ;
                             tempCheck++ ;
                          }

                       }
                }

                if( tempCheck == 0 )
                {
                        return 1 ;
                }else
                        return 0 ;

            },

           onFinished: function (event, currentIndex)
           {

                           hideContainerContent();
                           // temporary array for getting form data
                           var tempPaperArray = [] ;
                           var copyArray = [] ;

                           for ( i = 0 ; i < counterPaper + 1 ; i ++ )
                           {
                                //get all the entered values in the form.....
                                   var tempAuthorsArray =  [ ] ;

                                   for ( j = 0 ; j < authorArray[i] + 1 ; j++ )
                                   {
                                           tempAuthorsArray.push(document.getElementById(i+'author'+ j).value );
                                   }

                                   var titlePaper = document.getElementById('paperTitle' + i ).value.toTitleCase() ;
                                   var pageFrom = document.getElementById('paperFrom' + i).value ;
                                   var pageTo = document.getElementById('paperTo' + i).value ;
                                   var sessionName = document.getElementById("ses"+ i);
                                   var strSessionName = sessionName.options[sessionName.selectedIndex].text;

                                   tempPaperArray.push({

                                           sessionName: strSessionName,
                                           title: titlePaper,
                                           pageFrom: pageFrom,
                                           pageTo: pageTo,
                                           authors: tempAuthorsArray
                                   }
                                   );

                                   copyArray.push({

                                           title: titlePaper,
                                           pageFrom: pageFrom,
                                           pageTo: pageTo,
                                           authors: tempAuthorsArray
                                   }
                                   );

                           }

                           for ( i = 0 ; i < sessionsArray.length  ; i++ )
                           {
                                var tempCopier = [ ] ;

                                for ( j = 0 ; j < tempPaperArray.length; j++  )
                                {
                                           if( sessionsArray[i] == tempPaperArray[j].sessionName )
                                           {
                                                 tempCopier.push(copyArray[j]);

                                           }
                                }

                                sessions.push({
                                                        title: sessionsArray[i],
                                                        paper: tempCopier
                                                });
                           }

                           sendFormOneData = {
                                   title:sessionStorage.userId,
                                   sessions: sessions
                           } ;

                        console.log(sendFormOneData) ;

                        var data = JSON.stringify(sendFormOneData);
                        var xhr = new XMLHttpRequest();
                        xhr.open("POST", "doc.php", !0);
                        xhr.setRequestHeader("Content-Type", "application/json;charset=UTF-8");
                        xhr.send(data);
                        xhr.onreadystatechange = function () {
                                if (xhr.readyState === 4 && xhr.status === 200) {
                                        // in case we reply back from server
                                        jsondata = xhr.responseText;
                                        console.log(jsondata);


                                        if( boolFromWorkshopToToc == 1 )
                                        {
                                               scriptGenerator();
                                        }else
                                        {
                                                afterTocCreation();
                                        }

                                }
                        }





           }
        });

          //-----------------------------------------------------------------------------------------
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
                                            fileName: sessionStorage.userId
                                    }) ;

                                    console.log(workshopArray);

                                    //sending ajax request to create Workshop.xml
                                    var data = JSON.stringify(workshopArray);
                                    var xhr = new XMLHttpRequest();
                                    xhr.open("POST", "workshopCreate.php", !0);
                                    xhr.setRequestHeader("Content-Type", "application/json;charset=UTF-8");
                                    xhr.send(data);
                                    xhr.onreadystatechange = function ()
                                    {
                                        if (xhr.readyState === 4 && xhr.status === 200)
                                        {
                                        // in case we reply back from server
                                                jsondata = xhr.responseText;
                                                console.log(jsondata);
                                                //after Workshop Creation


                                                if( boolFromTOCToWorkshop == 1 )
                                                {
                                                        scriptGenerator( ) ;
                                                }else
                                                {

                                                      copyrightsFormCreation( );
                                                      console.log("going to create copyright");
                                                }
                                        }
                                   }

                        }

                });

                function copyrightsFormCreation( )
                {
                        var data = JSON.stringify(workshopArray);
                        console.log('today');
                        console.log(data);
                        var xhr = new XMLHttpRequest();
                        xhr.open("POST", "userDirectories/"+sessionStorage.userId+"/output/copyright.php", !0);
                        xhr.setRequestHeader("Content-Type", "application/json;charset=UTF-8");
                        xhr.send(data);
                        xhr.onreadystatechange = function ()
                        {
                                if (xhr.readyState === 4 && xhr.status === 200)
                                {
                                // in case we reply back from server
                                        jsondata = xhr.responseText;
                                        afterWorkshopCreation();
                                        displayCopyright();
                                        uniquenameZero = 1 ;

                                        console.log(jsondata);
                                        console.log("hi");
                                }
                        }

                }

                function displayCopyright()
                {
                        a = document.getElementById('rightsDownload');
                        a.href = "userDirectories/"+sessionStorage.userId+"/output/copyright-form.txt" ;
                        a.setAttribute('target', '_blank');

                        document.getElementById('uniquename0').style.display = "initial" ;
                }


          //-----------------------------------------------------------------------------------------

         //Sessions

                function addInput(divName){
                     if (counter == limit)  {
                          alert("You have reached the limit of adding " + counter + " inputs");
                     }
                     else {
                          var newdiv = document.createElement('div');
                          newdiv.className ="input-field col s12" ;
                          newdiv.id ="arab"+(counter+1);
                          newdiv.innerHTML = "<input type='text' class='validate' id='Session" +(counter+1)+ "'><label for='Session"+(counter+1) + "'>Session"+(counter+1) +"</label><span id='SessError" +(counter+1)+ "' style='diaplay:none' class='error'>Please enter alphabets from A-Z or characters from 0-9.</span>";
                          document.getElementById(divName).appendChild(newdiv);
                          counter++;
                     }
                }

                function removeInput(divName){
                     if (counter == 0 )  {
                          alert("You have only one seesion element which is optional");
                     }
                     else {

                          var div = document.getElementById("arab" + counter);
                          div.parentNode.removeChild(div);
                          counter--;
                     }
                }

        //-----------------------------------------------------------------------------------------

        //Papers-----------------------------------------------------------------------------------

                function addPaper(divName)
                {
                    if (counterPaper == limitPaper)  {
                          alert("You have reached the limit of adding " + counterPaper + " inputs");
                     }
                     else {

                          authorArray.push(0);
                          var newdiv = document.createElement('div');
                          newdiv.id ="Paper"+(counterPaper+1);
                          newdiv.innerHTML = "<fieldset><legend>Paper"+(counterPaper+1)+"</legend><div class='input-field col s12'><select id='ses"+(counterPaper+1) +"'><option value='1'>Option 1</option></select><label>Session *(optional)</label></div><div class='row'><div class='input-field col s7'><input id='paperTitle"+(counterPaper+1)+"' type='text' data-paper_index='"+(counterPaper+1) +"' class='tableofcontents_paper_title autocomplete validate'><label for='paperTitle"+(counterPaper+1)+"'>Paper Title </label><span id='paperTitleError"+(counterPaper+1)+"' style='display:none' class='error'>Paper title can contain only Alphanumeric Characters (A-Z) and (0-9).</span></div><div class='input-field col s1'><h6>Page Number</h6></div><div class='input-field col s2'><input id='paperFrom"+(counterPaper+1)+"' type='text' class='validate'><label for='paperFrom"+(counterPaper+1)+"'>From</label><span id='paperFromError"+(counterPaper+1)+"' style='display:none' class='error'>Enter Number</span></div><div class='input-field col s2'><input id='paperTo"+(counterPaper+1)+"' type='text' class='validate'><label for='paperTo"+(counterPaper+1)+"'>To</label>                                <span id='errorTo"+(counterPaper+1)+"' style='display:none' class='error'>Enter Number</span></div></div><fieldset><legend>Authors of the Paper <span><a class='btn-floating btn-small waves-effect waves-light green' onClick='addAuthor(&quot;authors"+(counterPaper + 1)+"&quot;);'><i class='material-icons'>add</i></a></span><a class='btn-floating btn-small waves-effect waves-light red' onClick='removeAuthor(&quot;authors"+(counterPaper + 1)+"&quot;);'><i class='material-icons'>remove</i></a></legend><div class='input-field col s7' id='authors"+(counterPaper + 1)+"' ><input id='"+(counterPaper+1)+"author"+authorArray[counterPaper+1]+"' type='text' class='validate'><label for='"+(counterPaper+1)+"author"+authorArray[counterPaper+1]+"'>Author "+authorArray[counterPaper+1]+"</label><span id='"+(counterPaper+1)+"authorError"+(authorArray[counterPaper+1])+"' style='display:none' class='error'>Please add valid author name.</span></div></fieldset><br/></fieldset><br/>";

                          document.getElementById(divName).appendChild(newdiv);
                          var selectId = '#ses'+(counterPaper+1);
                          refreshSelect(selectId);
                          counterPaper++;


                     }

                }
                function removePaper(divName)
                {
                     if (counterPaper == 0 )  {
                          alert("You have only one Paper element which is compulsory");
                     }
                     else {

                          var div = document.getElementById("Paper" + counterPaper);
                          div.parentNode.removeChild(div);
                          counterPaper--;
                          authorArray.pop() ;
                     }
                }

       //-----------------------------------------------------------------------------------------

       //PaperSubAuthors--------------------------------------------------------------------------

          function addAuthor(divName)
          {
                var positionOfPapersDiv = parseInt( divName.slice(7) );
                var newdiv = document.createElement('div');
                newdiv.className ="input-field col s12" ;
                newdiv.id =positionOfPapersDiv +"Author"+( authorArray[positionOfPapersDiv] + 1 );
                newdiv.innerHTML = "<input id='"+positionOfPapersDiv+"author"+(authorArray[positionOfPapersDiv] + 1)+"' type='text' class='validate'><label for='"+positionOfPapersDiv+"author"+(authorArray[positionOfPapersDiv] + 1)+"'>Author "+(authorArray[positionOfPapersDiv] + 1)+"</label><span id='"+(positionOfPapersDiv)+"authorError"+(authorArray[positionOfPapersDiv] + 1)+"' style='display:none' class='error'>Please add valid author name.</span>";
                document.getElementById(divName).appendChild(newdiv);
                authorArray[positionOfPapersDiv] = authorArray[positionOfPapersDiv] + 1 ;


          }

			function removeAuthor(divName)
			{
                var positionOfPapersDiv = parseInt( divName.slice(7) );

                if (authorArray[positionOfPapersDiv] == 0 )  {
                    alert("You have only one Author element which is compulsory");
                }
                else {
                    console.log( positionOfPapersDiv);

                    var div = document.getElementById(positionOfPapersDiv+"Author" + authorArray[positionOfPapersDiv]);
                    div.parentNode.removeChild(div);
                    authorArray[positionOfPapersDiv] = authorArray[positionOfPapersDiv] - 1 ;
                }
			}
			
			
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
                          newdiv.innerHTML = "<fieldset><legend>Editor "+ (editorCounter + 1) +"</legend><div class='row'><div class='input-field col s12'><input id='nameEditor"+(editorCounter + 1 )+"' type='text' class='validate'><label for='nameEditor"+ (editorCounter + 1 ) +"'>Name of The Editor</label><span id='nameEditorError"+(editorCounter + 1 )+"' class='error' style='display:none'>Please enter a valid text.</span></div><div class='input-field col s12'><input id='affiliationEditor"+(editorCounter+1)+"' type='text' class='validate'><label for='affiliationEditor"+(editorCounter+1)+"'>Affiliation Of The Editor</label><span id='affiliationEditorError"+(editorCounter+1)+"' class='error' style='display:none'>Please enter a valid text.</span></div><div class='input-field col s12'>"+selectEditor+"</div><div class='input-field col s12'><input id='homepageEditor"+(editorCounter+1)+"' type='text' class='validate'><label for='homepageEditor"+(editorCounter+1)+"'>Homepage Of The Editor</label><span id='homepageEditorError"+(editorCounter+1)+"' class='error' style='display:none'>Please enter a valid URL</span></div></div></fieldset>";

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

                  boolTemp += validateAlphaNumeric('id', 'idError') ;

                  // if ( !( alphaNumeric.test( document.getElementById('id').value )) )
                  // {
                  //       document.getElementById('idError').style.display = "initial" ;
                  //       boolTemp++;
                  //
                  // }

                  if( !(capitalLettersNumbers.test(document.getElementById('acronym').value)))
                  {
                       document.getElementById('acronymError').style.display = "initial" ;
                       boolTemp++ ;
                  }

                  boolTemp += validateAlphaNumeric( 'fullTitle', 'fullTitleError' );
                  //
                  // if ( !( alphaNumeric.test(document.getElementById('fullTitle').value )))
                  // {
                  //       document.getElementById('fullTitleError').style.display = "initial" ;
                  //       boolTemp++;
                  // }

                  boolTemp += validateAlphaNumeric('volume', 'volumeError');
                  //
                  // if( !(alphaNumeric.test(document.getElementById('volume').value)))
                  // {
                  //       document.getElementById('volumeError').style.display = "initial" ;
                  //       boolTemp++;
                  // }

                  if( !(alphaNumeric.test(document.getElementById('volumeNumber').value )))
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

                  if ( !( capitalLettersNumbersNotMust.test( document.getElementById('acronymConference').value )) )
                  {
                        document.getElementById('acronymConferenceError').style.display = "initial" ;
                        boolTemp++;

                  }

                  if ( !( alphaNumericNotMust.test( document.getElementById('fullName').value )) )
                  {
                        document.getElementById('fullNameError').style.display = "initial" ;
                        boolTemp++;

                  }

				  if ( $.trim( document.getElementById('homepageConference').value ).length != 0 )	//-- if user has entered a Conference home page link, then validate
				  {
					  if ( !( hyperLinkNotMust.test( document.getElementById('homepageConference').value )) )
					  {
							document.getElementById('homepageConferenceError').style.display = "initial" ;
							boolTemp++;

					  }
				  }
				  
                  return boolTemp ;

          }

          function validatingEditors( boolTemp )
          {
				clearingEditorsErrorSpan();
                boolTemp = 0 ;

                for( var i = 0 ; i < editorCounter +1 ; i++ )
                {
					
                    //if ( !( alphaNumeric.test( document.getElementById('nameEditor'+i).value )) )
					if ( jQuery.trim( document.getElementById('nameEditor'+i).value ) == '' )	//-- checks whether the Editor name is empty or not.
                    {
                        document.getElementById('nameEditorError'+i).style.display = "initial" ;
                        boolTemp++;
                    }

                    //if ( !( alphaNumeric.test( document.getElementById('affiliationEditor'+i).value )) )
					if ( jQuery.trim( document.getElementById('affiliationEditor'+i).value ) == '' )	//-- checks whether the Affiliation is empty or not.
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
                    //xobj.open('GET', 'json/countries.json', true); // Replace 'my_data' with the path to your file
					xobj.open('GET', 'https://restcountries.eu/rest/v2/all?fields=name', true); 
					
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
                          $('select').formSelect();
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
                $('select').formSelect();
          }

    //-------------------------------------------------------------------------------------------


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
                         $('select').formSelect();
                 });
        }

    //-------------------------------------------------------------------------------------------
    //-SELECT FOR LANGUAGES-----------------------------------------------------------------------

        function selectForLanguage( )
        {
                var $selectDropdown = $('#language').empty().html(' ');
                console.log(languagesArray);
                for ( var i=0 ; i < languagesArray.length ; i++ )
                {
                //document.getElementById('ses').appendChild("<option value='option"+i+"'>"+sessionsArray[i]+"</option>");

                        var value = languagesArray[i].code ;

                        $selectDropdown.append($("<option></option>").attr("value",value).text(languagesArray[i].name));
                        $selectDropdown.trigger('contentChanged');

                }


                // re-initialize (update)
                $('select').formSelect();
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

	
	<!--<script src="js/tableofcontents_page.js"></script>-->
  </body>
</html>
