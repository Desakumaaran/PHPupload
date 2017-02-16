<?php
include "config.php";

$image = $_POST['image'];

if(true){
$stmt = $conn->prepare("INSERT INTO projects_upload VALUES ('',?)");
$stmt->bind_param('s', $image);

if($stmt->execute()){
}
}
?>
