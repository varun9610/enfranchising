<?php
// create database

$email = $_POST['uname'];
// echo "UserName is-------->,$email"

$servername = "localhost";
$username = "root";
$password = "";
$dbname="E-Franchise";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "<h2>Connected successfully</h2>";

if ($result = mysqli_query($conn, "SELECT * FROM Users where Email='$email'")) 
{
  // echo "Returned rows are: " . mysqli_num_rows($result);

  $count = mysqli_num_rows($result);
  print("Number of rows in the result: ".$count);
  if($count > 0)
  {
    echo"<script type='text/javascript'>alert('Login Successfully');window.location.href='Home.html';</script>";
  }
  else
  {
    // ********   insert data   **********
    echo"<script type='text/javascript'>alert('This email does not exist. Please register');window.location.href='Home.html';</script>";

  }
}
  
mysqli_close($conn);


?>