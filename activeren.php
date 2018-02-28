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
          <center>
              <form class="" action="" method="post">
                  <h1>Vul hier uw wachtwoord in</h1>
                  <input type="password" name="password1" value="password">
                  <input type="password" name="password2" value="password">
                  <input type="submit" name="" value="Submit">
              </form>
          </center>
      </div>
      </div>

  </div>
  </div>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

  </body>
</html>
<?php
include './connect_db.php';
if (ISSET($_POST)){
$iduser = $_GET["id"];
$password1 = $_POST['password1'];
$password2 = $_POST['password2'];
$password1aes = base64_encode ($password1);
$password2aes = base64_encode ($password2);
        if($password1 == $password2){
                // $sql = "UPDATE `users` (`password`,
                //                               `id`)
                //       VALUES              ('".$password1."',
                //                         '1')";
            $sql =  "UPDATE `parkerenn`.`users` SET `password`='".$password1."', `role`='2' WHERE `id`='".$iduser."'";

                //echo $sql;
                $result = mysqli_query($conn, $sql);

                // We vragen het id op van het pas gemaakte record uit de database. Het veld id is autonummering
                $id = mysqli_insert_id($conn);
              //}
              if (mysqli_query($conn, $sql)) {
              echo "New record created successfully";
              } else {
              echo "Error: " . $sql . "<br>" . mysqli_error($conn);
              }
            }
else{
  echo "Passwords komen niet overeen";
}
}
