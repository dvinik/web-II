<div class="modal fade" id="edit_supplier_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLongTitle">Edit Supplier</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<input type="hidden" id="id_modal_edit_supplier" name="supplier_id">
					<div class="form-group row">
						<label class="col-4 col-form-label">Supplier Name:</label>
						<div class="col-8">
							<input type="text" class="form-control" id="name_modal_edit_supplier">
						</div>
					</div>
					<div class="form-group row">
						<label class="col-4 col-form-label">Email:</label>
						<div class="col-8">
							<input type="text" class="form-control" id="email_modal_edit_supplier">
						</div>
					</div>
					<div class="form-group row">
						<label class="col-4 col-form-label">Phone:</label>
						<div class="col-8">
							<input type="text" class="form-control" id="phone_modal_edit_supplier">
						</div>
					</div>
					<div class="form-group row">
						<label class="col-4 col-form-label">Fax:</label>
						<div class="col-8">
							<input type="text" class="form-control" id="fax_modal_edit_supplier">
						</div>
					</div>
					<div class="form-group row">
						<label class="col-4 col-form-label">Address:</label>
						<div class="col-8">
							<input type="text" class="form-control" id="address_modal_edit_supplier">
						</div>
					</div>
					<div class="form-group row">
						<label class="col-4 col-form-label">City:</label>
						<div class="col-8">
							<input type="text" class="form-control" id="city_modal_edit_supplier">
						</div>
					</div>
					<div class="form-group row">
						<label class="col-4 col-form-label">State:</label>
						<div class="col-8">
							<input type="text" class="form-control" id="state_modal_edit_supplier">
						</div>
					</div>
					<div class="form-group row">
						<label class="col-4 col-form-label">Zip code:</label>
						<div class="col-8">
							<input type="text" class="form-control" id="zipcode_modal_edit_supplier">
						</div>
					</div>
					<div class="form-group row">
						<label class="col-4 col-form-label">Country:</label>
						<div class="col-8">
							<input type="text" class="form-control" id="country_modal_edit_supplier">
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					<button type="button" id="button_submit_edit_supplier_modal" class="btn btn-primary">Save changes</button>
				</div>
			</div>
		</div>
</div>
<script type="text/javascript">
$(function(){
	$("#button_submit_edit_supplier_modal").on("click", function(){
		$.ajax({
			type:"POST",
			url:"controller.php",
			data:{
				"action":"edit_supplier",
				"supplier_id" : $("#id_modal_edit_supplier").val(),
				"supplier_name" : $("#name_modal_edit_supplier").val(),
				"email": $("#email_modal_edit_supplier").val(),
				"phone": $("#phone_modal_edit_supplier").val(),
				"fax": $("#fax_modal_edit_supplier").val(),
				"address": $("#address_modal_edit_supplier").val(),
				"city": $("#city_modal_edit_supplier").val(),
				"state": $("#state_modal_edit_supplier").val(),
				"zipcode": $("#zipcode_modal_edit_supplier").val(),
				"country": $("#country_modal_edit_supplier").val()
			},
			success: function(data){
				if(data == "0"){
					alert("Supplier name is already exist!");
				}else if(data == "1"){
					$("#edit_supplier_modal").modal("hide");
					alert("Save successfully!");
					location.reload();
				}else{
					$("#edit_supplier_modal").modal("hide");
					alert("Save failed!");
				}
			}
		});
	});
});
</script>