<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo "<h1>Form Submission Data:</h1>";
    echo "<p><strong>Name:</strong> " . htmlspecialchars($_POST["name"]) . "</p>";
    echo "<p><strong>Email:</strong> " . htmlspecialchars($_POST["email"]) . "</p>";
    echo "<p><strong>Phone:</strong> " . htmlspecialchars($_POST["phone"]) . "</p>";
    echo "<p><strong>Inquiry:</strong> " . htmlspecialchars($_POST["inquiry"]) . "</p>";
    echo "<p><strong>Suggestions:</strong> " . htmlspecialchars($_POST["suggest"]) . "</p>";
    echo "<p><strong>Date:</strong> " . htmlspecialchars($_POST["date"]) . "</p>";
    echo "<p><strong>Time:</strong> " . htmlspecialchars($_POST["time"]) . "</p>";
    echo "<p><strong>Comments:</strong> " . nl2br(htmlspecialchars($_POST["comments"])) . "</p>";
} else {
    echo "<h1>Invalid Request</h1>";
}
?>