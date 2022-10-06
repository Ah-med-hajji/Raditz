<?php 
$host="localhost";
$port=3306; 
$user="root";
$password="";
$db="register1";

$conn=mysqli_connect($host,$user,$password,$db);


if(isset($_POST["LOGIN"])){
    
    $uname=$_POST['username'];
    $password=$_POST['password'];

    $sql="select * from reg1 where user='".$uname."'AND pass='".$password."' limit 1";
    
    $result=mysqli_query($conn,$sql);
    
    if(mysqli_num_rows($result)==1){
        header('location:good.html');
        exit();
    }
    else{
       header('location:bad.html');
        exit();
    }
}
?>