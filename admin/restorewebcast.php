<?php 
include("../config.php");

$id = $_GET["id"];

mysqli_query($conn, "UPDATE `webcasts` SET `flag` = 'Live' WHERE `id` = " . $id);

header("Location: index.php");
?>