<?php
$conn = new mysqli("localhost", "root", "", "testdb");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$name = $_GET['name'] ?? '';

$sql = "SELECT * FROM users WHERE name = '$name'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "User: " . $row["name"] . "<br>";
    }
} else {
    echo "0 results";
}
?>
