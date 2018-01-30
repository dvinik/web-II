<div class="modal fade" id="edit_customer_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Edit Customer</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                	<input type="hidden" id="id_modal_edit_customer">
	                <div class="form-group row">
		                <label for="first_name_modal_edit_customer" class="col-4 col-form-label">First Name:</label>
		                <div class="col-8">
			                <input type="text" class="form-control" id="first_name_modal_edit_customer" name="first_name">
		                </div>
	                </div>
	                <div class="form-group row">
		                <label for="last_name_modal_edit_customer" class="col-4 col-form-label">Last Name:</label>
		                <div class="col-8">
			                <input type="text" class="form-control" id="last_name_modal_edit_customer" name="last_name">
		                </div>
	                </div>
	                <div class="form-group row">
		                <label for="e_mail_modal_edit_customer" class="col-4 col-form-label">E-mail:</label>
		                <div class="col-8">
			                <input type="text" class="form-control" id="e_mail_modal_edit_customer" name="e_mail">
		                </div>
	                </div>
	                <div class="form-group row">
		                <label for="phone_modal_edit_customer" class="col-4 col-form-label">Phone:</label>
		                <div class="col-8">
			                <input type="text" class="form-control" id="phone_modal_edit_customer" name="phone">
		                </div>
	                </div>
	                <div class="form-group row">
		                <label for="address_modal_edit_customer" class="col-4 col-form-label">Address:</label>
		                <div class="col-8">
			                <input type="text" class="form-control" id="address_modal_edit_customer" name="address">
		                </div>
	                </div>
	                <div class="form-group row">
		                <label for="city_modal_edit_customer" class="col-4 col-form-label">City:</label>
		                <div class="col-8">
			                <input type="text" class="form-control" id="city_modal_edit_customer" name="city">
		                </div>
	                </div>
	                <div class="form-group row">
		                <label for="state_modal_edit_customer" class="col-4 col-form-label">State:</label>
		                <div class="col-8">
			                <input type="text" class="form-control" id="state_modal_edit_customer" name="state">
		                </div>
	                </div>
	                <div class="form-group row">
		                <label for="zipcode_modal_edit_customer" class="col-4 col-form-label">Zipcode:</label>
		                <div class="col-8">
			                <input type="text" class="form-control" id="zipcode_modal_edit_customer" name="zipcode">
		                </div>
                    </div>
                        
                    <div class="form-group row">
		                <label for="country_modal_edit_customer" class="col-4 col-form-label">Country:</label>
		                <div class="col-8">
			                <input type="text" class="form-control" id="country_modal_edit_customer" name="country">
		                </div>
	                </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" id="button_submit_edit_customer_modal" class="btn btn-primary">Save Changes</button>
                </div>
            </div>
        </div>
    </div>
<!--</form>-->
<script type="text/javascript">
$(function(){
	$("#button_submit_edit_customer_modal").on("click", function(){
		$.ajax({
			type:"POST",
			url:"controller_customer.php",
			data:{
				"action":"edit_customer",
				"id" : $("#id_modal_edit_customer").val(),
				"first_name": $("#first_name_modal_edit_customer").val(),
				"last_name": $("#last_name_modal_edit_customer").val(),
				"e_mail": $("#e_mail_modal_edit_customer").val(),
				"phone": $("#phone_modal_edit_customer").val(),
				"address": $("#address_modal_edit_customer").val(),
				"city": $("#city_modal_edit_customer").val(),
				"state": $("#state_modal_edit_customer").val(),
				"zipcode": $("#zipcode_modal_edit_customer").val(),
                "country": $("#country_modal_edit_customer").val()
			},
			success: function(data){
				if(data == "0"){
					alert("error");
				}else if(data == "1"){
					$("#edit_customer_modal").modal("hide");
					alert("Customer is edited successfully!");
					location.reload();
				}else{
					$("#edit_customer_modal").modal("hide");
					alert("Editing new customer failed!");
				}
			}
		});
	});
})
</script>