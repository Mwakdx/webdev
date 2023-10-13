<?php
session_start();
include "../connection/dbCon.php";


if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $password = md5($password);

    // You should validate and sanitize the input here

    $sql = "SELECT * FROM `registertable` WHERE username = '$username' AND password = '$password'";
    $result = $connection->query($sql);

    if ($result->num_rows == 1) {
        $_SESSION['username'] = $username;
        header("Location: ../dashboard/dashboard.php"); // Redirect to a welcome page or dashboard
        exit();
    } else {
        echo "Invalid password or username. Please try again.";
    }
} else {
    echo "Login form submission error.";
}

$connection->close();
?>