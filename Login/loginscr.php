<?php
$User=$_POST['User'];
$Password=$_POST['Password'];



$con=mysqli_connect("localhost","root","","#mysql50#lava-admin");
$db=mysqli_select_db($con,"#mysql50#lava-admin");

if($db)
{
    echo "Database is Connected";
}
else{
    echo "Database is not Connected";
}
$select="select * from alogin";
$result = mysqli_query($con,$select);

if(mysqli_num_rows($result)>50)
{
    echo "Duplicate Data!!!!";
    header("location: admin/index-2.php");
}
else
{
$insert="INSERT INTO alogin(User,Password) VALUES ('$User', '$Password')";
$res=mysqli_query($con,$insert);
}
if($res)
{
    header("location: theadventurershimalayan/index-2.php");
}
else{
     echo die(mysqli_error($con));
}



?>