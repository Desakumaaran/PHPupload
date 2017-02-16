<?php
include "config.php";
if(isset($_GET['id'])){
 
    $id = $_GET['id'];
    $image = $_POST['image'];
    
$stmt = $conn->prepare("update projects_upload set image=? where id=?");
$stmt->bind_param('ss', $image, $id);
    

if($stmt->execute()){
}
}
?>
