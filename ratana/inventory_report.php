<?php include("header.php"); ?>
<link rel="stylesheet" type="text/css" href="style.css">
	<div class="row" id="nav_second">
		<div class="col-sm-2"></div>
		<div class="col-sm-10" >
		<ul class="nav nav-pills">
		  <li role="presentation"><a href="inventory.php" class="nav_text">Inventory</a></li>
		  <li role="presentation"><a href="inventory_report.php" class="nav_text active" menu="Inventory">Inventory Report</a></li>
		  <!-- <li role="presentation"><a href="#" class="nav_text">Credit Notes</a></li> -->
		</ul>
	</div>
	</div>
	<div class="row" align="center" style="background-color: #f2f2f2">
		<h3 id="h3">Inventory Report</h3></div>
		<hr>
	<div class="container">
		<div class="row">
			<div class="col-sm-4">
			 <span><b>Start Date:</b></span><input type="date" name="date">
			</div>
			<div class="col-sm-4">
				<span><b>End Date:</b></span>
				<input type="date" name="date">
			</div>
			<div class="col-sm-">
				<button type="button" class="btn btn-info">
      			<span class="glyphicon glyphicon-search"></span> Search
    			</button>
			</div>
		</div>
    </div>
		<br>		

	<!-- Example DataTables Card-->
	<br>
    <div class="card mb-3">
        <div class="card-header"> &nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-table"></i> <b style="color: green;">Inventory List</b></div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>ProductID</th>
                  <th>ProductName</th>
                  <th>Unite Sales Price</th>
                  <th>Unite In Stock</th>
                  <th>Unite Sold</th>
                  <!-- <th>On Coming Item</th> -->
                </tr>
              </thead>
              <tfoot>
                <tr>
                  <th>ProductID</th>
                  <th>ProductName</th>
                  <th>Unite Sales Price</th>
                  <th>Unite In Stock</th>
                  <th>Unite Sold</th>
                  <!-- <th>On Coming Item</th> -->
                </tr>
              </tfoot>
              <tbody>
                <tr>
                  <td>123</td>
                  <td>Pancake</td>
                  <td>Baht 30</td>
                  <td>3000</td>
                  <td>500</td>
                </tr>
                <tr>
                  <td>123</td>
                  <td>Pancake</td>
                  <td>Baht 30</td>
                  <td>3000</td>
                  <td>500</td>
                </tr>
                <tr>
                  <td>123</td>
                  <td>Pancake</td>
                  <td>Baht 30</td>
                  <td>3000</td>
                  <td>500</td>
                </tr>
                <tr>
                  <td>123</td>
                  <td>Pancake</td>
                  <td>Baht 30</td>
                  <td>3000</td>
                  <td>500</td>
                </tr>
                <tr>
                  <td>123</td>
                  <td>Pancake</td>
                  <td>Baht 30</td>
                  <td>3000</td>
                  <td>500</td>
                </tr>
                <tr>
                  <td>123</td>
                  <td>Pancake</td>
                  <td>Baht 30</td>
                  <td>3000</td>
                  <td>500</td>
                </tr>
                <tr>
                  <td>123</td>
                  <td>Pancake</td>
                  <td>Baht 30</td>
                  <td>3000</td>
                  <td>500</td>
                </tr>
                <tr>
                  <td>123</td>
                  <td>Pancake</td>
                  <td>Baht 30</td>
                  <td>3000</td>
                  <td>500</td>
                </tr>
                <tr>
                  <td>123</td>
                  <td>Pancake</td>
                  <td>Baht 30</td>
                  <td>3000</td>
                  <td>500</td>
                </tr>
                <tr>
                  <td>123</td>
                  <td>Pancake</td>
                  <td>Baht 30</td>
                  <td>3000</td>
                  <td>500</td>
                </tr>
                <tr>
                  <td>123</td>
                  <td>Pancake</td>
                  <td>Baht 30</td>
                  <td>3000</td>
                  <td>500</td>
                </tr>
                <tr>
                  <td>123</td>
                  <td>Pancake</td>
                  <td>Baht 30</td>
                  <td>3000</td>
                  <td>500</td>
                </tr>
                <tr>
                  <td>123</td>
                  <td>Pancake</td>
                  <td>Baht 30</td>
                  <td>3000</td>
                  <td>500</td>
                </tr>
                <tr>
                  <td>123</td>
                  <td>Pancake</td>
                  <td>Baht 30</td>
                  <td>3000</td>
                  <td>500</td>
                </tr>
                <tr>
                  <td>123</td>
                  <td>Pancake</td>
                  <td>Baht 30</td>
                  <td>3000</td>
                  <td>500</td>
                </tr>
                <tr>
                  <td>123</td>
                  <td>Pancake</td>
                  <td>Baht 30</td>
                  <td>3000</td>
                  <td>500</td>
                </tr>
                <tr>
                  <td>123</td>
                  <td>Pancake</td>
                  <td>Baht 30</td>
                  <td>3000</td>
                  <td>500</td>
                </tr>
                <tr>
                  <td>123</td>
                  <td>Pancake</td>
                  <td>Baht 30</td>
                  <td>3000</td>
                  <td>500</td>
                </tr>
                <tr>
                  <td>123</td>
                  <td>Pancake</td>
                  <td>Baht 30</td>
                  <td>3000</td>
                  <td>500</td>
                </tr>
                <tr>
                  <td>123</td>
                  <td>Pancake</td>
                  <td>Baht 30</td>
                  <td>3000</td>
                  <td>500</td>
                </tr>
                <tr>
                  <td>123</td>
                  <td>Pancake</td>
                  <td>Baht 30</td>
                  <td>3000</td>
                  <td>500</td>
                </tr>
                
                
              </tbody>
            </table>
          </div>
        </div>
        <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
    </div>
    <div class="row">
      <div class="col-sm-6"> 
      </div>
      <div>
        <span><b>Total inventory amount:(The total of inventory's stock)</b> </span>
      </div>
    </div>


<?php include("footer.php"); ?>