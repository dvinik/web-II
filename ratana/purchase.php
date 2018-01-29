<?php include("header.php"); ?>
<?php include_once('config.php');

?>
<?php ?>

<div class="row" id="nav_second">
	<div class="col-sm-2">
	</div>
	<div class="col-sm-10" >
		<ul class="nav nav-pills">
			<li role="presentation"><a href="" class="nav_text active">Purchase Order </a></li>
			<li role="presentation"><a href="payment.php" class="nav_text">Payment</a></li>
			<li role="presentation"><a href="supplier_list.php" class="nav_text">Supplier List</a></li>
			<li role="presentation"><a href="supplier_report.php" class="nav_text">Suppliers Reports</a></li>
     	</ul>
	</div>
</div>
<br>
	
	<div class="row">
		<div class="col-sm-8">
		<!-- <a href="purchase_order_create.php" class="btn btn-primary">Create New Purchase Order</a> -->
		</div>
		<div class="col-sm-4">
		<a href="purchase_order_create.php" class="btn btn-primary "><i class="fa fa-.btn-primary" aria-hidden="true"></i> <b>Create New Purchase Order</b></a>
		<!-- <i class="fa fa-print fa-3x" aria-hidden="true" style="color:blue"></i> -->
		<!-- <li role="presentation" class="active"><a href="#" class="btn btn-success">Print</a></li> &nbsp; -->
		<!-- <li role="presentation" class="active"><a href="#" class="btn btn-primary">Print Preview</a></li> -->
		</div>
	</div>
<div class="container">
		<hr class="my-4">
		<h2 id="h2" class="text-center"><b>Puchase Order View</b> </h2>
		<table class="table table-striped">
			<thead>
			<tr>
				<th scope="col" width="10%">P.O #</th>
				<th scope="col" width="30%">Creation Date</th>
				<th scope="col" width="20%">Supplier</th>
				<th scope="col" width="15%">Status</th>
				<th scope="col" width="25%">Action</th>
			</tr>
			</thead>
			<tbody>
			<?php
				$sql = "SELECT po.*, s.supplier_name  FROM ".TBL_PURCHASE_ORDERS." AS po
						INNER JOIN ".TBL_SUPPLIERS." AS s ON s.supplier_id = po.supplier_id
						ORDER BY po.po_id DESC";
				$res = $link->query($sql);
				if($res->num_rows > 0){
					while($row = $res->fetch_assoc()){
						echo "<tr>";
						$po_id = $row["po_id"];
						$status = $row["po_status_id"];

						echo "<td>{$po_id}</td>";
						echo "<td>{$row["po_creation_date"]}</td>";
						echo "<td>{$row["supplier_name"]}</td>";
						echo "<td>".$PO_STATUS[$status]."</td>";
						echo "<td po_id='$po_id'>";
							if($status == PO_STATUS_NEW){
								echo "<button class='btn btn-primary po-class-submit'>Submit</button> &nbsp;".
								     "<button class='btn btn-info po-class-edit'>Edit</button> &nbsp;".
									 "<button class='btn btn-danger po-class-delete'>Delete</button>";
							}elseif($status == PO_STATUS_SUBMITTED){
								echo "<button class='btn btn-info po-class-receive'>Receive</button> &nbsp;".
								     "<button class='btn btn-info po-class-view'>View</button> &nbsp;".
								     "<button class='btn btn-danger po-class-cancel'>Cancel</button>";
							}elseif($status == PO_STATUS_CANCELLED){
								echo "<button class='btn btn-info po-class-view'>View</button>";
							}elseif($status == PO_STATUS_RECEIVED){
								echo "<button class='btn btn-info po-class-receive-view'>View</button>";
							}
						echo "</td>";
						echo "</tr>";
					}
				}
			?>
			</tbody>
		</table>
</div>

<?php include("footer.php");
	$link->close();
?>
<script type="text/javascript">
$(function(){
	$(".po-class-submit").on("click", function(){
		if(confirm("Are you sure you want to submit?")){
			// change status to submit
			var po_id = $(this).parent().attr("po_id");
			$.ajax({
				type:"POST",
				url:"controller.php",
				data:{
					"action": "submit_purchase_order",
					"po_id": po_id
				},
				success: function(data){
					if(data == "0"){
						alert("Submit purchase order failed!");
					}else{
						location.reload();
					}
				}
			});
		}
	});
	$(".po-class-cancel").on("click", function(){
		if(confirm("Are you sure you want to cancel this purchase order?")){
			var po_id = $(this).parent().attr("po_id");
			$.ajax({
				type:"POST",
				url:"controller.php",
				data:{
					"action": "cancel_purchase_order",
					"po_id": po_id
				},
				success: function(data){
					if(data == "0"){
						alert("Cancel purchase order failed!");
					}else{
						location.reload();
					}
				}
			});
		}
	});
	$(".po-class-delete").on("click", function(){
		if(confirm("Are you sure you want to delete?")){
			var po_id = $(this).parent().attr("po_id");
			$.ajax({
				type:"POST",
				url:"controller.php",
				data:{
					"action": "delete_purchase_order",
					"po_id": po_id
				},
				success: function(data){
					if(data == "0"){
						alert("Delete purchase order failed!");
					}else{
						location.reload();
					}
				}
			});
		}
	});
	$(".po-class-view").on("click", function(){
		var po_id = $(this).parent().attr("po_id");
		window.location.href = "purchase_order_view.php?po_id="+po_id;
	});
	$(".po-class-edit").on("click", function(){
		var po_id = $(this).parent().attr("po_id");
		window.location.href = "purchase_order_edit.php?po_id="+po_id;
	});

	$(".po-class-receive").on("click", function(){
		var po_id = $(this).parent().attr("po_id");
		window.location.href = "purchase_order_receive.php?po_id="+po_id;
	});
	$(".po-class-receive-view").on("click", function(){
		var po_id = $(this).parent().attr("po_id");
		window.location.href = "purchase_order_receive_view.php?po_id="+po_id;
	});
});
</script>
	


