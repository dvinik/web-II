<div class="modal fade" id="add_new_product_category_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog" role="document" style="width: 1000px;">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">+ New Product Category</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group row">
                    <label for="category" class="col-4 col-form-label">Category Name</label>
                    <div class="col-8">
                        <input type="text" class="form-control" id="category_name" name="category_name">
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" id="button_sumit_category" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
	$(function(){
		$("#button_sumit_category").on("click", function(){
			var category_name = $("#category_name").val();
			$.ajax({
				type:"POST",
				url:"controller.php",
				data:{
					"action":"create_new_product_category",
					"category_name" : category_name
				},
				success: function(data){
					if(data == "0"){
						alert("Category name is already exist!");
					}else if(data == "1"){
						$("#add_new_product_category_modal").modal("hide");
						alert(category_name + " is created successfully!");
						location.reload();
					}else{
						$("#add_new_product_category_modal").modal("hide");
						alert("Create new category failed!");
					}
				}
			});
		});
	});

</script>
