<?php include('config.php');

$supplier_name = $_POST['supplier_name'];
$email = $_POST['email'];
$phone_number = $_POST['phone'];
$fax = $_POST['fax'];
$address = $_POST['address'];
$city = $_POST['city'];
$state = $_POST['state'];
$zipcode = $_POST['zipcode'];
$country = $_POST['country'];
// echo $supplierName;


if(!$link){
    echo "cannot connect to DB";
}else{
    $res = $link->query("SELECT * FROM suppliers WHERE supplier_name = '$supplier_name'");
    if($res->num_rows >= 1){
        echo "name already exist !";
    }else {
        $sql = "INSERT INTO suppliers(supplier_name, email, phone, fax, address, city, state, zipcode, country) VALUES('$supplier_name', '$email','$phone_number','$fax','$address', '$city', '$state', '$zipcode', '$country')";
        error_log($sql);
        if($link->query($sql)){
            echo "sucessfully inserted";
            echo "<a href='purchase.php'>Return to the PO page</a>";
            header("Location: http://localhost/acc/purchase.php");
            exit;
        }else{
            echo "failed";
        }
    }
    $link->close();
}