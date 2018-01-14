<?php include("header.php"); ?>

<div class="row" id="nav_second">
	<div class="col-sm-2">
	</div>
	<div class="col-sm-10" >
		<ul class="nav nav-pills">
		  <li role="presentation"><a href="#" class="nav_text active">Create Order</a></li>
		  <li role="presentation"><a href="receive_order.php" class="nav_text">Recieve Order</a></li>
		  <li role="presentation"><a href="vendor_invoice.php" class="nav_text">Vendor Invoices</a></li>
		  <li role="presentation"><a href="payment.php" class="nav_text">Payment</a></li>
		  <li role="presentation"><a href="vendor_list.php" class="nav_text">Vendor List</a></li>
		</ul>
		
	</div>
</div>
<div class="row" style="background-color: #f2f2f2">
	<div class="col-sm-6">
	<h2 id="h2">Create Purchese Order</h2>
	</div>
	<div class="col-sm-6">	
		<div class="right">
			<ul class="nav nav-pills">
			  <li role="presentation" class="active"><a href="#">Print</a></li>
			  <li role="presentation"><a href="#">Save Invoice</a></li>
			  <li role="presentation"><a href="#">Save and New</a></li>
			</ul>
		</div>
	</div>

</div>
<hr>
<div class="container">
	<div class="jumbotron">
		<div class="row">
		<div class="col-sm-2">
			<span><b>P.O Number</b></span>
		</div>
		<div class="col-sm-3">
			<input type="text" name="invoiceNumber">
		</div>
		<div class="col-sm-2">
			<span><b>Memo:</b></span>
		</div>
		<div class="col-sm-3">
			<textarea name="comment" form="usrform">Enter text here...</textarea>
		</div>
		</div>
		<br>		
		<div class="row">
			<div class="col-sm-2">
				<span><b>Date:</b></span>
			</div>
			<div class="col-sm-3">
				<input type="date" name="date">
			</div>
			<div class="col-sm-2"></div>
			<div class="col-sm-3"></div>
			
		</div>
	<br>		


		<div class="row" style="background-color: #f2f2f2">
		<h3 id="h3"><b>1. Vender's information</b></h3>
		<div class="row">
		 	<button id="creater_suppliers" type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong"> +Add new Vender</button>
			<div class="form-row">
				 <div class="form-group col-md-4">
				    <label for="supplier-select">Choose a supplier</label>
				    <select name="supplier" class="form-control" id="supplier-select">
					<option selected="true" disabled="disabled">Choose Supplier</option>

					<?php 
		  				$sql = 'SELECT * from Supplier order by Vendor_id ASC';
		   				$retval = mysqli_query($link, $sql);
		   				while($row = mysqli_fetch_array($retval)) {
		   					echo "<option>{$row['Vendor_name']}</option>";
		   				}
		  			?>  
				    </select>
				  </div>
				  <div class="form-group col-md-6">
				    <label for="shipping">Shipping Address</label>
				    <textarea name="shipping" class="form-control" id="shipping" rows="3"></textarea>
				 </div>
			  
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
	          				<label for="usr">Vendor ID</label>
	          				<input type="text" class="form-control" id="vendorid" name="vendorid">
       					</div>
       					<div class="form-group">
	          				<label for="usr">Vendor Name</label>
	          				<input type="text" class="form-control" id="vendorname" name="vendorname">
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
		<h3 id="h3"><b>2. Company information</b></h3>

		<div class="row">
				 <div class="form-group col-md-4">
				    <label for="supplier-select">Choose Company</label>
				    <select name="supplier" class="form-control" id="supplier-select">
					<option selected="true" disabled="disabled">Choose Shipping to address</option>

					<?php 
		  				$sql = 'SELECT * from Supplier order by Vendor_id ASC';
		   				$retval = mysqli_query($link, $sql);
		   				while($row = mysqli_fetch_array($retval)) {
		   					echo "<option>{$row['Vendor_name']}</option>";
		   				}
		  			?>  
				    </select>
				  </div>
				  <div class="form-group col-md-6">
				    <label for="shipping">Shipping Address</label>
				    <textarea name="shipping" class="form-control" id="shipping" rows="3"></textarea>
				 </div>
	 		 </div>
			 <br>
		</div>
		<div class="row" style="background-color: #f2f2f2">
		<h3 id="h3"><b>3. Product's Detail</b></h3>
	</div>	
	<br>
		<div class="row">
			<!-- <tr>
			    <td><input type="number" name="N.o"></td>
			    <td><input type="text" name="product_name"></td>
			    <td><input type="text" name="decription"></td>
			    <td><input type="number" name="unit"></td>
			    <td><input type="number" name="unit_cost"></td>
			    <td><input type="number" name="total"></td>
			</tr> -->
		
		<table class="table table-striped tablesorter" id="purchase_order_table">
			<col width="30">
  			<thead>
			    <tr>
			      <th scope="col">No</th>
			      <th scope="col">Product Nmae</th>
			      <th scope="col">Decription</th>
			      <th scope="col">Unit</th>
			      <th scope="col">Unite Cost</th>
			      <th scope="col">QTY</th>
			      <th scope="col">Total Amount(Baht)</th>
			    </tr>
			 </thead>
		  <tbody>
		  		<td><input type="number" name="N.o"></td>
			    <td><input type="text" name="product_name"></td>
			    <td><input type="text" name="decription"></td>
			    <td><input type="number" name="unit"></td>
			    <td><input type="number" name="unit_cost"></td>
			    <td><input type="number" name="total"></td>
			</tr>
		  </tbody>
		</table>
	</div>
	</div>	
</div>
	


<?php include("footer.php"); ?>