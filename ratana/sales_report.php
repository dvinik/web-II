<?php include("header.php"); ?>
<?php include_once('config.php');?>
<div class="row" id="nav_second">
	<div class="col-sm-2">
	</div>
	<div class="col-sm-10" >
		 <ul class="nav nav-pills">
           <li role="presentation"><a href="revenue.php" class="nav_text">Sales Order </a></li>
          <li role="presentation"><a href="customers.php" class="nav_text">View Customers</a></li>
             <li role="presentation"><a href="sales_report.php" class="nav_text active" menu="Sale">Sales Report</a></li>
     	</ul>
	</div>
</div>
<br>
<div class="row">
	<div class="col-sm-10">
<!--		<a href="create_sales_order.php" class="btn btn-primary">Create New Sales Order</a>-->
		</div>
		<div class="col-sm-2">
			<i class="fa fa-print fa-3x" aria-hidden="true" style="color:blue"></i>
		</div>
	</div>
<div class="container">
	
		<hr class="my-4">
		<h4 id="h2" class="text-center"><b>Sales Order Report</b> </h4>
    <br>
		<table class="table table-striped">
			<thead>
			<tr>
				
				<th scope="col" width="2%">S.O #</th>
				<th scope="col" width="5%">Order ID</th>
				<th scope="col" width="20%">Product</th>
                <th scope="col" width="5%">Quantity</th>
                <th scope="col" width="15%">Unit Price</th>
                <th scope="col" width="10%">Discount</th>
                <th scope="col" width="10%">Status ID</th>
                <th scope="col" width="20%">Order Date</th>
                <th scope="col" width="10%">P.O ID</th>
                <th scope="col" width="15%">Inventory ID</th>
                <!-- <th scope="col">Delete</th> -->
			</tr>
			</thead>
			<tbody>

                <?php
                $sql = "SELECT od.*, p.product_name FROM ".TBL_ORDER_DETAILS." AS od
                        INNER JOIN ".TBL_PRODUCTS." AS p ON p.product_id = od.product_id
                        ORDER BY od.id DESC";
                $res = $link->query($sql);
				if($res->num_rows > 0){
					while($row = $res->fetch_assoc()){
						echo "<tr>";
						$id = $row["id"];
						$order_date = format_date($row["order_date"]);
						$status = isset($ORDER_STATUS[$row["status_id"]])?$ORDER_STATUS[$row["status_id"]]:"";
                        echo "<td>{$row["id"]}</td>";
						echo "<td>{$row["order_id"]}</td>";
                        echo "<td>{$row["product_name"]}</td>";
						echo "<td>{$row["quantity"]}</td>";
						echo "<td>{$row["unit_price"]}</td>";
                        echo "<td>{$row["discount"]}</td>";
                        echo "<td>{$status}</td>";
                        echo "<td>{$order_date}</td>";
                        echo "<td>{$row["purchase_order_id"]}</td>";
                        echo "<td>{$row["inventory_id"]}</td>";
                        //echo "<td><i class=' edit_sales_order fa fa-pencil fa-1x'></i></td>";
                        // echo "<td><i a_id='$id' class='delete_sales_order-report fa fa-trash' aria-hidden='true'></i> </td>";

                        echo "</tr>";
                    }}
                ?>
                
                
			</tbody>
		</table>
	
</div>



<?php include("footer.php");
// include_once( 'add_new_sales_modal.php' ); 
//include_once( 'edit_customer_modal.php');
?>
<script type="text/javascript">
    

  //   $(function(){
  // $(".delete_sales_order_report").on('click',function(){
  //   var orderid = $(this).attr("a_id");
  //   if(confirm("Are you sure you want to delete sales order report with ID : '"+ orderid + "'?")){
  //     var del_id= $(this).attr('a_id');
  //   // alert(del_id);
  //   var $ele = $(this).parent().parent();
  //   $.ajax({
  //     type:'POST',
  //     url:'controller_sales.php',
  //     data:{
  //       'action':"delete_sales_order_report",
  //       'del_id':del_id
  //     },
  //     success: function(data){
  //       if(data=="YES"){
  //         $ele.fadeOut().remove();
  //       }else{
  //         alert("can't delete the row");
  //       }
  //     }
  //   });  
  //   }
  // });
  //   });

</script>
