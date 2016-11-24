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
        <div class="row" id="uniquename">
            <div class="col s6">
              <div class="card grey lighten-3">
              <div class="card-content black-text">
              <span class="card-title"><a class="btn-floating btn-small waves-effect waves-light green disabled" onClick="removeInput('dynamicInput');"><i class="material-icons">edit</i></a>
                      <a class="btn-floating btn-small waves-effect waves-light green disabled" onClick="removeInput('dynamicInput');"><i class="material-icons">check</i></a>  Create Table Of Contents </span>
                      <div class="divider"></div>
                      <br/>
              <p>I am a very simple card. I am good at containing small bits of information.
              I am convenient because I require little markup to use effectively.</p>
              </div>
              <div class="card-action">
                      <a class="waves-effect waves-light btn " href="javascript:HideContent('uniquename')">Generate</a>
                      <a class="waves-effect waves-light btn disabled" href="javascript:HideContent('uniquename')">Download</a>
              </div>
              </div>
            </div>
            <div class="col s6">
              <div class="card grey lighten-3">
              <div class="card-content black-text">
              <span class="card-title"><a class="btn-floating btn-small waves-effect waves-light green disabled" onClick="removeInput('dynamicInput');"><i class="material-icons">edit</i></a>
                      <a class="btn-floating btn-small waves-effect waves-light green disabled" onClick="removeInput('dynamicInput');"><i class="material-icons">check</i></a>  Create Workshop</span>
                      <div class="divider"></div>
                      <br/>
              <p>I am a very simple card. I am good at containing small bits of information.
              I am convenient because I require little markup to use effectively.</p>
              </div>
              <div class="card-action">
                      <a class="waves-effect waves-light btn " href="javascript:HideContent('uniquename')">Generate</a>
                      <a class="waves-effect waves-light btn disabled" href="javascript:HideContent('uniquename')">Download</a>
              </div>
              </div>
            </div>
        </div>
        <div class="row" id="uniquename2">
            <div class="col s6">
              <div class="card grey lighten-3">
              <div class="card-content black-text">
              <span class="card-title">Card Title</span>
              <p>I am a very simple card. I am good at containing small bits of information.
              I am convenient because I require little markup to use effectively.</p>
              </div>
              <div class="card-action">
                <a href="#">This is a link</a>
                <a href="#">This is a link</a>
              </div>
              </div>
            </div>
            <div class="col s6">
              <div class="card grey lighten-3">
              <div class="card-content black-text">
              <span class="card-title">Card Title</span>
              <p>I am a very simple card. I am good at containing small bits of information.
              I am convenient because I require little markup to use effectively.</p>
              </div>
              <div class="card-action">
                <a href="#">This is a link</a>
                <a href="#">This is a link</a>
              </div>
              </div>
            </div>
         </div>
         <div class="row" id="uniquename3">
            <div class="col s6">
              <div class="card grey lighten-3">
              <div class="card-content black-text">
              <span class="card-title">Card Title</span>
              <p>I am a very simple card. I am good at containing small bits of information.
              I am convenient because I require little markup to use effectively.</p>
              </div>
              <div class="card-action">
                <a href="#">This is a link</a>
                <a href="#">This is a link</a>
              </div>
              </div>
            </div>
            <div class="col s6">
              <div class="card grey lighten-3">
              <div class="card-content white-text">
              <span class="card-title">Card Title</span>
              <p>I am a very simple card. I am good at containing small bits of information.
              I am convenient because I require little markup to use effectively.</p>
              </div>
              <div class="card-action">
                <a href="#">This is a link</a>
                <a href="#">This is a link</a>
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
                                                <input id="Session0" type="text" class="validate">
                                                <label for="Session0">Session0</label>
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
                                                                <input id="paperTitle0" type="text" class="validate">
                                                                <label for="paperTitle0">Paper Title </label>
                                                             </div>  
                                                             <div class="input-field col s1">
                                                             <h6>Page Number</h6>
                                                             </div>
                                                             <div class="input-field col s2">
                                                                <input id="paperFrom0" type="text" class="validate">
                                                                <label for="paperFrom0">From</label>
                                                             </div>
                                                             <div class="input-field col s2">
                                                                <input id="paperTo0" type="text" class="validate">
                                                                <label for="paperTo0">To</label>
                                                             </div>  
                                                             </div>
                                                             <fieldset>
                                                                <legend>Authors of the Paper <span>   <a class="btn-floating btn-small waves-effect waves-light green" onClick="addAuthor('authors0');"><i class="material-icons">add</i></a> <a class="btn-floating btn-small waves-effect waves-light red" onClick="removeAuthor('authors0');"><i class="material-icons">remove</i></a></span></legend>
                                                                <div class="input-field col s7" id="authors0" >
                                                                <input id="0author0" type="text" class="validate">
                                                                <label for="0author0">Author 0</label>
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

            
<a href="javascript:HideContent('uniquename')">
Click to hide.
</a>
        <div id="modal1" class="modal">
    <div class="modal-content">
      <h4>Modal Header</h4>
        
    </div>
    <div class="modal-footer">
      <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">Agree</a>
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
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>
  <script src="./jquery/jquery.steps.min.js"></script>
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
      //----------------------------------
    
   //Variables from Workshop.XML
   //----------------------------------
          
          
  //-----------------------------------
          
