<?php
if(isset($_POST['submit'])){
    $to = "r191816h@cuz.ac.zw";
    $from = $_POST['email'];
    $full_name = $_POST['contact_name'];
    $subject = "Form submission";
    $subject2 = "Copy of your form submission";
    $message = $full_name . " wrote the following:" . "\n\n" . $_POST['message'];
    $message2 = "Here is a copy of your message " . $full_name . "\n\n" . $_POST['message'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2);
    echo "Mail Sent. Thank you " . $full_name . ", we will contact you shortly.";
    }
?>
