<?php
$userid=$_POST['Name'];
$emailid=$_POST['Email'];
$mobile=$_POST['Mobile'];
$password=$_POST['Password'];
$confirm=$_POST['Confirm'];

$con=mysqli_connect("localhost","root","","tahclient");
$db=mysqli_select_db($con,"tahclient");

if($db)
{
    echo "Database is Connected";
}
else{
    echo "Database is not Connected";
}
$select="select * from registration;";
$result = mysqli_query($con,$select);

if(mysqli_num_rows($result)>200)
{
    echo "Duplicate Data!!!!";
    header("location: index.php");
}
else
{
$insert="INSERT INTO registration(User,Email,Mobile,Password,Confirm) VALUES ('$userid','$emailid','$mobile','$password','$confirm')";
$res=mysqli_query($con,$insert);
}
if($res)
{
    header("location: index.php");
}
else{
     echo die(mysqli_error($con));
}
if($password=$_POST['Password'] == $confirm=$_POST['Confirm'])
{
	echo"Registered Succesfully!!";
}
else
{
	echo"Not Registered Succesfully!!";
}


?>
