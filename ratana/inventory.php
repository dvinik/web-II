<?php include("header.php"); ?>
<link rel="stylesheet" type="text/css" href="style.css">
<div class="row" id="nav_second">
	<div class="col-sm-2">
	</div>
	<div class="col-sm-10" >
		<ul class="nav nav-pills">
		  
		  <li role="presentation"><a href="#" class="nav_text">Inventory</a></li>
		  <li role="presentation"><a href="#" class="nav_text">Inventory Invoices</a></li>
		  <li role="presentation"><a href="#" class="nav_text">Credit Notes</a></li>
		
		</ul>
		
	</div>
	</div>
		<div class="row" align="center" style="background-color: #f2f2f2">
		<h3 id="h3">Inventory Form</h3></div>
		<hr>
	<div class="container">
		<div class="row">
			<div class="col-sm-2">
				<span><b>ProductID:</b></span>
			</div>
			<div class="col-sm-3">
				<input type="text" name="productID">
			</div>
			<div class="col-sm-2">
				<span><b>Unite In Stock:</b></span>
			</div>
			<div class="col-sm-3">
				<input type="text" name="uniteStock">
			</div>
		
		</div>
		<br>		
		<div class="row">
			<div class="col-sm-2">
				<span><b>Product Name:</b></span>
			</div>
			<div class="col-sm-3">
				<input type="text" name="productName">
			</div>
			<div class="col-sm-2">
				<span><b>Unite Sold:</b></span>
			</div>
			<div class="col-sm-3">
				<input type="text" name="uniteSold">
			</div>
		
		</div>
		<br>		
		<div class="row">
			<div class="col-sm-2">
				<span><b>Product Decribtion:</b></span>
			</div>
			<div class="col-sm-3">
				<textarea name="comment" form="usrform">Enter text here...</textarea>
			</div>
			<div class="col-sm-2">
				<span><b>Total Inventory:</b></span>
			</div>
			<div class="col-sm-3">
				<input type="text" name="uniteStock">
			</div>
		
		</div>
		<br>		
		<div class="row">
		</div>
		<div class="row">
			<div class="col-sm-2">
				<span><b>Unite Price:</b></span>
			</div>
			<div class="col-sm-3">
				<input type="text" name="productID">
			</div>
			<div class="col-sm-2">
				<span><b></b></span>	
			</div>
			<div class="col-sm-3">
				<button type="button" class="btn btn-primary">Save&Transfer</button>
			</div>
		</div>
		

		
	</div>


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
                  <th>Edit/Delete</th>
                </tr>
              </thead>
              <tfoot>
                <tr>
                  <th>ProductID</th>
                  <th>ProductName</th>
                  <th>Unite Sales Price</th>
                  <th>Unite In Stock</th>
                  <th>Unite Sold</th>
                  <th>Edit/Delete</th>
                </tr>
              </tfoot>
              <tbody>
                <tr>
                  <td>123</td>
                  <td>Pancake</td>
                  <td>Baht 30</td>
                  <td>3000</td>
                  <td>500</td>
                  <td>
                  	 <i class="fa fa-pencil pencil" aria-hidden="true"></i>
		    		 <i class="fa fa-trash-o delete" aria-hidden="true"></i>
                  </td>
                </tr>
                <tr>
                  <td>123</td>
                  <td>Pancake</td>
                  <td>Baht 30</td>
                  <td>3000</td>
                  <td>500</td>
                  <td>
                  	 <i class="fa fa-pencil pencil" aria-hidden="true"></i>
		    		 <i class="fa fa-trash-o delete" aria-hidden="true"></i>
                  </td>
                </tr>
                <tr>
                  <td>123</td>
                  <td>Pancake</td>
                  <td>Baht 30</td>
                  <td>3000</td>
                  <td>500</td>
                  <td>
                  	 <i class="fa fa-pencil pencil" aria-hidden="true"></i>
		  			 <i class="fa fa-trash-o delete" aria-hidden="true"></i>
                  </td>
                </tr>
                <tr>
                 <td>123</td>
                  <td>Pancake</td>
                  <td>Baht 30</td>
                  <td>3000</td>
                  <td>500</td>
                  <td>
                  	 <i class="fa fa-pencil pencil" aria-hidden="true"></i>
		   			 <i class="fa fa-trash-o delete" aria-hidden="true"></i>
                  </td>
                </tr>
                <tr>
                 <td>123</td>
                  <td>Pancake</td>
                  <td>Baht 30</td>
                  <td>3000</td>
                  <td>500</td>
                  <td>
                  	 <i class="fa fa-pencil pencil" aria-hidden="true"></i>
		   			 <i class="fa fa-trash-o delete" aria-hidden="true"></i>
                  </td>
                </tr>
                <tr>
                  <td>123</td>
                  <td>Pancake</td>
                  <td>Baht 30</td>
                  <td>3000</td>
                  <td>500</td>
                  <td>
                  	 <i class="fa fa-pencil pencil" aria-hidden="true"></i>
		  			 <i class="fa fa-trash-o delete" aria-hidden="true"></i>
                  </td>
                </tr>
                <tr>
                  <td>123</td>
                  <td>Pancake</td>
                  <td>Baht 30</td>
                  <td>3000</td>
                  <td>500</td>
                  <td></td>
                </tr>
                <tr>
                 <td>123</td>
                  <td>Pancake</td>
                  <td>Baht 30</td>
                  <td>3000</td>
                  <td>500</td>
                  <td></td>
                </tr>
                <tr>
                  <td>123</td>
                  <td>Pancake</td>
                  <td>Baht 30</td>
                  <td>3000</td>
                  <td>500</td>
                  <td></td>
                </tr>
                <tr>
                  <td>123</td>
                  <td>Pancake</td>
                  <td>Baht 30</td>
                  <td>3000</td>
                  <td>500</td>
                  <td></td>
                </tr>
                <tr>
                 <td>123</td>
                  <td>Pancake</td>
                  <td>Baht 30</td>
                  <td>3000</td>
                  <td>500</td>
                  <td></td>
                </tr>
                <tr>
                  <td>123</td>
                  <td>Pancake</td>
                  <td>Baht 30</td>
                  <td>3000</td>
                  <td>500</td>
                  <td></td>
                </tr>
                <tr>
               	  <td>123</td>
                  <td>Pancake</td>
                  <td>Baht 30</td>
                  <td>3000</td>
                  <td>500</td>
                  <td></td>
                </tr>
                <tr>
                  <td>123</td>
                  <td>Pancake</td>
                  <td>Baht 30</td>
                  <td>3000</td>
                  <td>500</td>
                  <td></td>
                </tr>
                <tr>
                  <td>123</td>
                  <td>Pancake</td>
                  <td>Baht 30</td>
                  <td>3000</td>
                  <td>500</td>
                  <td></td>
                </tr>
                <tr>
                  <td>123</td>
                  <td>Pancake</td>
                  <td>Baht 30</td>
                  <td>3000</td>
                  <td>500</td>
                  <td></td>
                </tr>
                <tr>
                  <td>123</td>
                  <td>Pancake</td>
                  <td>Baht 30</td>
                  <td>3000</td>
                  <td>500</td>
                  <td></td>
                </tr>
                <tr>
                  <td>123</td>
                  <td>Pancake</td>
                  <td>Baht 30</td>
                  <td>3000</td>
                  <td>500</td>
                  <td></td>
                </tr>
                <tr>
                  <td>123</td>
                  <td>Pancake</td>
                  <td>Baht 30</td>
                  <td>3000</td>
                  <td>500</td>
                  <td></td>
                </tr>
                <tr>
                  <td>123</td>
                  <td>Pancake</td>
                  <td>Baht 30</td>
                  <td>3000</td>
                  <td>500</td>
                  <td></td>
                </tr>
                <tr>
                  <td>123</td>
                  <td>Pancake</td>
                  <td>Baht 30</td>
                  <td>3000</td>
                  <td>500</td>
                  <td></td>
                </tr>
                <tr>
                  <td>123</td>
                  <td>Pancake</td>
                  <td>Baht 30</td>
                  <td>3000</td>
                  <td>500</td>
                  <td></td>
                </tr>
                <tr>
                  <td>123</td>
                  <td>Pancake</td>
                  <td>Baht 30</td>
                  <td>3000</td>
                  <td>500</td>
                  <td></td>
                </tr>
                <tr>
                  <td>123</td>
                  <td>Pancake</td>
                  <td>Baht 30</td>
                  <td>3000</td>
                  <td>500</td>
                  <td></td>
                </tr>
                <tr>
                  <td>123</td>
                  <td>Pancake</td>
                  <td>Baht 30</td>
                  <td>3000</td>
                  <td>500</td>
                  <td></td>
                </tr>
                <tr>
                  <td>123</td>
                  <td>Pancake</td>
                  <td>Baht 30</td>
                  <td>3000</td>
                  <td>500</td>
                  <td></td>
                </tr>
                <tr>
                  <td>123</td>
                  <td>Pancake</td>
                  <td>Baht 30</td>
                  <td>3000</td>
                  <td>500</td>
                  <td></td>
                </tr>
                <tr>
                  <td>123</td>
                  <td>Pancake</td>
                  <td>Baht 30</td>
                  <td>3000</td>
                  <td>500</td>
                  <td></td>
                </tr>
                <tr>
                  <td>123</td>
                  <td>Pancake</td>
                  <td>Baht 30</td>
                  <td>3000</td>
                  <td>500</td>
                  <td></td>
                </tr>
                <tr>
                  <td>123</td>
                  <td>Pancake</td>
                  <td>Baht 30</td>
                  <td>3000</td>
                  <td>500</td>
                  <td></td>
                </tr>
                <tr>
                  <td>123</td>
                  <td>Pancake</td>
                  <td>Baht 30</td>
                  <td>3000</td>
                  <td>500</td>
                  <td></td>
                </tr>
                <tr>
                  <td>123</td>
                  <td>Pancake</td>
                  <td>Baht 30</td>
                  <td>3000</td>
                  <td>500</td>
                  <td></td>
                </tr>
                <tr>
                  <td>123</td>
                  <td>Pancake</td>
                  <td>Baht 30</td>
                  <td>3000</td>
                  <td>500</td>
                  <td></td>
                </tr>
                <tr>
                  <td>123</td>
                  <td>Pancake</td>
                  <td>Baht 30</td>
                  <td>3000</td>
                  <td>500</td>
                  <td></td>
                </tr>
                <tr>
                  <td>123</td>
                  <td>Pancake</td>
                  <td>Baht 30</td>
                  <td>3000</td>
                  <td>500</td>
                  <td></td>
                </tr>
                <tr>
                  <td>123</td>
                  <td>Pancake</td>
                  <td>Baht 30</td>
                  <td>3000</td>
                  <td>500</td>
                  <td></td>
                </tr>
                <tr>
                  <td>123</td>
                  <td>Pancake</td>
                  <td>Baht 30</td>
                  <td>3000</td>
                  <td>500</td>
                  <td></td>
                </tr>
                <tr>
                  <td>123</td>
                  <td>Pancake</td>
                  <td>Baht 30</td>
                  <td>3000</td>
                  <td>500</td>
                  <td></td>
                </tr>
                <tr>
                  <td>123</td>
                  <td>Pancake</td>
                  <td>Baht 30</td>
                  <td>3000</td>
                  <td>500</td>
                  <td></td>
                </tr>
                <tr>
                  <td>123</td>
                  <td>Pancake</td>
                  <td>Baht 30</td>
                  <td>3000</td>
                  <td>500</td>
                  <td></td>
                </tr>
                <tr>
                  <td>123</td>
                  <td>Pancake</td>
                  <td>Baht 30</td>
                  <td>3000</td>
                  <td>500</td>
                  <td></td>
                </tr>
                <tr>
                  <td>123</td>
                  <td>Pancake</td>
                  <td>Baht 30</td>
                  <td>3000</td>
                  <td>500</td>
                  <td></td>
                </tr>
                <tr>
                  <td>123</td>
                  <td>Pancake</td>
                  <td>Baht 30</td>
                  <td>3000</td>
                  <td>500</td>
                  <td></td>
                </tr>
                
              </tbody>
            </table>
          </div>
        </div>
        <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
    </div>
    

<?php include("footer.php"); ?>