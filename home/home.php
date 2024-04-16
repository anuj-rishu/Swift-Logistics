<?php

session_start();
if(isset($_SESSION['uid'])){
    echo "";
    }else{
    header('location: ../index.php');
    }
?>


<!DOCTYPE html>
<html lang="en">



<head>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.16/dist/tailwind.min.css" rel="stylesheet">
    <title>Login</title>

    <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  
</head>



<body class="bg-gray-900 cover">
    <?php include('header.php'); ?>
    
  <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16 lg:px-6 ">
      <div class="mx-auto max-w-screen-sm text-center mb-8 lg:mb-16">
          <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white">Our Team</h2>
          <p class="font-light text-gray-500 lg:mb-16 sm:text-xl dark:text-gray-400">"Meet Our Swift Logistics Website Development Team: Crafting Efficiency, Innovation, and Precision"</p>
      </div> 
      <div class="grid gap-8 mb-6 lg:mb-16 md:grid-cols-2">
          <div class="items-center bg-gray-50 rounded-lg shadow sm:flex dark:bg-gray-800 dark:border-gray-700">
              <a href="#">
                  <img class="w-full rounded-lg sm:rounded-none sm:rounded-l-lg" src="../images/anuj.jpeg" alt="Bonnie Avatar">
              </a>
              <div class="p-5">
                  <h3 class="text-xl font-bold tracking-tight text-gray-900 dark:text-white">
                      <a href="#">Anuj Tiwari</a>
                  </h3>
                  <span class="text-gray-500 dark:text-gray-400"> Web Developer</span>
                  <p class="mt-3 mb-4 font-light text-gray-500 dark:text-gray-400">
Integrating UI with backend for a seamless, efficient  logistics website.</p>
                  <ul class="flex space-x-4 sm:mt-0">
                      
                     
                      <li>
                          <a href="https://github.com/anuj-rishu" target={blank} class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                        

                              <i class="  w-5 h-5 fab fa-github"></i>

                          </a>
                      </li>
                      <li>
                          <a href="https://www.linkedin.com/in/anuj-rishu/" target={blank} class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                             
                              <i class="w-5 h-5 fab fa-linkedin"></i>
                          </a>
                      </li>
                  </ul>
              </div>
          </div> 
          <div class="items-center bg-gray-50 rounded-lg shadow sm:flex dark:bg-gray-800 dark:border-gray-700">
              <a href="#">
                  <img class="w-full rounded-lg sm:rounded-none sm:rounded-l-lg" src="../images/ayaan.jpeg" alt="Jese Avatar">
              </a>
              <div class="p-5">
                  <h3 class="text-xl font-bold tracking-tight text-gray-900 dark:text-white">
                      <a href="#">Ayaan Rajak</a>
                  </h3>
                  <span class="text-gray-500 dark:text-gray-400">App Devloper</span>
                  <p class="mt-3 mb-4 font-light text-gray-500 dark:text-gray-400">Back-end optimized for seamless performance by app developer.</p>
                  <ul class="flex space-x-4 sm:mt-0">
                  <li>
                          <a href="https://github.com/rjk51"  target={blank} class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                        

                              <i class="  w-5 h-5 fab fa-github"></i>

                          </a>
                      </li>
                      <li>
                          <a href="https://www.linkedin.com/in/ayaanrajak/" target={blank} class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                             
                              <i class="w-5 h-5 fab fa-linkedin"></i>
                          </a>
                      </li>
                  </ul>
              </div>
          </div> 
          <div class="items-center justify e bg-gray-50 rounded-lg shadow sm:flex dark:bg-gray-800 dark:border-gray-700">
              <a href="#">
                  <img class="w-full rounded-lg sm:rounded-none sm:rounded-l-lg" src="../images/dubey.jpeg" alt="Michael Avatar">
              </a>
              <div class="p-5">
                  <h3 class="text-xl font-bold tracking-tight text-gray-900 dark:text-white">
                      <a href="#">Aditya Dubey</a>
                  </h3>
                  <span class="text-gray-500 dark:text-gray-400">ML Enthusiast</span>
                  <p class="mt-3 mb-4 font-light text-gray-500 dark:text-gray-400"> Worked on: order tracking, inventory, auth, payments. Backend for seamless operations.</p>
                  <ul class="flex space-x-4 sm:mt-0">
                  <li>
                          <a href="https://github.com/adityaxdubey" class="text-gray-500 hover:text-gray-900 dark:hover:text-white " target={blank}>
                        

                              <i class="  w-5 h-5 fab fa-github"></i>

                          </a>
                      </li>
                      <li>
                          <a href="https://www.linkedin.com/in/adityaxdubey/" target={blank} class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                             
                              <i class="w-5 h-5 fab fa-linkedin"></i>
                          </a>
                      </li>
                  </ul>
              </div>
          </div> 
         
      </div>  
  </div>


    <?php include('footer.php'); ?>
</body>
</html>