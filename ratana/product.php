<?php include("header.php"); ?>
<?php include_once('config.php');?>
<?php include ("add_new_product_modal.php");?>

<link rel="stylesheet" type="text/css" href="style.css">
	<div class="row" id="nav_second">
		<div class="col-sm-2"></div>
	   	<div class="col-sm-10" >
    	<ul class="nav nav-pills">
           <li role="presentation"><a href="product.php" class="nav_text active">Products</a></li>
           <li role="presentation"><a href="product_categories.php" class="nav_text">Products Category</a></li>
     </ul>
	 </div>
	</div>
<div class="row" style="background-color: #f2f2f2">
        <div class="col-sm-8">
          <h1 id="h2">Product Lists</h1>
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
    <div class="jumbotron">
        <div class="row">
          <div class="col-sm-9">
            <!-- <span><b>Products View</b></span> -->
          </div>
          <div class="col-sm-3">
          <button id="add_button_product_list"  class="btn btn-primary" ><i class="fa fa-plus" aria-hidden="true"></i> Add new Product</button>
          </div>
        </div>
        <br>
        <div class="card mb-3">
            <div class="card-body">
              <div class="table-responsive">
               <table  id="purchase_order_table"  style = "width:100%">
            <thead>
              <tr>
                <th width="10%">Product code</th>
                <th width="20%">Product Name</th>
                <th width="30%">Decription</th>
                <th width="5%">Standard Cost</th>
                <th width="10%">List Price  </th>
                <th width="10%">Product Category </th>
                 <th width="10%">In Stock </th>
              </tr>
          </thead>
          <tbody>
            <?php
            $sql = "SELECT p.*, pt.product_types FROM `products` AS p 
                    INNER JOIN product_types AS pt ON p.product_type_id = pt.product_type_id order by p.product_id ASC";
            $retval = mysqli_query($link, $sql);
            while($row = mysqli_fetch_array($retval)) {
              echo "<tr>";
              $id = $row["product_id"];
              $product_code = $row["product_code"];
              $product_name = $row["product_name"];
              $description = $row["description"];
              $standard_cost = $row["standard_cost"];
              $list_price = $row["list_price"];
              $product_type = $row["product_types"];
              echo "<td>{$product_code}</td>";
              echo "<td>{$product_name}</td>";
              echo "<td>{$description}</td>";
              echo "<td>{$standard_cost}</td>";
              echo "<td>{$list_price}</td>";
              echo "<td>{$product_type}</td>";

              //echo "<td><i supplier_id = '$supplier_id' supplier_name='$supplier_name' email ='$email' phone = '$phone' fax ='$fax' address ='$address' city = '$city' state ='$state' zipcode ='$zipcode' country ='$country' class=' edit_supplier fa fa-pencil fa-1x'></i></td>";
              //echo "<td><i a_id='$supplier_id' class='delete_supplier fa fa-trash' aria-hidden='true'></i> </td>";

              echo "</tr>";
            }
            mysqli_close($link);
            ?>
            <tr>
              <!-- <td width="10%"></td> -->
              <td width="10%"></td>
              <td width="15%"></td>
              <td width="15%"></td>
              <td width="15%"></td>
              <td width="15%"></td>
              <td width="15%"></td>
            </tr>
          </tbody>
        </table>
              </div>
            </div>
          
           </div>
    </div>
  </div>
<?php include("footer.php"); ?>

<script type="text/javascript">

$(function(){
//	$("#add_new_product_modal").modal("show");
	$("#add_button_product_list").on("click", function(){
		$("#msg_product_name").hide();
        $("#add_new_product_modal").modal("show");
    });

	$("#button_submit_create_new_product").on("click", function(){
		$.ajax({
			type:"POST",
			url:"controller.php",
			data:{
				"action":"create_new_product",
				"product_code": $("#product_code").val(),
				"product_name": $("#product_name").val(),
				"description" : $("#description").val(),
				"standard_cost": $("#standard_cost").val(),
				"list_price" : $("#list_price").val(),
				"category" : $("#product_category").val()

			},
			success: function(data){
				if(data == "0"){
					$("#msg_product_name").show();
				}else if(data == "1"){
					$("#add_new_product_modal").modal("hide");
					alert("Product " + $("#product_name").val() + " is created successfully!");
					location.reload();
				}else{
					$("#add_new_product_modal").modal("hide");
					alert("Create new product failed!");
				}
			}
		});
	})

});


</script>



