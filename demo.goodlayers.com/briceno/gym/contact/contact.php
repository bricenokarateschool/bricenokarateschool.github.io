<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = trim($_POST["name"]);
  $email = trim($_POST["email"]);
  $subject = trim($_POST["subject"]);
  $message = trim($_POST["message"]);

  if (empty($name) || empty($email) || empty($subject) || empty($message)) {
    echo "Please fill in all fields.";
  } else {
    $to = "youremail@example.com";
    $headers = "From: $name <$email>" . "\r\n" . "Reply-To: $email" . "\r\n" . "X-Mailer: PHP/" . phpversion();
    $message_body = "Name: $name\nEmail: $email\n\n$message";
    if (mail($to, $subject, $message_body, $headers)) {
      echo "Message sent!";
    } else {
      echo "An error occurred, please try again later.";
    }
  }
}
?>
