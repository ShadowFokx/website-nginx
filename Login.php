<!DOCTYPE html>
<html>
  <head>
    <title> 
      Login
    </title>
    <link rel="stylesheet" href="css/Login.css">
    <link rel="stylesheet" href="css/nav.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
  </head>
  <body>
    <div class="nav">
      <div id="nav-item">
        <ul>
          <li id="nav-logo">
            <a href="/">
              <img src="images/DinoLinux.png" id="nav-logo">
            </a>
          </li>
          <li id="Login">
            <a href="Login.php">Login</a>
          </li>
          <li id="Download">
            <a href="Download.php">Download</a>
          </li>          
          <li id="Github">
            <a href="https://www.Github.com/shadowfokx">Github</a>
          </li>          
          <li id="Wiki">
            <a href="wiki.php">Wiki</a>
          </li>
          <li id="Forums">
            <a href="forums.php">Forums</a>
          </li>          
          <li id="Home">
            <a href="/">Home</a>
          </li>          
        </ul>
      </div>
    </div>
    <div class="login" >
      <p class="login-text">Login</p>
      <p class="get-acces">Login here to get acces to our great Forum page!</p>
      <input class="email-input" type="email" name="email" placeholder="Email">
      <input class="password-input" type="password" name="password" placeholder="Password">
      <button class="login-button">Login</button>
      <a type="button" class="register" href="Register.php">Or do you want to register a new account?</a>
    </div>
  </body>
</html>