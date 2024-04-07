<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = "rich@lazerwebsites.com"; // Your email address where you want to receive messages
    $form_id = $_POST['form_id']; // Form identifier
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $form_subject = $_POST['subject']; // Form subject input field value
    $email_subject = "You have received an email from 'The Nobles' website | Form-ID: $form_id"; // Email subject with form ID
    
    
    $email_body .= "Form ID: $form_id\n";
    $email_body = "Name: $name\n";
    $email_body .= "Email: $email\n";
    $email_body .= "Phone: $phone\n";
    $email_body .= "Form Subject: $form_subject\n\n"; // Include form subject in the email body
    
    // Additional fields for the "Book Band" form
    if ($form_id === 'Book Band Form') {
        $venue_name = $_POST['venue_name'];
        $event_date = $_POST['event_date'];
        $event_type = $_POST['event_type'];
        $email_body .= "Venue Name: $venue_name\n";
        $email_body .= "Event Date: $event_date\n";
        $email_body .= "Event Type: $event_type\n";
    }

    $headers = "From: $name <$email>";

    if (mail($to, $email_subject, $email_body, $headers)) {
        http_response_code(200);
        echo "Message sent successfully.";
    } else {
        http_response_code(500);
        echo "Failed to send message. Please try again later.";
    }
} else {
    http_response_code(405);
    echo "Method Not Allowed";
}
?>