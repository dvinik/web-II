<?php include_once("header.php"); ?>
<?php include_once('config.php'); ?>


<div class="row" id="nav_second">
	<div class="col-sm-2">
	</div>
	<div class="col-sm-10" >
		 <ul class="nav nav-pills">
            <li role="presentation"><a href="purchase.php" class="nav_text">Purchase Order </a></li>
            <li role="presentation"><a href="receive_order.php" class="nav_text">Receive Order</a></li>
            <li role="presentation"><a href="supplier_list.php" class="nav_text">Supplier List</a></li>
            <li role="presentation"><a href="supplier_report.php" class="nav_text">Suppliers Reports</a></li>
     	</ul>
		
	</div>
</div>
<div class="row" style="background-color: #f2f2f2">
	<div class="col-sm-8">
	<h1 id="h2">Create Purchase Order</h1>
	</div>
	<div class="col-sm-4">	
			<ul class="nav nav-pills">
			    <li role="presentation" class="active"><a href="#" class="btn btn-success">Print</a></li> &nbsp;
				<li role="presentation" class="active"><a href="#" class="btn btn-primary">Print Preview</a></li>
			</ul>
	</div>

</div>
<hr>
<div class="container">
	<div class="jumbotron">
		<div class="row">
			<div class="col-sm-2">
				<span><b>P.O Number</b></span>
			</div>
			<div class="col-sm-5">
				<?php
					$res = $link->query("SELECT po_id FROM ".TBL_PURCHASE_ORDERS." ORDER BY po_id DESC LIMIT 1");
					$num = 1;
					if($res && $res->num_rows > 0){
						$row = $res->fetch_assoc();
						$num = $row["po_id"] + 1;
					}
					$po_num = $num > 10 ? "N$num" : "N0$num";
				?>
				<label id="po_number"> <?php echo $po_num; ?></label>
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
				<?php echo date("d/m/Y");   ?>
			</div>
			<div class="col-sm-5">
				<span>Bangkok,Bangkapi</span><br>
				<span>Phone:098765543</span><br>
				<span>Email:familybakeryshop@gmail.com</span>
				<!-- <span>Zipcode:0987</span> -->
				
			</div>
		</div>
		<br>		
<div class="container">
	<div class="row" style="background-color: #f2f2f2">
		<h3 id="h3"><b>I. Supplier's information</b></h3>
		<hr>
		<div class="row">
			<form action ="" method ="post">
				<button id="create_supplier" type="button" class="btn btn-primary" data-toggle="modal" data-target="#addNewSupplierModal"> +Add New Supplier</button>
				<div class="form-row">
					<div class="form-group col-md-4">
						<label for="supplier-select">Choose a supplier</label>
						<select name="supplier" class="form-control" id="supplier_select">
							<option selected="true" disabled="disabled">Choose Supplier</option>
							<?php

							$sql = 'SELECT * from suppliers order by supplier_id ASC';
							$retval = mysqli_query($link, $sql);
							while($row = mysqli_fetch_array($retval)) {
								$id = $row['supplier_id'];
								echo "<option value='$id'>{$row['supplier_name']}</option>";
							}
							?>
						</select>
					</div>
					<div class="form-group col-md-6">
						<label for="shipping">Supplier Address</label>
						<textarea name="shipping" class="form-control" id="shipping" rows="3"></textarea>
					</div>

				</div>

			</form>
		</div>
	</div>
</div>	
		
	<div class="row" style="background-color: #f2f2f2">
		<h3 id="h3"><b>II. Product's Detail</b></h3>
	</div>	
	<br>
		<div id="items">
        <div class="form-row">
            <div class="form-group col-md-2">
              <label>Product Name</label>
              <input name="product_name[]" type="text" class="form-control"><span class="hint" id="product_name_feedback"></span>
            </div>
            <div class="form-group col-md-4">
              <label>Description</label>
              <input name="description[]" type="text" class="form-control"><span class="hint" id="description_feedback"></span>
            </div>
            <div class="form-group col-md-1">
              <label>Unit Cost</label>
              <input name="unite_cost[]" type="number" class="form-control"><span class="hint" id="unit_feedback"></span>
            </div>
            <div class="form-group col-md-2">
              <label>Quantity</label>
              <input name="quantity[]" type="number" class="form-control"><span class="hint" id="quantity_feedback"></span>
            </div>
            <div class="form-group col-md-2">
              <label>Total Cost</label>
              <input name="total_cost[]" type="number" class="form-control"><span class="hint" id="total_feedback"></span>
            </div>
              <div class="form-group col-md-1">
              <label>Delete</label><br>
              &nbsp;<i class="fa fa-trash-o" aria-hidden="true"></i><span class="hint" id="delete_feedback"></span>
            </div>
        </div>
      </div>
        <button id="moreItems" type="button" class="btn btn-info">+Add more items</button>
<!--         <script type="text/javascript">
        	
        $(function(){
			$('#moreItems').click(function(event) {
			$('#items').append('<div class="form-row"><div class="form-group col-md-2"><input name="product_name[]" type="text" class="form-control"></div><div class="form-group col-md-4"><input name="description[]" type="text" class="form-control"></div><div class="form-group col-md-1"><input name="unite_cost[]" type="number" class="form-control"></div><div class="form-group col-md-2"><input name="quantity[]" type="number" class="form-control"></div><div class="form-group col-md-2"><input name="total_cost[]" type="number" class="form-control"></div><div class="form-group col-md-1"></div>&nbsp;<i class="fa fa-trash-o" aria-hidden="true"></i>');
			});
		});

         </script>
 -->	</div>	
</div>
<br>
	<div class="row">
		<div class="col-sm-7">
		</div>
		<div class="col-sm-5">
			<span style="color:mediumblue"><b>Total Amounts = Baht </b><input type="text" name="total_amount"></input></span>
		</div>
	</div>
	<br>
	<div class="row">
		<div class="col-sm-9">
		</div>
		<div class="col-sm-3">	
				<ul class="nav nav-pills">
				  <li role="presentation"> <a href="#"  class="btn btn-danger">Save</a></li> &nbsp;
				  <li role="presentation"> <a href="#"  class="btn btn-primary">Save and New</a></li>
				</ul>
		</div>
	</div>

<?php include("footer.php"); ?>
<?php include_once( 'add_new_supplier_modal.php' ); ?>

<script type="text/javascript">
$(function(){
   	$("#supplier_select").on("change", function() {
      var id = $("#supplier_select option:selected").val();
      $.post("purchase_controller.php", {
        'action': "get_supplier_address",
        'id': id
      }, function(data, status){
        $("#shipping").html(data);  
        // alert(data);
      });
    });
    
});
</script>
	


