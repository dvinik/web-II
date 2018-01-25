<?php include_once('header.php'); ?>

<?php include_once('config.php');?>
<?php include_once('edit_supplier.php'); ?>
<?php include_once('add_supplier_list.php'); ?>

<style type="text/css">
	.delete_supplier{
		cursor: pointer;
	}
	.edit_supplier{
		cursor: pointer;
	}
</style>
<div class="row" id="nav_second">
	<div class="col-sm-2">
	</div>
		<div class="col-sm-10" >
		 	 <ul class="nav nav-pills">
	           <li role="presentation"><a href="purchase.php" class="nav_text">Purchase Order </a></li>
	           <li role="presentation"><a href="receive_order.php" class="nav_text">Receive Order</a></li>
	           <li role="presentation"><a href="supplier_list.php" class="nav_text active">Supplier List</a></li>
          		<li role="presentation"><a href="supplier_report.php" class="nav_text">Suppliers Reports</a></li>
     		</ul>
		</div>
</div>
<div class="row" style="background-color: #f2f2f2">
	<!-- <div class="col-sm-6">
		<h2 id="h2">Supplier List</h2>
	</div> -->
	

</div>
<hr>
<div class="container">
	<div class="jumbotron mt-4">
		<div class="row">
			<div class="col-sm-9">
				<span></span>
			</div>
			<div class="col-sm-3">
			<button id="add_button_supplier_list">+Add new Supplier</button>
			</div>
			
		</div>
		
		<h5>1. General Information</h5>
		<table class="table table-striped">
			<thead>
			<tr>
				<th scope="col">ID</th>
				<th scope="col">Name</th>
				<th scope="col">Email</th>
				<th scope="col">Phone</th>
				<th scope="col">Fax</th>
				<th scope="col">Address</th>
				<th scope="col">City</th>
				<th scope="col">State</th>
				<th scope="col">Zipcode</th>
				<th scope="col">Coutry</th>
				<th scope="col">Edit</th>
				<th scope="col">Delete</th>

			</tr>
			</thead>
			<tbody>
			<?php
			$sql = "SELECT * from ".TBL_SUPPLIERS." order by supplier_id ASC";
			$retval = mysqli_query($link, $sql);
			while($row = mysqli_fetch_array($retval)) {
				echo "<tr>";
				$supplier_id = $row["supplier_id"];
				$supplier_name = $row["supplier_name"];
				$email = $row["email"];
				$phone = $row["phone"];
				$fax = $row["fax"];
				$address = $row["address"];
				$city = $row["city"];
				$state = $row["state"];
				$zipcode = $row["zipcode"];
				$country = $row["country"];


				echo "<td>{$supplier_id}</td>";
				echo "<td>{$supplier_name}</td>";
				echo "<td>{$email}</td>";
				echo "<td>{$phone}</td>";
				echo "<td>{$fax}</td>";
				echo "<td>{$address}</td>";
				echo "<td>{$city}</td>";
				echo "<td>{$state}</td>";
				echo "<td>{$zipcode}</td>";
				echo "<td>{$country}</td>";
				echo "<td><i supplier_id = '$supplier_id' supplier_name='$supplier_name' email ='$email' phone = '$phone' fax ='$fax' address ='$address' city = '$city' state ='$state' zipcode ='$zipcode' country ='$country' class=' edit_supplier fa fa-pencil fa-1x'></i></td>";
				echo "<td><i a_id='$supplier_id' class='delete_supplier fa fa-trash' aria-hidden='true'></i> </td>";

				echo "</tr>";
			}
			mysqli_close($link);
			?>
			</tbody>
		</table>
	</div>

	<?php include_once('footer.php'); ?>
	
<script type="text/javascript">
$(function(){
	$(".delete_supplier").on('click',function(){
		var del_id= $(this).attr('a_id');
		// alert(del_id);
		var $ele = $(this).parent().parent();
		$.ajax({
			type:'POST',
			url:'controller.php',
			data:{
				'action':"delete_supplier",
				'del_id':del_id
			},
			success: function(data){
				if(data=="YES"){
					$ele.fadeOut().remove();
				}else{
					alert("can't delete the row");
				}
			}
		});
	});
	$(".edit_supplier").on("click",function(){
		$("#supplier_id").val($(this).attr("supplier_id"));
		$("#supplier_name").val($(this).attr("supplier_name"));
		$("#email").val($(this).attr("email"));
		$("#phone").val($(this).attr("phone"));
		$("#fax").val($(this).attr("fax"));
		$("#address").val($(this).attr("address"));
		$("#city").val($(this).attr("city"));
		$("#state").val($(this).attr("state"));
		$("#zipcode").val($(this).attr("zipcode"));
		$("#country").val($(this).attr("country"));
		$("#edit_supplier_modal").modal("show");
	});

	$("#add_button_supplier_list").on("click", function(){
		$("#add_supplier_modal").modal("show");
	});

});


</script>





































	