<?php
    $name = $_POST['name'];
    $visitor_email = $_POST['email'];
    $subject = $_POST['subject'];
    $mesage = $_POST['message'];

    $email_from = 'info@nulluniversity.com';

    $email_subject = 'new form Submission';

    $email_body = "User Name: $name.\n".
                                 "User Email: $visitor_email .\n".
                                    "subject: $subject.\n".
                                    "message: $mesage.\n";  
    $to = 'arman.0o0.null@gmail.com';

    $headers = "From: $email_from \r\n";

    $headers .= "Reply-to: $visitor-email \r\n";

    mail($to,$email_subject,$email_body,$headers);

    header(Location: contact.html)

?>