<?php
$server_name="localhost";
$username="root";
$password="";
$db="contact";
$conn=mysqli_connect($server_name,$username,$password,$db);
if(!$conn)
{
die("connection failed:" . mysqli_connect_error());
}
if(isset($_POST['send']))
{
$name=$_POST['name'];
$mail=$_POST['mail'];
$phone=$_POST['phone'];
$message=$_POST['message'];
$sql_query= "INSERT INTO `contact`(`name`, `mail`, `phone`, `messsage`) VALUES ('$name','$mail','$phone','$message')";
if(mysqli_query($conn,$sql_query))
{

echo "Thanks For contacting us !";
}
else{
echo "Error ... Retrying ";
}
mysqli_close($conn);
}
?>