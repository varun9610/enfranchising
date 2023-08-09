<?php
$firstname = $_POST['firstname'];
$email = $_POST['email'];
$passwrd = $_POST['Password'];

// create database
$servername = "localhost";
$username = "root";
$password = "";
$dbname="E-Franchise";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
  exit;
}
echo "<h2>Connected successfully</h2>";

if ($result = mysqli_query($conn, "SELECT * FROM Users where Email='$email'")) {
  // echo "Returned rows are: " . mysqli_num_rows($result);

  $count = mysqli_num_rows($result);
  // print("Number of rows in the result: ".$count);
  if($count > 0)
  {
    // echo '<script>alert("This email is already registered")</script>';

    echo"<script type='text/javascript'>alert('This email is already registered');window.location.href='Home.html';</script>";

    // echo "<a href=\"javascript:history.go(-1)\">GO BACK</a>";

  }
  else
  {
    // ********   insert data   **********
      $sql = "INSERT INTO Users (FirstName,Email,UserPass) VALUES ('$firstname','$email','$passwrd')";

        echo $sql;

      if (mysqli_query($conn, $sql)) {
        //  echo "<h2>New record created successfully</h2>";
         echo"<script type='text/javascript'>alert('New record created successfully');window.location.href='Home.html';</script>";

          exit;
          } else {
         echo "Error: " . $sql . "<br>" . mysqli_error($conn);
          }
}
  

  mysqli_free_result($result);
  // if mysqli_num_rows($result) >0
  // echo "Number"
}





mysqli_close($conn);





?>
