<?php include("header.php"); ?>

	<link rel="stylesheet" type="text/css" href="style.css">
	<div class="row" id="nav_second">
		<div class="col-sm-2">
		</div>
		<div class="col-sm-10" >
			<ul class="nav nav-pills">
			  
			  <li role="presentation"><a href="expense.php" class="nav_text">Create Order</a></li>
			  <li role="presentation"><a href="receive_order.php" class="nav_text">Recieve Order</a></li>
			  <li role="presentation"><a href="vendor_list.php" class="nav_text">Vendor's List</a></li>
			  <li role="presentation"><a href="vendor_invoice.php" class="nav_text active">Vendor's Invoices</a></li>
			   <li role="presentation"><a href="#" class="nav_text">Approve Bill</a></li>
			
			</ul>
			
		</div>

	</div>
	<br>
	<!-- <br> -->
		<!-- <div class="row">
			<div class="col-sm-6">
			<span>Invoice Number:</span><input type="text" name="invoiceNumber"><br>
			<span>Invoice Date:</span><input type="date" name="date"><br>
			<span>Due Date:</span></select><input type="date" name="date">
		</div>
		<div class="col-sm-6">
			<span> Purcher Order Number:</span><input type="text" name="PurchaseOrderNumber"><br>
			<div>Memo</div>
			<textarea rows="4" cols="50" name="comment" form="usrform">
				Enter text here...</textarea>
		</div> -->

		<!-- </div> -->
	<div class="row" align="center">
		<h3 id="h3"> Vendor Invoice</h3>
	</div>
	<!-- <div class="container"> -->
	<div class="row">
		<div class="col-sm-10">
		  <table>
			<tr>
				<th>P.O#</th>
				<th>Date</th>
				<th>Decription</th>
				<th>Price</th>
				<th>Quantity</th>
				<th>Total Amount</th>
			</tr>
			<tr>
			    <td><input type="text" name="Invoice#"></td>
			    <td><input type="text" name="Date"></td>
			    <td><input type="text" name="Decription"></td>
			    <td><input type="email" name="Price"></td>
			    <td><input type="text" name="Quantity"></td>
			    <td><input type="text" name="Total"></td>
			</tr>
			<tr>
			    <td><input type="text" name="Invoice#"></td>
			    <td><input type="text" name="Date"></td>
			    <td><input type="text" name="Decription"></td>
			    <td><input type="email" name="Price"></td>
			    <td><input type="text" name="Quantity"></td>
			    <td><input type="text" name="Total"></td>
			</tr>
			<tr>
			    <td><input type="text" name="Invoice#"></td>
			    <td><input type="text" name="Date"></td>
			    <td><input type="text" name="Decription"></td>
			    <td><input type="email" name="Price"></td>
			    <td><input type="text" name="Quantity"></td>
			    <td><input type="text" name="Total"></td>
			</tr>
			<tr>
			    <td><input type="text" name="Invoice#"></td>
			    <td><input type="text" name="Date"></td>
			    <td><input type="text" name="Decription"></td>
			    <td><input type="email" name="Price"></td>
			    <td><input type="text" name="Quantity"></td>
			    <td><input type="text" name="Total"></td>
			</tr>
			<tr>
			    <td><input type="text" name="Invoice#"></td>
			    <td><input type="text" name="Date"></td>
			    <td><input type="text" name="Decription"></td>
			    <td><input type="email" name="Price"></td>
			    <td><input type="text" name="Quantity"></td>
			    <td><input type="text" name="Total"></td>
			</tr>
			<tr>
			    <td><input type="text" name="Invoice#"></td>
			    <td><input type="text" name="Date"></td>
			    <td><input type="text" name="Decription"></td>
			    <td><input type="email" name="Price"></td>
			    <td><input type="text" name="Quantity"></td>
			    <td><input type="text" name="Total"></td>
			</tr>
			<tr>
			    <td><input type="text" name="Invoice#"></td>
			    <td><input type="text" name="Date"></td>
			    <td><input type="text" name="Decription"></td>
			    <td><input type="email" name="Price"></td>
			    <td><input type="text" name="Quantity"></td>
			    <td><input type="text" name="Total"></td>
			</tr>
			<tr>
			    <td><input type="text" name="Invoice#"></td>
			    <td><input type="text" name="Date"></td>
			    <td><input type="text" name="Decription"></td>
			    <td><input type="email" name="Price"></td>
			    <td><input type="text" name="Quantity"></td>
			    <td><input type="text" name="Total"></td>
			</tr>
		</table>
	</div>
	</div>
	<!-- </div> -->

	<br>
	<br>
	<br>
	<div class="row">
		<div class="col-sm-6"><b>Signature:</b><div class="line"></div></div>
		<div class="col-sm-6"><b>Date:</b><div class="line"></div></div>
	</div>



<?php include("footer.php"); ?>