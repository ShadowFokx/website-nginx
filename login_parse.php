<?php

session_start();
include_once("connect.php");
if  (isset($_POST['username'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];
  $sql =  "SELECT * FROM users WHERE username='".$username."' AND password='".$password."' LIMIT 1";
  $res =  mysqli_query($sql) or die(mysqli_error());
  if  (mysqli_num_rows($res) == 1) {
    $row = mysqli_fetch_assoc($res);
    $_SESSION['uid'] = $row['id'];
    $_SESSION['username'] = $row['username'];
    header("Location: index.php");
    exit();
  } else  {
    echo  "Invalid login information";
  }

}

?>