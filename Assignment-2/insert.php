<?php
$host = "172.31.22.43";
$username = "Rushi200552806";
$password = "R5xjD0XnSX";
$dbname = "Rushi200552806";

// Create a database connection
$conn = mysqli_connect($host, $username, $password, $dbname);

// Check if the connection was successful

// Use prepared statements to prevent SQL injection
$fname = $_POST["rfname"];
$lname = $_POST["rlname"];
$gmail = $_POST["registerEmail"];
$plain_password = $_POST["registerPassword"];

// Hash the password
$hashed_password = password_hash($plain_password, PASSWORD_DEFAULT);

// Check for duplicate email
$duplicate = "SELECT * FROM registerdata WHERE email='$gmail'";
$result1 = mysqli_query($conn, $duplicate);

if (mysqli_num_rows($result1) > 0) {
    // Email already exists, handle duplicate entry (e.g., show an error message)
    echo "Duplicate data";
} else {
    // Insert the hashed password into the database
    $query = "INSERT INTO registerdata (fname, lname, email, password) VALUES ('$fname', '$lname', '$gmail', '$hashed_password')";
    $result = mysqli_query($conn, $query);

    if ($result) {
        // Registration successful
        echo "Registration successful";
        header("Location: login.html");
    } else {
        // Registration failed
        echo "Registration failed";
    }
}

// Close the database connection
mysqli_close($conn);
?>
