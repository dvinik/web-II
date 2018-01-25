<?php
	include_once("config.php");

	$action = $_POST["action"];
	if($action == "create_new_product_category"){
		create_new_product_category();
	}elseif($action == "create_new_product"){
		create_new_product();
	}elseif($action == "delete_supplier"){
		delete_supplier();
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
	if($link) $link->close();
?>