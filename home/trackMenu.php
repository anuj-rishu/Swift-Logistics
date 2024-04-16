<!-- when track menu is clicked it will show all courier placed by that User-->
<?php



session_start();
if(isset($_SESSION['uid'])){
    echo "";
    }else{
    header('location: ../login.php');
    }

?>
<?php include('header.php'); ?>

<link href="https://cdn.tailwindcss.com/2.2.19/tailwind.min.css" rel="stylesheet">





<body class="bg-gray-900 cover"  > 



<div class="overflow-x-auto mt-20">
    <table class="w-110 border border mt-30 mx-auto font-bold divide-y divide-gray-500">
        <thead>
            <tr class="bg-gray-700 text-white text-lg">
                <th class="px-4  py-2">No.</th>
                <th class="px-4 py-2">Item's Image</th>
                <th class="px-4 py-2">Sender Name</th>
                <th class="px-4 py-2">Receiver Name</th>
                <th class="px-4 py-2">Receiver Email</th>
                <th class="px-4 py-2">Delivery Option</th>
                <th class="px-4 py-2">Action</th>
            </tr>
        </thead>







</body>





    <?php
    include('../dbconnection.php');

    $email = $_SESSION['emm'];

    $qryy= "SELECT * FROM `courier` WHERE `semail`='$email'";
    $run= mysqli_query($dbcon,$qryy);

    if(mysqli_num_rows($run)<1){
        echo "<tr><td colspan='6'>No record found..</td></tr>";
    }
    else{
        $count=0;
        while($data=mysqli_fetch_assoc($run))
        {
            $count++;
        ?>
        <tr class="" align="center">
            <td class="text-gray-100 pt-2"><?php echo $count; ?></td>
            <td class="text-gray-100 pt-2"><img src="../dbimages/<?php echo $data['image']; ?>" alt="pic" style="max-width: 100px;"/> </td>
            <td class="text-gray-100 pt-2"><?php echo $data['sname']; ?></td>
            <td class="text-gray-100 pt-2"><?php echo $data['rname']; ?></td>
            <td class="text-gray-100 pt-2"><?php echo $data['remail']; ?></td>
            <td class="text-gray-100 pt-2"><?php echo $data['delivery_option']; ?></td>
            <td class="text-blue-500 pt-2 pl-5 pr-5">
                <a href="updationtable.php?sid=<?php echo $data['c_id']; ?>">Edit</a> ||
                <a href="deletecourier.php?bb=<?php echo $data['billno']; ?>">Delete</a>||
                <a href="status.php?sidd=<?php echo $data['c_id']; ?>">CheckStatus</a>
            </td>
        </tr>
        <?php
        }
    }
    ?>
</table>
<?php include('footer.php'); ?>
</div>
