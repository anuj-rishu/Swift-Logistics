<!-- admin dashbord page with options for admin -->

<?php
session_start();
if(isset($_SESSION['uid'])){
    echo "";
}else{
    header('location: ../login.php');
}

?>

<?php
include('head.php');?>

<link href="https://cdn.tailwindcss.com/2.2.19/tailwind.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">






<body class="bg-gray-900">

<div class="text-center text-white py-8">
    <h1 class="text-4xl font-bold">Welcome To Admin Dashboard</h1>



</div>

<div class="text-center  mt-20">
    <div class="bg-gray-700 rounded-lg shadow-lg w-1/2 mx-auto p-4">
        <a href="deletedata.php" class="block bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded mb-4">Delete Data</a>
        <a href="deleteusers.php" class="block bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Delete Users</a>
    </div>
</div>


<div class="flex items-center justify-center mt-10">
    <a href="../home/home.php" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded inline-flex items-center">
        <i class="fas fa-arrow-left mr-2"></i> Home
    </a>
</div>


<?php include('../home/footer.php'); ?>
</body>
</html>