<?php include('config.php');

$supplier_id = $_POST['supplier_id'];
$supplier_name = $_POST['supplier_name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$fax = $_POST['fax'];
$address = $_POST['address'];
$city = $_POST['city'];
$state = $_POST['state'];
$zipcode = $_POST['zipcode'];
$country = $_POST['country'];
echo $supplier_id;
 
if(!$link){
    echo"cannot connect to DB";
}else{
    // echo"$Vendor_ID @vender_name $Address $Email $Phone_numbere $Zipcode";
    $res = $link->query("SELECT * FROM  ".TBL_SUPPLIERS." WHERE supplier_name = '$supplier_name'");
    if(mysqli_num_rows($res)>= 1){
        echo"Name already exit";
    }else{
        If($link->query("UPDATE ".TBL_SUPPLIERS." SET supplier_name ='$supplier_name',  email ='$email', phone = '$phone', address ='address', city = 'city', state ='$state', zipcode ='$zipcode', country ='$country'
            WHERE supplier_id = '$supplier_id'")){
            echo "successfully update";
            echo "<a href='supplier_list.php'> Return to the supplier page</a>";
            header("Location:supplier_page.php");
            exit;
        }else{
            echo "failed";
        }
    }
}

    $link->close();	









 ?>
