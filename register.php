<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstName = htmlspecialchars($_POST['first-name']);
    $middleName = htmlspecialchars($_POST['middle-name']);
    $lastName = htmlspecialchars($_POST['last-name']);
    $suffix = htmlspecialchars($_POST['suffix']);
    $batch = htmlspecialchars($_POST['batch']);
    $technology = htmlspecialchars($_POST['technology']);
    $idNumber = htmlspecialchars($_POST['id-number']);
    $contactNumber = htmlspecialchars($_POST['contact-number']);
    $email = htmlspecialchars($_POST['email']);

    echo "<h2>Registration Successful!</h2>";
    echo "<p><strong>First Name:</strong> $firstName</p>";
    echo "<p><strong>Middle Name:</strong> $middleName</p>";
    echo "<p><strong>Last Name:</strong> $lastName</p>";
    echo "<p><strong>Suffix:</strong> " . ($suffix ? $suffix : "None") . "</p>";
    echo "<p><strong>Batch:</strong> $batch</p>";
    echo "<p><strong>Technology:</strong> $technology</p>";
    echo "<p><strong>ID Number:</strong> $idNumber</p>";
    echo "<p><strong>Contact Number:</strong> " . ($contactNumber ? $contactNumber : "Not Provided") . "</p>";
    echo "<p><strong>Email:</strong> " . ($email ? $email : "Not Provided") . "</p>";
} else {
    echo "Invalid request.";
}
?>
