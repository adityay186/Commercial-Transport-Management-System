<?php
include "../pages/sampleLogic.php";

?>


<DOCTYPE html>

  <html>

  <head>
    <title>Search Output</title>
    <a href="https://tailwindcss.com/docs"></a>
    <!-- CSS only -->
    <link rel="stylesheet" href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
  </head>

  <!-- <body class="text-gray-400 bg-gray-800 body-font"> -->

  <body class="text-gray-400 bg-gray-300 body-font">
    <header class="text-gray-400 bg-gray-900 body-font">
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
    <section class="text-gray-600 body-font overflow-hidden">
      <div class="container px-5 py-24 mx-auto">

        <?php
        if (isset($_REQUEST['clientTravel'])) { ?>
          <div class="-my-8 divide-y-2 divide-gray-800">


            <?php foreach ($queryClientTravel as $q) { ?>
              <div class="py-8 flex flex-wrap md:flex-nowrap">
                <div class="md:flex-grow">

            
                  <h2 class="text-2xl font-medium text-gray-900 title-font mb-2"><?php echo $q['name'] ?></h2>
                  <p class="leading-relaxed">City: <?php echo $q['city'] ?></p>
                  <!-- <p class="leading-relaxed">Contact Info: <?php echo $q['contactNum'] ?></p> -->
                  <p class="leading-relaxed">Vehicle Type: <?php echo $q['type'] ?></p>
                  <p class="leading-relaxed">Power Source: <?php echo $q['powerSource'] ?></p>

                  <a href="MoreInfo.php?getTravelID=<?php echo $q['TravelID'] ?>" class="text-indigo-500 inline-flex items-center mt-4">Read More
                    <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                      <path d="M5 12h14"></path>
                      <path d="M12 5l7 7-7 7"></path>
                    </svg>
                  </a>
                </div>
              </div>
            <?php } ?>



          </div>

        <?php } else if (isset($_REQUEST['clientGoods'])) { ?>
          <div class="-my-8 divide-y-2 divide-gray-800">


            <?php foreach ($queryClientGoods as $q) { ?>
              <div class="py-8 flex flex-wrap md:flex-nowrap">
                <div class="md:flex-grow">

                  <!-- <div class="md:w-64 md:mb-0 mb-6 flex-shrink-0 flex flex-col">
         <span class="font-semibold title-font text-gray-700">CATEGORY</span>
         <span class="mt-1 text-gray-500 text-sm">12 Jun 2019</span>
       </div> -->
                  <h2 class="text-2xl font-medium text-gray-900 title-font mb-2"><?php echo $q['name'] ?></h2>
                  <p class="leading-relaxed">City: <?php echo $q['city'] ?></p>
                  <!-- <p class="leading-relaxed">Contact Info: <?php echo $q['contactNum'] ?></p> -->
                  <p class="leading-relaxed">Vehicle Type: <?php echo $q['type'] ?></p>
                  <p class="leading-relaxed">Power Source: <?php echo $q['powerSource'] ?></p>
                  <a href="MoreInfo.php?getGoodsID=<?php echo $q['GoodsID'] ?>" class="text-indigo-500 inline-flex items-center mt-4">Read More
                    <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                      <path d="M5 12h14"></path>
                      <path d="M12 5l7 7-7 7"></path>
                    </svg>
                  </a>
                </div>
              </div>
            <?php } ?>

          </div>
        <?php } ?>

      </div>
    </section>
  </body>

  </html>