//Functions:
         
          //Initializers
          
                $(document).ready(function() {
                  
                    $('.modal-trigger').leanModal();
                    document.getElementById('uniquename2').style.display = "none";
                    document.getElementById('uniquename3').style.display = "none";
                    document.getElementById('tocForm').style.display ="none";

                });
          
          //-----------------------------------------------------------------------------------------
          
    //Div Display Functions
          
        function HideContent(d) {
        
        document.getElementById(d).style.display = "none";
        document.getElementById('tocForm').style.display ="initial";

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
                $('select').material_select();
        }
          
    //----------------------------------------------------------------------------------------------
 

          
   //Form Table Of Contents:
          
          //Initializers
          
                $(document).ready(function() {
                  
                    $('select').material_select();

                });
          
          //-----------------------------------------------------------------------------------------
          //Basic Functions
                $("#wizard").steps({

            
            onStepChanged: function (event, currentIndex, priorIndex)
            {
                
                        if (currentIndex === 1 && priorIndex === 0)
                        {
                            //get element values of all the sesions in order to be displayed 
                            // to select element in the next step of the form
                                for ( i = 0 ; i < counter+1  ; i++)
                                {
                                        sessionsArray.push (document.getElementById('Session'+i).value );
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
                                        $('select').material_select();
       
                               
                        }
                    

            },
        
           onFinished: function (event, currentIndex)
           {
                   var e = document.getElementById("ses0");
                   var strUser = e.options[e.selectedIndex].text;
                   console.log(strUser) ;
                   
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
                           
                           var titlePaper = document.getElementById('paperTitle' + i ).value ;
                           var pages = document.getElementById('paperFrom' + i).value + " - " + document.getElementById('paperTo' + i).value ;
                           var sessionName = document.getElementById("ses"+ i);
                           var strSessionName = sessionName.options[sessionName.selectedIndex].text;
                           
                           tempPaperArray.push({
                                   
                                   sessionName: strSessionName, 
                                   title: titlePaper,
                                   pages: pages,
                                   authors: tempAuthorsArray
                           }
                           )
                           
                           copyArray.push({
                                    
                                   title: titlePaper,
                                   pages: pages,
                                   authors: tempAuthorsArray
                           }
                           )
                           
                   }
                
                   for ( i = 0 ; i < sessionsArray.length  ; i++ )
                   {
                        var tempCopier = [ ] ;
                           
                        for ( j = 0 ; j < tempPaperArray.length; j++  )
                        {
                                   if( sessionsArray[i] === tempPaperArray[j].sessionName )
                                   {
                                         tempCopier.push(copyArray[j]); 
                                         sessions.push({
                                                title: sessionsArray[i],
                                                paper: tempCopier
                                        })
                                   }
                        }
                           
                        
                   }
                   
                   sendFormOneData = {
                           title: "User X",
                           sessions: sessions
                   }
                   
                var data = JSON.stringify(sendFormOneData);
                var xhr = new XMLHttpRequest();
                xhr.open("POST", "create.php", !0);
                xhr.setRequestHeader("Content-Type", "application/json;charset=UTF-8");
                xhr.send(data);
                xhr.onreadystatechange = function () {
                if (xhr.readyState === 4 && xhr.status === 200) {
                        // in case we reply back from server
                        jsondata = JSON.parse(xhr.responseText);
                        console.log(jsondata);
                        }
                }
                           console.log(sessions) ;

           }
                        
          

            });
          
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
                          newdiv.innerHTML = "<input type='text' class='validate' id='Session" +(counter+1)+ "'><label for='Session"+(counter+1) + "'>Session"+(counter+1) +"</label>";
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
                          newdiv.innerHTML = "<fieldset><legend>Paper"+(counterPaper+1)+"</legend><div class='input-field col s12'><select id='ses"+(counterPaper+1) +"'><option value='1'>Option 1</option></select><label>Session *(optional)</label></div><div class='row'><div class='input-field col s7'><input id='paperTitle"+(counterPaper+1)+"' type='text' class='validate'><label for='paperTitle"+(counterPaper+1)+"'>Paper Title </label></div><div class='input-field col s1'><h6>Page Number</h6></div><div class='input-field col s2'><input id='paperFrom"+(counterPaper+1)+"' type='text' class='validate'><label for='paperFrom"+(counterPaper+1)+"'>From</label></div><div class='input-field col s2'><input id='paperTo"+(counterPaper+1)+"' type='text' class='validate'><label for='paperTo"+(counterPaper+1)+"'>To</label></div></div><fieldset><legend>Authors of the Paper <span><a class='btn-floating btn-small waves-effect waves-light green' onClick='addAuthor(&quot;authors"+(counterPaper + 1)+"&quot;);'><i class='material-icons'>add</i></a></span><a class='btn-floating btn-small waves-effect waves-light red' onClick='removeAuthor(&quot;authors"+(counterPaper + 1)+"&quot;);'><i class='material-icons'>remove</i></a></legend><div class='input-field col s7' id='authors"+(counterPaper + 1)+"' ><input id='"+(counterPaper+1)+"author"+authorArray[counterPaper+1]+"' type='text' class='validate'><label for='"+(counterPaper+1)+"author"+authorArray[counterPaper+1]+"'>Author "+authorArray[counterPaper+1]+"</label></div></fieldset><br/></fieldset><br/>";
                         
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
                newdiv.innerHTML = "<input id='"+positionOfPapersDiv+"author"+(authorArray[positionOfPapersDiv] + 1)+"' type='text' class='validate'><label for='"+positionOfPapersDiv+"author"+(authorArray[positionOfPapersDiv] + 1)+"'>Author "+(authorArray[positionOfPapersDiv] + 1)+"</label>";
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


  </script>

  </body>
</html>
