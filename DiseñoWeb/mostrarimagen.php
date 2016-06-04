<?php
include('conectar.php');
$id = $_GET['id_couch'];
$sql = "SELECT imagen, tipoimagen 
FROM couch
WHERE id_couch=".$id."";
$result = mysqli_query($link, $sql);
$row = mysqli_fetch_array($result); 
header("Content-type:".$row['tipoimagen']);
echo $row['imagen'];
?>