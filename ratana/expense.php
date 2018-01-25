<?php include("header.php"); ?>
<?php include('config.php'); ?>
<?php include('add_supplier.php'); ?>

<div class="row" id="nav_second">
	<div class="col-sm-2">
	</div>
	<div class="col-sm-10" >
		<ul class="nav nav-pills">
           
           <li role="presentation"><a href="" class="nav_text">Purchase Order </a></li>
           <li role="presentation"><a href="receiving_form.php" class="nav_text">Reciev Order</a></li>
           <li role="presentation"><a href="supplier_list.php" class="nav_text">Supplier List</a></li>
          <li role="presentation"><a href="supplier_report.php" class="nav_text">Suppliers Reports</a></li>
     	</ul>
		
	</div>
</div>
<br>
	
	<div class="row">
		<div class="col-sm-10">
		<a href="create_po.php" class="btn btn-primary">Create New Purchase Order</a>
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
				<th scope="col">Vendor Name</th>
				<th scope="col">Decription</th>
				<th scope="col">Statue</th>
				<th scope="col">Edit</th>
				<th scope="col">Cancel</th>
			</tr>
			</thead>
			<tbody>

			</tbody>
		</table>
	
</div>

	<?php include_once('footer.php'); ?>
	






	
<?php include("footer.php"); ?>

	


