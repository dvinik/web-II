<?php include("header.php"); ?>
	<link rel="stylesheet" type="text/css" href="style.css">
<div class="row" id="nav_second">
	<div class="col-sm-2">
	</div>
	<div class="col-sm-10" >
		<ul class="nav nav-pills">
		  <li role="presentation"><a href="expense.php" class="nav_text">Create Order</a></li>
		  <li role="presentation"><a href="receive_order.php" class="nav_text">Recieve Order</a></li>
		  <li role="presentation"><a href="vendor_invoice.php" class="nav_text">Vendor Invoices</a></li>
		  <li role="presentation"><a href="#" class="nav_text">Payment</a></li>
		  <li role="presentation"><a href="vendor_list.php" class="nav_text active" menu="Expense">Vendor List</a></li>
		</ul>
		
	</div>
</div>
	
<h2 id="h2"><u>Vendor List</u></h2>
<div class="row">
	<table>
		<tr>
			<th>Vendor ID</th>
			<th>Vendor Name</th>
			<th>Address:</th>
			<th>Email</th>
			<th>Phone:</th>
			<th>Zipcode</th>
			<!-- <th>Product</th> -->
			<th>action</th>

		</tr>
		 <tr>
		    <td>123</td>
		    <td>Maria Anders</td>
		    <td>16, Motorway Road – Km2 Prawet, Bangkok 10250</td>
		    <td>1611090004@stamford.students.edu</td>
		    <td>123456890</td>
		    <td>C123</td>
		    <!-- <td></td> -->
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


<?php include("footer.php"); ?>