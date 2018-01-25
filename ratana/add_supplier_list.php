<form action="" method="post" autocomplete="on">
    <div class="modal fade" id="add_supplier_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">+Add new vendor</h5>
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
                    <div class="form-group">
                        <label for="usr">Vendor Name</label>
                        <input type="text" class="form-control" id="supplier_name" name="supplier_name">
                    </div>
                    <div class="form-group">
                        <label for="usr">Email:</label>
                        <input type="text" class="form-control" id="email" name="email">
                    </div>
                    <div class="form-group">
                        <label for="usr">Phone Number::</label>
                        <input type="text" class="form-control" id="phone" name="phone">
                    </div>
                    <div class="form-group">
                        <label for="usr">Fax</label>
                        <input type="text" class="form-control" id="fax" name="fax">
                    </div>
                     <div class="form-group">
                        <label for="usr">Address</label>
                        <input type="text" class="form-control" id="address" name="address">
                    </div>
                    <div class="form-group">
                        <label for="usr">City:</label>
                        <input type="text" class="form-control" id="city" name="city">
                    </div>
                    <div class="form-group">
                        <label for="usr">State:</label>
                        <input type="text" class="form-control" id="state" name="state">
                    </div>
                    <div class="form-group">
                        <label for="usr">Zipcode:</label>
                        <input type="text" class="form-control" id="zipcode" name="zipcode">
                    </div>
                    <div class="form-group">
                        <label for="usr">Country:</label>
                        <input type="text" class="form-control" id="country" name="country">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
</form>