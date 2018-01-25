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
	<div class="col-sm-8">
	<h1 id="h2">Create Purchase Order</h1>
	</div>
	<div class="col-sm-4">	
			<ul class="nav nav-pills">
			  <li role="presentation" class="active"><a href="#" class="btn btn-success">Print</a></li>
			   <li role="presentation" class="active"><a href="#" class="btn btn-primary">Print Preview</a></li>
			</ul>
	</div>

</div>
<hr>
<div class="container">
	<div class="jumbotron">
		<div class="row">
			<div class="col-sm-2">
				<span><b>P.O Number</b></span>
			</div>
			<div class="col-sm-5">
				<?php  echo uniqid();?>
			</div>
			<div class="col-sm-5">
				<span><h2>Family Bakery Shop</h2></span>
			</div>
		</div>
		<br>		
		<div class="row">
			<div class="col-sm-2">
				<span><b>Date:</b></span>
			</div>
			<div class="col-sm-5">
				<?php echo date("d/m/Y");   ?>
			</div>
			<div class="col-sm-5">
				<span>Bangkok,Bangkapi</span><br>
				<span>Phone:098765543</span><br>
				<span>Email:familybakeryshop@gmail.com</span>
				<!-- <span>Zipcode:0987</span> -->
				
			</div>
		</div>
		<br>		
<div class="container">
		<div class="row" style="background-color: #f2f2f2">
		<h3 id="h3"><b>I. Vender's information</b></h3>
		<hr>
		<div class="row">
			<form action ="" method ="post">
				<button id="creater_suppliers" type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong"> +Add new Vender</button>
				<div class="form-row">
					<div class="form-group col-md-4">
						<label for="supplier-select">Choose a supplier</label>
						<select name="supplier" class="form-control" id="supplier_select">
							<option selected="true" disabled="disabled">Choose Supplier</option>
							<?php

							$sql = 'SELECT * from suppliers order by supplier_id ASC';
							$retval = mysqli_query($link, $sql);
							while($row = mysqli_fetch_array($retval)) {
								$id = $row['supplier_id'];
								echo "<option value='$id'>{$row['supplier_name']}</option>";
							}
							?>
						</select>
					</div>
					<div class="form-group col-md-6">
						<label for="shipping">Supplier Address</label>
						<textarea name="shipping" class="form-control" id="shipping" rows="3"></textarea>
					</div>

				</div>

			</form>
		</div>

				<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
				  <div class="modal-dialog" role="document">
				    <div class="modal-content">
				      <div class="modal-header">
				        <h5 class="modal-title" id="exampleModalLongTitle">Create New Supplier</h5>
				        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
				          <span aria-hidden="true">&times;</span>
				        </button>
				      </div>
				      <div class="modal-body">
				      	<div class="form-group">
	          				<label for="usr">Supplier ID</label>
	          				<input type="text" class="form-control" id="vendorid" name="supplier_id">
       					</div>
       					<div class="form-group">
	          				<label for="usr">Supplier Name</label>
	          				<input type="text" class="form-control" id="vendorname" name="supplier_name">
       					</div>
       					<div class="form-group">
	          				<label for="usr">Address:</label>
	          				<input type="text" class="form-control" id="address" name="address">
       					</div>
       					<div class="form-group">
	          				<label for="usr">Email:</label>
	          				<input type="text" class="form-control" id="email" name="email">
       					</div>
       					<div class="form-group">
	          				<label for="usr">Phone Number:</label>
	          				<input type="text" class="form-control" id="phone" name="phone">
       					</div>
       					<div class="form-group">
	          				<label for="usr">Zipcode:</label>
	          				<input type="text" class="form-control" id="zipcode" name="zipcode">
       					</div>
				      </div>
				      <div class="modal-footer">
				        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				        <button type="button" class="btn btn-primary">Save changes</button>
				      </div>
				    </div>
				  </div>
				</div>

			 <br>
		</div>

</div>	
		
	<div class="row" style="background-color: #f2f2f2">
		<h3 id="h3"><b>II. Product's Detail</b></h3>
	</div>	
	<br>
		<div class="row">
			<table class="table table-striped">
			<thead>
			<tr>
				<th scope="col">Product Name</th>
				<th scope="col">Decription</th>
				<th scope="col">Unit Cost</th>
				<th scope="col">Quantity</th>
				<th scope="col">Total Amount(Baht)</th>
				<th scope="col">Edit</th>
				<th scope="col">Delete</th>
			</tr>
			</thead>
			<tbody>
			
			</tbody>
		</table>
            <button id="more" type="button" class="btn btn-info"><i class="fa fa-plus" aria-hidden="true"></i>
                Add more items</button>
	</div>
	</div>	
</div>
<br>
	<div class="row">
		<div class="col-sm-7">
		</div>
		<div class="col-sm-5">
			<span style="color:mediumblue"><b>Total Amounts = Baht </b><input type="text" name="total_amount"></input></span>
		</div>
	</div>
	<br>
	<div class="row">
		<div class="col-sm-9">
		</div>
		<div class="col-sm-3">	
				<ul class="nav nav-pills">
				  <li role="presentation"> <a href="#"  class="btn btn-danger">Save</a></li>
				  <li role="presentation"> <a href="#"  class="btn btn-primary">Save and New</a></li>
				</ul>
		</div>
	</div>

<?php include("footer.php"); ?>
<script type="text/javascript">
$(function(){
   	$("#supplier_select").on("change", function() {
      var id = $("#supplier_select option:selected").val();
      $.post("purchase_controller.php", {
        'action': "get_supplier_address",
        'id': id
      }, function(data, status){
        $("#shipping").html(data);  
        // alert(data);
      });
    });
    
});
</script>
	


