<?php include_once("header.php"); ?>
<?php include_once('config.php'); ?>

<?php
	$po_id = $_GET["po_id"];
	$sql = "SELECT * FROM ".TBL_PURCHASE_ORDERS." WHERE po_id = $po_id";
	$res = $link->query($sql);
	$po_data = [];
	if($res && $res->num_rows > 0){
		$po_data = $res->fetch_assoc();
	}
?>

<div class="row" id="nav_second">
	<div class="col-sm-2">
	</div>
	<div class="col-sm-10">
		<ul class="nav nav-pills">
			<li role="presentation"><a href="purchase.php" class="nav_text active" menu="Purchase">Purchase Order </a></li>
			<li role="presentation"><a href="supplier_list.php" class="nav_text">Supplier List</a></li>
			<li role="presentation"><a href="supplier_report.php" class="nav_text">Suppliers Reports</a></li>
		</ul>
	</div>
</div>
<div class="row" >
	<div class="col-sm-8" >
		<h2 id="h2">Receive Purchase Order</h2">
	</div>
	<div class="col-sm-4">
		<ul class="nav nav-pills" style="margin-top:5px;">
			<li role="presentation" class="active"><a href="#" class="btn btn-success">Print</a></li> &nbsp;
			<li role="presentation" class="active"><a href="#" class="btn btn-primary">Print Preview</a></li>
		</ul>
	</div>

</div>
<hr>
<div class="container">
	<div class="">
		<div class="row">
			<div class="col-sm-2">
				<span><b>P.O Number</b></span>
			</div>
			<div class="col-sm-5">
				<?php
					$po_num = $po_id > 10 ? "$po_id" : "0$po_id";
					echo "<label id='id-po-number' val='$po_id' > $po_num </label>";
				?>
			</div>
			<div class="col-sm-5">
				<span><h2>Family Bakery Shop</h2></span>
			</div>
		</div>
		<br>
		<div class="row">
			<div class="col-sm-2">
				<span><b>Date:</b></span>
			</div>
			<div class="col-sm-5">
				<?php echo $po_data["po_creation_date"];   ?>
			</div>
			<div class="col-sm-5">
				<span>Bangkapi, Bangkok</span><br>
				<span>Phone: 098765543</span><br>
				<span>Email: familybakeryshop@gmail.com</span>
			</div>
		</div>
		<br>
		<div class="row">
			<h3 id="h3"><b>Supplier Information</b></h3>
		</div>
		<br>
		<div class="row">
			<div class="col-sm-3">
				<label for="supplier-select">Choose a supplier</label>
				<select name="supplier" class="form-control" id="supplier_select">
					<option selected disabled value="null">Choose Supplier</option>
					<?php
					$sql = 'SELECT * from '.TBL_SUPPLIERS.' order by supplier_id ASC';
					$retval = mysqli_query($link, $sql);
					$supplier_address = "";
					while($row = mysqli_fetch_array($retval)) {
						$id = $row['supplier_id'];
						if($po_data["supplier_id"] == $id){
							echo "<option selected disabled value='$id'>{$row['supplier_name']}</option>";
							$supplier_address = "{$row['address']} {$row['phone']} {$row['email']} {$row['fax']}";
						}else{
							echo "<option value='$id' disabled>{$row['supplier_name']}</option>";
						}
					}
					?>
				</select>
			</div>
			<div class="col-sm-6">
				<label for="shipping">Supplier Address</label>
				<textarea name="shipping" class="form-control" id="shipping" rows="3" disabled><?php echo $supplier_address; ?></textarea>
			</div>
		</div>
		<br><br>
		<div class="row">
			<h3 id="h3"><b>Product Detail</b></h3>
		</div>
		<br>
		<div id="items">
			<div class="form-row">
				<div class="form-group col-md-2">
					<label>Product Name</label>
				</div>
				<div class="form-group col-md-3">
					<label>Description</label>
				</div>
				<div class="form-group col-md-1">
					<label>Unit Cost</label>
				</div>
				<div class="form-group col-md-1">
					<label>Quantity</label>
				</div>
				<div class="form-group col-md-1">
					<label>Total Cost</label>
				</div>
				<div class="form-group col-md-2">
					<label>Received qty</label>
				</div>
				<div class="form-group col-md-2">
					<label>Comment</label>
				</div>
			</div>
			<?php
			//load product options
			$res = $link->query("SELECT * FROM ". TBL_PRODUCTS. " ORDER BY product_id ASC");
			$products = [];
			if($res->num_rows > 0){
				while($row = $res->fetch_assoc()){
					$products[] = $row;
				}
			}
			//list all products
			$sql = "SELECT po.*, p.description FROM ".TBL_PURCHASE_ORDER_DETAILS." AS po ".
			       " INNER JOIN ".TBL_PRODUCTS." AS p ON po.product_id = p.product_id ".
			       " WHERE po.po_id = $po_id ORDER BY id ASC";
			$res = $link->query($sql);
			$total_amount = 0;
			if($res && $res->num_rows > 0){
				while($row = $res->fetch_assoc()){
					$product_options = "";
					foreach($products as $product){
						if($product["product_id"] == $row["product_id"]){
							$product_options = $product_options . "<option selected disabled value=\"{$product["product_id"]}\"> {$product["product_name"]} </option>";
						}else{
							$product_options = $product_options . "<option disabled value=\"{$product["product_id"]}\"> {$product["product_name"]} </option>";
						}
					}
					$description = $row["description"];
					$unit_cost = $row["unit_cost"];
					$quantity = $row["qty"];
					$total_cost = $unit_cost * $quantity;
					$total_amount += $total_cost;
					$pod_id = $row["id"];
					echo "<div class='form-row'>
							<input type='hidden' class='po-class-pod-id' value='$pod_id'>
							<div class='form-group col-md-2'>
								<select class='form-control class_select_product' >
									$product_options
								</select>
							</div>
							<div class='form-group col-md-3'>
								<input type='text' class='form-control description' disabled readonly value='$description'>
							</div>
							<div class='form-group col-md-1'>
								<input type='text' class='form-control unit_cost' readonly value='$unit_cost'>
							</div>
							<div class='form-group col-md-1'>
								<input type='number' min='1' class='form-control quantity' readonly value='$quantity'>
							</div>
							<div class='form-group col-md-1'>
								<input type='text' class='form-control total_cost' readonly value='$total_cost'>
						    </div>
						    <div class='form-group col-md-1'>
						    	<input type='number' class='form-control receive-quantity' min='0'  value='0'>
							</div>
							<div class='form-group col-md-3'>
						    	<input type='text' class='form-control po-class-receive-comment'>
							</div>
						    </div>";
				}
			}
			?>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-7">
		</div>
		<div class="col-sm-5">
