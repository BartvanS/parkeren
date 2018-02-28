<?php

  include('./connect_db.php');
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
          <center>
            <a href="./info.php" class="btn btn-primary buttons" style="background-color: white; color: black;">Info</a><br/>


          </center>
      </div>

      <div class="col-md-8" id="rightbar">
          <form class="login" action="login.php" method="post">
              <p>E-mail</p>
              <input type="text" name="email" value="e-mail">
              <p>Password</p>
              <input type="password" name="password" value="password">
              <input type="submit" name="" value="Inloggen">
          </form>
      </div>
      </div>

  </div>
  </div>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

  </body>
</html>
