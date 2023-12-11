<?php
session_start();
$registration_data = $_SESSION["registration_data"];
?>
<!DOCTYPE html>
<html>
<head>
    <title>Registration Confirmation</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        h2, p {
            text-decoration: none;
            margin-bottom: 10px;
        }

        img {
            width: 25%;
            height: auto;
            margin-bottom: 10px;
        }

        a {
            text-decoration: none;
        }
    </style>
</head>
<body>

<h2>Registration Confirmation</h2>

<p>Full Name: <?php echo $registration_data["fname"]; ?></p>
<p>Username: <?php echo $registration_data["username"]; ?></p>
<p>Email: <?php echo $registration_data["email"]; ?></p>
<p>Password: <?php echo $registration_data["password"]; ?></p>
<p>Contact: <?php echo $registration_data["contactnum"]; ?></p>
<p>Gender: <?php echo $registration_data["gender"]; ?></p>


<!-- Add a button to go back to registration form -->
<br><br><a href='logreg.php'>Go Back To Registration</a>

</body>
</html>