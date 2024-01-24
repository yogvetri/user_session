<?php




$servername = "localhost";
$dbusername = "vetrivel";
$dbpassword = "V3t6t!v3!";
$dbname= "login";

// Create connection
$conn = new mysqli($servername, $dbusername, $dbpassword, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}else{
echo "Connected successfully";
}

class User {


  public function signup($username, $email, $password)
  {
    if(isset($username) && isset($email) && isset($password))
    {
      $sql="INSERT INTO `auth` (`id`, `username`, `email`, `password`, `active`) VALUES (NULL, '$username', '$email', '$password', '1');";
    }
  }
}

?>

