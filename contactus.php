<?php
$name=$_POST['Name'];
$email=$_POST['Email'];
$comment=$_POST['Comment'];


$con=mysqli_connect("localhost","root","","tahclient");
$db=mysqli_select_db($con,"tahclient");

if($db)
{
    echo "Database is Connected";
}
else{
    echo "Database is not Connected";
}
$select="select * from contactus";
$result = mysqli_query($con,$select);

if(mysqli_num_rows($result)>100)
{
    echo "Duplicate Data!!!!";
    header("location: contact.php");
}
else
{
$insert="INSERT INTO contactus(Name,Email,Comment) VALUES ('$name','$email','$comment')";
$res=mysqli_query($con,$insert);
}
if($res)
{
    header("location: contact.php");
}
else
{
     echo die(mysqli_error($con));
}



?>