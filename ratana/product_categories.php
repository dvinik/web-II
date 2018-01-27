<?php
	include("header.php");
	include_once("config.php");
?>

<!--<link rel="stylesheet" type="text/css" href="style.css">-->
<div class="row" id="nav_second">
	<div class="col-sm-2"></div>
    <div class="col-sm-10" >
        <ul class="nav nav-pills">
            <li role="presentation"><a href="inventory.php" class="nav_text">Product</a></li>
            <li role="presentation"><a href="product_categories.php" class="nav_text active" menu="Inventory">Product Category</a></li>
        </ul>
    </div>
</div>
  
<div class="row" style="background-color: #f2f2f2">
    <div class="col-sm-6">
        <h2 id="h2">Product Category</h2>
    </div>
    <div class="col-sm-6">
        <div class="right">
            <ul class="nav nav-pills">
                <li role="presentation" class="active"><a href="#">Print</a></li>
            </ul>
        </div>
    </div>
</div>
    <hr>
<div class="container">
	<div class="jumbotron">
        <div class="row">
            <div class="col-sm-9">
                <span><b>Product Category</b></span>
            </div>
	        <div class="col-sm-3">
	            <button data-toggle="modal" data-target="#add_new_product_category_modal">+Add New Category</button>
	        </div>
        </div><br>
        <div class="card mb-3">
            <div class="card-body">
	            <div class="table-responsive">
                <table  id="purchase_order_table"  style = "width:100%">
		            <thead>
		                <tr>
			                <th width="20%">Product Category </th>
			            </tr>
		            </thead>
			        <tbody>
		            <?php
		                $sql = "SELECT * FROM `".TBL_PRODUCT_TYPES."` order by product_type_id ASC";
						$res = $link->query($sql);
						while($row = $res->fetch_assoc()) {
						      echo "<tr>";
						      $category_name = $row["product_types"];
						      echo "<td>{$category_name}</td>";
						      echo "</tr>";
						  }
						?>
		            </tbody>
                </table>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include("footer.php"); ?>
<?php include_once("add_new_product_category_modal.php"); ?>