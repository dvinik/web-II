<div class="modal fade" id="add_new_product_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog" role="document" style="width: 1000px;">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">+ New Product</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group row">
                    <label for="product_code" class="col-4 col-form-label">Product Code</label>
                    <div class="col-8">
                        <input type="text" class="form-control" id="product_code" name="product_code">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="product_name" class="col-4 col-form-label">Product Name</label>
                    <div class="col-8">
                        <input type="text" class="form-control" id="product_name" name="product_name">
	                    <label class="hint" id="msg_product_name">Already exist!</label>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="description" class="col-4 col-form-label">Decription</label>
                    <div class="col-8">
                        <input type="text" class="form-control" id="description" name="decription">
                    </div>
                </div>
                 <div class="form-group row">
                    <label for="standard_cost" class="col-4 col-form-label">Standard Cost</label>
                    <div class="col-8">
                        <input type="text" class="form-control" id="standard_cost" name="standard_cost">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="list_price" class="col-4 col-form-label">List Price</label>
                    <div class="col-8">
                        <input type="text" class="form-control" id="list_price" name="list_price">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="product_category" class="col-4 col-form-label">Product Category</label>
                    <div class="col-8">
                        <select id="product_category" name="product_category" class="form-control">
                            <?php
                            $sql = "SELECT * FROM `".TBL_PRODUCT_TYPES."` order by product_type_id ASC";
                            $res = $link->query($sql);
                            while($row = $res->fetch_assoc()) {
	                            echo "<option value='{$row["product_type_id"]}'>{$row["product_types"]}</option>";
                            }
							?>
                        </select>
                        <!-- <input type="text" class="form-control" id="product_category" name="product_category"> -->
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" id="button_submit_create_new_product" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>
