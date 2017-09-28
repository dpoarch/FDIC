<?php 
include("../config.php");

$id = $_GET["id"];

$image = mysqli_fetch_array(mysqli_query($conn, "SEECT * FROM webcasts WHERE `id` = " . $id));

$image["thumb"];
unlink($image["thumb"]);
mysqli_query($conn, "DELETE FROM `webcasts` WHERE `id` = " . $id);

header("Location: index.php");
?>