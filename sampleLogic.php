<?php

$sampleConn = mysqli_connect("localhost", "root", "", "sample");
$tid = uniqid("tr");
$gid = uniqid("gd");


// if (!$sampleConn) {
//     echo 'Not connected';
// } else {
//     echo 'Connected HI';
// }

if (isset($_REQUEST["enlistedForTravel"])) {

    //for Profile
    $travelID = $tid;
    $travelTName = $_REQUEST["travelProfileName"];
    $travelCity = $_REQUEST["travelCity"];
    $travelContactNum = $_REQUEST["travelContactNumber"];
    $travelLicenseNum = $_REQUEST["travelLicenseNumber"];
    $travelVehicleNum = $_REQUEST["vehicleNumberT"];

    //vehicleDetails
    $travelReferredID = $travelID;
    $travelType = $_REQUEST["travelType"];
    $travelPowerSource = $_REQUEST["travelPowerSource"];
    $travelACType = $_REQUEST["acTypeTravel"];
    $travelCapacity = $_REQUEST["travelCapacity"];
    $travelVehicleNum = $_REQUEST["vehicleNumberT"];

    // if($travelLicenseNum == )

    //Travel profile SQL
    $sqlSampleTravelProfile = "INSERT INTO profiletravel(TravelID, name, city, contactNum, 
        LicenseNum, vehicleNum) VALUES('$travelID', '$travelTName', '$travelCity',
        '$travelContactNum', '$travelLicenseNum', '$travelVehicleNum')";

    mysqli_query($sampleConn, $sqlSampleTravelProfile);



    //vehicleDetails SQL
    $sqlSampleVehicleInfo = "INSERT INTO vehicledetailstravel(ReferredID, type, powerSource,
        acType, capacity, vehicleNum) VALUES('$travelReferredID', '$travelType', '$travelPowerSource',
        '$travelACType', '$travelCapacity', '$travelVehicleNum')";

    $queryTravelVehicleDetails = mysqli_query($sampleConn, $sqlSampleVehicleInfo);



    header("Location: transporterTravel.php?profileInfoForTravel");
    exit();
} else if (isset($_REQUEST["enlistedForGoods"])) {
    $goodsID = $gid;
    $goodsTName = $_REQUEST["goodsProfileName"];
    $goodsCity = $_REQUEST["goodsCity"];
    $goodsTPhoneNum = $_REQUEST["goodsContactNumber"];
    $goodsLicenseNum = $_REQUEST["goodsLicenseNumber"];
    $goodsVehicleNum = $_REQUEST["vehicleNumber"];


    //vehicle details
    $goodsReferredID = $goodsID;
    $goodsType = $_REQUEST["goodsType"];
    $goodsPowerSource = $_REQUEST["goodsPowerSource"];
    $goodsGVW = $_REQUEST["gvw"];
    $goodsVehicleNum = $_REQUEST["vehicleNumber"];

    //Goods Profile SQL

    $sqlSampleGoodsProfile = "INSERT INTO profilegoods(GoodsID, name, city, contactNum, 
        LicenseNum, vehicleNum) VALUES ('$goodsID', '$goodsTName', '$goodsCity',
        '$goodsTPhoneNum', '$goodsLicenseNum','$goodsVehicleNum')";

    mysqli_query($sampleConn, $sqlSampleGoodsProfile);

    //vehicle details SQL

    $sqlSampleVehicleInfo = "INSERT INTO vehicledetailsgoods(ReferredID, type, powerSource,
        gvw, vehicleNum) VALUES('$goodsReferredID', '$goodsType', '$goodsPowerSource', 
        '$goodsGVW', '$goodsVehicleNum')";

    mysqli_query($sampleConn, $sqlSampleVehicleInfo);

    header("Location: reboot.php?profileInfoForGoods");
    exit();

    //Goods profile SQL

}

//Admin Login

if (isset($_REQUEST['adminLogin'])) {

    $storeUserName = $_REQUEST['adminUserName'];
    $storePassword = $_REQUEST['adminPassword'];



    $sqlAdmin = "INSERT INTO admin(adminName, password) VALUES('$storeUserName', '$storePassword')";

    

    if ($storeUserName == "newadmin" && $storePassword == "logadmin7710") {
    
        $queryForAdmin = mysqli_query($sampleConn, $sqlAdmin);
        $count = mysqli_num_rows($queryForAdmin);

        echo "Log In successful";
        header("Location: index.php?data=travelData");
        exit();
    } else {
        echo "Please enter the right credentials";
    }
    



}

//Viewing the profile for travel or goods

if (isset($_REQUEST['profileInfoForTravel'])) {
    $sqlViewProfile = "SELECT * FROM profiletravel INNER JOIN vehicledetailstravel ON
    profiletravel.TravelID = vehicledetailstravel.ReferredID
    WHERE TravelID = (SELECT MAX(TravelID) FROM profiletravel)";

    $queryTravelProfile = mysqli_query($sampleConn, $sqlViewProfile);
} else if (isset($_REQUEST['profileInfoForGoods'])) {
    $sqlViewProfile = "SELECT * FROM profilegoods INNER JOIN vehicledetailsgoods ON 
    profilegoods.GoodsID = vehicledetailsgoods.ReferredID 
    WHERE GoodsID = (SELECT MAX(GoodsID) FROM profilegoods)";

    $queryGoodsProfile = mysqli_query($sampleConn, $sqlViewProfile);
}


