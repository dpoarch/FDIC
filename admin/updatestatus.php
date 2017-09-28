<?php
include("../config.php");

if(mysqli_query($conn, "UPDATE `webcasts` SET  `visibility` =  '".$_GET["v"]."' WHERE `id` = ".$_GET["id"]." LIMIT 1")){
	echo"success";
}else{
	echo"failed";
}
?>