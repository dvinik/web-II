<?php include("header.php"); ?>
<?php include_once('config.php');?>
<div class="row" id="nav_second">
	<div class="col-sm-2">
	</div>
	<div class="col-sm-10" >
		<ul class="nav nav-pills">
			<li role="presentation"><a href="revenue.php" class="nav_text active">Sales Order </a></li>
			<li role="presentation"><a href="customers.php" class="nav_text">View Customers</a></li>
			<li role="presentation"><a href="sales_report.php" class="nav_text">Sales Report</a></li>
		</ul>
	</div>
</div>
<br>
<div class="row">
	<div class="col-sm-10">
		<a href="create_sales_order.php" class="btn btn-primary">Create New Sales Order</a>
	</div>
	<div class="col-sm-2">
		<i class="fa fa-print fa-3x" aria-hidden="true" style="color:blue"></i>
	</div>
</div>
<div class="container">

	<hr class="my-4">
	<h4 id="h2" class="text-center"><b>Sales Order View</b> </h4>
	<br>
	<table class="table table-striped">
		<thead>
		<tr>

			<th scope="col">Order ID</th>
			<th scope="col">Customer ID</th>
			<th scope="col">Order Date</th>
			<th scope="col">Payment Type</th>
			<th scope="col">Paid Date</th>
			<th scope="col">Status ID</th>
			<th scope="col">Delete</th>
		</tr>
		</thead>
		<tbody>

		<?php
		$sql = "SELECT * FROM ".TBL_ORDERS." ORDER BY order_id ASC";
		$res = $link->query($sql);
		if($res->num_rows > 0){
			while($row = $res->fetch_assoc()){
				echo "<tr>";
				$order_id = $row["order_id"];

				echo "<td>{$row["order_id"]}</td>";
				echo "<td>{$row["customer_id"]}</td>";
				echo "<td>{$row["order_date"]}</td>";
				echo "<td>{$row["payment_type"]}</td>";
				echo "<td>{$row["paid_date"]}</td>";
				echo "<td>{$row["status_id"]}</td>";
				//echo "<td><i class=' edit_sales_order fa fa-pencil fa-1x'></i></td>";
				echo "<td><i a_id='$order_id' class='delete_sales_order fa fa-trash' aria-hidden='true'></i> </td>";

				echo "</tr>";
			}}
		?>


		</tbody>
	</table>

</div>



<?php include("footer.php");
include_once( 'add_new_sales_modal.php' );
//include_once( 'edit_customer_modal.php');
?>
<script type="text/javascript">


	$(function(){
		$(".delete_sales_order").on('click',function(){
			var orderid = $(this).attr("a_id");
			if(confirm("Are you sure you want to delete sales order with ID : '"+ orderid + "'?")){
				var del_id= $(this).attr('a_id');
				// alert(del_id);
				var $ele = $(this).parent().parent();
				$.ajax({
					type:'POST',
					url:'controller_sales.php',
					data:{
						'action':"delete_sales_order",
						'del_id':del_id
					},
					success: function(data){
						if(data=="YES"){
							$ele.fadeOut().remove();
						}else{
							alert("can't delete the row");
						}
					}
				});
			}
		});
	});

</script>
