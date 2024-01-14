<?php
// Replace "your_email@example.com" with your actual email address
$to = "moiets@hotmail.com";
$subject = "Date Request";
$message = "Someone said yes! Let's go out.";

// Send the email
mail($to, $subject, $message);

// You can add additional logic or error handling here if needed
?>