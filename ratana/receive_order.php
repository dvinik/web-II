<?php include("header.php"); ?>


<link rel="stylesheet" type="text/css" href="style.css">
<div class="row" id="nav_second">
	<div class="col-sm-2">
	</div>
	<div class="col-sm-10" >
		<ul class="nav nav-pills">
		  
		  <li role="presentation"><a href="expense.php" class="nav_text">Create Order</a></li>
		  <li role="presentation"><a href="#" class="nav_text active">Recieve Order</a></li>
		  <li role="presentation"><a href="vendor_list.php" class="nav_text">Vendor's List</a></li>
		  <li role="presentation"><a href="vendor_invoice.php" class="nav_text">Vendor's Invoices</a></li>
		  <li role="presentation"><a href="#" class="nav_text" >Approve Bill</a></li>

		</ul>
	</div>
</div>

<div class="row">
		<div class="col-sm-6">
		<h3 id="h2">Receive Order</h2>
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
	<!-- <div class="row">
		<div class="col-sm-6">
		<span><b>Invoice Number:</b></span><input type="text" name="invoiceNumber"><br>
		<span><b>Invoice Date:</b></span><input type="date" name="date"><br>
		<span><b>Due Date:</b></span></select><input type="date" name="date">
		</div>
		<div class="col-sm-6">
			<span><b>Purcher Order Number:</b></span><input type="text" name="PurchaseOrderNumber"><br>
			<div><b>Memo</b></div>
			<textarea rows="4" cols="50" name="comment" form="usrform">
				Enter text here...</textarea>
		</div>
	</div> -->
	<div class="container">
		<div class="row">
			<div class="col-sm-2">
				<span><b>Invoice Number:</b></span>
			</div>
			<div class="col-sm-3">
				<input type="text" name="invoiceNumber">
			</div>
			<div class="col-sm-2">
				<span><b>P.O Number:</b></span>
			</div>
			<div class="col-sm-3">
				<input type="text" name="purchaseOrderNumber">
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
				<span><b>Due Date:</b></span>
			</div>
			<div class="col-sm-3">
				<input type="date" name="date">
			</div>
		<br>		
	</div>
	</div>

	<h3 id="h3">Vender's information</h3>
	<div class="row">
			<div class="col-sm-6">
				<span><b>Vender's name:</b></span>
				<div class="dropdown">
				    <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Choose vender's name
				    <span class="caret"></span></button>
				    <ul class="dropdown-menu">
				      <li><a href="#">Supplier 1</a></li>
				      <li><a href="#">Supplier 2</a></li>
				      <li><a href="#">Supplier 3</a></li>
				    </ul>
				 </div> 
				 <textarea rows="4" cols="50" name="comment" form="usrform">
				Pop up vender information after choose from drop box</textarea>
			</div>
			<div class="col-sm-6">
				<span><b>Ship To:</b></span>
				<div class="dropdown">
				    <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Company's name
				    <span class="caret"></span></button>
				    <ul class="dropdown-menu">
				      <li><a href="#">Customer 1</a></li>
				      <li><a href="#">Customer 2</a></li>
				      <li><a href="#">Customer 3</a></li>
				    </ul>
				 </div> 
				 <textarea rows="4" cols="50" name="comment" form="usrform">
				Pop up company's information after choose from drop box</textarea>
			</div>
	</div>
	<h3 id="h3">Item's list</h3>
	<div class="row">
	<br>
		<table>

			<tr>
				<th>Item_ID</th>
				<th>Description</th>
				<th>Quantity</th>
				<th>Price/Unite</th>
				<th>Toal</th>
				<th>Frieght</th>
				<th>Edit/Delete</th>

			</tr>
			 <tr>
			    <td>123</td>
			    <td>Maria Anders</td>
			    <td>5</td>
			    <td>$10</td>
			    <td>50</td>
			    <td>Truck</td>
			    <td>
			    <i class="fa fa-pencil pencil" aria-hidden="true"></i>
			    <i class="fa fa-trash-o delete" aria-hidden="true"></i>
			    </td>

			  </tr>
			  <tr>
			    <td>345</td>
			    <td>Francisco Chang</td>
			    <td>5</td>
			    <td>$10</td>
			    <td>50</td>
			     <td>Truck</td>
			    <td><i class="fa fa-pencil pencil" caria-hidden="true"></i></td>
			  </tr>
			  <tr>
			    <td>678</td>
			    <td>Roland Mendel</td>
			    <td>5</td>
			    <td>$10</td>
			    <td>50</td>
			     <td>Truck</td>
			    <td><i class="fa fa-pencil pencil"  aria-hidden="true"></i></td>
			  </tr>
			  <tr>
			    <td>891</td>
			    <td>Helen Bennett</td>
			    <td>5</td>
			    <td>$10</td>
			    <td>50</td>
			     <td>Truck</td>
			    <td><i class="fa fa-pencil pencil"  aria-hidden="true"></i></td>
			  </tr>
			  <tr>
			    <td>912</td>
			    <td>Yoshi Tannamuri</td>
			    <td>5</td>
			    <td>$10</td>
			    <td>50</td>
			     <td>Truck</td>
			    <td><i class="fa fa-pencil pencil"  aria-hidden="true"></i></td>
			  </tr>
			  <tr>
			    <td>923</td>
			    <td>Giovanni Rovelli</td>
			   	<td>5</td>
			    <td>$10</td>
			    <td>50</td>
			     <td>Truck</td>
			    <td><i class="fa fa-pencil pencil"  aria-hidden="true"></i></td>
			   </tr>

		</table>
	</div>
	<div class="row">
		<div class="col-sm-6"></div>
		<div class="col-sm-6"><b>FreightCharge:</b><div class="line"><br></div></div><br>
	</div>
	<div class="row">
		<div class="col-sm-6"></div>
		<div class="col-sm-6"><b>Total:</b><div class="line"><br></div></div>
	</div>
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