
<?php 
    $firstName = $_POST["fName"];
    $lastName = $_POST["lName"];
    $orderQuantity = $_POST["orderQ"];
    $userEmail = $_POST["email"];

    $subject = "Scantron Order Confirmation";
    $message = "Hello " . $firstName . " " . $lastName;
    
    $message .= "\n Thank you for ordering " . $orderQuantity . " many scantrons.";
    $message .= "\n Your order will be available in 5 - 7 business days.";

    $fromSender = "gkovalick@bloomu.edu";

    mail($userEmail, $subject, $message, $fromSender);
?>