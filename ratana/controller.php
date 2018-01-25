<?php
	include_once("config.php");

	$action = $_POST["action"];
	if($action == "create_new_product_category"){
		create_new_product_category();
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

	if($link) $link->close();
?>