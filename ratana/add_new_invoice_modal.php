<?php include_once("constant.php");?>    
    <div class="modal fade" id="add_new_invoice_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">+Add New Invoice</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
	                <div class="form-group row">
		                <label  class="col-4 col-form-label">Invoice Number</label>
		                <div class="col-8">
			                <input type="text" class="form-control" id="add_invoice_number_modal">
		                </div>
	                </div>
	                 <div class="form-group row">
		                <label for="email_modal_add_supplier" class="col-4 col-form-label">Invoice Date</label>
		                <div class="col-8">
			                <input type="date" class="form-control" id="invoice_date_invoice_modal">
		                </div>
	                </div>
	                <div class="form-group row">
		                <label for="email_modal_add_supplier" class="col-4 col-form-label">For PO#</label>
		                <div class="col-8">
			                <input type="text" class="form-control" id="po_number_invoice_modal">
		                </div>
	                </div>
	                <div class="form-group row">
		                <label for="email_modal_add_supplier" class="col-4 col-form-label">Due Date</label>
		                <div class="col-8">
			                <input type="date" class="form-control" id="due_date_invoice_modal">
		                </div>
	                </div>
	                 <div class="form-group row">
		                <label for="email_modal_add_supplier" class="col-4 col-form-label">Paid Date</label>
		                <div class="col-8">
			                <input type="date" class="form-control" id="paid_date_invoice_modal">
		                </div>
	                </div>
	                <div class="form-group row">
		                <label for="email_modal_add_supplier" class="col-4 col-form-label">Payment Method</label>
		                <div class="col-8">
			                <!-- <input type="" class="form-control" id="payment_method_invoice_modal"> -->
			                <select id="payment_method_invoice_modal">
								  <option selected='true' disabled='disabled' value='null'>Choose Method</option>
								  <option value='<?php echo PAYMENT_CASH; ?>'>Cash</option>
								  <option value='<?php echo PAYMENT_CHECK; ?>'>Check</option>
								  <option value='<?php echo PAYMENT_CREDIT; ?>'>Credit</option>
							</select>
		                </div>
	                </div>
	                <div class="form-group row">
		                <label for="email_modal_add_supplier" class="col-4 col-form-label">Check Number</label>
		                <div class="col-8">
			                <input type="text" class="form-control" id="check_number_invoice_modal">
		                </div>
	                </div>
	                <div class="form-group row">
		                <label for="phone_modal_add_supplier" class="col-4 col-form-label">Total Amount(Baht)</label>
		                <div class="col-8">
			                <input type="number" class="form-control" id="total_amount_invoice_modal">
		                </div>
	                </div>
	             
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" id="button_submit_add_new_invoice_modal" class="btn btn-primary">Paid </button>
                </div>
            </div>
        </div>
    </div>
<!--</form>-->
<script type="text/javascript">
$(function(){
	$("#button_submit_add_new_invoice_modal").on("click", function(){
		$.ajax({
			type:"POST",
			url:"controller.php",
			data:{
				"action":"add_new_paid_invoice",
				"invoice_number" : $("#add_invoice_number_modal").val(),
				"invoice_date" : $("#invoice_date_invoice_modal").val(),
				"po_id" : $("#po_number_invoice_modal").val(),
				"due_date": $("#due_date_invoice_modal").val(),
				"paid_date": $("#paid_date_invoice_modal").val(),
				"payment_method": $("#payment_method_invoice_modal").val(),
//				"check_number": $("#check_number_invoice_modal").val(),
				"total_amount": $("#total_amount_invoice_modal").val(),

			},
			success: function(data){
				// alert(data);
				if(data == "0"){
					alert("Invoice Number is already exist!");
				}else if(data == "1"){
					$("#add_new_invoice_modal").modal("hide");
					alert("Invoice Number is added successfully!");
					location.reload();
				}else{
					$("#add_new_invoice_modal").modal("hide");
					alert("Add new Invoice failed!");
				}
			}
		});
	});
})
</script>