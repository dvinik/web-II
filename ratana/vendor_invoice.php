<?php include("header.php"); ?>

	<link rel="stylesheet" type="text/css" href="style.css">
	<div class="row" id="nav_second">
		<div class="col-sm-2">
		</div>
		<div class="col-sm-10" >
			<ul class="nav nav-pills">
			  
			  <li role="presentation"><a href="expense.php" class="nav_text">Create Order</a></li>
			  <li role="presentation"><a href="receive_order.php" class="nav_text">Recieve Order</a></li>
			  <li role="presentation"><a href="vendor_invoice.php" class="nav_text active" menu="Expense">Approving Invoice</a></li>
			  <li role="presentation"><a href="payment.php" class="nav_text">Payment</a></li>
			  <li role="presentation"><a href="vendor_list.php" class="nav_text">Vendor List</a></li>
			
			</ul>
		</div>
	</div>

	<div class="row" style="background-color: #f2f2f2">
		<div class="col-sm-6">
		<h2 id="h2">Approving Invoice</h2>
		</div>
		<div class="col-sm-6">	
			<div class="right">
				<ul class="nav nav-pills">
				  <li role="presentation" class="active"><a href="#">Print</a></li>
				  <li role="presentation"><a href="#">Save & Submit</a></li>
				  <li role="presentation"><a href="#">Save and New</a></li>
				</ul>
			</div>
		</div>
	</div>
	<br>

	<div class="container">
		<div class="row">
			<div class="col-sm-2">
				<span><b>P.O Number:</b></span>
			</div>
			<div class="col-sm-3">
				<input type="text" name="invoiceNumber">
			</div>
			<div class="col-sm-2">
				<span><b> Recieve Date:</b></span>
			</div>
			<div class="col-sm-3">
				<input type="Date" name="approving_invoice_date">
			</div>
		</div>
		<br>		
		<div class="row">
			<div class="col-sm-2">
				<span><b>Invoice Number</b></span>
			</div>
			<div class="col-sm-3">
				<input type="text" name="invoice_number">
			</div>
			<div class="col-sm-2">
				<span><b>Approving Date:</b></span>
			</div>
			<div class="col-sm-3">
				<input type="date" name="approving_date">
			</div>
		</div>
		<br>		
		<div class="row">
			<div class="col-sm-2">
				<span><b>Recieve Report #</b></span>
			</div>
			<div class="col-sm-3">
				<input type="text" name="recieve_report_number">
			</div>
	</div>
	</div>
		<br>	
	<div class="row" style="background-color: #f2f2f2">
			<div class="col-sm-6">
				<h3 id="h3"><b><u>1.Vender's information:</u></b></h3><br>
				 <textarea rows="4" cols="128" name="vendor_information" form="usrform">
				</textarea>
			</div>
			<!-- <div class="col-sm-6">
				<h3 id="h3"><b>Ship to:</b></h3><br>
				 <textarea rows="4" cols="50" name="comment" form="usrform">
			</textarea>
			</div> -->
	</div>	
	<br>
	<div class="row">
		<div class="col-sm-10">
		  <table>
			<tr>
			
				<th>Product Nmae</th>
				<th>Unite</th>
				<th>Unite Cost</th>
				<th>Total Amount(Baht)</th>
			
			</tr>
			<tr>
			    <td></td>
			    <td></td>
			    <td></td>
			    <td></td>
		
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