//To search for travelling using join
if (isset($_REQUEST['findForTravel'])) {

    $selectedTravelCity = $_REQUEST['clientTravelCity'];
    $selectedTravelType = $_REQUEST['clientTravelType'];
    $selectedTravelPowerSource = $_REQUEST['clientTravelPowerSource'];
    $selectedPassengers = $_REQUEST['clientTravelCapacity'];
    $selectedACType =  $_REQUEST['acTypeTravel'];

    $sqlClientTravel = "SELECT * FROM profiletravel INNER JOIN vehicledetailstravel ON
    profileTravel.TravelID = vehicledetailstravel.ReferredID
    WHERE city = '$selectedTravelCity' 
    AND type = '$selectedTravelType' AND 
    powerSource='$selectedTravelPowerSource' AND 
    capacity >= '$selectedPassengers' AND 
    acType = '$selectedACType'";

    $queryClientTravel = mysqli_query($sampleConn, $sqlClientTravel);
} else if (isset($_REQUEST['findForGoods'])) {

    $selectedGoodsCity = $_REQUEST['clientGoodsCity'];
    $selectedGoodsType = $_REQUEST['clientGoodsType'];
    $selectedGoodsPowerSource = $_REQUEST['clientGoodsPowerSource'];
    $goodsWeight = $_REQUEST['clientGoodsWeight'];

    $sqlClientGoods = "SELECT * FROM profilegoods INNER JOIN vehicledetailsgoods ON 
    profilegoods.GoodsID = vehicledetailsgoods.ReferredID 
    WHERE city = '$selectedGoodsCity' 
    AND type = '$selectedGoodsType' AND 
    powerSource='$selectedGoodsPowerSource' AND 
    gvw >= '$goodsWeight'";

    $queryClientGoods = mysqli_query($sampleConn, $sqlClientGoods);
}


//get data through getID
if (isset($_REQUEST['getTravelID'])) {
    $getID = $_REQUEST['getTravelID'];

    $sqlGetId = "SELECT * FROM profiletravel INNER JOIN vehicledetailstravel ON
    profileTravel.vehicleNum = vehicledetailstravel.vehicleNum 
    WHERE TravelID = '$getID'";

    $queryForId = mysqli_query($sampleConn, $sqlGetId);
} else if (isset($_REQUEST['getGoodsID'])) {
    $getID = $_REQUEST['getGoodsID'];

    $sqlGetId = "SELECT * FROM profilegoods INNER JOIN vehicledetailsgoods ON
    profilegoods.vehicleNum = vehicledetailsgoods.vehicleNum 
    WHERE GoodsID = '$getID'";

    $queryForId = mysqli_query($sampleConn, $sqlGetId);
}



//updating data through admin
if (isset($_REQUEST['updateTravelData'])) {
    if ($_REQUEST['editTravelID']) {
        $id = $_REQUEST['editTravelID'];
        $updatedName = $_REQUEST['name'];
        $updatedCity = $_REQUEST['city'];
        $updatedContactNum = $_REQUEST['contactNum'];
        $updatedLicenseNum = $_REQUEST['licenseNum'];
        $updatedVehicleType = $_REQUEST['type'];
        $updatedPowerSource = $_REQUEST['powerSource'];
        $updatedacType = $_REQUEST['acType'];
        $updatedCapacity = $_REQUEST['capacity'];
        $updatedVehicleNum = $_REQUEST['vehicleNum'];

        $sqlUpdate1 = "UPDATE profiletravel SET name = '$updatedName', city='$updatedCity', contactNum='$updatedContactNum',
        LicenseNum='$updatedLicenseNum', vehicleNum='$updatedVehicleNum' WHERE TravelID = '$id'";

        $sqlUpdate2 = "UPDATE vehicledetailstravel SET type= '$updatedVehicleType', powerSource='$updatedPowerSource',
        acType='$updatedacType', capacity='$updatedCapacity' WHERE ReferredID='$id'";

        $queryUpdateProfileT = mysqli_query($sampleConn, $sqlUpdate1);
        $queryUpdateVehicleT = mysqli_query($sampleConn, $sqlUpdate2);


        header("Location: index.php?data=travelData");
        exit();
    }
} else if (isset($_REQUEST['updateGoodsData'])) {
    if ($_REQUEST['editGoodsID']) {
        $id = $_REQUEST['editGoodsID'];
        $updatedName = $_REQUEST['name'];
        $updatedCity = $_REQUEST['city'];
        $updatedContactNum = $_REQUEST['contactNum'];
        $updatedLicenseNum = $_REQUEST['licenseNum'];
        $updatedVehicleType = $_REQUEST['type'];
        $updatedPowerSource = $_REQUEST['powerSource'];
        $updatedGVW = $_REQUEST['gvw'];
        $updatedVehicleNum = $_REQUEST['vehicleNum'];



        $sqlUpdate1 = "UPDATE profilegoods SET name = '$updatedName', city='$updatedCity', contactNum='$updatedContactNum',
        LicenseNum='$updatedLicenseNum', vehicleNum='$updatedVehicleNum' WHERE GoodsID = '$id'";

        $sqlUpdate2 = "UPDATE vehicledetailsgoods SET type= '$updatedVehicleType', powerSource='$updatedPowerSource',
        gvw='$updatedGVW' WHERE ReferredID='$id'";

        $queryUpdateProfileG = mysqli_query($sampleConn, $sqlUpdate1);
        $queryUpdateVehicleG = mysqli_query($sampleConn, $sqlUpdate2);

        header("Location: index.php?data=goodsData");
        exit();
    }
}
//end editing through admin
