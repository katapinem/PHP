<form method="post" action=" if script login.php"> 
Username <input type="text" name="username"> <br /> 
Password <input type="password" name="pass"> <br /> 
<input type="submit" name="submit" value="Submit"> 
</form>

<?php 
$username = $_POST ["username"]; 
$password = $_POST ["pass"]; 
if ((($username == "joko") && ($password == "jokokusayang")) || 
 (($username == "amir") && ($password == "amirkusayang"))) 
{ 
 echo "Login sukses"; 

} 
else 
{ 
 echo "Login gagal"; 
} 
?>