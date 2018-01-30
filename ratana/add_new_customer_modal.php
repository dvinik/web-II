<!--<form action="add_supplier_controller.php" method="post" autocomplete="on">-->
    <div class="modal fade" id="addNewCustomerModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">+Add New Customers</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
	                
	                <div class="form-group row">
		                <label class="col-4 col-form-label">First Name:</label>
		                <div class="col-8">
			                <input type="text" class="form-control" id="first_name_modal_add_customer">
		                </div>
	                </div>
	                <div class="form-group row">
		                <label class="col-4 col-form-label">Last Name:</label>
		                <div class="col-8">
			                <input type="text" class="form-control" id="last_name_modal_add_customer" >
		                </div>
	                </div>
	                <div class="form-group row">
		                <label class="col-4 col-form-label">E-mail:</label>
		                <div class="col-8">
			                <input type="text" class="form-control" id="e_mail_modal_add_customer">
		                </div>
	                </div>
	                <div class="form-group row">
		                <label class="col-4 col-form-label">Phone:</label>
		                <div class="col-8">
			                <input type="text" class="form-control" id="phone_modal_add_customer">
		                </div>
	                </div>
	                <div class="form-group row">
		                <label class="col-4 col-form-label">Address:</label>
		                <div class="col-8">
			                <input type="text" class="form-control" id="address_modal_add_customer">
		                </div>
	                </div>
	                <div class="form-group row">
		                <label class="col-4 col-form-label">City:</label>
		                <div class="col-8">
			                <input type="text" class="form-control" id="city_modal_add_customer">
		                </div>
	                </div>
	                <div class="form-group row">
		                <label class="col-4 col-form-label">State:</label>
		                <div class="col-8">
			                <input type="text" class="form-control" id="state_modal_add_custome">
		                </div>
	                </div>
	                <div class="form-group row">
		                <label class="col-4 col-form-label">Zipcode:</label>
		                <div class="col-8">
			                <input type="text" class="form-control" id="zipcode_modal_add_customer">
		                </div>
                    </div>
                        
                    <div class="form-group row">
		                <label class="col-4 col-form-label">Country:</label>
		                <div class="col-8">
			                <input type="text" class="form-control" id="country_modal_add_customer">
		                </div>
	                </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" id="button_submit_add_new_customer_modal" class="btn btn-primary">+Add</button>
                </div>
            </div>
        </div>
    </div>
<!--</form>-->
<script type="text/javascript">
$(function(){
	$("#button_submit_add_new_customer_modal").on("click", function(){
		$.ajax({
			type:"POST",
			url:"controller_customer.php",
			data:{
				"action":"create_new_customer",
				"first_name": $("#first_name_modal_add_customer").val(),
				"last_name": $("#last_name_modal_add_customer").val(),
				"e_mail": $("#e_mail_modal_add_customer").val(),
				"phone": $("#phone_modal_add_customer").val(),
				"address": $("#address_modal_add_customer").val(),
				"city": $("#city_modal_add_customer").val(),
				"state": $("#state_modal_add_custome").val(),
				"zipcode": $("#zipcode_modal_add_customer").val(),
                "country": $("#country_modal_add_customer").val()
			},
			success: function(data){
				if(data == "0"){
					alert("error");
				}else if(data == "1"){
					$("#addNewCustomerModal").modal("hide");
					alert("Customer is created successfully!");
					location.reload();
				}else{
					$("#addNewCustomerModal").modal("hide");
					alert("Creating new customer failed!");
				}
			}
		});
	});
})
</script>