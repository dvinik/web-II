<?php include_once('header.php'); ?>

<?php include('config.php'); ?>

<div class="row" id="nav_second">
	<div class="col-sm-2">
	</div>
	<div class="col-sm-10" >
		<ul class="nav nav-pills">
			<li role="presentation"><a href="purchase.php" class="nav_text ">Purchase Order </a></li>
			<li role="presentation"><a href="payment.php" class="nav_text active">Payment</a></li>
			<li role="presentation"><a href="supplier_list.php" class="nav_text">Supplier List</a></li>
			<li role="presentation"><a href="supplier_report.php" class="nav_text">Suppliers Reports</a></li>
     	</ul>
	</div>
</div>
<br>

<div class="container">
	<!-- <div class="jumbotron mt-4"> -->
	<div class="row">
	  <div class="col-sm-8">
	  	
	  </div>
	  <div class="col-sm-4">
	  	<button  type="button" class="btn btn-info" data-toggle="modal" data-target ="#add_new_invoice_modal"><i class="fa fa-plus" aria-hidden="true"></i>
			Add Payment </button>
	  </div>
	  
	<h3 id="h2">Invoices Paid List</h3>
<br>
	<table class="table table-striped tablesorter" id="invoice_order_table">
  <thead>
    <tr>
      <th scope="col">Invoice #</th>
	    <th scope="col">P.O #</th>
      <th scope="col">Invoice Date</th>
      <th scope="col">Due Date</th>
       <th scope="col">Paid Date</th>
      <th scope="col">Payment Amount(Bath)</th>
     
    </tr>

  </thead>
  <tbody>
   <?php 
  		$sql = "SELECT poi.*, p.date_paid from ".TBL_PURCHASE_ORDER_INVOICES." AS poi 
				INNER JOIN ".TBL_PAYMENTS." AS p ON p.invoice_number = poi.invoice_number
  				 order by poi_id ASC";
   		$retval = mysqli_query($link, $sql);
   		while($row = mysqli_fetch_array($retval)) {
			echo "<tr>";
			$invoice_date = format_date($row["invoice_date"]);
	        $due_date = format_date($row["due_date"]);
		    $date_paid = format_date($row["date_paid"]);
			echo "<td>{$row["invoice_number"]}</td>";
	        echo "<td>{$row["po_id"]}</td>";
			echo "<td>{$invoice_date}</td>";
			echo "<td>{$due_date}</td>";
			echo "<td>{$date_paid}</td>";
			echo "<td>{$row["amt_due"]}</td>";


			echo "</tr>";
	    }
		mysqli_close($link);
  ?>
		
  
  </tbody>
</table>
<!-- </div> -->

<?php include_once('footer.php'); ?>
<?php include_once('add_new_invoice_modal.php'); ?>


<script type="text/javascript">



</script>
