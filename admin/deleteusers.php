<!-- when admin click delete user link, it displays all users with delete option -->
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
    <table class="w-[750px] border border mt-30 mx-auto font-bold divide-y divide-gray-500">
        <thead>
            <tr class="bg-gray-700 text-white text-lg">
                <th class="px-4  py-2">No.</th>
                <th class="px-4 py-2">Users Name</th>
                <th class="px-4 py-2">Email Id</th>
                <th class="px-4 py-2">Action</th>
            </tr>
        </thead>
    <?php

        include('../dbconnection.php');

        $qry= "SELECT * FROM `users`"; //AND `name` LIKE '%name%'
        $run= mysqli_query($dbcon,$qry);

        if(mysqli_num_rows($run)<1){
            echo "<tr><td colspan='6'>There is no Data in Database</td></tr>";
        }
        else{
            $count=0;
            while($data=mysqli_fetch_assoc($run))
            {
                $count++;
            ?>
            <tr align="center">
                <td class="text-gray-100 pt-2"  ><?php echo $count; ?></td>
                <td class="text-gray-100 pt-2" ><?php echo $data['name']; ?></td>
                <td class="text-gray-100 pt-2"><?php echo $data['email']; ?></td>
                <td class="text-gray-100 pt-2"><a href="usersdeleted.php?emm=<?php echo $data['email']; ?>">DeleteUser</a></td>
            </tr>
            <?php
            }
        }


    
    ?>

</table>
</div>