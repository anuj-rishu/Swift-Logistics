<?php
session_start();
if(isset($_SESSION['uid'])){
    echo "";
    }else{
    header('location: ../login.php');
    }

?>

<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Place Order</title>

    <script src="https://cdn.tailwindcss.com"></script>

<?php include('header.php');
    include('../dbconnection.php');
    $idd = $_GET['sidd'];

    $qryy= "SELECT * FROM `courier` WHERE `c_id`='$idd'";
    $run= mysqli_query($dbcon,$qryy);
    $data=mysqli_fetch_assoc($run);
    $stdate = $data['date'];
    $tddate= date('Y-m-d');

    if($stdate==$tddate){
        ?>
      


     <body>
        
     <div class="flex flex-col items-center justify-center min-h-screen bg-gray-900">
    <h1 class="text-2xl font-bold text-white animate-pulse">Status >> On The Way...</h1>
    <hr class="my-4">
    <button onclick="window.location.href='trackMenu.php'" class="px-6 py-3 mt-4 text-white bg-green-500 rounded-lg cursor-pointer">GoBack</button>
        </hr>

        <?php 
        }
        else{
        ?>

        <div class="flex flex-col items-center justify-center min-h-screen bg-gray-900">
            <h1 class="text-2xl font-bold text-white">Status >> Items Delivered..<br /><p>HAVE A NICE DAY</p></h1>
            <hr class="my-4">
            <button onclick="window.location.href='trackMenu.php'" class="px-6 py-3 mt-4 text-white bg-green-500 rounded-lg cursor-pointer">GoBack</button>
        </div>
     </body>

      
     
        <?php

        

        
    }
?>

<?php include('footer.php'); ?>
            
      
     


