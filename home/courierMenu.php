


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
    <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
    
   
</head>


<body class="bg-gray-900 cover">


<div class="container mx-auto py-8">
<form id="payment-form" action="courierMenu.php" method="POST" enctype="multipart/form-data" class="p-8 rounded-lg shadow-md">
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
                            <td>
                            <select class="m-2 sm:w-full bg-gray-700 border border-gray-300 py-2 px-4 rounded-lg" id="weight" name="wgt" required class="m-2 sm:w-full bg-gray-700 border border-gray-300 py-2 px-4 rounded-lg">
            <option value="120">0-1 kg</option>
            <option value="200">1-2 kg</option>
            <option value="250">2-3 kg</option>
            <option value="400">3-4 kg</option>
            <option value="500">4-5 kg</option>
        </select>
                            
                            
                           

                            <td>Comment:</td>
                            <td><input type="text" name="billno" placeholder="comment" required
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
                            <td colspan="4" class="py-4">
                            <input id="place-order" type="submit" name="submit" value="Place Order" class=" mt-10 bg-blue-500 text-white py-2 px-8 rounded-lg cursor-pointer">
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </form>


        <?php
if (isset($_POST['submit'])) {
    // Your existing PHP code

    // Get the Razorpay payment id
    $razorpay_payment_id = $_POST['razorpay_payment_id'];

    // You can store the $razorpay_payment_id in your database
}
?>
    </div>
    </form>

    <?php include('footer.php'); ?>
</body>

<script>
document.getElementById('place-order').onclick = function(e){
    var options = {
        "key": "rzp_live_mlYGfF84FECF4m", // Enter the Key ID generated from the Dashboard
        "amount": document.getElementById('weight').value * 100, // Amount is in currency subunits. Hence, we multiply by 100
        "currency": "INR",
        "name": "Swift Logistics",
        "description": "Test Transaction",
 
        "handler": function (response){
            // After the payment is successful, you can use the response parameter to store the response information in your server/database.
            // Add the payment ID to the form
            var input = document.createElement('input');
            input.setAttribute('type', 'hidden');
            input.setAttribute('name', 'razorpay_payment_id');
            input.setAttribute('value', response.razorpay_payment_id);
            document.getElementById('payment-form').appendChild(input);

            // Submit the form
            document.getElementById('payment-form').submit();
        },
        "prefill": {
            "name": document.getElementsByName('sname')[0].value,
            "email": document.getElementsByName('semail')[0].value,
            "contact": document.getElementsByName('sphone')[0].value
        },
        "notes": {
            "address": "Razorpay Corporate Office"
        },
        "theme": {
            "color": "#F37254"
        }
    };
    var rzp1 = new Razorpay(options);
    rzp1.open();
    e.preventDefault();
}
</script>

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
    $newDate = date("Y-m-d", strtotime($originalDate));
    $imagenam = $_FILES['simg']['name'];
    $tempnam = $_FILES['simg']['tmp_name'];

    move_uploaded_file($tempnam, "../dbimages/$imagenam");

    $qry = "INSERT INTO `courier` (`sname`, `rname`, `semail`, `remail`, `sphone`, `rphone`, `saddress`, `raddress`, `weight`, `billno`, `image`,`date`,`u_id`) VALUES ('$sname', '$rname', '$semail', '$remail', '$sphone', '$rphone', '$sadd', '$radd', '$wgt', '$billn', '$imagenam', '$newDate','$uid');";
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