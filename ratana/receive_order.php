<?php include("header.php"); ?>


<link rel="stylesheet" type="text/css" href="style.css">
<div class="row" id="nav_second">
	<div class="col-sm-2">
	</div>
	<div class="col-sm-10" >
		<ul class="nav nav-pills">
		  
		  <li role="presentation"><a href="expense.php" class="nav_text">Create Order</a></li>
		  <li role="presentation"><a href="receive_order.php" class="nav_text active" menu="Expense">Receive Order</a></li>
		  <li role="presentation"><a href="vendor_invoice.php" class="nav_text">Vendor Invoices</a></li>
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
				  <li role="presentation"><a href="#">Save Invoice</a></li>
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
				<span><b>Memo:</b></span>
			</div>
			<div class="col-sm-3">
				<textarea name="comment" form="usrform">Enter text here...</textarea>
			</div>
		</div>
		<br>		
		<div class="row">
			<div class="col-sm-2">
				<span><b>Invoice Date:</b></span>
			</div>
			<div class="col-sm-3">
				<input type="date" name="date">
			</div>
		</div>
		<br>		
		<div class="row">
			<div class="col-sm-2">
				<span><b>Due Date:</b></span>
			</div>
			<div class="col-sm-3">
				<input type="date" name="date">
			</div>
		<br>		
	</div>
	</div>

	<div class="row">
			<div class="col-sm-6">
				<h3 id="h3">Vender's information:</h3>
				 <textarea rows="4" cols="50" name="comment" form="usrform">Will show detail of vender's information
				</textarea>
			</div>
			<div class="col-sm-6">
				<h3 id="h3">Ship to:</h3>
				 <textarea rows="4" cols="50" name="comment" form="usrform">will show detail of receiver's information
			</textarea>
			</div>
	</div>
	<h3 id="h3"><u>Item's list</u></h3>
	<div class="row">
	<br>
		<table>

			<tr>
				<th>Item_ID</th>
				<th>Description</th>
				<th>Quantity</th>
				<th>Price/Unite</th>
				<th>Total</th>
				<!-- <th>Total</th> -->
				<th>Receive Item</th>

			</tr>
			 <tr>
			    <td>123</td>
			    <td>Cake</td>
			    <td>500</td>
			    <td>10</td>
			    <td>5000</td>
			    <td><input type="checkbox" checked="checked"></td>
			  </tr>
			  <tr>
			    <td>345</td>
			    <td>Cake</td>
			    <td></td>
			    <td>10</td>
			    <td>50</td>
			    <td><input type="checkbox" checked="checked"></td>
			  </tr>
			  <tr>
			    <td>678</td>
			    <td>Roland Mendel</td>
			    <td>5</td>
			    <td>10</td>
			    <td>50</td>
			    <td><input type="checkbox" checked="checked"></td>
			  </tr>
			  <tr>
			    <td>891</td>
			    <td>Helen Bennett</td>
			    <td>5</td>
			    <td>10</td>
			    <td>50</td>
			    <td><input type="checkbox" checked="checked"></td>
			  </tr>
			  <tr>
			    <td>912</td>
			    <td>Yoshi Tannamuri</td>
			    <td>5</td>
			    <td>10</td>
			    <td>50</td>
			    <td><input type="checkbox" checked="checked"></td>
			  </tr>
			  <tr>
			    <td>923</td>
			    <td>Giovanni Rovelli</td>
			   	<td>5</td>
			    <td>10</td>
			    <td>50</td>
			    <td><input type="checkbox" checked="checked"></td>
			  </tr>

		</table>
	</div>
	<div class="row">
		<div class="col-sm-6"></div>
		<div class="col-sm-6"><b>Total Amount:</b><div class="line"><br></div></div><br>
	</div>
	<!-- <div class="row">
		<div class="col-sm-6"></div>
		<div class="col-sm-6"><b>Total:</b><div class="line"><br></div></div>
	</div> -->
	<br>
	<div class="row">
		<div class="col-sm-6"><b>Order Receive By:</b>
			<div class="line"><br></div>
		</div>
		<div class="col-sm-6"><b>Date Receive:</b>
			<div class="line"><br></div>
		</div>
		
	</div>
</div>
<?php include("footer.php"); ?>