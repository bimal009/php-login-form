<?php
$servername = "localhost";
$username = "root"; 
$password = "";     
$dbname = "studentdb";


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$name = $_POST['name'];
$age = $_POST['age'];
$gender = $_POST['gender'];
$course = $_POST['course'];
$email = $_POST['email'];
$phone = $_POST['phone'];

$sql = "INSERT INTO Students (name, age, gender, course, email, phone)
VALUES ('$name', $age, '$gender', '$course', '$email', '$phone')";

if ($conn->query($sql) === TRUE) {
    echo "Student registered successfully!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
