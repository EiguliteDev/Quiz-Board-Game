<?php
  $servername = "sql102.infinityfree.com";
  $username = "if0_38216348";
  $password = "IJDuJzhk1AQhTy";
  $dbname = "if0_38216348_database";

  $conn = mysqli_connect($servername, $username, $password, $dbname);

  if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }

  $newcode = rand(1000, 9999);

  $sql = "INSERT INTO sessions (code) VALUES ($newcode)";

  if ($conn->query($sql) === TRUE) {
    echo "successfully created: " . $newcode;
  }

  header("Location: quizboardgame.fwh.is");
  die();
?>
