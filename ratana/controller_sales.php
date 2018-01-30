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
	function save_sale_order(){
		global $link;
		$order_id = $_POST["order_id"];
		$supplier_id = $_POST["supplier_id"];

		$sql_po = "INSERT INTO ".TBL_PURCHASE_ORDERS." (po_id, supplier_id, po_creation_date, po_status_id)
						VALUES($po_id, $supplier_id, NOW(), ".PO_STATUS_NEW.")";
		if($link->query($sql_po)){
			// save to purchase order details
			$products = json_decode($_POST["products"], true);
			foreach($products as $product){
				$product_id = $product["product_id"];
				$unit_cost = $product["unit_cost"];
				$quantity = $product["quantity"];

				$sql_product = "INSERT INTO ".TBL_PURCHASE_ORDER_DETAILS." (po_id, product_id, qty, unit_cost, time_stamp)
									VALUES($po_id, $product_id, $quantity, $unit_cost, NOW())";
				$link->query($sql_product);
			}
		}else{
			echo "0"; //failed
		}
	}

	if($link) $link->close();
?>

 <!--$order_id = $_POST["order_id"];
       $customer_id = $_POST["customer_id"];
       $order_date = $_POST["order_date"];
       $payment_type = $_POST["payment_type"];
       $paid_date= $_POST["paid_date"];
       $status_id = $_POST["status_id"];
    
		$sql = "UPDATE ".TBL_SUPPLIERS." SET first_name ='$first_name', last_name ='$last_name', e_mail ='$e_mail', phone = '$phone', address ='$address'
				fax = '$fax', city = '$city', state ='$state', zipcode ='$zipcode', country ='$country'
                WHERE id = '$id'";
			if($link->query($sql)){
			echo "1";
		      }else{
			echo "2";
		}
		} -->