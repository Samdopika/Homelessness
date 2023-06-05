<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
   $name = $_POST['name'];
   $email = $_POST['email'];
   $phone = $_POST['phone'];
   $message = $_POST['message'];

   // Add your code to process the form data, such as sending an email or saving it to a database
   
   // Example: Send an email
   $to = "your-email@example.com";
   $subject = "New Contact Form Submission";
   $body = "Name: $name\nEmail: $email\nPhone: $phone\nMessage: $message";
   $headers = "From: $email";

   if (mail($to, $subject, $body, $headers)) {
      echo "Thank you for contacting us. We will get back to you soon.";
   } else {
      echo "Sorry, there was an error sending your message. Please try again later.";
   }
}
?>