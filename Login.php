<?php session_start();  ?>
<!DOCTYPE html>
<html>
  <head>
    <title> 
      Login
    </title>
    <link rel="icon" href="images/icon.png">
    <link rel="stylesheet" href="css/Login.css">
    <link rel="stylesheet" href="css/nav.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
  </head>
  <body>
  <div id="nav">
    <div class="nav">
        <ul>
          <li id="nav-logo">
            <a href="/">
              <img src="images/DinoLinux.png" id="nav-logo">
            </a>
          </li>
          <li id="Login">
            <a class="topbar-text" href="Login.php">Login</a>
          </li>
          <li id="Download">
            <a class="topbar-text" href="Download.php">Download</a>
          </li>          
          <li id="Github">
            <a class="topbar-text" href="https://www.Github.com/shadowfokx">Github</a>
          </li>          
          <li id="Wiki">
            <a class="topbar-text" href="wiki.php">Wiki</a>
          </li>
          <li id="Forums">
            <a class="topbar-text" href="forums.php">Forums</a>
          </li>          
          <li id="Home">
            <a class="topbar-text" href="/">Home</a>
          </li>     
        </ul>
      </div>  
  </div>
    <div class="login" >

    <?php
      
      //checks if you have a sesion running and if not it serves you a login page
      if  (!isset($_SESSION['uid']))  {
        echo  "<form action='login_parse.php' method='post'>
        <p class='login-text'>Login</p>
        <p class='get-acces'>Login here to get acces to our great Forum page!</p>
        <input class='email-input' type='email' name='email' placeholder='Email'>
        <input class='password-input' type='password' name='password' placeholder='Password'>
        <input class='login-button' type='submit' name='submit' value='Log In'>
        <a type='button' class='register' href='Register.php'>Or do you want to register a new account?</a>
        ";
      }   
   
      //the login page I explained earlier
      else{
        echo  "<p>You are logged in as ".$_SESSION['username']." &bull; <a href='logout_parse.php'>Logout</a>";
      }
    ?>

    </div>
  </body>
</html>

