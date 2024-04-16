<!-- for 'courier' navbar, courier placing page -->
<?php
session_start();
if (isset($_SESSION['uid'])) {
    echo "";
} else {
    header('location: ../index.php');
}

?>
<?php
include('header.php');
$email = $_SESSION['emm'];
$uid = $_SESSION['uid'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Place Order</title>

    <script src="https://cdn.tailwindcss.com"></script>
    
   
</head>


<body class="bg-gray-900 cover">


<div class="container mx-auto py-8">
    <form action="courierMenu.php" method="POST" enctype="multipart/form-data" class="p-8 rounded-lg shadow-md">
        <div class="container mx-auto py-8">
            <table class="w-full text-center">
                <thead class="text-gray-400 uppercase">
                    <tr>
                        <th colspan="4" class="bg-gray-700 py-4">Fill The Details Of Sender & Receiver</th>
                    </tr>
                </thead>
                <tbody>
                    <tr style="height: 20px;"></tr>
                    <tr class="text-center text-gray-400 uppercase">
                        <th colspan="2">SENDER</th>
                        <th colspan="2">RECEIVER</th>
                    </tr>
                    <tr style="height: 20px;"></tr>
                    <tr class="text-gray-400 uppercase">
                        <td>Name:</td>
                        <td><input type="text" name="sname" placeholder="Sender FullName" required
                                class="m-2 sm:w-full bg-gray-700 border border-gray-300 py-2 px-4 rounded-lg"></td>
                        <td>Name:</td>
                        <td><input type="text" name="rname" placeholder="Receiver FullName" required
                                class="m-2 sm:w-full bg-gray-700 border border-gray-300 py-2 px-4 rounded-lg"></td>
                    </tr>


                    
                        <tr class="text-gray-400 uppercase">
                            <td>Email:</td>
                            <td><input type="text" name="semail" value="<?php echo $email; ?>" readonly
                            class="m-2 sm:w-full bg-gray-700 border border-gray-300 py-2 px-4 rounded-lg"></td>

                            <td>Email:</td>
                            <td><input type="text" name="remail" placeholder="Receiver EmailId" required
                             class="m-2 sm:w-full bg-gray-700 border border-gray-300 py-2 px-4 rounded-lg"></td>
                        </tr>
                        <tr class="text-gray-400 uppercase">
                            <td>PhoneNo.:</td>
                            <td><input type="number" name="sphone" placeholder="Sender number" required
                            class="m-2 sm:w-full bg-gray-700 border border-gray-300 py-2 px-4 rounded-lg"></td>
                            <td>PhoneNo.:</td>
                            <td><input type="number" name="rphone" placeholder="Receiver number" required
                             class="m-2 sm:w-full bg-gray-700 border border-gray-300 py-2 px-4 rounded-lg"></td>
                        </tr>
                        <tr class="text-gray-400 uppercase">
                            <td>Address:</td>
                            <td><input type="text" name="saddress" placeholder="Sender address" required
                             class="m-2 sm:w-full bg-gray-700 border border-gray-300 py-2 px-4 rounded-lg"></td>

                            <td>Address:</td>
                            <td><input type="text" name="raddress" placeholder="Receiver address" required
                            class="m-2 sm:w-full bg-gray-700 border border-gray-300 py-2 px-4 rounded-lg"></td>
                        </tr>
                        <!-- <tr>
                            <td colspan="4" class="py-2">
                               
                            </td>
                        </tr> -->
                        <tr class="text-gray-400 uppercase">
                            <td>Weight:</td>
                            <td><input type="number" name="wgt" placeholder="Weight in kg" required
                     class="m-2 sm:w-full bg-gray-700 border border-gray-300 py-2 px-4 rounded-lg"></td>

                            <td>Payment Id:</td>
                            <td><input type="number" name="billno" placeholder="Enter transaction number" required
                           class="m-2 sm:w-full bg-gray-700 border border-gray-300 py-2 px-4 rounded-lg"></td>
                        </tr>
                        <tr class="text-gray-400 uppercase">
                            <td>Date:</td>
                            <td><input type="date" name="date" value="<?php echo date('Y-m-d'); ?>" readonly
                            class="m-2 sm:w-full bg-gray-700 border border-gray-300 py-2 px-4 rounded-lg"></td>
                            <td>Items Image:</td>
                            <td><input class="m-2 sm:w-full bg-gray-700 border border-gray-300 py-2 px-4 rounded-lg" type="file" name="simg" class="w-full py-2 px-4 border border-gray-300 rounded-lg"></td>
                        </tr>
                        <tr class="text-gray-400 uppercase">
                            <td>Delivery Option:</td>
                            <td colspan="3">
                                <select name="delivery_option" class="m-2 sm:w-full bg-gray-700 border border-gray-300 py-2 px-4 rounded-lg">
                                    <option value="Standard">Standard Delivery</option>
                                    <option value="Express">Express Delivery</option>
                                    <option value="Same_Day">Same Day Delivery</option>
                                </select>
                            </td>
                        </tr>
                        <tr class="text-gray-400 uppercase">
                            <td colspan="4" class="py-4">
                                <input type="submit" name="submit" value="Place Order"
                                    class=" mt-10 bg-blue-500 text-white py-2 px-8 rounded-lg cursor-pointer">
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </form>
    </div>
    </form>

    <?php include('footer.php'); ?>
</body>


</html>

<?php

if (isset($_POST['submit'])) { //if we'll not give this,it'will submit from with zero values.

    include('../dbconnection.php');

    $sname = $_POST['sname'];
    $rname = $_POST['rname'];
    $semail = $_POST['semail'];
    $remail = $_POST['remail'];
    $sphone = $_POST['sphone'];
    $rphone = $_POST['rphone'];
    $sadd = $_POST['saddress'];
    $radd = $_POST['raddress'];
    $wgt = $_POST['wgt'];
    $billn = $_POST['billno'];
    $originalDate = $_POST['date'];
    $delivery_option = $_POST['delivery_option'];
    $newDate = date("Y-m-d", strtotime($originalDate));
    $imagenam = $_FILES['simg']['name'];
    $tempnam = $_FILES['simg']['tmp_name'];

    move_uploaded_file($tempnam, "../dbimages/$imagenam");

    $qry = "INSERT INTO `courier` (`sname`, `rname`, `semail`, `remail`, `sphone`, `rphone`, `saddress`, `raddress`, `weight`, `billno`, `image`,`date`,`u_id`, `delivery_option`) VALUES ('$sname', '$rname', '$semail', '$remail', '$sphone', '$rphone', '$sadd', '$radd', '$wgt', '$billn', '$imagenam', '$newDate','$uid', '$delivery_option');";
    $run = mysqli_query($dbcon, $qry);

    // $trackqry= "INSERT INTO `track` (`u_id`, `c_id`) VALUES ('$uid', 'LAST_INSERT_ID()')";
    //$runtrack = mysqli_query($dbcon, $trackqry);

    if ($run == true) {

    ?> <script>
            alert('Order Placed Successfully :)');
            window.open('courierMenu.php', '_self');
        </script>
    <?php
    }
}

?>