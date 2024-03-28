<?php
//get data from form  
$name = $_POST['name'];
$email= $_POST['email'];
$phone= $_POST['phone'];
$subject= $_POST['subject'];
$message= $_POST['message'];
$to = "maijasoares01@gmail.com";
$txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n  Phone Number = " . $phone . "\r\n Message =" . $message;
$headers = "From: noreply@smolArtist.com" . "\r\n" .
"CC: somebodyelse@example.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//message
alert("Thank you for contacting us!");
?>