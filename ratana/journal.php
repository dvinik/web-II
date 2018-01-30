<?php include("header.php"); ?>
<?php include_once('config.php'); ?>
<br>
<div class="row">
	<div class="col-sm-8">
	</div>
	<div class="col-sm-4">
		<button  type="button" class="btn btn-info" data-toggle="modal" data-target ="#add_new_journal_modal"><i class="fa fa-plus" aria-hidden="true"></i>
			Add Payment </button>
	</div>
</div>
<div class="container">
	<hr class="my-4">
	<h2 id="h2" class="text-center"><b>Journal Entry</b> </h2>
	<table class="table table-striped">
		<thead>
		<tr>
			<th scope="col" width="5%">ID</th>
			<th scope="col" width="17%">Entry Date</th>
			<th scope="col" width="15%">Account</th>
			<th scope="col" width="10%">Debit</th>
			<th scope="col" width="10%">Credit</th>
			<th scope="col" width="25%">Description</th>
			<th scope="col" width="15%">action</th>
		</tr>
		</thead>
		<tbody>
		<?php
		$sql  = 'SELECT * FROM `journal` AS je';
		$res = $link->query($sql);

		if($res->num_rows > 0){
			while($row = $res->fetch_assoc()){
				echo "<tr>";
				$entry_id = $row["entry_id"];
				$entry_date = format_date($row["entry_date"]);
				echo "<td>{$entry_id}</td>";
				echo "<td>{$entry_date}</td>";
				echo "<td>{$row["account_id"]}</td>";
				echo "<td>{$row["debit"]}</td>";
				echo "<td>{$row["credit"]}</td>";
				echo "<td>{$row["entry_description"]}</td>";
				echo "<td entry_id='$entry_id'>";
				echo "<button class='btn btn-info po-class-edit'>Edit</button> &nbsp;".
				     "<button a_id ='$entry_id' class='delete_journal btn btn-danger po-class-delete'>Delete</button>";
				echo "</td>";
				echo "</tr>";
			}
		}
		mysqli_close($link);
		?>
		</tbody>
	</table>
</div>
-->
<?php include("footer.php");?>
<?php include_once("add_new_journal_modal.php"); ?>
<script type="text/javascript">
	$(function(){
	$(".delete_journal").on('click',function(){
		if(confirm("Are you sure want to delete?")){
			var del_id= $(this).attr('a_id');
			// alert(del_id);
			var $ele = $(this).parent().parent();
			$.ajax({
				type:'POST',
				url:'controller.php',
				data:{
					'action':"delete_journal",
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
		}
	});
	

});


</script>