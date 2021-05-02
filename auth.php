<?php
include "../pages/sampleLogic.php";

?>

<html>

<head>
    <title>Log In</title>
    <link rel="stylesheet" href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> -->
</head>

<body class="bg-gray-300">

    <header class="text-gray-400 bg-black body-font">
        <div class="container mx-auto flex flex-wrap p-3 flex-col md:flex-row items-center">
            <a class="flex title-font font-medium items-center text-white mb-2 md:mb-0">
                <img src="../images/ctms.webp" width="40">
                <span class="ml-3 text-xl">CTMS</span>
            </a>
            <nav class="md:ml-auto flex flex-wrap items-center text-base justify-center">
                <a href="../pages/homepage.php" class="inline-flex text-white bg-indigo-500 border-0 py-1 px-3 focus:outline-none hover:bg-indigo-600 rounded text-md">Home Page</a>
            </nav>
        </div>
    </header>

    <center>
        <div class="container mx-auto flex px-5 py-24 items-center justify-center flex-row">
            <div class="card" style="width: 18rem;">
                <!-- <img src="..." class="card-img-top" alt="..."> -->
                <div class="card-body shadow p-4 bg-white rounded">
                    <h5 class="card-title">Admin Login</h5>
                    <form method="POST">
                        <label for="adName" class="form-label text-gray-600">Username</label>
                        <input type="text" id="adName" name="adminUserName" class="w-half bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out" required>

                        <label for="adPassword" class="form-label text-gray-600">Password</label>
                        <input type="password" id="adPassword" name="adminPassword" class="w-half bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out" required>
                        <p></p>
                        <p class="card-text">Log-In to move to the next page</p>
                        <input type="submit" class="btn btn-primary" name="adminLogin" value="Login">
                    </form>

                </div>
            </div>
        </div>
    </center>

</body>

</html>