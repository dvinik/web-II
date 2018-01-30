<?php
include_once("config.php");

if(isset($_POST["action"])){
	$action = $_POST["action"];
	$action();
}

function delete_sales_order(){
	global $link;
	$del_id = $_POST['del_id'];
	$mysql ="DELETE FROM ".TBL_ORDERS." WHERE order_id = $del_id";
	if($link->query($mysql)){
		echo "YES";
	}else{
		echo "NO";
	}

}

function delete_sales_order_report(){
	global $link;
	$del_id = $_POST['del_id'];
	$mysql ="DELETE FROM ".TBL_ORDER_DETAILS." WHERE order_id = $del_id";
	if($link->query($mysql)){
		echo "YES";
	}else{
		echo "NO";
	}
}


function edit_sales_order(){
	global $link;
	$order_id = $_POST['order_id'];
	$customer_id = $_POST['customer_id'];
	$order_date = $_POST['order_date'];
	$payment_type = $_POST['payment_type'];
	$paid_date = $_POST['paid_date'];
	$status_id = $_POST['status_id'];

	$sql = "UPDATE ".TBL_ORDERS." SET order_id ='$order_id',  customer_id ='$customer_id', order_date = '$order_date',payment_type = '$payment_type', paid_date ='$paid_date', status_id = '$status_id WHERE order_id = '$order_id'";
	If($link->query($sql)){
		echo "1";
	}else{
		echo "2";
	}
}
function get_customer_info(){
	global $link;
	$customer_id = $_POST["customer_id"];
	$res = $link->query("SELECT * FROM ".TBL_CUSTOMERS." WHERE id = $customer_id");
	if($res->num_rows > 0){
		$item = $res->fetch_assoc();
		echo "{$item['e_mail']} {$item['phone']} {$item['address']} {$item['city']} {$item['state']} {$item['zipcode']} {$item['country']}";
	}
}
function save_sale_order(){
	global $link;
	$customer_id = $_POST["customer_id"];
	$order_id = $_POST["order_id"];

	//save to table orders
	$sql_order = "INSERT INTO ".TBL_ORDERS." (order_id, customer_id, order_date, payment_type, paid_date, status_id)
					VALUES($order_id, $customer_id, NOW(), 'Cash', NOW(), ".ORDER_STATUS_CLOSED.")";
	if($link->query($sql_order)){
		// save products to table order details
		$products = json_decode($_POST["products"], true);
		foreach($products as $product){
			$product_id = $product["product_id"];
			$unit_cost = $product["unit_cost"];
			$quantity = $product["quantity"];

			$sql_product = "INSERT INTO ".TBL_ORDER_DETAILS." (order_id, product_id, quantity, unit_price,
							discount, status_id, order_date)
							VALUES($order_id, $product_id, $quantity, $unit_cost, 0.0, ".ORDER_STATUS_CLOSED.", NOW())";
			$link->query($sql_product);
		}
	}else{
		echo "0"; //failed
	}
}

if($link) $link->close();
?>