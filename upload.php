<?php
$target_dir = "img/";
$target_file = $target_dir . basename($_FILES["thumbnail"]["name"]);
move_uploaded_file($_FILES["thumbnail"]["tmp_name"], $target_file);
echo json_encode(array("status" => "success"));
?>