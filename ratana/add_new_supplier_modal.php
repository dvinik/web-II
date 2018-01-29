<!--<form action="add_supplier_controller.php" method="post" autocomplete="on">-->
    <div class="modal fade" id="addNewSupplierModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">+Add New Supplier</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
	                <div class="form-group row">
		                <label for="supplier_name_modal_add_supplier" class="col-4 col-form-label">Supplier Name:</label>
		                <div class="col-8">
			                <input type="text" class="form-control" id="supplier_name_modal_add_supplier">
		                </div>
	                </div>
	                <div class="form-group row">
		                <label for="email_modal_add_supplier" class="col-4 col-form-label">Email:</label>
		                <div class="col-8">
			                <input type="text" class="form-control" id="email_modal_add_supplier">
		                </div>
	                </div>
	                <div class="form-group row">
		                <label for="phone_modal_add_supplier" class="col-4 col-form-label">Phone Number:</label>
		                <div class="col-8">
			                <input type="text" class="form-control" id="phone_modal_add_supplier">
		                </div>
	                </div>
	                <div class="form-group row">
		                <label for="fax_modal_add_supplier" class="col-4 col-form-label">Fax:</label>
		                <div class="col-8">
			                <input type="text" class="form-control" id="fax_modal_add_supplier">
		                </div>
	                </div>
	                <div class="form-group row">
		                <label for="address_modal_add_supplier" class="col-4 col-form-label">Address:</label>
		                <div class="col-8">
			                <input type="text" class="form-control" id="address_modal_add_supplier">
		                </div>
	                </div>
	                <div class="form-group row">
		                <label for="city_modal_add_supplier" class="col-4 col-form-label">City:</label>
		                <div class="col-8">
			                <input type="text" class="form-control" id="city_modal_add_supplier">
		                </div>
	                </div>
	                <div class="form-group row">
		                <label for="state_modal_add_supplier" class="col-4 col-form-label">State:</label>
		                <div class="col-8">
			                <input type="text" class="form-control" id="state_modal_add_supplier">
		                </div>
	                </div>
	                <div class="form-group row">
		                <label for="zipcode_modal_add_supplier" class="col-4 col-form-label">Zip Code:</label>
		                <div class="col-8">
			                <input type="text" class="form-control" id="zipcode_modal_add_supplier">
		                </div>
	                </div>
	                <div class="form-group row">
		                <label for="country_modal_add_supplier" class="col-4 col-form-label">Country:</label>
		                <div class="col-8">
			                <input type="text" class="form-control" id="country_modal_add_supplier">
		                </div>
	                </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" id="button_submit_add_new_supplier_modal" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
<!--</form>-->
<script type="text/javascript">
$(function(){
	$("#button_submit_add_new_supplier_modal").on("click", function(){
		$.ajax({
			type:"POST",
			url:"controller.php",
			data:{
				"action":"create_new_supplier",
				"supplier_name" : $("#supplier_name_modal_add_supplier").val(),
				"email": $("#email_modal_add_supplier").val(),
				"phone": $("#phone_modal_add_supplier").val(),
				"fax": $("#fax_modal_add_supplier").val(),
				"address": $("#address_modal_add_supplier").val(),
				"city": $("#city_modal_add_supplier").val(),
				"state": $("#state_modal_add_supplier").val(),
				"zipcode": $("#zipcode_modal_add_supplier").val(),
				"country": $("#country_modal_add_supplier").val()
			},
			success: function(data){
				if(data == "0"){
					alert("Supplier name is already exist!");
				}else if(data == "1"){
					$("#addNewSupplierModal").modal("hide");
					alert("Supplier is created successfully!");
					location.reload();
				}else{
					$("#addNewSupplierModal").modal("hide");
					alert("Create new supplier failed!");
				}
			}
		});
	});
})
</script>