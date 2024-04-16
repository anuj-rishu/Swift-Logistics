<?php
session_start();
if(isset($_SESSION['uid'])){
    echo "";
    }else{
    header('location: ../index.php');
    }

?>
<?php
include('header.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <script src="https://cdn.tailwindcss.com"></script>
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <title>Pricing</title>
</head>
<body class="bg-gray-900 cover"  > 

<body>
    
<?php

include('../dbconnection.php');
$id= $_SESSION['uid'];
$qry= "SELECT * FROM `users` WHERE `u_id`='$id'";
$run= mysqli_query($dbcon,$qry);

$data = mysqli_fetch_assoc($run);

?>

<div class="max-w-md mt-20 mx-auto bg-gray-700 rounded-xl shadow-md overflow-hidden md:max-w-2xl m-3">
    <div class="md:flex">
        <div class="md:flex-shrink-0">
            <img class="h-48 mt-6 w-full object-cover md:w-48" src="https://img.icons8.com/bubbles/100/000000/user.png" alt="User-Profile-Image">
        </div>
        <div class="p-8">
            <div class=" tracking-wide text-sm text-blue-400 font-semibold">User Name: </div>
            <h3 class="block mt-1 text-lg leading-tight font-medium text-gray-100"><?php echo $data['name']; ?></h3>

            <div class="uppercase mt-4 tracking-wide text-sm text-blue-400  font-semibold">Email: </div>
            <h3 class="block mt-1 text-lg leading-tight font-medium text-gray-100"><?php echo $data['email']; ?></h3>

            <div class="uppercase mt-4 tracking-wide text-sm text-blue-400  font-semibold">Phone: </div>
            <h3 class="block mt-1 text-lg leading-tight font-medium text-gray-100"><?php echo $data['pnumber']; ?></h3>
            
        </div>
    </div>

  
</div>

<div class="flex items-center mt-5 justify-center ">
    <a href="../logout.php" class="inline-block bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
        <i class="fas fa-sign-out-alt"></i> LogOut
    </a>
</div>


</body>


<?php include('footer.php'); ?>
</html>