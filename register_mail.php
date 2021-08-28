<?php 

$first_name = $_GET['first_name'];
$age = $_GET['age'];
$DateOfBirth = $_GET['dob'];
$Sex = $_GET['sex'];
$Standard = $_GET['std'];
$teachername =$_GET['teachername'];
$textteachername =$_GET['textteachername'];
$NameoftheSchoolCollege  = $_GET['first_name4'];
$FatherMotherName  = $_GET['first_name5'];
$Occupation  = $_GET['first_name6'];
$ContactNo  = $_GET['first_name7'];
$EmailId  = $_GET['first_name8'];
$ResidentialAddress  = $_GET['feedback'];


var_dump($_GET);

//echo $email_id ;

//echo $first_name ;

//echo $phone_no  ;
//echo $address ;
//echo $feedback ;
// "ghbhjbh".$jnoin."nijhn".$huihui.
//exit;
$to = "sudarshan.p.jadhav@gmail.com";
//$to = "kanchanrchavan@gmail.com   artcircleacademy@gmail.com";
$message = "Feedback Form for website
First Name : ".$first_name."
Age : ".$age."
Date Of Birth. : ".$DateOfBirth."
Standard : ".$Standard."
Teacher Name: ".$textteachername."
Teacher Name: ".$teachername."
Name of the School/College : ".$NameoftheSchoolCollege."
Father's/Mother's Name : ".$FatherMotherName."
Occupation : ".$Occupation."
Contact No : ".$ContactNo."
Email Id : ".$EmailId."
Residential Address : ".$ResidentialAddress;

$subject = "Enquiry from artcircleacademy.com !!";
$from = "automail@artcircleacademy.com";
$headers = "From:" . $from;

mail($to,$subject,$message,$headers);

echo "Mail Sent.";
header("location:registerform.html?mailsent=1");


?>