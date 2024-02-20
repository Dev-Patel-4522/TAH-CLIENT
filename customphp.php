<?php
$fname=$_POST["FName"];
$last=$_POST['Last'];
$trek=$_POST['Trek'];
$mem=$_POST['Member'];
$checkin=$_POST['Checkin'];
$country=$_POST['Country'];
$state=$_POST['State'];
$city=$_POST['City'];
$agegroup=$_POST['Age_Group'];
$service=$_POST['Service'];
$budget=$_POST['Budget'];
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
$select="SELECT * FROM customtrip";
$result = mysqli_query($con,$select);

if(mysqli_num_rows($result)>200)
{
    echo "Duplicate Data!!!!";
    header("location: Customizetrip.php");
}
else
{
$insert="INSERT INTO customtrip(FName,Last,Trek,Members,Check_in,Country,State,City,Age_Group,Service,Budget,Mobile,Email,E_Mobile,DOB) VALUES ('$fname','$last','$trek','$mem','$checkin','$country','$state','$city','$agegroup','$service','$budget','$mobile','$email','$umobile','$dob')";
$res=mysqli_query($con,$insert);
}
if($res)
{
    header("location: Customizetrip.php");
}
else
{
     echo die(mysqli_error($con));
}


?>