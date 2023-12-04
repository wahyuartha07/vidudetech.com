<?php
// Connect to the MySQL database
$servername = "your_mysql_server";
$username = "your_mysql_username";
$password = "your_mysql_password";
$dbname = "quiz";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get values from the form
$questionId = $_POST['questionId'];
$selectedOption = $_POST['selectedOption']; // Assuming you have a way to capture the selected option from the user

// Insert data into the database
$sql = "INSERT INTO user_responses (question_id, selected_option) VALUES ($questionId, '$selectedOption')";

if ($conn->query($sql) === TRUE) {
    echo "Record inserted successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close the database connection
$conn->close();
?>
