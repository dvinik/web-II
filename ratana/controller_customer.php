<?php
	include_once("config.php");

	if(isset($_POST["action"])){
		$action = $_POST["action"];
		$action();
	}

	function create_new_customer(){
        global $link;
       $first_name = $_POST["first_name"];
       $last_name = $_POST["last_name"];
       $e_mail = $_POST["e_mail"];
       $phone = $_POST["phone"];
       $address = $_POST["address"];
       $city = $_POST["city"];
       $state = $_POST["state"];
       $zipcode = $_POST["zipcode"];
       $country = $_POST["country"];
		
		$res_check = $link->query("SELECT * FROM ".TBL_CUSTOMERS.
					" WHERE first_name = '$first_name' AND last_name = '$last_name'");
		if($res_check->num_rows > 0){
			echo "0";
		}else{
			$sql = "INSERT INTO ".TBL_CUSTOMERS." (first_name, last_name, e_mail, phone, address, city, state, zipcode, country) VALUES('$first_name','$last_name', '$e_mail', '$phone', '$address', '$city', '$state', '$zipcode', '$country')";
					error_log($sql);
			if($link->query($sql)){
			echo "1";
		      }else{
			echo "2";
		}
		} 
    }

function edit_customer(){
        global $link;
              $id = $_POST['id'];
              $first_name = $_POST["first_name"];
              $last_name = $_POST["last_name"];
              $e_mail = $_POST["e_mail"];
              $phone = $_POST["phone"];
              $address = $_POST["address"];
              $city = $_POST["city"];
              $state = $_POST["state"];
              $zipcode = $_POST["zipcode"];
              $country = $_POST["country"];
		$sql = "UPDATE ".TBL_CUSTOMERS." SET first_name ='$first_name', last_name ='$last_name', e_mail ='$e_mail', phone = '$phone', address ='$address', city = '$city', state ='$state', zipcode ='$zipcode', country ='$country'
                WHERE id = '$id'";
			if($link->query($sql)){
			echo "1";
		      }else{
			echo "2";
		}
		} 
    


function delete_customer(){
		global $link;
		$del_id = $_POST['del_id'];
		$mysql ="DELETE FROM ".TBL_CUSTOMERS." WHERE id = $del_id";
		if($link->query($mysql)){
			echo "YES";
		}else{
			echo "NO";
		}

}
	if($link) $link->close();
?>