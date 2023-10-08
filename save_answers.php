<?php

$servername = "localhost";
$username = "Shaurya";
$password = "Shaurya@1234";
$dbname = "shauryadb";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $questions = $_POST['questions'];
    $answers = $_POST['answers'];

    if (!empty($questions) && !empty($answers) && count($questions) === count($answers)) {

        for ($i = 0; $i < count($questions); $i++) {
            $question = $conn->real_escape_string($questions[$i]);
            $answer = $conn->real_escape_string($answers[$i]);

      
            $sql = "INSERT INTO survey_responses (question, answer) VALUES ('$question', '$answer')";

            if ($conn->query($sql) !== TRUE) {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
        }
        
        echo "Records inserted successfully";
    } else {
        echo "No questions or answers were provided.";
    }
}

$conn->close();
?>
