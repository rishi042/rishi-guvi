<html>
<body>
<?php

    extract($_POST)
?>
<h1> Welcome <?php echo $_POST["username"]; ?> </h1><br/>

<?php
   $servername = "localhost";
   $uname = "root";
   $pass= "";
   $dbname = "guvi";

   // Create connection
$conn = new mysqli($servername, $uname, $pass, $dbname);
// Check connection
if ($conn->connect_error) {  die("Connection failed: " . $conn->connect_error);
}

$stmt = $conn->prepare("INSERT INTO userprofile (username,email,passw) VALUES (?, ?, ?)");
$stmt->bind_param("sss", $username, $email, $password);

$stmt->execute();

  echo "<h1 style=\"color:green\";> Sigup is sucessful </h1>";
  echo "<h2> Click <a href=\"http://localhost/KT/login.html\">here</a> to Sign in </h2>";
$stmt->close();
$conn->close();
   
?>
 


</body>
</html>