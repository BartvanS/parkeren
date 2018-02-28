<?php
  include('./connect_db.php');
$sql = "SELECT * FROM `users` WHERE `email` = '".$_POST["email"]."'";
$idquery = "SELECT id from `users`";

      //echo $sql; exit();
      $tempPassword = "temp";
      $result = mysqli_query($conn, $sql);

      function randomGen($min, $max, $quantity) {
        //mysqli_query($conn, $idquery);

          $numbers = range($min, $max);
          shuffle($numbers);
          return array_slice($numbers, 0, $quantity);
      }
      randomGen(0, 100000, 1);
      // if ( mysqli_num_rows($result) == 0){
            $sql = "INSERT INTO `users` (`id`,
                                    `email`,
                                    `achternaam`,
                                    `password`,
                                    `role`)
                  VALUES              ('1000',
                                    '".$_POST["email"]."',
                                    '".$_POST["lastname"]."',
                                    '".$tempPassword."',
                                    '1')";
            //echo $sql;
            $result = mysqli_query($conn, $sql);

            // We vragen het id op van het pas gemaakte record uit de database. Het veld id is autonummering
            $id = mysqli_insert_id($conn);
//}
if (mysqli_query($conn, $sql)) {


} else {
  //  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
echo '
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
          <h1>U bent aangemaakt, u ontvangt een bevestigings-email</h1>
        </div>
        </div>

    </div>
    </div>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <script type="text/javascript">

  </script>
    </body>
  </html>';
$to =   "bartvansevenbergen@hotmail.com";   // $_POST["email"];
            $subject = "Activatielink voor inloggen";
            $message = "<!DOCTYPE html>
                        <html>
                              <head>
                                    <title>Registratie</title>
                                    <style>
                                       body
                                       {
                                          color: green;

                                       }
                                       a
                                       {
                                          color: blue;
                                          font-size: 3em;
                                       }
                                    </style>
                              </head>
                              <body>
                                  <p>Geachte mevrouw/heer ".$_POST["lastname"]."</p>".
                                  "Bedankt voor het registreren. Om het registratieproces<br>".
                                  "te voltooien moet u op de onderstaande link klikken<br>".
                                  // "<a href='http://localhost/odijk/project/activeren.php?id=".$id."&pw=".$tempPassword."'>registratielink</a> <br>".
                                  "<a href='http://localhost/odijk/project/activeren.php?id=7&pw=".$tempPassword."'>registratielink</a> <br>".
                                  "<p>Met vriendelijke groet,</p>".
                                  "Administrator
                              </body>
                        </html>";

            $headers = "Content-Type: text/html; charset=UTF-8"."\r\n";
            $headers .= "Cc: admin@gmail.com, root@gmail.com"."\r\n";
            $headers .= "Bcc: belastingdienst@gmail.com"."\r\n";
            $headers .= "From: admin@gmail.com";
            mail($to, $subject, $message, $headers);

            header("Refresh:5; url=./index.php");
