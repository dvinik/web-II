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
			<th scope="col" width="3%">#</th>
			<th scope="col" width="20%">Customer</th>
			<th scope="col" width="15%">Order Date</th>
			<th scope="col" width="10%">Payment Type</th>
			<th scope="col" width="15%">Paid Date</th>
			<th scope="col" width="10%">Status</th>
		</tr>
		</thead>
		<tbody>

		<?php
		$sql = "SELECT o.*, c.first_name, c.last_name FROM ".TBL_ORDERS." AS o INNER JOIN "
		       .TBL_CUSTOMERS." AS c ON o.customer_id = c.id  ORDER BY o.order_id DESC";
		$res = $link->query($sql);
		if($res->num_rows > 0){
			$index = 0;
			while($row = $res->fetch_assoc()){
				$index ++;
				echo "<tr>";
				$order_id = $row["order_id"];
				$status_id = $row["status_id"];
				$status = isset($ORDER_STATUS[$status_id]) ? $ORDER_STATUS[$status_id] : "";
				$order_date = format_date($row["order_date"]);
				$paid_date = format_date($row["paid_date"]);

				echo "<td>{$index}</td>";
				echo "<td>{$row["first_name"]} {$row["last_name"]}</td>";
				echo "<td>{$order_date}</td>";
				echo "<td>{$row["payment_type"]}</td>";
				echo "<td>{$paid_date}</td>";
				echo "<td>{$status}</td>";
				//echo "<td><i class=' edit_sales_order fa fa-pencil fa-1x'></i></td>";
//				echo "<td><i a_id='$order_id' class='delete_sales_order fa fa-trash' aria-hidden='true'></i> </td>";

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
