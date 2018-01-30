    <div class="modal fade" id="add_new_journal_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">+Add New Journal</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group row">
                        <label  class="col-4 col-form-label">Entry Date</label>
                        <div class="col-8">
                            <input type="date" class="form-control" id="entry_date_journal">
                        </div>
                    </div>
                     <div class="form-group row">
                        <label for="email_modal_add_supplier" class="col-4 col-form-label">Account ID</label>
                        <div class="col-8">
                            <input type="number" class="form-control" id="account_id_juornal">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="email_modal_add_supplier" class="col-4 col-form-label">Debit</label>
                        <div class="col-8">
                            <input type="text" class="form-control" id="debit_journal">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="email_modal_add_supplier" class="col-4 col-form-label">Credit</label>
                        <div class="col-8">
                            <input type="text" class="form-control" id="credit_journal">
                        </div>
                    </div>
                     <div class="form-group row">
                        <label for="email_modal_add_supplier" class="col-4 col-form-label">Entry Decription</label>
                        <div class="col-8">
                            <input type="text" class="form-control" id="entry_description_journal">
                        </div>
                    </div>
                 
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" id="button_submit_add_new_journal_modal" class="btn btn-primary">Paid </button>
                </div>
            </div>
        </div>
    </div>
<!--</form>-->
<script type="text/javascript">
$(function(){
    $("#button_submit_add_new_journal_modal").on("click", function(){
        $.ajax({
            type:"POST",
            url:"controller.php",
            data:{
                "action":"add_new_journal",
                "entry_date" : $("#entry_date_journal").val(),
                "account_id" : $("#account_id_juornal").val(),
                "debit" : $("#debit_journal").val(),
                "credit": $("#credit_journal").val(),
                "entry_description": $("#entry_description_journal").val(),
               

            },
            success: function(data){
                // alert(data);
                if(data == "0"){
                    alert("Journal Number is already exist!");
                }else if(data == "1"){
                    $("#add_new_journal_modal").modal("hide");
                    alert("Journal Entry is added successfully!");
                    location.reload();
                }else{
                    $("#add_new_journal_modal").modal("hide");
                    alert("Journal Entry  failed!");
                }
            }
        });
    });
})
</script>