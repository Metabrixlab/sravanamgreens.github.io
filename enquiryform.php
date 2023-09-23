<html>
<body>

<?php

    $emailTo = "wolfrum.fire@gmail.com";
    $subject = "Shravanam Greens: Website Enquiry";
    $body = "Dear Indu, \nYou have an enquiry at shravanamgreenshomestay.com with the following details:\n1.Check-in Date: " . $_POST["checkindate"] . "\n2.Check-out Date:" . $_POST["checkoutdate"] . "\n3.Number of rooms:" . $_POST["rooms"] . "\n4.Number of guests:" . $_POST["guests_no"];
    $headers = "From: " . $_POST['sender_email'];

    if(mail($emailTo, $subject, $body, $headers)) {
        echo "The email was sent successfully (as far as I know)";
    }
    else {
        echo "The email could not be sent!";
    }

?>
</body>
</html>