<?php
//including the database connection file
include("config.php");

//getting id of the data from url
$id = $_REQUEST['getGoodsID'];

//deleting the row from table
$resultTravel = mysqli_query($mysqli, "DELETE FROM profilegoods WHERE GoodsID=$id");

//redirecting to the display page (index.php in our case)
header("Location:index.php?data=goodsData");
?>

