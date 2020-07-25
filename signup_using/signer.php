<?php
include 'databd.php';
session_start();
?>
<!DOCTYPE html>
<html>

<head>
      <title>Signer</title>
</head>

<body>
      <h1>Merci de d'avoir signer! à bientôt </h1>
      <br>
      <p><a href="index.php">OK</a></p>

      <?php


      $email = $_SESSION["email"];
      $dup = mysqli_query($conn, "select id from connexion where email = '$email'");
      $row = mysqli_fetch_assoc($dup);
      $id = $row["id"];

      $insertion = "INSERT INTO crud (iduser) VALUES('$id')";
      mysqli_query($conn, $insertion);

      mysqli_close($conn);


      ?>
</body>

</html>