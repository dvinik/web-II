<?php include("header.php"); ?>
<?php include("config.php"); ?>

	<!-- <link rel="stylesheet" type="text/css" href="style.css"> -->
	<div class="row" id="nav_second">
		<div class="col-sm-2">
		</div>
		<div class="col-sm-10" >
			<ul class="nav nav-pills">
				<li role="presentation"><a href="" class="nav_text active">Purchase Order </a></li>
				<li role="presentation"><a href="receive_order.php" class="nav_text">Receive Order</a></li>
				<li role="presentation"><a href="payment.php" class="nav_text">Payment</a></li>
				<li role="presentation"><a href="supplier_list.php" class="nav_text">Supplier List</a></li>
				<li role="presentation"><a href="supplier_report.php" class="nav_text">Suppliers Reports</a></li>
	     	</ul>
		</div>
	</div>

	<div class="row" style="background-color: #f2f2f2">
		<div class="col-sm-8">
		<h2 id="h2">Suppliers Report</h2>
		</div>
		<div class="col-sm-4">	
			<div class="right">
				<ul class="nav nav-pills">
				  <li role="presentation" class="active"><a href="#" class="btn btn-success">Print</a></li> &nbsp;
			<li role="presentation" class="active"><a href="#" class="btn btn-primary">Print Preview</a></li>
			</div>
		</div>
	</div>
	<br>
	<hr>

	<br>
	<div class="container">
		<div class="jumbotron">
			<h3 id="h2"> General Information</h3>
			<div class="row">
				<div class="col-sm-12">
					<table  id="purchase_order_table"  style = "width:100%">
		  			<thead>
					    <tr>
					      <th>Invoice#</th>
					      <th>Date</th>
					      <th>Supplier Name</th>
					      <th>Total Cost</th>
					      
					    </tr>
					</thead>
					<tbody>
			<?php
			$sql = "SELECT T1.invoice_number, T1.invoice_date, T1.amt_due, T3.supplier_name FROM ".TBL_PURCHASE_ORDER_INVOICES." AS T1 INNER JOIN ".TBL_PURCHASE_ORDERS." AS T2 ON T1.po_id = T2.po_id INNER JOIN ".TBL_SUPPLIERS." AS T3 ON T2.supplier_id = T3.supplier_id ";
			error_log($sql);
			$retval = mysqli_query($link, $sql);
			while($row = mysqli_fetch_array($retval)) {
				echo "<tr>";
				$invoice_number = $row["invoice_number"];
				$invoice_date = $row["invoice_date"];
				$supplier_name = $row["supplier_name"];
				$amt_due = $row["amt_due"];

				echo "<td>{$invoice_number}</td>";
				echo "<td>{$invoice_date}</td>";
				echo "<td>{$supplier_name}</td>";
				echo "<td>{$amt_due}</td>";
				echo "</tr>";

			}
			mysqli_close($link);
			?>
			</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
	
<?php include("footer.php"); ?>





