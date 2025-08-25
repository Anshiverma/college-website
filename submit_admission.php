<?php
session_start();

// Database connection
$conn = new mysqli('localhost', 'root', '', 'college_db');

if($conn->connect_error){
    die("Connection failed: ".$conn->connect_error);
}

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $course = $_POST['course'];

    $sql = "INSERT INTO admissions (name, email, phone, course) VALUES ('$name','$email','$phone','$course')";
    
    if($conn->query($sql) === TRUE){
        $_SESSION['success_message'] = "Application submitted successfully!";
        header("Location: admission.php");
        exit;
    } else {
        echo "Error: ".$conn->error;
    }
}

$conn->close();
?>
