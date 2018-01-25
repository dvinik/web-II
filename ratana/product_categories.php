<?php include("header.php"); ?>
<?php include ("add_new_product.php");?>

<link rel="stylesheet" type="text/css" href="style.css">
  <div class="row" id="nav_second">
    <div class="col-sm-2"></div>
      <div class="col-sm-10" >
      <ul class="nav nav-pills">
           <li role="presentation"><a href="inventory.php" class="nav_text active">Product</a></li>
           <li role="presentation"><a href="product_categories.php" class="nav_text">Product Category</a></li>
     </ul>
   </div>
  </div>
  
    <div class="row" style="background-color: #f2f2f2">
      <div class="col-sm-6">
        <h2 id="h2">Product List</h2>
      </div>
      <div class="col-sm-6">
        <div class="right">
          <ul class="nav nav-pills">
            <li role="presentation" class="active"><a href="#">Print</a></li>
            <!-- <li role="presentation"><a href="#">Save</a></li>
            <li role="presentation"><a href="#">Save and New</a></li> -->
          </ul>
        </div>
  </div>
    <hr>
  <div class="container">
    <div class="jumbotron">
        <div class="row">
          <div class="col-sm-9">
            <span><b>Products View</b></span>
          </div>
          <div class="col-sm-3">
          <button id="add_button_product_list">+Add new Product</button>
          </div>
        </div>
        <br>
        <div class="card mb-3">
            <div class="card-body">
              <div class="table-responsive">
               <table  id="purchase_order_table"  style = "width:100%">
            <thead>
              <tr>
                <th> ID</th>
                <th>Product code</th>
                <th>Product Name</th>
                <th>Supllier ID</th>
                 <th>Decription</th>
                <th>Standard Cost</th>
                <th>List Price  </th>
                <th>Product Type ID </th>
                <th>Product Type </th>

              </tr>
          </thead>
          <tbody>
            <tr>
              <td width="10%"></td>
              <td width="10%"></td>
              <td width="15%"></td>
              <td width="15%"></td>
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
  $("#add_button_product_list").on("click", function(){
    $("#add_new_product_modal").modal("show");
  });

});


</script>



