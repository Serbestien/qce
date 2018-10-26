<?php

if(isset($_POST['submit']))
{
    $name=$_POST['name'];
    $subject=$_POST['subject'];
    $mailfrom=$_POST['customerMail'];
    $message=$_POST['message'];
    
    //email error handling is required... check email legit or not
    $mailTo="sales@qce.come.sg";
    $headers="Webpage Enquires From: ".$mailfrom;
    $txt="You have recieved an e-mail from ".$name.".\n\n".$message;
    
    //gmail block php sender
    mail($mailTo,$subject,$txt,$headers);
    header("Location: index.php?mailsend");
}