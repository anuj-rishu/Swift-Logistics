<!-- when we click update any items, it gives table with prev info -->
<?php
session_start();
if(isset($_SESSION['uid'])){
    echo "";
    }else{
    header('location: ../index.php');
    }

?>

<?php
    include('../dbconnection.php');

    $idd= $_GET['sid'];
    $uqry= "SELECT * FROM `courier` WHERE `c_id`='$idd'";
    $run= mysqli_query($dbcon,$uqry);
    $data = mysqli_fetch_assoc($run);
?>
<?php
include('header.php');
?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Place Order</title>

    <script src="https://cdn.tailwindcss.com"></script>
    <title>Place Order</title>
    
</head>

<body>


<body class="bg-gray-900 cover">


<div class="container mx-auto py-8">
    <form action="editdata.php" method="POST" enctype="multipart/form-data" class="p-8 rounded-lg shadow-md">
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
                        <td><input type="text" name="sname" value="<?php echo $data['sname'];?>" placeholder="Sender FullName" required
                                class="m-2 sm:w-full bg-gray-700 border border-gray-300 py-2 px-4 rounded-lg"></td>
                        <td>Name:</td>
                        <td><input type="text" name="rname" value="<?php echo $data['rname'];?>" placeholder="Receiver FullName" required
                                class="m-2 sm:w-full bg-gray-700 border border-gray-300 py-2 px-4 rounded-lg"></td>
                    </tr>


                    
                        <tr class="text-gray-400 uppercase">
                            <td>Email:</td>
                            <td><input type="text" name="semail" value="<?php echo $data['semail'];?>" readonly
                            class="m-2 sm:w-full bg-gray-700 border border-gray-300 py-2 px-4 rounded-lg"></td>

                            <td>Email:</td>
                            <td><input type="text" name="remail" value="<?php echo $data['remail'];?>" placeholder="Receiver EmailId" required
                             class="m-2 sm:w-full bg-gray-700 border border-gray-300 py-2 px-4 rounded-lg"></td>
                        </tr>
                        <tr class="text-gray-400 uppercase">
                            <td>PhoneNo.:</td>
                            <td><input type="number" name="sphone" value="<?php echo $data['sphone'];?>" placeholder="Sender number" required
                            class="m-2 sm:w-full bg-gray-700 border border-gray-300 py-2 px-4 rounded-lg"></td>
                            <td>PhoneNo.:</td>
                            <td><input ttype="number" name="rphone" value="<?php echo $data['rphone'];?>" placeholder="Receiver number" required
                             class="m-2 sm:w-full bg-gray-700 border border-gray-300 py-2 px-4 rounded-lg"></td>
                        </tr>
                        <tr class="text-gray-400 uppercase">
                            <td>Address:</td>
                            <td><input  type="textfield" name="saddress" value="<?php echo $data['saddress'];?>" placeholder="Sender address" required
                             class="m-2 sm:w-full bg-gray-700 border border-gray-300 py-2 px-4 rounded-lg"></td>

                            <td>Address:</td>
                            <td><input type="textfield" name="raddress" value="<?php echo $data['raddress'];?>" placeholder="Receiver address" required
                            class="m-2 sm:w-full bg-gray-700 border border-gray-300 py-2 px-4 rounded-lg"></td>
                        </tr>
                        <!-- <tr>
                            <td colspan="4" class="py-2">
                               
                            </td>
                        </tr> -->
                        <tr class="text-gray-400 uppercase">
                            <td>Weight:</td>
                            <td><input type="number" name="wgt" value="<?php echo $data['weight'];?>" placeholder="Weight in kg" required
                     class="m-2 sm:w-full bg-gray-700 border border-gray-300 py-2 px-4 rounded-lg"></td>

                            <td>Receipt No.:</td>
                            <td><input ype="number" name="billno" value="<?php echo $data['billno'];?>" placeholder="Enter transaction number" required
                           class="m-2 sm:w-full bg-gray-700 border border-gray-300 py-2 px-4 rounded-lg"></td>
                        </tr>
                        <tr class="text-gray-400 uppercase">
                            <td>Date:</td>
                            <td><input type="date" name="date" value="<?php echo date('Y-m-d'); ?>" readonly
                            class="m-2 sm:w-full bg-gray-700 border border-gray-300 py-2 px-4 rounded-lg"></td>
                            <td>Items Image:</td>
                            <td><input  type="file" name="simg" value="<?php echo $data['image'];?>" class="m-2 sm:w-full bg-gray-700 border border-gray-300 py-2 px-4 rounded-lg" type="file" name="simg" class="w-full py-2 px-4 border border-gray-300 rounded-lg"></td>
                        </tr>
                        <tr type="hidden" name="idd" value="<?php echo $data['c_id']; ?>" class="text-gray-400 uppercase ">
                            <td colspan="4" class="py-4">
                                <input type="submit" name="submit" value="Update" 
                                    class=" mt-10 bg-blue-500 text-white py-2 px-8 rounded-lg cursor-pointer">
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </form>
    </div>
    </form>

</div>   
</form>


<?php
include('footer.php');
?>
</body>
</html>

