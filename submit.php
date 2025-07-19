<?php
// submit.php - Form Handler

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data safely
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // Display confirmation
    echo "<h1>Thank You, $name!</h1>";
    echo "<p>We have received your message:</p>";
    echo "<p><strong>Email:</strong> $email</p>";
    echo "<p><strong>Message:</strong><br>$message</p>";

    // Optional: save data to a file (basic example)
    $file = fopen("messages.txt", "a");
    fwrite($file, "Name: $name | Email: $email | Message: $message\n");
    fclose($file);

} else {
    echo "<p>Invalid Request.</p>";
}
?>
