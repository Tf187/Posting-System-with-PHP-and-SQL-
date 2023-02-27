<?php

$servername = "#";
$username = "#";
$password = "#";
$dbname = "#";

$conn = new mysqli($servername, $username, $password, $dbname);


$title = $_POST['title'];
$text = $_POST['text'];

$sql = "INSERT INTO posts (title, text, username)
VALUES ('$title', '$text', '$username')";

if (mysqli_query($conn, $sql)) {
    header('location: #');
} else {
    echo "Error while saving post " . mysqli_error($conn);
}

mysqli_close($conn);
?>
