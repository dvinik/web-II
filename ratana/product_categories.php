<?php include("header.php"); ?>
<link rel="stylesheet" type="text/css" href="style.css">

	<div class="row" id="nav_second">
		<div class="col-sm-2"></div>
	   	<div class="col-sm-10" >
    	<ul class="nav nav-pills">
           <li role="presentation"><a href="inventory.php" class="nav_text active">Products</a></li>
           <li role="presentation"><a href="product_categories.php" class="nav_text">Product Category</a></li>
     </ul>
	 </div>
	</div>
  
    <div class="row" align="center" style="background-color: #f2f2f2">
     <h3 id="h3">Products View</h3>
    </div>
    <hr>
  <div class="container">
    <div class="jumbotron">
      <div class="row">
          <div class="col-sm-4">
           <span><b>Date:</b></span> <input type="date" name="date">
          </div>
      </div>
        <br>    
        <br>
    <div class="card mb-3">
        <div class="card-header"> &nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-table"></i> <b style="color: green;">Product List</b></div>
        <div class="card-body">
          <div class="table-responsive">
           <table  id="purchase_order_table"  style = "width:100%">
        <thead>
          <tr>
            <th>Product ID</th>
            <th>Product Name</th>
            <th>Category</th>
            <th>Unit Cost</th>
             <th>Quantity On Comming</th>
            <th>Quantity In Stock</th>
            <th>Quantity On Order</th>
          </tr>
      </thead>
      <tbody>
        <tr>
          <td width="15%"><input type="number" name="product_id" style="width: 100%;"></td>
          <td width="25%"><input type="text" name="product_name" style="width: 100%;"></td>
          <td width="25%"><input type="text" name="product_category" style="width: 100%;"></td>
          <td width="20%"><input type="number" name="unit_cost" style="width: 100%;"></td>
          <td width="20%"><input type="number" name="qty_oncomming" style="width: 100%;"></td>
          <td width="20%"><input type="number" name="qty_instock" style="width: 100%;"></td>
          <td width="10%"><input type="number" name="qty_onorder" style="width: 100%;"></td>
        </tr>
               
      </tbody>
    </table>
          </div>
        </div>
          <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
    </div>
    </div>
  </div>
	

<?php include("footer.php"); ?>