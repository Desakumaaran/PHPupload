<?php
$conn = new mysqli("localhost", "root", "", "imageupload");
if ($conn->connect_errno) {
    echo "Failed to connect to MySQL: (" . $conn->connect_errno . ") " . $conn->connect_error;
}
?>