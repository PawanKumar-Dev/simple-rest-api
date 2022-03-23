<?php

$conn = mysqli_connect('localhost', 'root', '', 'students');

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}


?>