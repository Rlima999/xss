<!DOCTYPE html>
<html>
    <header>
      <link rel="stylesheet" href="google.css">
      <script src="/font.css.js"></script>
        <ul>
         <li><a class="links" href="#user"><button class="signbutton" type="button">Sign in</button></a></li>
           <li><a href="#grid"><img class="grid" src="https://cdn3.iconfinder.com/data/icons/navigation-and-settings/24/Material_icons-01-11-512.png" title="Google apps"></a></li>
          <li><a href="#images">Images</a></li>
          <li><a href="#gmail">Gmail</a></li>
          </ul>
    </header>
 <body>
  <center>
    <div class="logo">
      <img alt="Google" src="/google.jpg">
    
    </div>
    <div class="bar" style="display: flex; height: 50px;">                                                                                        <form action="" method="GET" id="query">                                                                                                      &nbsp;&nbsp;
        <table style="width:100%; margin-top: -18px">
	  <th style="width: 40px;"><img src="/lente.png" style="padding-top: 7px;" ></th>
          <th style="width: 475px;" align=left><input size="70" type="text" id="query" name="query" value="Enter query here..." onfocus="this.value=''" style="border-width: 0; padding-top: 7px;"></th>
          <th><input type="image" value="submit" border="0" src="https://upload.wikimedia.org/wikipedia/commons/thumb/e/e8/Google_mic.svg/716px-Google_mic.svg.png" alt="Search by Voice" width="10" style="float: right; padding-top: 0px;"></th>
          <!--<th><input type="submit" value="submit"><a href="#"><img class="voice" src="https://upload.wikimedia.org/wikipedia/commons/thumb/e/e8/Google_mic.svg/716px-Google_mic.svg.png" title="Search by Voice" style="float: right; padding-top: 0px;"></a></th>-->
         </table>

      </form>

    </div>

<?php
 header('X-XSS-Protection: 0');
  header('X-Frame-Options: deny');
   header('X-Content-Type-Options: nosniff');
   header('Content-Type: text/html; charset=UTF-8');

  if(!isset($_GET['query'])){
         if(empty($_GET)){
               die();
          }
         die('stop haking me!!!');
  }
  else{
	  if(($_GET['query'] != "Enter query here...") and ($_GET['query'] != "")){
	           die ('<br><br>Results not found for: '.$_GET['query'].'.');
          }
    }
?>

  </body>
 </html>
