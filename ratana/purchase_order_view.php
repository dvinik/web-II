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
		<h1 id="h2">View Purchase Order</h1>
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
				<span><b>P.O Number:</b></span>
			</div>
			<div class="col-sm-5">
				<?php
					$po_num = $po_id > 10 ? "$po_id" : "0$po_id";
					echo "<label id='id-po-number' > $po_num </label>";
				?>
			</div>
			<div class="col-sm-5">
				<span><h2>Family Bakery Shop</h2></span>
			</div>
		</div>
		<br>
		<div class="row">
			<div class="col-sm-2">
				<span><b>Date: </b></span>
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
			<h3 id="h3"><b>I. Supplier's information</b></h3>
		</div>
		<br>
		<div class="row">
			<div class="col-sm-3">
				<label for="supplier-select">Supplier</label> &emsp;
				<select name="supplier" class="form-control" id="supplier_select">
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
							echo "<option disabled value='$id'>{$row['supplier_name']}</option>";
						}
					}
					?>
				</select>
			</div>
			<div class="col-sm-6">
				<label for="shipping">Supplier Address</label>
				<textarea name="shipping" readonly class="form-control" id="shipping" rows="3"><?php echo $supplier_address; ?></textarea>
			</div>
		</div>
		<br><br>
		<div class="row">
			<h3 id="h3"><b>II. Product's Detail</b></h3>
		</div>
		<br>
		<div id="items">
			<div class="form-row">
				<div class="form-group col-md-2">
					<label>Product Name</label>
				</div>
				<div class="form-group col-md-4">
					<label>Description</label>
				</div>
				<div class="form-group col-md-2">
					<label>Unit Cost</label>
				</div>
				<div class="form-group col-md-1">
					<label>Quantity</label>
				</div>
				<div class="form-group col-md-2">
					<label>Total Cost</label>
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
						echo '<div class="form-row">
							<div class="form-group col-md-2">
								<select class="form-control class_select_product">
									'.$product_options.'
								</select>
							</div>
							<div class="form-group col-md-4">
								<input type="text" class="form-control description" readonly value="'.$description.'">
							</div>
							<div class="form-group col-md-2">
								<input type="text" class="form-control unit_cost" readonly value="'.$unit_cost.'">
							</div>
							<div class="form-group col-md-1">
								<input type="number" min="1" class="form-control quantity" readonly value="'.$quantity.'">
							</div>
							<div class="form-group col-md-2">
								<input type="text" class="form-control total_cost" readonly value="'.$total_cost.'">
						    </div>
						    </div>';
					}
				}
			?>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-7">
		</div>
		<div class="col-sm-5">
			<span style="color:mediumblue"><b>Total Amounts = Baht </b><input type="text" id="total_amount" readonly
					value="<?php echo $total_amount; ?>"></span>
		</div>
	</div>
	<br>
	<div class="row">
		<div class="col-sm-7">
		</div>
		<div class="col-sm-5">
			<ul class="nav nav-pills" style="float:right;">
				<li role="presentation"> <a href="purchase.php" class="btn btn-info">Close</a></li> &emsp;&emsp;&emsp;
			</ul>
		</div>
	</div>
</div>
<?php include("footer.php"); ?>
<script type="text/javascript">
	$(document).ready(function(){
		function updateTotalAmount(){
			var total = 0;
			$('#items .total_cost').each(function(index, element){
				var total_cost = $(element).val();
				if(total_cost){
					total = total + parseFloat(total_cost);
				}
			});
			$("#total_amount").val(total);
		}
		$('body').children().on('change', '.class_select_product', function(){
			var product_id = $(this).find(":selected").val();
			var form_row = $(this).parent().parent();
			$.ajax({
				type:"POST",
				url:"controller.php",
				data:{
					"action":"get_product_info",
					"product_id": product_id
				},
				success: function(data){
					if(data == "0"){
						console.log("Log product info failed");
					}else{
						var obj = JSON.parse(data);
						form_row.find(".description").val(obj["description"]);
						form_row.find(".unit_cost").val(obj["standard_cost"]);
						var quantity = form_row.find(".quantity").val();
						form_row.find(".total_cost").val(quantity * obj["standard_cost"]);
						updateTotalAmount();
					}
				}
			});
		});
		$('body').children().on('change', '.quantity', function(){
			var form_row = $(this).parent().parent();
			var quantity = $(this).val();
			var unit_cost = form_row.find(".unit_cost").val();
			form_row.find(".total_cost").val(quantity * unit_cost);
			updateTotalAmount();
		});
		$('body').children().on('click', '.delete_product_item', function(){
			$(this).parent().parent().remove();
			updateTotalAmount();
		});
	});
</script>
<?php $link->close(); ?>