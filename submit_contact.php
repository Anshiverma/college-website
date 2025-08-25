<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name    = htmlspecialchars($_POST['name']);
    $email   = htmlspecialchars($_POST['email']);
    $phone   = htmlspecialchars($_POST['phone']);
    $message = htmlspecialchars($_POST['message']);

    // For now just display confirmation
    echo "<h2>✅ Thank you, $name. We have received your message!</h2>";
    echo "<p><a href='contact.php'>Go Back</a></p>";
} else {
    echo "❌ Invalid request.";
}
?>
