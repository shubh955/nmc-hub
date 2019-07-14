<?php

include 'config.php';

$username = $_POST["username"];
$password = $_POST["password"];
$retypepassword = $_POST["retypepassword"];
$email = $_POST["email"];
$mobile = $_POST["mobile"];
$areasqft = $_POST["areasqft"];
$taxnumber = $_POST["taxnumber"];
$floornumber = $_POST["floornumber"];
$waternumber = $_POST["waternumber"];
$electricnumber = $_POST["electricnumber"];
$address = $_POST["address"];
$facing = $_POST["facing"];
$aadhar = $_POST["aadhar"];

$yourname=$_POST["yourname"];
$youremail=$_POST["youremail"];
$subject=$_POST["subject"];




if($mysqli->query("INSERT INTO users (username,password,retypepassword,email,mobile,areasqft,taxnumber,floornumber,waternumber,electricnumber,address,facing,aadhar)VALUES('$username','$password','$password','$email',$mobile,'$areasqft','$taxnumber','$floornumber','$waternumber','$electricnumber','$address','$facing','$aadhar')")){
	echo 'Data inserted';
	echo '<br/>';
}

if($mysqli->query("INSERT INTO contact (yourname,youremail,subject)VALUES('$yourname','$youremail','$subject')")){
	echo 'Data inserted';
	echo '<br/>';
}




header ("location:login.html");

?>
