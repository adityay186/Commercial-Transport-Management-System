<?php
include "../pages/sampleLogic.php";
?>

<html>

<head>
	<title>Edit Details</title>
	<header class="text-gray-400 bg-gray-900 body-font">
		<div class="container mx-auto flex flex-wrap p-3 flex-col md:flex-row items-center">
			<a class="flex title-font font-medium items-center text-white mb-2 md:mb-0" id="home">
				<svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-10 h-10 text-white p-2 bg-indigo-500 rounded-full" viewBox="0 0 24 24">
					<path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"></path>
				</svg>
				<!-- <img src="./images/logo1.PNG"> -->
				<span class="ml-3 text-xl">CTMS</span>
			</a>
			<nav class="md:ml-auto flex flex-wrap items-center text-base justify-center">
				<a href="../pages/homepage.php" class="inline-flex text-white bg-indigo-500 border-0 py-1 px-3 focus:outline-none hover:bg-indigo-600 rounded text-md">Home Page</a>

			</nav>

		</div>
	</header>
	<link rel="stylesheet" href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>

<body class="bg-gray-300">
	<?php
	if (isset($_REQUEST['editTravelID'])) {
		$id = $_REQUEST['editTravelID'];
		$sqlEditTravelRec = "SELECT * FROM profiletravel INNER JOIN vehicledetailstravel 
    	WHERE TravelID = '$id' AND profileTravel.vehicleNum = vehicledetailstravel.vehicleNum";

		$queryEditTravel = mysqli_query($sampleConn, $sqlEditTravelRec);
	?>
		<?php foreach ($queryEditTravel as $i) { ?>
			<section class="text-gray-600 body-font relative">
				<div class="container px-5 py-20 mx-auto">
					<div class="flex flex-col text-center w-full mb-12">
						<h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900">Update Transporter Details</h1>
						<!-- <p class="lg:w-2/3 mx-auto leading-relaxed text-base">Whatever cardigan tote bag tumblr hexagon brooklyn asymmetrical gentrify.</p> -->
					</div>

					<div class="lg:w-1/2 md:w-2/3 mx-auto">
						<div class="flex flex-wrap -m-2">


							<form name="form1" method="POST">
								<div class="p-2 w-1/2">
									<div class="relative">
										<label for="name" class="form-label text-gray-600">Name</label>
										<input type="text" id="name" name="name" class="w-half bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out" value="<?php echo $i['name']; ?>">
									</div>
								</div>
								<div class="p-2 w-1/3">
									<div class="relative">
										<label for="forCity" class="form-label text-gray-600">City</label>
										<input type="text" id="forCity" name="city" class="w-half bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out" value="<?php echo $i['city']; ?>">
									</div>
								</div>
								<div class="p-2 w-1/2">
									<div class="relative">
										<label for="forContactNum" class="form-label text-gray-600">Contact Number</label>
										<input type="text" id="forContactNum" name="contactNum" class="w-half bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out" value="<?php echo $i['contactNum']; ?>">
									</div>
								</div>

								<div class="p-2 w-1/2">
									<div class="relative">
										<label for="forLicenseNum" class="form-label text-gray-600">License Number</label>
										<input type="text" id="forLicenseNum" name="licenseNum" class="w-half bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out" value="<?php echo $i['LicenseNum']; ?>">
									</div>
									&nbsp;
								</div>
								<!-- <p>Vehicle Details</p> -->
								<div class="p-2 w-1/2">
									<div class="relative">
										<label for="forType" class="form-label text-gray-600">Vehicle Type</label>
										<input type="text" id="forType" name="type" class="w-half bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out" value="<?php echo $i['type']; ?>">
									</div>
								</div>
								<div class="p-2 w-1/2">
									<div class="relative">
										<label for="forPowerSrc" class="form-label text-gray-600">Vehicle Power Source</label>
										<input type="text" id="forPowerSrc" name="powerSource" class="w-half bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out" value="<?php echo $i['powerSource']; ?>">
									</div>
								</div>
								<div class="p-2 w-1/2">
									<div class="relative">
										<label for="forACTy" class="form-label text-gray-600">AC Type</label>
										<input type="text" id="forACTy" name="acType" class="w-half bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out" value="<?php echo $i['acType']; ?>">
									</div>
								</div>
								<div class="p-2 w-1/2">
									<div class="relative">
										<label for="forCapacity" class="form-label text-gray-600">Vehicle Capacity</label>
										<input type="text" id="forCapacity" name="capacity" class="w-half bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out" value="<?php echo $i['capacity']; ?>">
									</div>
								</div>
								<div class="p-2 w-1/2">
									<div class="relative">
										<label for="forVehicleNum" class="form-label text-gray-600">Vehicle Number</label>
										<input type="text" id="forVehicleNum" name="vehicleNum" class="w-half bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out" value="<?php echo $i['vehicleNum']; ?>">
									</div>
								</div>

								<div class="container px-2 py-8 mx-auto">
									<input type="hidden" name="editTravelID" value=<?php echo $_REQUEST['editTravelID']; ?>>
									<input type="submit" class="btn btn-primary" name="updateTravelData" value="Update">
								</div>
							</form>


						</div>
					</div>
				</div>
			</section>
		<?php } ?>
	<?php } else if (isset($_REQUEST['editGoodsID'])) {
		$id = $_REQUEST['editGoodsID'];
		$sqlEditGoodsRec = "SELECT * FROM profilegoods INNER JOIN vehicledetailsgoods
		WHERE GoodsID = '$id' AND profilegoods.vehicleNum = vehicledetailsgoods.vehicleNum";

		$queryEditGoods = mysqli_query($sampleConn, $sqlEditGoodsRec);

		// $queryEditTravel = mysqli_query($sampleConn, $sqlEditTravelRec);
	?>
		<?php foreach ($queryEditGoods as $i) { ?>
			<section class="text-gray-600 body-font relative">
				<div class="container px-5 py-20 mx-auto">
					<div class="flex flex-col text-center w-full mb-12">
						<h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900">Update Transporter Details</h1>
						<!-- <p class="lg:w-2/3 mx-auto leading-relaxed text-base">Whatever cardigan tote bag tumblr hexagon brooklyn asymmetrical gentrify.</p> -->
					</div>

					<div class="lg:w-1/2 md:w-2/3 mx-auto">
						<div class="flex flex-wrap -m-2">
							<form name="form1" method="POST">
								<div class="p-2 w-1/2">
									<div class="relative">
										<label for="name" class="form-label text-gray-600">Name</label>
										<input type="text" id="name" name="name" class="w-half bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out" value="<?php echo $i['name']; ?>">
									</div>
								</div>
								<div class="p-2 w-1/3">
									<div class="relative">
										<label for="city" class="form-label text-gray-600">City</label>
										<input type="text" id="forCity" name="city" class="w-half bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out" value="<?php echo $i['city']; ?>">
									</div>
								</div>
								<div class="p-2 w-1/2">
									<div class="relative">
										<label for="forcontactNum" class="form-label text-gray-600">Contact Number</label>
										<input type="text" id="forcontactNum" name="contactNum" class="w-half bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out" value="<?php echo $i['contactNum']; ?>">
									</div>
								</div>

								<div class="p-2 w-1/2">
									<div class="relative">
										<label for="forlicenseNum" class="form-label text-gray-600">License Number</label>
										<input type="text" id="forlicenseNum" name="licenseNum" class="w-half bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out" value="<?php echo $i['LicenseNum']; ?>">
									</div>
									&nbsp;
								</div>
								<!-- <p>Vehicle Details</p> -->
								<div class="p-2 w-1/2">
									<div class="relative">
										<label for="forType" class="form-label text-gray-600">Vehicle Type</label>
										<input type="text" id="forType" name="type" class="w-half bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out" value="<?php echo $i['type']; ?>">
									</div>
								</div>
								<div class="p-2 w-1/2">
									<div class="relative">
										<label for="forPowerSrc" class="form-label text-gray-600">Vehicle Power Source</label>
										<input type="text" id="forPowerSrc" name="powerSource" class="w-half bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out" value="<?php echo $i['powerSource']; ?>">
									</div>
								</div>
								<div class="p-2 w-1/2">
									<div class="relative">
										<label for="forGVW" class="form-label text-gray-600">Vehicle GVW</label>
										<input type="text" id="forGVW" name="gvw" class="w-half bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out" value="<?php echo $i['gvw']; ?>">
									</div>
								</div>

								<div class="p-2 w-1/2">
									<div class="relative">
										<label for="forvehicleNu" class="form-label text-gray-600">Vehicle Number</label>
										<input type="text" id="forvehicleNum" name="vehicleNum" class="w-half bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out" value="<?php echo $i['vehicleNum']; ?>">
									</div>
								</div>


								<div class="container px-2 py-8 mx-auto">
									<input type="hidden" name="editGoodsID" value=<?php echo $_REQUEST['editGoodsID']; ?>>
									<input class="btn btn-primary" type="submit" name="updateGoodsData" value="Update">
								</div>
							</form>

						</div>
					</div>
				</div>
			</section>
		<?php } ?>
	<?php } ?>
