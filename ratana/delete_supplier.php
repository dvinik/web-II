<?php include('config.php');

$del_id = $_POST['del_id'];

// echo $del_id;

$mysql ="DELETE FROM Suppliers WHERE supplier_id = $del_id";
if($link->query($mysql)){
   echo "YES";
}else{
   echo "NO";
}

$link->close();



?>