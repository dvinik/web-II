<?php include("header.php"); ?>
<?php include('config.php'); ?>

<div class="row" id="nav_second">
	<div class="col-sm-2">
	</div>
		<div class="col-sm-10" >
			<ul class="nav nav-pills">
	           <li role="presentation"><a href="purchase.php" class="nav_text">Purchase Order </a></li>
	           <li role="presentation"><a href="receive_order.php" class="nav_text active">Receive Order</a></li>
	           <li role="presentation"><a href="supplier_list.php" class="nav_text">Supplier List</a></li>
	          <li role="presentation"><a href="supplier_report.php" class="nav_text">Suppliers Reports</a></li>
	     	</ul>
		</div>
</div>
<div class="row" style="background-color: #f2f2f2">
	<div class="col-sm-6">
	<h2 id="h2">Receiving Form</h2>
	</div>
	<div class="col-sm-6">	
		<div class="right">
			<ul class="nav nav-pills">
			  <li role="presentation" class="active"><a href="#">Print</a></li>
			  <li role="presentation"><a href="#">Save</a></li>
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
				<span><b>P.O Number:</b></span>
			</div>
			<div class="col-sm-3">
				<input type="text" name="invoiceNumber">
			</div>
			<div class="col-sm-2">
				<span><b>Recieve Date:</b></span>
			</div>
			<div class="col-sm-3">
				<input type="Date" name="date">
			</div>
		</div>
		<br>		
		
	<br>

	<div class="row" style="background-color: #f2f2f2">
			<div class="col-sm-6">
				<h3 id="h3"><b>1.Vender's information:</b></h3><br>
				 <textarea rows="4" cols="100" name="comment" form="usrform">
				</textarea>
			</div>
			<!-- <div class="col-sm-6">
				<h3 id="h3"><b>Ship to:</b></h3><br>
				 <textarea rows="4" cols="50" name="comment" form="usrform">
			</textarea>
			</div> -->
	</div>
	<div class="row" style="background-color: #f2f2f2">
		<h3 id="h3"><b>2. Product's Detail</b></h3>
	</div>	
	<br>
	<div class="row">
	<br>
		<table  id="purchase_order_table"  style = "width:100%">
  			<thead>
			    <tr>
			      <th>Product ID</th>
			      <th>Product Name</th>
			      <th>Decription</th>
			      <th>Quantity Order</th>
			      <th>Quantity Receive</th>
			      <th>Comment</th>
			    </tr>
			</thead>
			<tbody>
				<tr>
					<td width="10%"><input type="number" name="product_id" style="width: 100%;"></td>
					<td width="10%"><input type="text" name="product_name" style="width: 100%;"></td>
					<td width="20%"><input type="text" name="decription" style="width: 100%;"></td>
					<td width="10%"><input type="number" name="quantity_order" style="width: 100%;"></td>
					<td width="10%"><input type="number" name="quantity_receive" style="width: 100%;"></td>
					<td width="10%"><input type="text" name="comment" style="width: 100%;"></td>
				</tr>
               
			</tbody>
		</table>
	</div>
	<br>
	<!-- <div class="row">
		<div class="col-sm-6"></div>
			<div class="col-sm-6"><b>Total Amount:</b>
		 		<input type="number" name="total"></ins>
		 			<div class="line"><br></div> 
			 </div>
		<br>
	</div> -->
	</div>
</div>