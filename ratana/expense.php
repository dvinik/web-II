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
<div class="row" style="background-color: #f2f2f2">
	<div class="col-sm-6">
	<h2 id="h2">Purchese Order View</h2>
	</div>
	<div class="col-sm-6">	
		<div class="right">
			<ul class="nav nav-pills">
			  <li role="presentation" class="active"><a href="#">Print</a></li>
			  <!-- <li role="presentation"><a href="#">Save</a></li> -->
			  <!-- <li role="presentation"><a href="#">Save and New</a></li> -->
			</ul>
		</div>
	</div>

</div>
<hr>

	<a href="create_po.php"><h2><b>Create New Purchase Order</b></h2></a>	

<div class="container">
	<div class="jumbotron mt-4">
		<h4>Purchese Order View</h4>
		<hr class="my-4">
		<h5>1. General Information</h5>
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
</div>

	<?php include_once('footer.php'); ?>
	






	
<?php include("footer.php"); ?>

	


