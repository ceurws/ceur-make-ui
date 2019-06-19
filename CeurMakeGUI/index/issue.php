<?php
	include_once '_inc/common.php';
	
	$page_title = 'Ceur Make';
	
	include_once '_inc/header.php';
?>
  <div class="section no-pad-bot" id="index-banner">
    <div class="container">
      <br><br>
      <h1 class="header center blue-grey-text">Scientific Proceedings With Ceur Make (SPCM)</h1>
      <div class="row center">
        <h5 class="header col s12 light">CEUR MAKE WEB INTERFACE</h5>
      </div>
    </div>
  </div>
  
  <div class="container">
    <div class="section">
        <table class="table">
          <thead>
            <tr>
              <th>Name</th>
              <th>Title</th>
              <th>Detail</th>
            </tr>
          </thead>
          <tbody id="addIssue">
            <tr>
              <td>Rohan</td>
              <td>Date Format is not clear</td>
              <td>Date should be in dd/mm/yyyy format which is a standard rather than yyyy/mm/dd.</td>
            </tr>
            <tr>
              <td>Jhon</td>
              <td>Accept files from other vendors like easy char.</td>
              <td>Proceeding resources must be also accepted from the other vendors such as axy and llc.</td>
            </tr>
            <tr>
              <td>Austin</td>
              <td>Improve the xml formatting.</td>
              <td>Xml files should be more fancy visually.</td>
            </tr>
          </tbody>
        </table>
    </div>
    <div class="section">
      <h4>Report an Issue</h4>
      <div class="row">
        <div class="input-field col s12">
          <input id="nameEditor0" type="text" class="validate">
          <label for="nameEditor0">Enter Your Name</label>
          <span id="nameEditorError0" class="error" style="display:none">Please enter alphabets or numbers only.</span>
        </div>
        <div class="input-field col s12">
          <input id="titleEditor0" type="text" class="validate">
          <label for="titleEditor0">Enter Issue Title</label>
          <span id="titleEditorError0" class="error" style="display:none">Please enter alphabets or numbers only.</span>
        </div>
        <div class="input-field col s12">
          <input id="detailEditor0" type="text" class="validate">
          <label for="detailEditor0">Enter Detail Related To The Issue</label>
          <span id="detailEditorError0" class="error" style="display:none">Please enter alphabets or numbers only.</span>
        </div>
        <div class="col s12">
          <br/>
          <br/>
          <button class="btn waves-effect waves-light col s12" type="submit" name="action" onclick="sendIssue();">Submit
            <i class="material-icons right">send</i>
          </button>
        </div>
      </div>
    </div>
  </div>
  
	<!-- Footer -->
	<?php include_once '_inc/footer.php'; ?>
	<!-- /Footer -->
	
  <script>
    var alphaNumeric = new RegExp(/^[a-z\d\-_\s]+$/i);
    
    function sendIssue( )
    { 
      var temp = 0 ;
     
      if( !(alphaNumeric.test(document.getElementById('nameEditor0').value )) )
      {
        document.getElementById('nameEditorError0').style.display = "initial" ;
        temp++;
      }else
        document.getElementById('nameEditorError0').style.display = "none" ;
      
      if( !(alphaNumeric.test(document.getElementById('titleEditor0').value )) )
      {
        document.getElementById('titleEditorError0').style.display = "initial" ;
        temp++;
      }else
        document.getElementById('titleEditorError0').style.display = "none" ; 
      
      if( !(alphaNumeric.test(document.getElementById('detailEditor0').value )) )
      {
        document.getElementById('detailEditorError0').style.display = "initial" ;
        temp++;
      }else
        document.getElementById('detailEditorError0').style.display = "none" ;
      
      if( temp === 0 )
      {
          sendFormOneData = 
          {
              name: document.getElementById('nameEditor0').value  ,
              issueTitle: document.getElementById('titleEditor0').value,
              issueDetail: document.getElementById('detailEditor0').value,
          } ;
        
          var data = JSON.stringify(sendFormOneData);
          var xhr = new XMLHttpRequest();
          xhr.open("POST", "scripts/index.php", !0);
          xhr.setRequestHeader("Content-Type", "application/json;charset=UTF-8");
          xhr.send(data);
          xhr.onreadystatechange = function () {
            if (xhr.readyState === 4 && xhr.status === 200) 
            {
                jsondata = xhr.responseText;
                console.log(jsondata);
                M.toast({html:'Your Issue has been posted.', displayLength: 4000, classes: 'rounded'}) // 'rounded' is the 
                afterIssueCreation( );
            }
        }
        
      }else
      {
        temp = 0 ;  
      }
      
    }
    
    function afterIssueCreation( )
    {
      var newTr = document.createElement('tr');
      newTr.innerHTML="<td>"+(document.getElementById('nameEditor0').value )+"</td><td>"+(document.getElementById('titleEditor0').value)+"</td><td>"+(document.getElementById('detailEditor0').value)+"</td>" ;
      document.getElementById('addIssue').appendChild(newTr) ;
      
    }
    
  </script>

  </body>
</html>