</body>

</html>

<?php
/*

if (isset($_REQUEST['updateGoodsData'])) {

$id = $_REQUEST['editGoodsID'];

$name = $_REQUEST['name'];
$city = $_REQUEST['city'];
$contactNum = $_REQUEST['contactNum'];
$licenseNum = $_REQUEST['licenseNum'];
$type = $_REQUEST['type'];
$powerSource = $_REQUEST['powerSource'];
$gvw = $_REQUEST['gvw'];
$vehicleNum = $_REQUEST['vehicleNum'];
// $licenseNum = mysqli_real_escape_string($mysqli, $_REQUEST['LicenseNum']);	

// checking empty fields
if (
	empty($name) || empty($city)|| empty($contactNum) || empty($licenseNum) || empty($vehicleNum) || empty($type) 
	|| empty($powerSource) || empty($gvw)
	// || empty($licenseNum)
) {

	if (empty($name)) {
		echo "<font color='red'>Name field is empty.</font><br/>";
	}

	if (empty($city)) {
		echo "<font color='red'>City field is empty.</font><br/>";
	}
	if (empty($contactNum)) {
		echo "<font color='red'>City field is empty.</font><br/>";
	}if (empty($licenseNum)) {
		echo "<font color='red'>City field is empty.</font><br/>";
	}if (empty($vehicleNum)) {
		echo "<font color='red'>City field is empty.</font><br/>";
	}if (empty($type)) {
		echo "<font color='red'>City field is empty.</font><br/>";
	}if (empty($powerSource)) {
		echo "<font color='red'>City field is empty.</font><br/>";
	}if (empty($city)) {
		echo "<font color='red'>City field is empty.</font><br/>";
	}

	// if(empty($licenseNum)) {
	// 	echo "<font color='red'>License Number field is empty.</font><br/>";
	// }		
} 
// else {
	//updating the table
	// $result = mysqli_query($mysqli, "UPDATE profiletravel SET name='$name', city='$city', 
	// WHERE TransporterID=$id");


	//redirectig to the display page. In our case, it is index.php
	// header("Location: index.php");
// }
}
*/
?>