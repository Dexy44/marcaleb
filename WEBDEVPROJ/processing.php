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
    $fname = $_POST["fname"];
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $contactnum = $_POST["contactnum"];
    $gender = $_POST["gender"];

    $stmt = $conn->prepare("INSERT INTO registration (fname, username, email, password, contactnum, gender) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssss", $fname, $username, $email, $password, $contactnum, $gender);

    if ($stmt->execute()) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();

    $_SESSION["registration_data"] = array(
        "fname" => $fname,
        "username" => $username,
        "email" => $email,
        "password" => $password,
        "contactnum" => $contactnum,
        "gender" => $gender
    );

    header("Location: confirmation.php");
    exit();
}
?>
