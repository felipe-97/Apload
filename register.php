<?php
 include ("database.php");
$idNumber = $_POST ['ide'];
//get file_name
$file_name = $_FILES['photo'] ['name'];
//get file_type
$file_type = $_FILES['photo']['type'];
//get file_size (Defaut: KB )
$file_size = $_FILES['photo']['size']/1024;
//get temp folder get_included_files
$file_tmp  =  $_FILES['photo']['tmp_name'];

//echo $idNumber. "<br>".$file_name. "<br>".$file_type. "<br>".$file_size. "<br>".$file_tmp;

move_uploaded_file($_FILES['photo']['tmp_name'],"photo/".$_FILES['photo']['name']);
//Query
$photo_url_db="photo/".$_FILES['photo']['name'];
$sql="INSERT INTO users  (id_number,photo) VALUES ($idNumber,'$photo_url_db')";
//Execute query
$conn->query($sql);

echo "<script
language='javascript'>alert ('::: User has been registered :::')</script>";
header("Refresh:0;url=index.html");

 ?>
