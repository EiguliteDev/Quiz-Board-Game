<?php
  $servername = "sql102.infinityfree.com";
  $username = "if0_38216348";
  $password = "IJDuJzhk1AQhTy";
  $dbname = "if0_38216348_database";

  $conn = mysqli_connect($servername, $username, $password, $dbname);

  if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }

  $code = $_POST["code"];

  $sql = "SELECT * FROM sessions WHERE $code";

  if ($conn->query($sql) === TRUE) {
    echo "Joined successfully";
  }

  header("Location: quizboardgame.fwh.is");
  die();
?>
