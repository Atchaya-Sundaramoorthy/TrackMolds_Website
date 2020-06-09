<?php

$user=$_POST['uname'];
$pass=$_POST['pass'];

$connect=mysqli_connect("localhost","id11905254_preethi","1234567890","id11905254_login");

$sql="select * from login where user='$user' ";

$result=mysqli_query($connect,$sql);


if($result!=false){

while($row=mysqli_fetch_array($result)){
$che = $row["pass"];

}
mysqli_free_result($result);
mysqli_close($connect);
}

if($che == $pass){
  header("location:dashboard.html");
}
else{
  header("location:index.html");
}

 ?>
