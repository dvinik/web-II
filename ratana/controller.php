<?php
	include_once("config.php");

	if(isset($_POST["action"])){
		$action = $_POST["action"];
		$action();
	}

	function create_new_product_category(){
		global $link;
		$name = $_POST["category_name"];
		$res = $link->query("SELECT * FROM ".TBL_PRODUCT_TYPES." WHERE product_types = '$name'");
		if($res->num_rows > 0){ // check whether name exist
			echo "0";
		}else{
			$res2 = $link->query("INSERT INTO ".TBL_PRODUCT_TYPES." (product_types) VALUES('$name')");
			if($res2){
				echo "1";	
			}else{
				echo "2";
			}
			
		}
	}
	function create_new_product(){
		global $link;
		$product_code = $_POST["product_code"];
		$product_name = $_POST["product_name"];
		$description = $_POST["description"];
		$standard_cost = $_POST["standard_cost"];
		$list_price = $_POST["list_price"];
		$category = $_POST["category"];
		//check whether product name is exist
		$res_check = $link->query("SELECT * FROM ".TBL_PRODUCTS." WHERE product_name = '$product_name'");
		if($res_check->num_rows > 0){
			echo "0";//product name existed
		}else{
			$sql = "INSERT INTO ".TBL_PRODUCTS." (product_code, product_name, description, standard_cost, list_price, product_type_id)
					VALUES('$product_code','$product_name', '$description', $standard_cost, $list_price, $category)";
			$res = $link->query($sql);
			if($res){
				echo "1";//success
			}else{
				echo "2";//failed
			}
		}
	}
	function delete_supplier(){
		global $link;
		$del_id = $_POST['del_id'];
		$mysql ="DELETE FROM ".TBL_SUPPLIERS." WHERE supplier_id = $del_id";
		if($link->query($mysql)){
			echo "YES";
		}else{
			echo "NO";
		}
	}
	function create_new_supplier(){
		global $link;
		$supplier_name = $_POST['supplier_name'];
		$email = $_POST['email'];
		$phone_number = $_POST['phone'];
		$fax = $_POST['fax'];
		$address = $_POST['address'];
		$city = $_POST['city'];
		$state = $_POST['state'];
		$zipcode = $_POST['zipcode'];
		$country = $_POST['country'];
//		$res = $link->query("SELECT * FROM ".TBL_SUPPLIERS." WHERE supplier_name = '$supplier_name'");
//		if($res->num_rows >= 1){
//			echo "0";
//		}else {
		$sql = "INSERT INTO ".TBL_SUPPLIERS."(supplier_name, email, phone, fax, address, city, state, zipcode, country)
				VALUES('$supplier_name', '$email','$phone_number','$fax','$address', '$city', '$state', '$zipcode', '$country')";
		if($link->query($sql)){
			echo "1";
		}else{
			echo "2";
		}
//		}
	}
	function edit_supplier(){
		global $link;
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
		$sql = "UPDATE ".TBL_SUPPLIERS." SET supplier_name ='$supplier_name',  email ='$email', phone = '$phone',
				fax = '$fax', address ='$address', city = '$city', state ='$state', zipcode ='$zipcode', country ='$country'
                WHERE supplier_id = '$supplier_id'";
		If($link->query($sql)){
			echo "1";
		}else{
			echo "2";
		}
	}
	function get_supplier_address(){
		global $link;
		$id = $_POST["id"];
		$res = $link->query("SELECT * FROM suppliers WHERE supplier_id = $id");
		if($res->num_rows > 0){
			$item = $res->fetch_assoc();
			echo "{$item['address']} {$item['phone']} {$item['email']} {$item['fax']}";
		}
	}

	function get_product_info(){
		global $link;
		$product_id = $_POST["product_id"];
		$res = $link->query("SELECT * FROM ".TBL_PRODUCTS." WHERE product_id = $product_id");
		if($res && $res->num_rows > 0){
			$row = $res->fetch_assoc();
			echo json_encode($row);
		}else{
			echo "0";
		}
	}
	function submit_purchase_order(){
		global $link;
		$po_id = $_POST["po_id"];
		$sql = "UPDATE ".TBL_PURCHASE_ORDERS." SET po_status_id = ".PO_STATUS_SUBMITTED." WHERE po_id = $po_id";
		if($link->query($sql)){
			echo "1";
		}else{
			echo "0";
		}
	}
	function cancel_purchase_order(){
		global $link;
		$po_id = $_POST["po_id"];
		$sql = "UPDATE ".TBL_PURCHASE_ORDERS." SET po_status_id = ".PO_STATUS_CANCELLED." WHERE po_id = $po_id";
		if($link->query($sql)){
			echo "1";
		}else{
			echo "0";
		}
	}
	function delete_purchase_order(){
		global $link;
		$po_id = $_POST["po_id"];
		$sql1 = "DELETE FROM ".TBL_PURCHASE_ORDER_DETAILS." WHERE po_id = $po_id";
		$sql2 = "DELETE FROM ".TBL_PURCHASE_ORDERS." WHERE po_id = $po_id";
		if($link->query($sql1) && $link->query($sql2)){
			echo "1";
		}else{
			echo "0";
		}
	}
	function save_purchase_order(){
		global $link;
		// save to purchase orders
		// po_id, supplier_id, creation_date, po_status_id
		$po_id = $_POST["po_id"];
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
	function update_purchase_order(){
		global $link;
		$po_id = $_POST["po_id"];
		$supplier_id = $_POST["supplier_id"];
		$sql_po = "UPDATE ".TBL_PURCHASE_ORDERS." SET supplier_id = $supplier_id WHERE po_id = $po_id";
		if($link->query($sql_po)){
			$products = json_decode($_POST["products"], true);
			// delete deleted items
			$pod_ids = [];
			foreach($products as $product){
				if(isset($product["pod_id"])) $pod_ids[] = $product["pod_id"];
			}
			$check_delete_query = "SELECT * FROM ".TBL_PURCHASE_ORDER_DETAILS." WHERE po_id = $po_id";
			$check_delete_res = $link->query($check_delete_query);
			if($check_delete_res && $check_delete_res->num_rows > count($pod_ids)){ // there are items were deleted
				$delete_items_query = "DELETE FROM ".TBL_PURCHASE_ORDER_DETAILS." WHERE po_id = $po_id AND
									  id NOT IN (".implode(",", $pod_ids).")";
				$link->query($delete_items_query);
			}

			//update items
			foreach($products as $product){
				$product_id = $product["product_id"];
				$unit_cost = $product["unit_cost"];
				$quantity = $product["quantity"];
				if(isset($product["pod_id"])){
					$pod_id = $product["pod_id"];
					$pod_ids[] = $pod_id;
					$sql_product = "UPDATE ".TBL_PURCHASE_ORDER_DETAILS." SET product_id = $product_id,
									qty = $quantity, unit_cost = $unit_cost WHERE id = $pod_id";
					$link->query($sql_product);
				}else{
					$sql_product = "INSERT INTO ".TBL_PURCHASE_ORDER_DETAILS." (po_id, product_id, qty, unit_cost, time_stamp)
									VALUES($po_id, $product_id, $quantity, $unit_cost, NOW())";
					$link->query($sql_product);
				}
			}

		}else{
			echo "0"; //failed
		}
	}
	function confirm_purchase_order_received(){
		global $link;
		$po_id = $_POST["po_id"];
		$products = json_decode($_POST["products"], true);
		//update purchase order status to received
		$sql_update_status = "UPDATE ".TBL_PURCHASE_ORDERS." SET po_status_id = ".PO_STATUS_RECEIVED." WHERE po_id = $po_id";
		if($link->query($sql_update_status)){
			//add purchase items to inventory transaction
			foreach($products as $product){
				$product_id = $product["product_id"];
				$quantity = $product["receive_quantity"];
				$sql_add_inventory_transaction = "INSERT INTO ".TBL_INVENTORY_TRANSACTIONS.
				                                 " (ITX_Created_Date, ITX_Modified_Date, Product_ID, QTY, PO_ID) ".
				                                 " VALUES(NOW(), NOW(), $product_id, $quantity, $po_id)";
				$link->query($sql_add_inventory_transaction);
			}
		}else{
			echo "0";
		}
	}

	function add_new_paid_invoice(){
		global $link;
		$invoice_number = $_POST["invoice_number"];
		$invoice_date = $_POST["invoice_date"];
		$po_id = $_POST["po_id"];
		$due_date = $_POST["due_date"];
		$paid_date = $_POST["paid_date"];
		$payment_method =$_POST["payment_method"];
		$total_amount = $_POST["total_amount"];

		$res_check = $link->query("SELECT * FROM ".TBL_PURCHASE_ORDER_INVOICES." WHERE invoice_number = $invoice_number");
		if($res_check->num_rows > 0){
			echo "0";
		}else{
			$sql = "INSERT INTO ".TBL_PURCHASE_ORDER_INVOICES."(invoice_number,invoice_date,po_id ,due_date, amt_due )
					VALUES($invoice_number, '$invoice_date', $po_id, '$due_date', $total_amount);
					INSERT INTO ".TBL_PAYMENTS."(invoice_number, amount_paid, date_paid, payment_type_id )
					VALUES($invoice_number, $total_amount, '$paid_date', $payment_method); ";
					 error_log($sql);
			if($link->multi_query($sql)){
				echo "1";
			}else{
				echo "2";
			}
		}
	}

	function add_new_journal(){
		global $link;

		$entry_date = $_POST["entry_date"];
		// echo("$entry_date");
		$account_id = $_POST["account_id"];
		$debit = $_POST["debit"];
		$credit = $_POST["credit"];
		$entry_description = $_POST["entry_description"];

		$sql = "INSERT INTO ".TBL_JOURNAL." (entry_date, account_id, debit, credit, entry_description) VALUES('$entry_date', $account_id, $debit, $credit, '$entry_description');";
		// error_log($sql);

		if($link->query($sql)){
			echo "1";
		}else{
			echo "2";
		}
	}

	function delete_journal(){
		global $link;
		$del_id = $_POST['del_id'];
		$mysql ="DELETE FROM ".TBL_JOURNAL." WHERE entry_id = $del_id";
		if($link->query($mysql)){
			echo "YES";
		}else{
			echo "NO";
		}
	}
			
	

	if($link) $link->close();
?>