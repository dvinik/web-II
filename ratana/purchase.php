<?php include("header.php"); ?>
<?php include('config.php'); ?>
<?php //include( 'add_new_supplier_modal.php' ); ?>

<div class="row" id="nav_second">
	<div class="col-sm-2">
	</div>
	<div class="col-sm-10" >
		<ul class="nav nav-pills">
			<li role="presentation"><a href="" class="nav_text active">Purchase Order </a></li>
			<li role="presentation"><a href="receive_order.php" class="nav_text">Receive Order</a></li>
			<li role="presentation"><a href="supplier_list.php" class="nav_text">Supplier List</a></li>
			<li role="presentation"><a href="supplier_report.php" class="nav_text">Suppliers Reports</a></li>
     	</ul>
	</div>
</div>
<br>
	
	<div class="row">
		<div class="col-sm-10">
		<a href="create_purchase_order.php" class="btn btn-primary">Create New Purchase Order</a>
		</div>
		<div class="col-sm-2">
		<i class="fa fa-print fa-3x" aria-hidden="true" style="color:blue"></i>
		</div>
	</div>
<div class="container">
		<hr class="my-4">
		<h4 id="h2" class="text-center"><b>Puchase Order View</b> </h4>
		<table class="table table-striped">
			<thead>
			<tr>
				<th scope="col">P.O #</th>
				<th scope="col">Date</th>
				<th scope="col">Supplier Name</th>
				<th scope="col">Description</th>
				<th scope="col">Status</th>
				<th scope="col">Edit</th>
				<th scope="col">Cancel</th>
			</tr>
			</thead>
			<tbody>
			</tbody>
		</table>
</div>

<?php include("footer.php"); ?>

	


