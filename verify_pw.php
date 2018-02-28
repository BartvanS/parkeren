<?php
include './connect_db.php';
$iduser = $_GET["id"]; 
$password1 = $_POST['password1'];
$password2 = $_POST['password2'];
        if($password1 == $password2){
                // $sql = "UPDATE `users` (`password`,
                //                               `id`)
                //       VALUES              ('".$password1."',
                //                         '1')";
            $sql =  "UPDATE `parkerenn`.`users` SET `password`='".$password1."', `role`='2' WHERE `id`=''";

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
