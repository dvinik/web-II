
<?php include('config.php');
//hein
$product_id = $_POST['product_id'];
$product_code = $_POST['product_code'];
$product_name = $_POST['product_name'];
$supplier_id = $_POST['supplier_id'];
$description = $_POST['description'];
$standard_cost = $_POST['standard_cost'];
$list_price = $_POST['list-price'];
$product_type_id = $_POST['product_type_id'];
// echo $supplierName;


if(!$link){
    echo "cannot connect to DB";
}else{
    $res = $link->query("SELECT * FROM suppliers WHERE supplier_name = '$supplier_name'");
    if($res->num_rows >= 1){
        echo "name already exist !";
    }else {
        $sql = "INSERT INTO products(product_id, product_code, product_name, supplier_id, description, list-price, product_type_id) VALUES('$product_id', '$product_code', '$product_name', '$supplier_id', '$description', '$list-'$price', '$product_type_id')";
        error_log($sql);
        if($link->query($sql)){
            echo "sucessfully inserted";
            echo "<a href='expense.php'>Return to the PO page</a>";
            header("Location: http://localhost/acc/expense.php");
            exit;
        }else{
            echo "failed";
        }
    }
    $link->close();
}