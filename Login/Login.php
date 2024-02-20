<?php
$User=$_POST['User'];
$Password=$_POST['Password'];



$con=mysqli_connect("localhost","root","","tahclient");
$db=mysqli_select_db($con,"tahclient");

if($db)
{
    echo "Database is Connected";
}
else{
    echo "Database is not Connected";
}
$select="select * from login";
$result = mysqli_query($con,$select);

if(mysqli_num_rows($result)>200)
{
    echo "Duplicate Data!!!!";
    header("location: index.php");
}
else
{
$insert="INSERT INTO login(User,Password) VALUES ('$User', '$Password')";
$res=mysqli_query($con,$insert);
}
if($res)
{
    header("location: index.php");
}
else{
     echo die(mysqli_error($con));
}



?>