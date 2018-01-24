<?php
include('config.php');

$action = $_POST["action"];
if($action == "get_supplier_address") {
	get_supplier_address();
}

function get_supplier_address(){
	global $link;
	$id = $_POST["id"];
	$res = $link->query("SELECT * FROM suppliers WHERE supplier_id = $id");
	if($res->num_rows > 0){
		$item = $res->fetch_assoc();
		echo "{$item['address']} {$item['phone']} {$item['email']} {$item['fax']}";
	}
	if($link) $link->close();
}





?>