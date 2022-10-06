<?php
$server_name="localhost";
$port=3306;
$username="root";
$password="";
$db="register1";
$conn=mysqli_connect($server_name,$username,$password,$db);
if(!$conn)
{
    die("connection failed:" . mysqli_connect_error());
}
if(isset($_POST['create']))
{
$username=$_POST['username'];
$password=$_POST['password'];
$phone=$_POST['phone'];
$mail=$_POST['mail'];
$sql_query= "INSERT INTO `reg1`(`user`, `pass`, `phone`, `mail`) VALUES ('$username','$password','$phone','$mail')";
if(mysqli_query($conn,$sql_query))
{

    echo "Registred Succesfully !";
}
else{
    echo "Error ... Try again !";
}
mysqli_close($conn);
}
?>