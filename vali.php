<!DOCTYPE html>
<html>
<body background="image/bg.jpg">
<?php
$servername = "localhost";
$username = "admin";
$password = "pass@123";
$dbname = "admin";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
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
if($row["email"]=="$_POST[email]"){
echo "<br><br><center><h2 style='font-size: 30px;font-weight:600;font-family:Montserrat;text-transform: uppercase;' >The username <span style='color:orange' > is alredy exists</span></center></h2>";
goto end;
break;
}
}
}
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "INSERT INTO users (fname,password,lname,email,phone)
VALUES ('$_POST[first_name]','$_POST[password]','$_POST[last_name]','$_POST[email]',$_POST[phone]);";

if ($conn->multi_query($sql) == TRUE) {
echo "<br><br><center><h2 style='font-size: 30px;font-weight:600;font-family:Montserrat;text-transform: uppercase;' >The New Record <span style='color:orange' > is Created Successfully</span></center></h2>";
header('location:index.html');
    goto btn;
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
end:
echo "<br><br><center><h2 style='font-size: 30px;font-weight:600;font-family:Montserrat;text-transform: uppercase;' >Please Enter <span style='color:orange' > A New one </span></center></h2>";
btn:
echo "<hr>";
 echo"<br><br><br>";
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
  border-radius: 5px;'>Go To login</a>";

echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
echo "<a href='signup.html' style='text-decoration:none;
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
  border-radius: 5px;'>Go To Sign up</a>";
echo "</center>";
echo "<br><br><br><br><br><br><br><br><br><br><br><br><br><br>";
?>
</body>
</html>