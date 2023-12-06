<?php
include('koneksi.php');

if (isset($_GET['id'])) {
    $questionId = $_GET['id'];
    $query = mysqli_query($koneksi, "SELECT * FROM quiz WHERE id = $questionId");
    $row = mysqli_fetch_array($query);

    // Return question data in JSON format
    echo json_encode($row);
} else {
    // Handle error if no ID is provided
    echo json_encode(['error' => 'No question ID provided']);
}
?>
