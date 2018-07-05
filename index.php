<?php
 include 'header.html';
?>

<div id="main">
    <form>
<input type="text" size="30" onkeyup="showResult(this.value)" placeholder="Search">
<div id="livesearch"></div>
</form>
    <p class="mid" id="demo">Download Latest hollyood and Bollywood Movies Here..</p>
</div>
<div id="content">
    <h1 class="text" id="tex3">Get The latest movies here</h1>
</div>
<div class="container-fluid">
   
      <div class="row">
     
      <div class="col-md-3">
         <div class="col1"></div>
      </div>
      <div class="col-md-6">
         <div class="col2">
           
         </div>
      </div>
      <div class="col-md-3">
         <div class="col3"></div>
      </div>
        </div>
     
      <div class="row">
      <div class="col-md-3">
         <div class="col4"></div>
      </div>
      <div class="col-md-3">
         <div class="col5"></div>
      </div>
      <div class="col-md-3">
         <div class="col6"></div>
      </div>
        <div class="col-md-3">
         <div class="col7"></div>
      </div>
     
   
      </div>
       
    </div>
<div id="this">
<form method="post" action="push.php">
  <div class="container">
    <h2>If your movie is not here tell us we will make it here for you soon.</h2>
  </div>

  <div class="container" style="background-color:white">
    <input type="text" placeholder="Movie Name.." name="movie" required>
    <input type="email" placeholder="Email address" name="email" required>
  
      <input type="submit" value="Submit">
    </div>
    <div class="container">
        
    </div>
</form>
</div>
<br><br><br><br><br>
<script src="scripts/main.js"></script>
<noscript>
    <h1>This WEBSITE cannot work without javascript</h1>
</noscript>
<?php
include 'footer.html';
?>