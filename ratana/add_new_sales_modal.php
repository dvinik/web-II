<!--<form action="add_supplier_controller.php" method="post" autocomplete="on">-->

<script type="text/javascript">
function subtractQty(){
if(document.getElementById("quantity").value - 1 < 0)
return;
else
document.getElementById("quantity").value--;
}
</script>


    <div class="modal fade" id="addNewSalesOrderModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">+Add New Sales Order</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
	                    <div class="form-group row">
		                <label class="col-4 col-form-label">Product ID:</label>
		                <div class="col-8">
			                <input type="text" class="form-control" id="product_id_modal_add_sales">
		                </div>
	                </div>
	                <div class="form-group row">
		                <label class="col-4 col-form-label">Quantity:</label>
		                <div class="col-5">
                            <input type='text' class="form-control" name='quantity' id='quantity'/></div>
                               <div class="col-2.5"> <input type='button' name='add' onclick='javascript: document.getElementById("quantity").value++;' value='+'/>
                                <input type='button' name='subtract' onclick='javascript: subtractQty();' value='-'/>
                        </div>
		                </div>
	           
	                <div class="form-group row">
		                <label class="col-4 col-form-label">Unit Price:</label>
		                <div class="col-8">
			                <input type="text" class="form-control" id="unit_price_modal_add_sales">
		                </div>
	                </div>
	                <div class="form-group row">
		                <label class="col-4 col-form-label">Discount:</label>
		                <div class="col-8">
			                <input type="text" class="form-control" id="discount_modal_add_sales">
		                </div>
	                </div>
	                <div class="form-group row">
		                <label class="col-4 col-form-label">Status ID:</label>
		                <div class="col-8">
			                <input type="text" class="form-control" id="status_id_modal_add_sales">
		                </div>
	                </div>
	                <!--<div class="form-group row">
		                <label class="col-4 col-form-label">Date:</label>
		                <div class="col-8">
			                <input type="text" class="form-control" id="date_modal_add_customer">
		                </div>
	                </div>-->
	                <div class="form-group row">
		                <label class="col-4 col-form-label">Purchase Order ID:</label>
		                <div class="col-8">
			                <input type="text" class="form-control" id="purchase_order_modal_add_sales">
		                </div>
	                </div>
	                <div class="form-group row">
		                <label class="col-4 col-form-label">Inventory ID:</label>
		                <div class="col-8">
			                <input type="text" class="form-control" id="inventory_id_modal_add_sales">
		                </div>
                    </div>
                        
                    <div class="form-group row">
		                
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
	$("#button_submit_add_new_sales_modal").on("click", function(){
		$.ajax({
			type:"POST",
			url:"controller_sales.php",
			data:{
				"action":"create_new_sales",
				"product_id": $("#product_id_modal_add_sales").val(),
				"quantity": $("#qty").val(),
				"unit_price": $("#unit_price_modal_add_sales").val(),
				"dsicount": $("#discount_modal_add_sales").val(),
				"status_id": $("#status_id_modal_add_sales").val(),
				"purchase_order_id": $("#purchase_order_modal_add_sales").val(),
				"inventory_id": $("#inventory_id_modal_add_sales").val()
			},
			success: function(data){
				if(data == "0"){
					alert("Error!");
				}else if(data == "1"){
					$("#addNewSalesModal").modal("hide");
					alert("Sales Order is created successfully!");
					location.reload();
				}else{
					$("#addNewSalesModal").modal("hide");
					alert("Creating New Sales failed!");
				}
			}
		});
	});
})
</script>