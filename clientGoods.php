<?php
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

<body class="text-gray-400 bg-gray-300 body-font">
<script type="text/javascript" src="../jsFiles/distance.js"></script>

    <!-- <body class="text-gray-400 body-font"> -->
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
    <section>
        <div class="container px-4 py-20 mx-auto">
            <div class="flex flex-col text-center w-full mb-10">
                <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900">Goods</h1>
                <p class="lg:w-2/3 mx-auto leading-relaxed text-gray-800 ">Find the vehicle you want according to your requirements by filling the details below.</p>
            </div>
            <div class="flex lg:w-2/3 w-full flex-col mx-auto px-4 sm:px-0 items-end sm:space-x-2 sm:space-y-0 space-y-4">



                <form class="row g-5 col-md-14" method="GET" action="../search_ReadMore_Page/clientSearch.php">

                    <center>
                        <div class="col-md-4">
                            <label for="inputPurpose" class="form-label text-gray-800">Purpose of requiring a vehicle</label>
                            <select id="inputPurpose" class="form-select" name="clientGoods">
                                <option selected>Goods</option>

                            </select>
                        </div>
                        &nbsp;

                        <div class="col-md-4">
                            <label for="inputCity" class="form-label text-gray-800">City</label>
                            <select id="inputCity" class="form-select" name="clientGoodsCity">
                                <option>---</option>
                                <option>Pune</option>
                                <option>Mumbai</option>
                            </select>
                        </div>
                    </center>

                    <div class="col-md-4">
                        <label for="inputpickUP" class="form-label text-gray-800">Pickup Point</label>
                        <select id="inputpickUP" class="form-select" name="pickUPGoods" onchange="distance()">
                            <option>---</option>

                            <option>
                                Borivali
                            </option>
                            <option>
                                Bandra
                            </option>
                            <option>
                                CSMT
                            </option>
                            <option>
                                Mumbai Airport
                            </option>
                            <option>
                                Virar
                            </option>
                            <option>
                                Lonavala
                            </option>
                            <option>
                                Talegaon
                            </option>
                            <option>
                                Chinchwad
                            </option>
                            <option>
                                Akurdi
                            </option>
                            <option>
                                Pune Airport
                            </option>


                        </select>
                    </div>
                    <div class="col-md-4">
                        <label for="inputDrop" class="form-label text-gray-800">Destination Point</label>
                        <select id="inputDrop" class="form-select" name="dropPointGoods" onchange="distance()">
                            <option>---</option>

                            <option>
                                Borivali
                            </option>
                            <option>
                                Bandra
                            </option>
                            <option>
                                CSMT
                            </option>
                            <option>
                                Mumbai Airport
                            </option>
                            <option>
                                Virar
                            </option>
                            <option>
                                Lonavala
                            </option>
                            <option>
                                Talegaon
                            </option>
                            <option>
                                Chinchwad
                            </option>
                            <option>
                                Akurdi
                            </option>
                            <option>
                                Pune Airport
                            </option>


                        </select>
                    </div>




                    <div class="col-md-4">
                        <label for="inputType" class="form-label text-gray-800">Type of vehicle</label>
                        <select id="inputType" class="form-select" name="clientGoodsType">
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
                        <select id="inputSource" class="form-select" name="clientGoodsPowerSource">
                            <option>---</option>
                            <option>Petrol</option>
                            <option>Diesel</option>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <label for="getDistance" class="form-label text-gray-800">Weight(in tonnes)</label>
                        <input type="number" class="form-control" id="inputCapacity" name="clientGoodsWeight" required>
                    </div>

                    <div class="col-md-4">
                        <label for="inputCapacity" class="form-label text-gray-800">Distance(in kms)</label>
                        <input type="number" class="form-control" id="getDistance" name="clientGoodsDistance">
                    </div>

                    <center>
                        <div class="col-12">
                            <input type="submit" class="btn btn-primary" name="findForGoods" value="Find">
                            &nbsp;&nbsp;&nbsp;<input type="reset" class="btn btn-primary" value="Clear">
                        </div>
                    </center>
                </form>
                <a href="clientTravel.php" class="inline-flex text-white bg-gray-900 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded text-lg">Search for Travel</a>
                <!-- <button class="text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">Button</button> -->
            </div>
        </div>
    </section>
</body>

</html>