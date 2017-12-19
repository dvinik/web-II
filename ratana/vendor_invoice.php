<?php include("header.php"); ?>

	<link rel="stylesheet" type="text/css" href="style.css">
	<div class="row" id="nav_second">
		<div class="col-sm-2">
		</div>
		<div class="col-sm-10" >
			<ul class="nav nav-pills">
			  
			  <li role="presentation"><a href="expense.php" class="nav_text">Create Order</a></li>
			  <li role="presentation"><a href="receive_order.php" class="nav_text">Recieve Order</a></li>
			  <li role="presentation"><a href="vendor_invoice.php" class="nav_text active" menu="Expense">Vendor Invoice</a></li>
			  <li role="presentation"><a href="payment.php" class="nav_text">Payment</a></li>
			  <li role="presentation"><a href="vendor_list.php" class="nav_text">Vendor List</a></li>
			
			</ul>
		</div>
	</div>

	<div class="row" style="background-color: #f2f2f2">
		<div class="col-sm-6">
		<h2 id="h2">Receive Order</h2>
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
	<br>

	<div class="container">
		<div class="row">
			<div class="col-sm-4">
			 <span><b>Start Date:</b></span><input type="date" name="date">
			</div>
			<div class="col-sm-4">
				<span><b>Due Date:</b></span>
				<input type="date" name="date">
			</div>
			<div class="col-sm-">
				<button type="button" class="btn btn-info">
      			<span class="glyphicon glyphicon-search"></span> Search
    			</button>
			</div>
		</div>
    </div>
		<br>		
	
	<div class="row">
		<div class="col-sm-10">
		  <table>
			<tr>
				<th>Invoice#</th>
				<th>Invoice Date</th>
				<th>Due Date</th>
				<th>Total</th>
				<th>Other</th>
				<!-- <th>Total Amount</th> -->
			</tr>
			<tr>
			    <td><input type="text" name="Invoice#"></td>
			    <td><input type="date" name="Date"></td>
			    <td><input type="date" name="Decription"></td>
			    <td><input type="text" name="total"></td>
			    <td><input type="text" name="other"></td>
			    <!-- <td><input type="text" name="Total"></td> -->
			</tr>
			<tr>
			    <td><input type="text" name="Invoice#"></td>
			    <td><input type="date" name="Date"></td>
			    <td><input type="date" name="Decription"></td>
			    <td><input type="text" name="total"></td>
			   <td><input type="text" name="other"></td>
			    <!-- <td><input type="text" name="Total"></td> -->
			</tr>
			<tr>
			    <td><input type="text" name="Invoice#"></td>
			    <td><input type="date" name="Date"></td>
			    <td><input type="date" name="Decription"></td>
			    <td><input type="text" name="total"></td>
			    <td><input type="text" name="other"></td>
			    <!-- <td><input type="text" name="Total"></td> -->
			</tr>
			<tr>
			    <td><input type="text" name="Invoice#"></td>
			    <td><input type="date" name="Date"></td>
			    <td><input type="date" name="Decription"></td>
			    <td><input type="text" name="total"></td>
			   <td><input type="text" name="other"></td>
			    <!-- <td><input type="text" name="Total"></td> -->
			</tr>
			<tr>
			   <td><input type="text" name="Invoice#"></td>
			    <td><input type="date" name="Date"></td>
			    <td><input type="date" name="Decription"></td>
			    <td><input type="text" name="total"></td>
				<td><input type="text" name="other"></td>
			    <!-- <td><input type="text" name="Total"></td> -->
			</tr>
			<tr>
			    <td><input type="text" name="Invoice#"></td>
			    <td><input type="date" name="Date"></td>
			    <td><input type="date" name="Decription"></td>
			    <td><input type="text" name="total"></td>
			    <td><input type="text" name="other"></td>
			    <!-- <td><input type="text" name="Total"></td> -->
			</tr>
			<tr>
			    <td><input type="text" name="Invoice#"></td>
			    <td><input type="date" name="Date"></td>
			    <td><input type="date" name="Decription"></td>
			    <td><input type="text" name="total"></td>
			    <td><input type="text" name="other"></td>
			    <!-- <td><input type="text" name="Total"></td> -->
			</tr>
			<tr>
			    <td><input type="text" name="Invoice#"></td>
			    <td><input type="date" name="Date"></td>
			    <td><input type="date" name="Decription"></td>
			    <td><input type="text" name="total"></td>
			   <td><input type="text" name="other"></td>
			    <!-- <td><input type="text" name="Total"></td> -->
			</tr>
		</table>
	</div>
	</div>
	<!-- </div> -->

	<br>
	<br>
	<br>
	<!-- <div class="row">
		<div class="col-sm-6"><b>Signature:</b><div class="line"></div></div>
		<div class="col-sm-6"><b>Date:</b><div class="line"></div></div>
	</div>
 -->


<?php include("footer.php"); ?>