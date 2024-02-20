<?php
$name=$_POST['Name'];
$email=$_POST['Email'];
$comment=$_POST['Comment'];


$con=mysqli_connect("localhost","root","","contactus");
$db=mysql_select_db("contactus");

if($db)
{
    echo "Database is Connected";
}
else{
    echo "Database is not Connected";
}
$select="select * from contactus where Email='$email'";
$result = mysql_query($select,$con);

if(mysql_num_rows($result)>0)
{
    echo "Duplicate Data!!!!";
    header("location: contact.php");
}
else
{
$insert="INSERT INTO contactus(Name,Email,Comment) VALUES ('$name', '$email', '$comment')";
}
$res=mysql_query($insert,$con);
if($res)
{
    header("location: theadventurershimalayan/contact.php");
}
else{
     echo die(mysql_error($con));
}



?>