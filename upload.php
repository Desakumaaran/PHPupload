<?php
if(is_array($_FILES)) {
if(is_uploaded_file($_FILES['userImage']['tmp_name'])) {
$sourcePath = $_FILES['userImage']['tmp_name'];
$targetPath = "uploads/".$_FILES['userImage']['name'];
    //target upolad folder
if(move_uploaded_file($sourcePath,$targetPath)) {
?>
<img src="<?php echo "";echo $targetPath; ?>" width="100px" height="100px" />
<?php
}
}
}
?>