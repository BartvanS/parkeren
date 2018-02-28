<?php
session_start();
  include('./connect_db.php');
//$_SESSION['typeofuser'] = "1";
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>home</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="index.css">
  </head>
  <body>
    <div class="alles">

  <div class="containerme">
    <div class="row">


      <div class="col-md-12" id="topbar">
          <br>
          <center>
              <h1>Lelystad Airport Parkeer</h1>
          </center>
      </div>
      </div>
      <div class="row">

      <div class="col-md-4" id="leftbar">
    <?php
    if(ISSET($_SESSION['typeofuser'])){
     if(isset($_SESSION['typeofuser'])){
      if($_SESSION['typeofuser'] == "2"){ ?>

                    <a href="./?content=reserveren" class="btn btn-primary buttons" style="background-color: white; color: black;">Reserveren van parking plaatsen</a><br/>
                    <a href="./?content=betalen" class="btn btn-primary" style="background-color: white; color: black;">Betalen</a><br />
                    <a href="./?content=info" class="btn btn-primary" style="background-color: white; color: black;">Info</a><br />
                    <a href="./?content=logout" class="btn btn-primary" style="background-color: white; color: black;">logout</a>
    <?php  }elseif($_SESSION['typeofuser'] == '1'){?>

                  <a href="./?content=reserveren" class="btn btn-primary buttons" style="background-color: white; color: black;">Reserveren van parking plaatsen</a><br/>
                  <a href="./?content=betalen" class="btn btn-primary" style="background-color: white; color: black;">Betalen</a><br />
                  <a href="./?content=info" class="btn btn-primary" style="background-color: white; color: black;">Info</a>


 <?php }else{ ?>
   <center>
     <a href="?content=registreren" class="btn btn-primary buttons" style="background-color: white; color: black;">registreren</a><br/>
     <a href="?content=inloggen" class="btn btn-primary" style="background-color: white; color: black;">inloggen</a><br />
     <a href="?content=info" class="btn btn-primary" style="background-color: white; color: black;">contact</a>
   </center>
   <?php
 }
   }
 }else{
   ?>
     <center>
       <a href="?content=registreren" class="btn btn-primary buttons" style="background-color: white; color: black;">registreren</a><br/>
       <a href="?content=inloggen" class="btn btn-primary" style="background-color: white; color: black;">inloggen</a><br />
       <a href="?content=info" class="btn btn-primary" style="background-color: white; color: black;">contact</a>
     </center>
     <?php
 }
  ?>

      </div>

      <div class="col-md-8" id="rightbar">
        <?php
        if(isset($_SESSION['role'])){
            if($_SESSION['role'] != "1"){
                //echo 'U are granted level of supreme normie';
                $_SESSION['role'] = "";
            }else
           // var_dump($_SESSION);
            if($_SESSION['role'] == "1"){
                // echo ' ey man je bent super cool';
            }elseif($_SESSION['role'] == ''){
        }
        }
            if (isset($_GET["content"]))
            {

                $_SESSION['content']=$_GET['content'];
                include($_GET["content"].".php");
                // echo $_SESSION['content'].'test';

            }
            else {
                include("start.php");
                //echo 'Welkom op de homepagina';
            }

        ?>
      </div>
      </div>

  </div>
  </div>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
