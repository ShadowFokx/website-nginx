<?php



// Makes $con do this 'mysqli_connect("localhost","root","101023Mb!","forum");'
$con=mysqli_connect("localhost","root","inert_passwd","forum");

// Selects forum as our database
mysqli_select_db($con, "forum");
?>