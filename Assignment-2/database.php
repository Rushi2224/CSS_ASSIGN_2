<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

$host = "172.31.22.43";
$username = "Rushi200552806";
$password = "R5xjD0XnSX";
$dbname = "Rushi200552806";

// Create a database connection
$conn = mysqli_connect($host, $username, $password, $dbname);

// Check if the connection was successful

// Use prepared statements to prevent SQL injection
$loginEmail = $_POST["loginEmail"];
$loginPassword = $_POST["loginPassword"];

// Perform login validation
$loginQuery = "SELECT * FROM registerdata WHERE email='$loginEmail'";
$loginResult = mysqli_query($conn, $loginQuery);

if (mysqli_num_rows($loginResult) > 0) {
    // Email exists, check password
    $row = mysqli_fetch_assoc($loginResult);
    $storedPassword = $row['password'];

    // Debugging output
    echo "Provided Password: $loginPassword<br>";
    echo "Stored Password: $storedPassword<br>";

    // Validate the password
    if (password_verify($loginPassword, $storedPassword)) {
        // Password is correct, login successful
        // Redirect to the home page or wherever you want
        header("Location: mainpage.php");
        exit();
    } else {
        // Wrong password
        echo "Wrong email or password";
    }
} else {
    // Email does not exist
    echo "Wrong email or password";
}

// Close the database connection
mysqli_close($conn);
?>
