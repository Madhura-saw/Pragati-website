<!DOCTYPE html>
<html>
<body background="image/bg.jpg">
<?php
$servername = "localhost";
$email = "admin";
$password = "pass@123";
$dbname = "admin";
// Create connection
$conn = new mysqli($servername, $email, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT email,password FROM users";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) 
{
if($row["email"]=="$_POST[fn]"){
if($row["password"]=="$_POST[pass]"){
echo "<br><br><center><h2 style='font-size: 30px;font-weight:600;font-family:Montserrat;text-transform: uppercase;' >The email And<span style='color:orange' > Password is validate successfully </span></center></h2>";
echo "<br><center><h2 style='font-size: 30px;font-weight:600;font-family:Montserrat;text-transform: uppercase;' >So Now You Can Access Our Website<span style='color:orange' > Access Our Website</span></center></h2>";
header('location:index.html');
goto end;
break;
}
echo "<br><br><center><h2 style='font-size: 30px;font-weight:600;font-family:Montserrat;text-transform: uppercase;' >You have Entered Wrong passwod  <span style='color:orange' > Please Enter correct password  </span></center></h2>";
goto back;
}
}
}
echo "<br><br><center><h2 style='font-size: 30px;font-weight:600;font-family:Montserrat;text-transform: uppercase;' >You Are not A valid User <span style='color:orange' > Please sign up First  </span></center></h2>";
goto back;
$conn->close();
end:
echo "<hr>";
echo"<br><br><br>";
echo "<center>";
echo "<a href='index.html' style='text-decoration:none;
  font-weight: 400;
  letter-spacing: 1px;
  line-height: 20px;
  overflow: hidden;
  padding: 8px 15px;
  position: relative;
  text-transform: uppercase;
  z-index: 1;
  background:#65db578c;
  color:white;
  border-left:2px solid orange;
  border-right:2px solid orange;
  border-top:2px solid orange;
  border-bottom:2px solid orange;
  cursor:pointer;
  transition:800ms ease all;
  outline:none;
  border-radius: 5px;
text-transform: uppercase;'>Lets Start</a>";
echo "</center>";
goto kp;

back:
echo "<center>";
echo "<a href='log.html' style='text-decoration:none;
  font-weight: 400;
  letter-spacing: 1px;
  line-height: 20px;
  overflow: hidden;
  padding: 8px 15px;
  position: relative;
  text-transform: uppercase;
  z-index: 1;
  background:#65db578c;
  color:white;
  border-left:2px solid orange;
  border-right:2px solid orange;
  border-top:2px solid orange;
  border-bottom:2px solid orange;
  cursor:pointer;
  transition:800ms ease all;
  outline:none;
  border-radius: 5px;text-transform: uppercase;'>back</a>";
echo "</center>";
kp:
?>
</body>
</html>