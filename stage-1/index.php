<?php
  $servername = "localhost:3306";
  $username = "johnotu";
  $password = "xterm17";

  $conn = new mysqli($servername, $username, $password);

  if ($conn -> connect_error) {
    die("Connection failed: " . $conn -> connect_error);
  }
  echo "Connected successfuly";

  $sql = "SELECT id, name, length FROM oku";
  $result = $conn -> query($sql);

  echo $result;

  $conn -> close();
?>