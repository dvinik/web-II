<?php include("header.php"); ?>


<link rel="stylesheet" type="text/css" href="style.css">
<div class="row" id="nav_second">
	<div class="col-sm-2">
	</div>
	<div class="col-sm-10" >
		<ul class="nav nav-pills">
		  
		  <li role="presentation"><a href="expense.php" class="nav_text">Create Order</a></li>
		  <li role="presentation"><a href="receive_order.php" class="nav_text active" menu="Expense">Receive Report</a></li>
		  <li role="presentation"><a href="vendor_invoice.php" class="nav_text">Approving Invoice</a></li>
		  <li role="presentation"><a href="payment.php" class="nav_text" >Payment</a></li>
		  <li role="presentation"><a href="vendor_list.php" class="nav_text">Vendor List</a></li>
		  

		</ul>
	</div>
</div>

	<div class="row" style="background-color: #f2f2f2">
		<div class="col-sm-6">
			<h2 id="h3">Receive Order</h2>
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
		<!-- <div class="row">
			<div class="col-sm-2">
				<span><b>Invoice Number</b></span>
			</div>
			<div class="col-sm-3">
				<input type="text" name="invoice_number">
			</div>
		</div> -->
		<br>		
		<div class="row">
			<div class="col-sm-2">
				<span><b>Recieve Report #</b></span>
			</div>
			<div class="col-sm-3">
				<input type="text" name="recieve_report_number">
			</div>
	</div>
	<br>
	</div>

	<div class="row" style="background-color: #f2f2f2">
			<div class="col-sm-6">
				<h3 id="h3"><b>1.Vender's information:</b></h3><br>
				 <textarea rows="4" cols="50" name="comment" form="usrform">
				</textarea>
			</div>
			<div class="col-sm-6">
				<h3 id="h3"><b>Ship to:</b></h3><br>
				 <textarea rows="4" cols="50" name="comment" form="usrform">
			</textarea>
			</div>
	</div>
	<div class="row" style="background-color: #f2f2f2">
		<h3 id="h3"><b>2. Product's Detail</b></h3>
	</div>	
	<br>
	<div class="row">
	<br>
		<table>

			<tr>
				<th>No.</th>
				<th>Product Nmae</th>
				<th>Decription</th>
				<th>Qunatity Recieve</th>
				<th>Unite Cost</th>
				<th>Total Amount(Baht)</th>
				<th>Comment</th>
			</tr>
			<tr>
			    <td><input type="number" name="N.o"></td>
			    <td><input type="text" name="product_name"></td>
			    <td><input type="text" name="decription"></td>
			    <td><input type="text" name="qunatity_recieve"></td>
			    <!-- <td><input type="number" name="unit"></td> -->
			    <td><input type="number" name="unit_cost"></td>
			    <td><input type="number" name="total"></td>
			    <td><input type="text" name="commnet"></td>
			</tr>
			  <tr>
			    <td><input type="number" name="N.o"></td>
			    <td><input type="text" name="product_name"></td>
			    <td><input type="text" name="decription"></td>
			    <td><input type="text" name="qunatity_recieve"></td>
			    <!-- <td><input type="number" name="unit"></td> -->
			    <td><input type="number" name="unit_cost"></td>
			    <td><input type="number" name="total"></td>
			    <td><input type="text" name="commnet"></td>
			</tr>
			 <tr>
			    <td><input type="number" name="N.o"></td>
			    <td><input type="text" name="product_name"></td>
			    <td><input type="text" name="decription"></td>
			    <td><input type="text" name="qunatity_recieve"></td>
			    <!-- <td><input type="number" name="unit"></td> -->
			    <td><input type="number" name="unit_cost"></td>
			    <td><input type="number" name="total"></td>
			    <td><input type="text" name="commnet"></td>
			</tr>
			  <tr>
			    <td><input type="number" name="N.o"></td>
			    <td><input type="text" name="product_name"></td>
			    <td><input type="text" name="decription"></td>
			    <td><input type="text" name="qunatity_recieve"></td>
			    <!-- <td><input type="number" name="unit"></td> -->
			    <td><input type="number" name="unit_cost"></td>
			    <td><input type="number" name="total"></td>
			    <td><input type="text" name="commnet"></td>
			</tr>
			<tr>
			    <td><input type="number" name="N.o"></td>
			    <td><input type="text" name="product_name"></td>
			    <td><input type="text" name="decription"></td>
			    <td><input type="text" name="qunatity_recieve"></td>
			    <!-- <td><input type="number" name="unit"></td> -->
			    <td><input type="number" name="unit_cost"></td>
			    <td><input type="number" name="total"></td>
			    <td><input type="text" name="commnet"></td>
			</tr>
			  <tr>
			    <td><input type="number" name="N.o"></td>
			    <td><input type="text" name="product_name"></td>
			    <td><input type="text" name="decription"></td>
			    <td><input type="text" name="qunatity_recieve"></td>
			    <!-- <td><input type="number" name="unit"></td> -->
			    <td><input type="number" name="unit_cost"></td>
			    <td><input type="number" name="total"></td>
			    <td><input type="text" name="commnet"></td>
			</tr>
			 <tr>
			    <td><input type="number" name="N.o"></td>
			    <td><input type="text" name="product_name"></td>
			    <td><input type="text" name="decription"></td>
			    <td><input type="text" name="qunatity_recieve"></td>
			    <!-- <td><input type="number" name="unit"></td> -->
			    <td><input type="number" name="unit_cost"></td>
			    <td><input type="number" name="total"></td>
			    <td><input type="text" name="commnet"></td>
			</tr>
			  <tr>
			    <td><input type="number" name="N.o"></td>
			    <td><input type="text" name="product_name"></td>
			    <td><input type="text" name="decription"></td>
			    <td><input type="text" name="qunatity_recieve"></td>
			    <!-- <td><input type="number" name="unit"></td> -->
			    <td><input type="number" name="unit_cost"></td>
			    <td><input type="number" name="total"></td>
			    <td><input type="text" name="commnet"></td>
			</tr>
			 <tr>
			    <td><input type="number" name="N.o"></td>
			    <td><input type="text" name="product_name"></td>
			    <td><input type="text" name="decription"></td>
			    <td><input type="text" name="qunatity_recieve"></td>
			    <!-- <td><input type="number" name="unit"></td> -->
			    <td><input type="number" name="unit_cost"></td>
			    <td><input type="number" name="total"></td>
			    <td><input type="text" name="commnet"></td>
			</tr>
			  <tr>
			    <td><input type="number" name="N.o"></td>
			    <td><input type="text" name="product_name"></td>
			    <td><input type="text" name="decription"></td>
			    <td><input type="text" name="qunatity_recieve"></td>
			    <!-- <td><input type="number" name="unit"></td> -->
			    <td><input type="number" name="unit_cost"></td>
			    <td><input type="number" name="total"></td>
			    <td><input type="text" name="commnet"></td>
			</tr>

		</table>
	</div>
	<div class="row">
		<div class="col-sm-6"></div>
		<div class="col-sm-6"><b>Total Amount:</b> <input type="number" name="total"></ins><div class="line"><br></div></div><br>
	</div>
	<!-- <div class="row">
		<div class="col-sm-6"></div>
		<div class="col-sm-6"><b>Total:</b><div class="line"><br></div></div>
	</div> -->
	<br>
	<!-- <div class="row">
		<div class="col-sm-6"><b>Order Receive By:</b>
			<div class="line"><br></div>
		</div>
		<div class="col-sm-6"><b>Date Receive:</b>
			<div class="line"><br></div>
		</div>
		
	</div> -->
</div>
<?php include("footer.php"); ?>