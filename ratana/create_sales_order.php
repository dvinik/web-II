<?php include("header.php"); ?>
<?php include('config.php'); ?>
	<div class="row" id="nav_second">
		<div class="col-sm-2">
		</div>
		<div class="col-sm-10" >
			<ul class="nav nav-pills">
				<li role="presentation"><a href="revenue.php" class="nav_text">Sales Order </a></li>
				<li role="presentation"><a href="customers.php" class="nav_text">View Customers</a></li>
				<li role="presentation"><a href="sales_report.php" class="nav_text">Sales Report</a></li>
			</ul>
		</div>
	</div>
	<div class="row" style="background-color: #f2f2f2">
		<div class="col-sm-6">
			<h1 id="h2">Create Sales Order</h1>
		</div>
		<div class="col-sm-4">
			<ul class="nav nav-pills">
				<li role="presentation" class="active"><a href="#" class="btn btn-success">Print</a></li>
				&nbsp;
				<li role="presentation" class="active"><a href="#" class="btn btn-primary">Print Preview</a></li>
			</ul>
		</div>
	</div>
	<hr>
	<div class="container">
		<div class="">
			<div class="row">
				<div class="col-sm-2">
					<span><b>S.O Number</b></span>
				</div>
				<div class="col-sm-5">
					<?php
					$res = $link->query("SHOW TABLE STATUS LIKE '".TBL_ORDERS."'");
					$num = 1;
					if($res && $res->num_rows > 0){
						$row = $res->fetch_assoc();
						$num = $row["Auto_increment"];
					}
					$id = $num > 10 ? "$num" : "0$num";

					?>
					<?php echo "<label id='id-order-number' val='$num' > $id </label>"; ?>
				</div>
				<div class="col-sm-5">
		      <span>
		         <h2>Family Bakery Shop</h2>
		      </span>
				</div>
			</div>
			<br>
			<div class="row">
				<div class="col-sm-2">
					<span><b>Date:</b></span>
				</div>
				<div class="col-sm-5">
					<?php echo date("d/m/Y");   ?>
				</div>
				<div class="col-sm-5">
					<span>Bangkapi, Bangkok</span><br>
					<span>Phone: 098765543</span><br>
					<span>Email: familybakeryshop@gmail.com</span>
					<!-- <span>Zipcode:0987</span> -->
				</div>
			</div>
			<br>
			<div class="row">
				<h3 id="h3"><b>Customer Information</b></h3>
			</div>
			<br>
			<div class="row">
				<div class="col-sm-3">
					<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addNewCustomerModal"> +Add New Customer</button>
					<br> <br>
					<select name="custom" class="form-control" id="customer_select">
						<option selected="true" disabled="disabled" value="null">Choose Customer</option>
						<?php
						$sql = 'SELECT * from '.TBL_CUSTOMERS.' order by id ASC';
						$retval = mysqli_query($link, $sql);
						while($row = mysqli_fetch_array($retval)) {
							$id = $row['id'];
							echo "<option value='$id'>{$row['first_name']} {$row['last_name']}</option>";
						}
						?>
					</select>
				</div>
				<div class="col-sm-6">
					<label >Customer Address</label>
					<textarea class="form-control" id="id-customer-info" rows="3"></textarea>
				</div>
			</div>
			<br><br>
			<div class="row" >
				<h3 id="h3"><b>Sales information</b></h3>
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
			</div>
			<button id="moreItems" type="button" class="btn btn-info">+Add more items</button>
			<br><br>
			<div class="row">
				<div class="col-sm-7">
				</div>
				<div class="col-sm-5">
					<span style="color:mediumblue"><b>Total Amounts = Baht </b><input type="text" id="total_amount" readonly></span>
				</div>
			</div>
			<br>
			<div class="row">
				<div class="col-sm-7">
				</div>
				<div class="col-sm-5">
					<ul class="nav nav-pills" style="float:right;">
						<li role="presentation"> <a href="revenue.php" class="btn btn-info">Close</a></li>
						&emsp;&emsp;&emsp;
						<li role="presentation"> <a id="id-order-save" class="btn btn-warning">Save</a></li>
						&emsp;
					</ul>
				</div>
			</div>
		</div>
	</div>
	<?php include("footer.php"); ?>
	<?php
	include_once("add_new_customer_modal.php");

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
			var product_options = <?php echo "'$product_options'"; ?>;
			function addOneMoreProductItem() {
				$product_item = '' +
					'<div class="form-row"> \
						<div class="form-group col-md-2"> \
							<select class="form-control class_select_product">\
								<option selected="true" disabled="disabled" value="null">Choose Product</option>\
								'+product_options+' \
   					        </select>\
   				        </div> \
		                <div class="form-group col-md-4"> \
		                    <input name="description" type="text" class="form-control description" readonly> \
		                </div> \
		                <div class="form-group col-md-2"> \
		                    <input name="unit_cost[]" type="text" class="form-control unit_cost" readonly> \
		                </div> \
		                <div class="form-group col-md-1"> \
		                    <input name="quantity[]" type="number" min="1" value="1" class="form-control quantity"><span class="hint" id="quantity_feedback"></span> \
		                    </div> \
		                    <div class="form-group col-md-2"> \
		                <input name="total_cost[]" type="text" class="form-control total_cost" readonly> \
		                </div> \
		                <div class="form-group col-md-1"> \
		                    &nbsp;&nbsp;&nbsp;<i class="fa fa-trash-o delete_product_item" style="color: brown;" aria-hidden="true"></i> \
		                </div> \
   			        </div>';
				$('#items').append($product_item);
			}
			addOneMoreProductItem();
			$("#moreItems").on("click", function(){
				addOneMoreProductItem();
			});
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
			$("#customer_select").on("change", function() {
				var customer_id = $("#customer_select option:selected").val();
				$.post("controller_sales.php", {
					'action': "get_customer_info",
					'customer_id': customer_id
				}, function(data, status) {
					$("#id-customer-info").html(data);
				});
			});
			$('body').children().on('click', '.delete_product_item', function(){
				$(this).parent().parent().remove();
				updateTotalAmount();
			});
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
			$("#id-order-save").on("click", function(){
				var order_id = $("#id-order-number").attr("val");
				var customer_id = $("#customer_select option:selected").val();
				if(customer_id && customer_id != "null"){
					var products = [];
					$("#items").children().each(function(index, form_row){
						var product_id = $(form_row).find(".class_select_product option:selected").val();
						if(product_id && product_id != "null"){
							var unit_cost = $(form_row).find(".unit_cost").val();
							var quantity = $(form_row).find(".quantity").val();
							var item = {"product_id": product_id, "unit_cost": unit_cost, "quantity": quantity};
							products.push(item);
						}
					});
					if(products.length == 0){
						alert("You need to select at least on item.");
					}else{
						$.ajax({
							type: "POST",
							url: "controller_sales.php",
							data:{
								"action": "save_sale_order",
								"order_id": order_id,
								"customer_id": customer_id,
								"products": JSON.stringify(products)
							},
							success: function(data){
								if(data == "0"){
									alert("Save failed!");
								}else{
									alert("Save successful!");
									window.location.href = "revenue.php";
								}
							}
						});
					}
				}else{
					alert("You have to select customer!");
				}

			});

		});
	</script>
<?php $link->close(); ?>