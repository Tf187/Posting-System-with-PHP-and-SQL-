<html>
    
<body>

<?php

$servername = "#";
$username = "#";
$password = "#";
$dbname = "#";

$con = new mysqli($servername, $username, $password, $dbname);


if (!$con) {
    die("Verbindung fehlgeschlagen: " . mysqli_connect_error());
}

$sql = "SELECT title, text, date_created FROM posts";
$result = mysqli_query($con, $sql);


if (mysqli_num_rows($result) > 0) {

    while($row = mysqli_fetch_assoc($result)) {
        echo "<div class='post'>";
        echo "<h3>" . $row["title"]. "</h3>";
        echo "<p>" . $row["text"]. "</p>";
        echo "<small>" . $row["date_created"]. "</small>";
        echo "</div>";
    }
} else {
    echo "There are no posts yet";
}


mysqli_close($con);
?>

</body>
</html>