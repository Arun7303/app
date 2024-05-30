<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Confirmation</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #e6e6e6; /* Background color for the entire page */
            margin: 0;
            padding: 20px;
            text-align: center;
        }

        .confirmation-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 50vh; /* Set your desired height */
            width: 70%; /* Set your desired width */
            background-color: #ffffff; /* Solid background color for the container */
            margin: 0 auto; /* Center the container horizontally */
            padding: 20px; /* Add padding to the container */
            border-radius: 10px; /* Optional: Add border-radius for rounded corners */
        }

        h2 {
            color: #333;
        }

        p {
            color: #333;
            margin-bottom: 20px;
        }

        .success {
            color: #4CAF50;
            font-weight: bold;
        }

        .error {
            color: #f44336;
            font-weight: bold;
        }
    </style>
</head>
<body>

<div class="confirmation-container">
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "GET") {
        $name = $_GET['name'] ?? '';
        $email = $_GET['email'] ?? '';

        echo "<h2 class='success'>Registration Successful!</h2>";
        echo "<p>Name: $name</p>";
        echo "<p>Email: $email</p>";

        echo "<p class='success'>Thank you for registering!</p>";
        echo "<script>console.log('Received GET Request - Name: $name, Email: $email');</script>";
    } else {
        echo "<h2 class='error'>Error: Form not submitted</h2>";
    }
    ?>
</div>

</body>
</html>
