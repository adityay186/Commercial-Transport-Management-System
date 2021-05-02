<?php 
// including the database connection file
// include_once("config.php"); 
include "../pages/sampleLogic.php";
?>

<?php
//getting id from url
$id = $_REQUEST['getGoodsID'];

//selecting data associated with this particular id
// $result = mysqli_query($mysqli, "SELECT * FROM profiletravel WHERE TransporterID=$id ");

// while ($res = mysqli_fetch_array($result)) {
// 	$name = $res['name'];
// 	$city = $res['city'];

// }


?>
<html>

<head>
	<title>Edit Data</title>
	<!-- <link rel="stylesheet" href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous"> -->
</head>

<body>

	<a href="index.php">&nbsp;&nbsp;Go Back</a>
	<br /><br />
	<?php foreach($queryForId as $i){?>
			<form name="form1" method="POST">
			<!-- action="edit.php" -->
			<table border="0">
				<tr>
					<td>Name</td>
					<td><input type="text" name="name" value="<?php echo $i['name']; ?>"></td>
				</tr> 
				<tr>
					<td>City</td>
					<td><input type="text" name="city" value="<?php echo $i['city']; ?>"></td>
				</tr>

				<tr>
					<td>Contact Number</td>
					<td><input type="number" name="contactNum" value="<?php echo $i['contactNum']; ?>"></td>
				</tr>
				<tr>
					<td>License Number</td>
					<td><input type="text" name="licenseNum" value="<?php echo $i['LicenseNum']; ?>"></td>

				</tr>
			
				<tr>
					<td>Vehicle Type</td>
					<td><input type="text" name="type" value="<?php echo $i['type']; ?>"></td>
				</tr>
				<tr>
					<td>Power Source</td>
					<td><input type="text" name="powerSource" value="<?php echo $i['powerSource']; ?>"></td>
				</tr>
				<tr>
					<td>GVW</td>
					<td><input type="text" name="gvw" value="<?php echo $i['gvw']; ?>"></td>
				</tr>
				<tr>
					<td>Vehicle Number</td>
					<td><input type="text" name="vehicleNum" value="<?php echo $i['vehicleNum']; ?>"></td>
				</tr>
				<!-- <tr> 
					<td>License Number</td>
					<td><input type="text" name="licenseNumber" value="<?php echo $licenseNum; ?>"></td>
				</tr> -->
				<tr>
					<td>
						&nbsp;
					</td>
				</tr>
				<tr>
					<td><input type="hidden" name="getGoodsID" value=<?php echo $_REQUEST['getGoodsID']; ?>></td>
					<td><input type="submit" name="update" value="Update"></td>
				</tr>
			</table>
		</form>
	<?php }?>


</body>

</html>


<?php



?>


















<?php
/*

if (isset($_REQUEST['updated'])) {

$id = $_REQUEST['ID'];

$name = $_REQUEST['name'];
$city = $_REQUEST['city'];
// $licenseNum = mysqli_real_escape_string($mysqli, $_REQUEST['LicenseNum']);	

// checking empty fields
if (
	empty($name) || empty($city)
	// || empty($licenseNum)
) {

	if (empty($name)) {
		echo "<font color='red'>Name field is empty.</font><br/>";
	}

	if (empty($city)) {
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