<?php

include "../connection/dbCon.php";


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $firstname = $_POST['FirstName'];
    $lastname = $_POST['LastName'];
    $gender = $_POST['gender'];
    $nationality = $_POST['nationality'];
    $email = $_POST['Email'];
    $username = $_POST['username'];
    $password = md5($_POST['password']);

    $sql = "INSERT INTO `registertable`(`id`, `first_name`, `last_name`, `gender`, `nationality`, `email`, `username`, `password`) VALUES
    ('$id', '$firstname', '$lastname', '$gender', '$nationality', '$email', '$username', '$password')";

    if ($connection->query($sql) === TRUE) {
        echo "Registered Successfully";
    } else {
        echo "Error: " . $connection->error;
    }
    $connection->close();
}


?>