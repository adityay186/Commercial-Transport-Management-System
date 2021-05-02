<?php
//including the database connection file
include_once("config.php");

//fetching data in descending order (lastest entry first)
//$resultTravel = mysql_query("SELECT * FROM users ORDER BY id DESC"); // mysql_query is deprecated
$resultTravel = mysqli_query($mysqli, "SELECT * FROM profiletravel INNER JOIN vehicledetailstravel 
WHERE profiletravel.vehicleNum = vehicledetailstravel.vehicleNum"); // using mysqli_query instead

$resultGoods = mysqli_query($mysqli, "SELECT * FROM profilegoods INNER JOIN vehicledetailsgoods
WHERE profilegoods.vehicleNum = vehicledetailsgoods.vehicleNum");
?>

<html>

<head>

	<title>Homepage</title>
	<link rel="stylesheet" href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
	<style>
		table,
		th,
		td {
			border: 1px solid black;
			border-collapse: collapse;
			margin: 8px;
		}

		th,
		td {
			padding: 4px;
			text-align: center;
		}
	</style>
</head>

<body>

	<header class="text-gray-400 bg-gray-900 body-font">
		<div class="container mx-auto flex flex-wrap p-3 flex-col md:flex-row items-center">
			<a class="flex title-font font-medium items-center text-white mb-2 md:mb-0">
			<img  src = "../images/ctms.webp" width="40">
				<span class="ml-3 text-xl">CTMS</span>
			</a>
			<nav class="md:ml-auto flex flex-wrap items-center text-base justify-center">
			<a href="../transporterFiles/transporterTravel.php" class="inline-flex text-white bg-indigo-500 border-0 py-1 px-3 focus:outline-none hover:bg-indigo-600 rounded text-md">Add New Data</a>
			&nbsp;&nbsp;&nbsp;<a href="../pages/homepage.php" class="inline-flex text-white bg-indigo-500 border-0 py-1 px-3 focus:outline-none hover:bg-indigo-600 rounded text-md">Logout</a>
				
                 
			</nav>
			
		</div>
	</header>
	<br>
	<!-- <a href="../transporterFiles/transporterTravel.php">Add New Data</a><br/><br/> -->
	<!-- <section class="text-gray-600 body-font overflow-hidden"> -->
	<div class="container">
	<center>
		<p class="text-4xl font-medium text-gray-900 title-font mb-2">Manage Transporter Data</p>
	</center>
	<?php
	if (isset($_REQUEST['info'])) { ?>
		<?php if ($_REQUEST['info'] == 'updated') { ?>
			<div class="alert">
				New Changes made!
			</div>
			<?php header("Location: index.php?data=travelData") ?>

		<?php } ?>
	<?php } ?>
	<!-- ?> -->
	<?php
	if (isset($_REQUEST['data'])) { ?>
		<?php if ($_REQUEST['data'] == 'travelData') { ?>
			<div class="py-6 flex flex-wrap md:flex-nowrap">

				<table border="7px" style="width:100%">
					<!-- bgcolor='#CCCCCC' -->
					<tr bgcolor='#cacdd1'>
						<th>Transporter ID</th>
						<th>Name</th>
						<th>City</th>
						<th>Ph. Number</th>
						<th>License Number</th>

						<th>Type</th>
						<th>Power Source</th>
						<th>AC Type</th>
						<th>Capacity</th>
						<th>Vehicle Number</th>
						<th>Update/ Delete</th>
					</tr>
					<?php
					//while($res = mysql_fetch_array($resultTravel)) { // mysql_fetch_array is deprecated, we need to use mysqli_fetch_array 
					while ($res = mysqli_fetch_array($resultTravel)) {
						echo "<tr>";
						echo "<td>" . $res['TravelID'] . "</td>";
						echo "<td>" . $res['name'] . "</td>";
						echo "<td>" . $res['city'] . "</td>";
						echo "<td>" . $res['contactNum'] . "</td>";
						echo "<td>" . $res['LicenseNum'] . "</td>";
						echo "<td>" . $res['type'] . "</td >";
						echo "<td>" . $res['powerSource'] . "</td>";
						echo "<td>" . $res['acType'] . "</td>";
						echo "<td>" . $res['capacity'] . "</td>";
						echo "<td>" . $res['vehicleNum'] . "</td>";
						echo "<td><a href=\"edit.php?editTravelID=$res[TravelID]\">Edit</a> | <a href=\"delete.php?delTravelID=$res[TravelID]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";
						echo "</tr>";
					}
					?>
				</table>
				&nbsp;
				&nbsp;
				&nbsp;

			</div>
			&nbsp; &nbsp; <a href="index.php?data=goodsData" class="inline-flex text-white bg-gray-900 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded text-lg">View Goods Data</a>
		<?php } ?>
		<?php
		if ($_REQUEST['data'] == 'goodsData') { ?>
			<div class="py-6 flex flex-wrap md:flex-nowrap">

				<table border="7px" style="width:100%">
					<!-- bgcolor='#CCCCCC' -->
					<tr bgcolor='#cacdd1'>
						<th>Transporter ID</th>
						<th>Name</th>
						<th>City</th>
						<th>Ph. Number</th>
						<th>License Number</th>

						<th>Type</th>
						<th>Power Source</th>
						<th>GVW</th>
						<th>Vehicle Number</th>
						<th>Update/ Delete</th>
					</tr>
					<?php
					//while($res = mysql_fetch_array($resultTravel)) { // mysql_fetch_array is deprecated, we need to use mysqli_fetch_array 
					while ($res = mysqli_fetch_array($resultGoods)) {
						echo "<tr>";
						echo "<td>" . $res['GoodsID'] . "</td>";
						echo "<td>" . $res['name'] . "</td>";
						echo "<td>" . $res['city'] . "</td>";
						echo "<td>" . $res['contactNum'] . "</td>";
						echo "<td>" . $res['LicenseNum'] . "</td>";
						echo "<td>" . $res['type'] . "</td >";
						echo "<td>" . $res['powerSource'] . "</td>";
						echo "<td>" . $res['gvw'] . "</td>";
						echo "<td>" . $res['vehicleNum'] . "</td>";
						echo "<td><a href=\"edit.php?editGoodsID=$res[GoodsID]\">Edit</a> | <a href=\"delete.php?delGoodsID=$res[GoodsID]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";
						echo "</tr>";
					}
					?>
				</table>
				&nbsp;
				&nbsp;
				&nbsp;

			</div>
			&nbsp; &nbsp; <a href="index.php?data=travelData" class="inline-flex text-white bg-gray-900 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded text-lg">View Travel Data</a>
		<?php } ?>

	<?php } ?>



	<!-- </section> -->
</body>

</html>