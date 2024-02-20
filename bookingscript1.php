<?php
$name=$_POST['Name'];
$lname=$_POST['Last'];
$trek=$_POST['Trek'];
$mem=$_POST['Members'];
$adult=$_POST['Adult'];
$child=$_POST['Child'];
$checkin=$_POST['Checkin'];
$country=$_POST['Country'];
$state=$_POST['State'];
$city=$_POST['City'];
$weight=$_POST['Weight'];
$height=$_POST['Height'];
$mobile=$_POST['Mobile'];
$email=$_POST['Email'];
$umobile=$_POST['U_Mobile'];
$dob=$_POST['DOB'];


$con=mysqli_connect("localhost","root","","tahclient");
$db=mysqli_select_db($con,"tahclient");

if($db)
{
    echo "Database is Connected";
}
else{
    echo "Database is not Connected";
}
$select="select * from booking";
$result = mysqli_query($con,$select);

if(mysqli_num_rows($result)>200)
{
    echo "Duplicate Data!!!!";
    header("location: booking.html");
}
else
{
$insert="INSERT INTO booking(Name,Last,Trek,Join_Mem,Adult,Child,Check_in,Country,State,City,Weight,Height,Contact,Email,Emer_Contact,DOB) VALUES ('$name','$lname','$trek','$mem','$adult','$child','$checkin','$country','$state','$city','$weight','$height','$mobile','$email','$umobile','$dob')";
$res=mysqli_query($con,$insert);
}
if($res)
{
    header("location: booking.php");
}
else
{
     echo die(mysqli_error($con));
}


?>