<?php
$servername = "localhost";
$username = "Shaurya";
$password = "Shaurya@1234";
$dbname = "shauryadb1";


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


function sanitizeInput($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $question = isset($_POST['Question1']) ? sanitizeInput($_POST['Question1']) : '';
    $option1 = isset($_POST['Option1_1']) ? sanitizeInput($_POST['Option1_1']) : '';
    $option2 = isset($_POST['Option1_2']) ? sanitizeInput($_POST['Option1_2']) : '';
    $correct_option = isset($_POST['CorrectOption1']) ? sanitizeInput($_POST['CorrectOption1']) : '';

   
    $sql = "INSERT INTO survey_responses (question, option1, option2, correct_option) 
            VALUES ('$question', '$option1', '$option2', '$correct_option')";

    if ($conn->query($sql) === TRUE) {
        echo "Record inserted successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}


$conn->close();
?>
