<?php
// include "./pages/newLogic.php";
include "../pages/sampleLogic.php";

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">


</head>

<body class="text-gray-400 bg-gray-200 body-font">
    <header class="text-gray-400 bg-gray-900 body-font">
        <div class="container mx-auto flex flex-wrap p-3 flex-col md:flex-row items-center">
            <a class="flex title-font font-medium items-center text-white mb-2 md:mb-0" id="home">
         
                <img  src = "../images/ctms.webp" width="40">
                <span class="ml-3 text-xl">CTMS</span>
            </a>
            <nav class="md:ml-auto flex flex-wrap items-center text-base justify-center">
                <a href="../pages/homepage.php" class="inline-flex text-white bg-indigo-500 border-0 py-1 px-3 focus:outline-none hover:bg-indigo-600 rounded text-md">Home Page</a>

        </div>
    </header>

    <?php
    if (isset($_REQUEST['profileInfoForGoods'])) { ?>
        <section class="text-gray-600 body-font">
            <div class="container mx-auto flex flex-col px-5 py-20 justify-center items-center">
                <img class="lg:w-1/6 md:w-3/9 w-5/8 mb-10 object-cover object-center rounded" src="../images/profile2.png">
                <div class="w-full md:w-2/3 flex flex-col mb-16 items-center text-center">


                    <?php foreach ($queryGoodsProfile as $q) {
                        echo "Registration successful";
                    ?>
                        <div class="flex-grow sm:text-left text-left mt-6 mx-14 sm:mt-0">



                            <center>
                                <h2 class="text-gray-900 text-2xl title-font font-medium mb-2">Name: <?php echo $q['name']; ?></h2>
                            </center>
                            <p></p>

                            <p class="leading-relaxed text-gray-700">City: <?php echo $q['city'] ?></p>
                            <p class="leading-relaxed text-gray-800">Contact Number: <?php echo $q['contactNum'] ?></p>
                            <p class="leading-relaxed text-gray-800">License Number: <?php echo $q['LicenseNum'] ?></p>
                            <br>
                            <u>
                                <center>
                                    <h5 class="text-gray-900 text-lg title-font font-small mb-2">Vehicle Details</h5>
                                </center>
                            </u>
                            <p class="leading-relaxed text-gray-800">Vehicle Type: <?php echo $q['type'] ?></p>
                            <p class="leading-relaxed text-gray-800">Power Source: <?php echo $q['powerSource'] ?></p>
                            <p class="leading-relaxed text-gray-800">Vehicle GVW: <?php echo $q['gvw'] ?></p>

                            <p class="leading-relaxed text-gray-800">Vehicle Number: <?php echo $q['vehicleNum'] ?></p>

                        </div>
                    <?php } ?>




                </div>
            </div>
        </section>
    <?php } else { ?>
        <section>
            <div class="container px-4 py-20 mx-auto">
                <div class="flex flex-col text-center w-full mb-10">
                    <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900">Goods</h1>
                    <p class="lg:w-2/3 mx-auto leading-relaxed text-gray-800 ">Enlist yourself as a transporter on our website by filling out the required details and find opportunities to be hired as soon as possible.</p>
                </div>
                <div class="flex lg:w-2/3 w-full flex-col mx-auto px-4 sm:px-0 items-end sm:space-x-2 sm:space-y-0 space-y-4">




                    <form class="row g-3" method="POST">

                        <center>
                            <div class="col-md-4">
                                <label for="inputCity" class="form-label text-gray-800">City</label>
                                <select id="inputCity" class="form-select" name="goodsCity">
                                    <option>---</option>
                                    <option>Pune</option>
                                    <option>Mumbai</option>
                                </select>
                            </div>
                        </center>

                        <div class="container px-8 py-2 mx-auto">

                            <div class="row">

                                <div class="col-md-4">
                                    <center>
                                        <label for="nameGoods" class="form-label text-gray-800">Name</label>
                                        <input type="text" class="form-control" id="nameGoods" name="goodsProfileName" required>
                                    </center>
                                </div>

                                <div class="col-md-4">
                                    <center>
                                        <label for="GoodsContact" class="form-label text-gray-800">Contact Number</label>
                                        <input type="number" class="form-control" id="GoodsContact" name="goodsContactNumber" required>
                                    </center>
                                </div>
                                <div class="col-md-4">
                                    <center>
                                        <label for="GoodsLicenseNo" class="form-label text-gray-800">License No.</label>
                                        <input type="character" class="form-control" id="GoodsLicenseNo" name="goodsLicenseNumber" required>
                                    </center>
                                </div>

                            </div>


                        </div>

                        <div class="col-md-4">
                            <label for="inputType" class="form-label text-gray-800">Type of vehicle</label>
                            <select id="inputType" class="form-select" name="goodsType">
                                <option>---</option>
                                <option>Truck</option>
                                <option>Mini-truck</option>
                                <option>Cargo-truck</option>
                                <option>Van</option>
                                <option>Tempo</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="inputSource" class="form-label text-gray-800">Power Source</label>
                            <select id="inputSource" class="form-select" name="goodsPowerSource">
                                <option>---</option>
                                <option>Petrol</option>
                                <option>Diesel</option>
                            </select>
                        </div>

                        <div class="col-md-4">
                            <label for="inputGVW" class="form-label text-gray-800">GVW (in Tonnes)</label>
                            <input type="float" class="form-control" id="inputGVW" name="gvw" required>
                        </div>

                        <div class="col-md-4">
                            <label for="inputVehicleNum" class="form-label text-gray-800">Vehicle Number</label>
                            <input type="character" class="form-control" id="inputVehicleNum" name="vehicleNumber" required>
                        </div>



                        <center>
                            <div class="container px-2 py-8 mx-auto">
                                <input type="submit" class="btn btn-primary" name="enlistedForGoods" value="Enlist">
                                &nbsp;&nbsp;&nbsp;<input type="reset" class="btn btn-primary" value="Clear">
                            </div>
                        </center>

                    </form>
                    <a href="transporterTravel.php" class="inline-flex text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded text-lg">Change Purpose to Travel</a>

                </div>
            </div>
        </section>
    <?php } ?>

</body>

</html>