<?php
include "../pages/sampleLogic.php";
?>
<!DOCTYPE html>

<html>

<head>
    <title>Transporter Details</title>
    <link rel="stylesheet" href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <style>
    .profileImg{
        border-radius: 50%;
    }
    </style>
</head>

<body>
    <header class="text-gray-400 bg-black body-font">
        <div class="container mx-auto flex flex-wrap p-3 flex-col md:flex-row items-center">
            <a class="flex title-font font-medium items-center text-white mb-2 md:mb-0">
                
                <img  src = "../images/ctms.webp" width="40">
                <span class="ml-3 text-xl">CTMS</span>
            </a>
            <nav class="md:ml-auto flex flex-wrap items-center text-base justify-center">
                <a href="../pages/homepage.php" class="inline-flex text-white bg-indigo-500 border-0 py-1 px-3 focus:outline-none hover:bg-indigo-600 rounded text-md">Home Page</a>
            </nav>
        </div>
    </header>


    <section class="text-gray-600 body-font">
        <div class="container mx-auto flex px-5 py-24  justify-center flex-col">
            <?php
            if (isset($_REQUEST['getTravelID'])) { ?>
                <section class="text-gray-600 body-font">
                    <div class="container mx-auto flex flex-col px-5 py-18 justify-center items-center">
                        <img class="profileImg lg:w-1/6 md:w-3/9 w-5/8 mb-10 object-cover object-center rounded" src="../images/profile2.png">
                        <div class="w-full md:w-2/3 flex flex-col mb-16 items-center text-center">

                            <?php foreach ($queryForId as $q) { ?>

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
                                        <center><h5 class="text-gray-900 text-lg title-font font-small mb-2">Vehicle Details</h5></center>
                                    </u>
                                    <p class="leading-relaxed text-gray-800">Vehicle Type: <?php echo $q['type'] ?>
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Power Source: <?php echo $q['powerSource'] ?></p>
                                    <p class="leading-relaxed text-gray-800">AC Type: <?php echo $q['acType'] ?>
                                        &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Capacity: <?php echo $q['capacity'] ?></p>

                                    <p class="leading-relaxed text-gray-800">Vehicle Number: <?php echo $q['vehicleNum'] ?></p>

                                </div>
                            <?php } ?>




                        </div>
                    </div>
                </section>

            <?php } else if (isset($_REQUEST['getGoodsID'])) { ?>
                <section class="text-gray-600 body-font">
                    <div class="container mx-auto flex flex-col px-5 py-18 justify-center items-center">
                        <img class="lg:w-1/6 md:w-3/9 w-5/8 mb-10 object-cover object-center rounded" src="../images/profile2.png">
                        <div class="w-full md:w-2/3 flex flex-col mb-16 items-center text-center">


                            <?php foreach ($queryForId as $q) { ?>

                                <div class="flex-grow sm:text-left text-left mt-8 mx-14 sm:mt-0">
                                    <center>
                                        <h2 class="text-gray-900 text-2xl title-font font-medium mb-2">Name: <?php echo $q['name']; ?></h2>
                                    </center>
                                    <p></p>

                                    <p class="leading-relaxed text-gray-700">City: <?php echo $q['city'] ?></p>
                                    <p class="leading-relaxed text-gray-800">Contact Number: <?php echo $q['contactNum'] ?></p>
                                    <p class="leading-relaxed text-gray-800">License Number: <?php echo $q['LicenseNum'] ?></p>
                                    <br>
                                    <center>
                                    <u>
                                        <h5 class="text-gray-900 text-xl title-font font-medium mb-2">Vehicle Details</h5>
                                    </u>
                                    </center>
                                    <p class="leading-relaxed text-gray-800">Vehicle Type: <?php echo $q['type'] ?></p>
                                    <p class="leading-relaxed text-gray-800">Power Source: <?php echo $q['powerSource'] ?></p>
                                    <p class="leading-relaxed text-gray-800">Vehicle GVW: <?php echo $q['gvw'] ?></p>

                                    <p class="leading-relaxed text-gray-800">Vehicle Number: <?php echo $q['vehicleNum'] ?></p>

                                </div>
                            <?php } ?>
                            <!-- <p></p> -->
                         
                           

                        </div>

                        </div>
                       
                </section>

            <?php } ?>
        </div>
    </section>
</body>

</html>