<!--			<span style="color:mediumblue"><b>Total Amounts = Baht </b>-->
<!--				<input type="text" id="total_amount" readonly value="--><?php //echo $total_amount; ?><!--"></span>-->
		</div>
	</div>
	<br>
	<div class="row">
		<div class="col-sm-7">
		</div>
		<div class="col-sm-5">
			<ul class="nav nav-pills" style="float:right;">
				<li role="presentation"> <a href="purchase.php" class="btn btn-info">Back</a></li> &emsp;&emsp;&emsp;
				<li role="presentation"> <a id="id-po-save" class="btn btn-warning">Confirm Receive</a></li> &emsp;
			</ul>
		</div>
	</div>
</div>
<?php include("footer.php"); ?>
<?php include_once('add_new_supplier_modal.php'); ?>
<?php
	$res = $link->query("SELECT * FROM ". TBL_PRODUCTS. " ORDER BY product_id ASC");
	$product_options = "";
	if($res->num_rows > 0){
		while($row = $res->fetch_assoc()){
			$product_options = $product_options . "<option value=\"{$row["product_id"]}\"> {$row["product_name"]} </option>";
		}
	}
?>
<script type="text/javascript">
	$(document).ready(function(){
		$("#id-po-save").on("click", function(){
			var po_id = $("#id-po-number").attr("val");
			var products = [];
			$("#items").children().each(function(index, form_row){
				var product_id = $(form_row).find(".class_select_product option:selected").val();
				if(product_id && product_id != "null"){
					var receive_quantity = $(form_row).find(".receive-quantity").val();
					var item = {"product_id": product_id, "receive_quantity": receive_quantity};
					products.push(item);
				}
			});
			$.ajax({
				type: "POST",
				url: "controller.php",
				data:{
					"action": "confirm_purchase_order_received",
					"po_id": po_id,
					"products": JSON.stringify(products)
				},
				success: function(data){
					console.log(data);
					if(data == "0"){
						alert("Save receive purchase order failed!");
					}else{
						alert("Save receive purchase order is successful!");
						window.location.href = "purchase.php";
					}
				}
			});
		});

	});
</script>
<?php $link->close(); ?>