<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>



<?php
$servername = "localhost";
$username = "bacoladesign";
$password = "BOY2686hair";
$dbname = "bistros";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM bistros_categories";
echo $sql;die;
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "id: " . $row["cat_id"]. " - Name: " . $row["cat_name"]. "<br>";
    }
} else {
    echo "0 results";
}

mysqli_close($conn);
?>
</body>
</html>