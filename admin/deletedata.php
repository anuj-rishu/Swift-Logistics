<!-- when admin click delete data link, page with filter options-->
<?php
session_start();
if(isset($_SESSION['uid'])){
    echo "";
    }else{
    header('location: ../login.php');
    }

?>

<?php
include('head.php');
?>





<link href="https://cdn.tailwindcss.com/2.2.19/tailwind.min.css" rel="stylesheet">



    <body class="bg-gray-900 cover"  > 



<<div class="overflow-x-auto mt-20">
    <table class="w-110 border border mt-30 mx-auto font-bold divide-y divide-gray-500">
        <thead>
            <tr class="bg-gray-700 text-white text-lg">
                <th class="px-4  py-2">No.</th>
                <th class="px-4 py-2">Sender Name</th>
                <th class="px-4 py-2">Sender Email</th>
                <th class="px-4 py-2">Receiver Name</th>
                <th class="px-4 py-2">Action</th>
            </tr>
        </thead>


    <?php
    include('../dbconnection.php');

    $qryd= "SELECT * FROM `courier`";
    $run= mysqli_query($dbcon,$qryd);

    if(mysqli_num_rows($run)<1){
        echo "<tr><td colspan='6'>No record found..</td></tr>";
    }
    else{
        $count=0;
        while($data=mysqli_fetch_assoc($run))
        {
            $count++;
        ?>
        <tr align="center">
        <td class="text-gray-100 pt-2"  ><?php echo $count; ?></td>
            <td class="text-gray-100 pt-2" ><img src="../dbimages/<?php echo $data['image']; ?>" alt="pic" style="max-width: 100px;"/> </td>
            <td class="text-gray-100 pt-2"><?php echo $data['sname']; ?></td>
            <td class="text-gray-100 pt-2"><?php echo $data['rname']; ?></td>
            <td class="text-gray-100 pt-2"><?php echo $data['semail']; ?></td>
            <td class="text-gray-100 pt-2"><a href="datadeleted.php?bb=<?php echo $data['billno']; ?>">Delete</a></td>
        </tr>
        <?php
        }
    }
    ?>
</table>
</div>
