<?php

//print_r($_POST);


//define variable and set to empty value
$name_error = $email_error= $phone_error="";
$name=$email=$phone=$message=$success=$headers="";

//form is submitted with POST method
if($_SERVER["REQUEST_METHOD"] == "POST")
{
    
    ini_set("SMTP","ssl://smtp.gmail.com");
    ini_set("smtp_port","465");
    
    if(empty($_POST["name"]))
    {$name_error="???? is required";}
    else
    {
        $name = test_input($_POST["name"]);
        
    
        if(!preg_match("/^[a-zA-Z ]*$/",$name))
        {$name_error="name ERRRROROOROROOROROOR";}
    }
    
    if(empty($_POST["email"]))
    {$email_error="???? is required";}
    else
    {
        $email = test_input($_POST["email"]);
    
        if(!filter_var($email, FILTER_VALIDATE_EMAIL))
        {
            $email_error="email ERRRROROOROROOROROOR";
        }
    }
    
    
    if(empty($_POST["phone"]))
    {$phone_error="phone? is required";}
    else
    {
        $phone= test_input($_POST["phone"]);
    
        if(!preg_match("/^[0-9]{1,8}$/",$phone))
        {$phone_error=" phone ERRRROROOROROOROROOR";}
    }
    
    
    if(empty($_POST["message"]))
    {$message ="mesg  rrequired";}
    else
    {
        $message = test_input($_POST["message"]);
    
    }
    
    
    if($name_error == '' and $email_error == '' and $phone_error == '')
    {
       
        $message='';
        unset($_POST['submit']);
        foreach($_POST as $key => $value)
        {
            $message .="$key: $value\n";
        }
        $to='mitchthymeek@gmail.com';//sales@qce.come.sg
        $subject='QCE Website Submission';
        $headers .= 'From: Lee Hsien Loong <LeeHL@temasek.com>' . "\r\n";
        //$headers="idk what to put in headers";
        if(mail($to,$subject,$message,$headers))//,$headers
        {
            $success= "Message sent, thank you for contacting QCE!";
            $name = $email = $phone = $message ='';
        }
    }
    
  
}




function test_input($data)
{
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;      
}

?>


