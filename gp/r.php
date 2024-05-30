<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Confirmation</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #3498db; /* Blue background for the entire page */
            margin: 0;
            padding: 20px;
            text-align: center;
        }

        .confirmation-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 70vh; /* Reduced height */
            background-color: #fff; /* White background */
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            margin: 20px; /* Add some margin */
        }

        h2 {
            color: #2c3e50; /* Dark gray color for header */
        }

        p {
            color: #333;
            margin-bottom: 20px;
        }

        .success {
            color: #27ae60; /* Dark green color for success message */
            font-weight: bold;
        }

        .error {
            color: #e74c3c; /* Dark red color for error message */
            font-weight: bold;
        }
    </style>
</head>
<body>

<div class="confirmation-container">

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'] ?? '';
    $email = $_POST['email'] ?? '';

    echo "<h2>Registration Successful!</h2>";
    echo "<p>Your registration details:</p>";
    echo "<p><strong>Name:</strong> $name</p>";
    echo "<p><strong>Email:</strong> $email</p>";
    echo "<p class='success'>Thank you for registering!</p>";
    echo "<script>console.log('Received POST Request - Name: $name, Email: $email');</script>";
} else {
    echo "<p class='error'>Error: Form not submitted</p>";
}
?>

</div>

</body>
</html>
