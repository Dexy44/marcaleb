<?php
session_start();

$host = "localhost";
$username = "root";
$password = "";
$dbname = "regform";

$conn = new mysqli($host, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connect failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Process login
    $username = $_POST["username"];
    $password = $_POST["password"];

    $stmt = $conn->prepare("SELECT * FROM registration WHERE username = ?");
    $stmt->bind_param("s", $username);

    $stmt->execute();

    $result = $stmt->get_result();
    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        if ($password == $row["password"]) {
            $_SESSION["logged_in"] = true; // Set session variable indicating successful login
            $_SESSION["username"] = $username; // Store username in session
            $_SESSION["full_name"] = $row["full_name"]; // Store full name in session
            header("Location: home.php"); // Redirect to a success page
            exit();
        } else {
            $invalidPassword = true;
        }
    } else {
        $invalidUsername = true;
    }

    $stmt->close();
}

$conn->close();
?>
