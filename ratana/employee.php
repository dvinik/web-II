<?php include("header.php"); ?>

<div class="row" id="nav_second">
  <div class="col-sm-2">
  </div>
  <div class="col-sm-10" >
    <ul class="nav nav-pills">
      
      <li role="presentation"><a href="employee.php" class="nav_text">Employees</a></li>
      <li role="presentation"><a href="company_information.php" class="nav_text">Company Information</a></li>
    </ul>
    
  </div>
</div>

<div class="row" style="background-color: #f2f2f2">
  <div class="col-sm-6">
  <h2 id="h2">Employee </h2>
  </div>
  <div class="col-sm-6">  
    <div class="right">
      <ul class="nav nav-pills">
        <li role="presentation" class="active"><a href="#">Print</a></li>
        <li role="presentation"><a href="#">Save</a></li>
        <!-- <li role="presentation"><a href="#">Save and New</a></li> -->
      </ul>
    </div>
  </div>
</div>
<br>
      <form action ="" method ="post">
        <button id="creater_suppliers" type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong"> +Add new Employee</button>
      </form>

        
        <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Create New Supplier</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                  <div class="form-group">
                  <label for="lastname"><b>Last Name:</b></label>
                  <input type="text" placeholder="Enter lastname" class="form-control" id="l_name">
              </div>
              <div class="form-group">
                  <label for="firstname"><b>First Name:</b></label>
                  <input type="text" placeholder="Enter firstname" class="form-control" id="F_name">
              </div>
              <div class="form-group">
                  <label for="usr"><b>User Name:</b></label>
                  <input type="text" placeholder="Enter Username" class="form-control" id="username"><span class="hint" id="feedbackusername"></span><br>
              </div>
              <div class="form-group">
                  <label for="pwd"><b>Password:</b></label>
                  <input type="password" placeholder="Enter Password" class="form-control" id="Password"><span class="hint" id="feedbackpassword"></span><br>
              </div>
              <div class="form-group">
                  <label for="cpwd"><b>Confirm Password:</b></label>
                  <input type="password" placeholder="Enter Password" class="form-control" id="cpwd"><span class="hint" id="feedbackConPsw"></span><br>
              </div>
              <div class="form-group">
                  <label for="email"><b>Email:</b></label>
                  <input type="email" placeholder="name@gamil.com" class="form-control" id="email"><span class="hint" id="emialFeedback"></span>
              </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
              </div>
            </div>
          </div>
        </div>
       <br>
    </div>



<?php include("footer.php"); ?>