<?php
if(isset($_POST['submit']))
{
    $name=$_POST['name'];
    $visitor_email=$_POST['email'];
    $message=$_POST['message'];

    $email_from = 'akshays274@gmail.com';
    $email_subject = 'New Form Submission';
    $email_body = "You have received a new message from ".$name."\n"."email address: ".$visitor_email."\n"."Here is the message: ".$message;

    $to = 'akshays274@gmail.com';
    $headers = "From: ".$email_from;

    if(mail($to, $email_subject, $email_body, $headers))
    {
        echo "<h1>Sent Successfully</h1>";
    }
    else
    {
        echo "Something went wrong";
    }
}
?>