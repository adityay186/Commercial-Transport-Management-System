<?php
//including the database connection file
include "../pages/sampleLogic.php";

//deleting a record from admin page
if (isset($_REQUEST['delTravelID'])) {
    $id = $_REQUEST['delTravelID'];

    $sqlDeleteTravelRec = "DELETE FROM profileTravel WHERE TravelID ='$id'";

    $queryDelTravel = mysqli_query($sampleConn, $sqlDeleteTravelRec);

    //redirecting to the display page (index.php in our case)
    header("Location:index.php?data=travelData");
}else if(isset($_REQUEST['delGoodsID'])){
    $id = $_REQUEST['delGoodsID'];

    $sqlDelGoodsRec = "DELETE FROM profileGoods WHERE GoodsID='$id'";

    $queryDelGoods = mysqli_query($sampleConn, $sqlDelGoodsRec);
    header("Location:index.php?data=goodsData");
}
