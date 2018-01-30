<?php include("header.php"); ?>
<?php include_once('config.php');?>

<style type="text/css">
  .delete_customer{
    cursor: pointer;
  }
  .edit_customer{
    cursor: pointer;
  }
</style>

<link rel="stylesheet" type="text/css" href="style.css">
  <div class="row" id="nav_second">
    <div class="col-sm-2"></div>
     <div class="col-sm-10" >
     <ul class="nav nav-pills">
           <li role="presentation"><a href="revenue.php" class="nav_text">Sales Order </a></li>
          <li role="presentation"><a href="customers.php" class="nav_text active" menu="Sale">View Customers</a></li>
         <li role="presentation"><a href="sales_report.php" class="nav_text">Sales Report</a></li>
      </ul>
  </div>
  </div>
  
    <div class="row" style="background-color: #f2f2f2">
      <div class="col-sm-6">
        <h2 id="h2">Customer List</h2>
    </div>
      <div class="col-sm-6">
        <div class="right">
          <ul class="nav nav-pills">
            <li role="presentation" class="active"><a href="#">Print</a></li>
            <!-- <li role="presentation"><a href="#">Save</a></li>
            <li role="presentation"><a href="#">Save and New</a></li> -->
          </ul>
        </div>
  </div>
    <hr>
  <div class="container">
    <div class="jumbotron">
        <div class="row">
          <div class="col-sm-9">
            <span><b><h2>Customers View</h2></b></span>
          </div>
          <div class="col-sm-3">
          <form action ="" method ="post">
        <button id="create_new_customer" type="button" class="btn btn-primary" data-toggle="modal" data-target="#addNewCustomerModal"> +Add Customer</button>
            </form>
          </div>
        </div>
        <br>
        <div class="card mb-3">
            <div class="card-body">
              <div class="table-responsive">
               <table  id="customer_table"  style = "width:100%">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">First Name</th>
                <th scope="col">Last Name</th>
                <th scope="col">E-mail</th>
                <th scope="col">Phone</th>
                <th scope="col">Address</th>
                <th scope="col">City</th>
                <th scope="col">State</th>  
                <th scope="col">Zipcode</th>
                <th scope="col">Country</th>
                <th scope="col">Edit</th>
        <th scope="col">Delete</th>
              </tr>
          </thead>
          <tbody>
            <?php
            $sql = "SELECT * from ".TBL_CUSTOMERS." order by id ASC";
            $retval = mysqli_query($link, $sql);
            $index = 0;
            while($row = mysqli_fetch_array($retval)) {
              echo "<tr>";
              $index++;
              $id = $row["id"];
              $first_name = $row["first_name"];
              $last_name = $row["last_name"];
              $e_mail = $row["e_mail"];
              $phone = $row["phone"];
              $address = $row["address"];
              $city = $row["city"];
              $state = $row["state"];
              $zipcode = $row["zipcode"];
              $country = $row["country"];
              echo "<td>{$index}</td>";
              echo "<td>{$first_name}</td>";
              echo "<td>{$last_name}</td>";
              echo "<td>{$e_mail}</td>";
              echo "<td>{$phone}</td>";
              echo "<td>{$address}</td>";
              echo "<td>{$city}</td>";
              echo "<td>{$state}</td>";
              echo "<td>{$zipcode}</td>";
              echo "<td>{$country}</td>";

              echo "<td><i a_id = '$id' first_name='$first_name' last_name ='$last_name' e_mail = '$e_mail' phone ='$phone' address ='$address' city = '$city' state ='$state' zipcode ='$zipcode' country ='$country' class=' edit_customer fa fa-pencil fa-1x'></i></td>";
              echo "<td><i a_id='$id' first_name='$first_name' last_name ='$last_name' class='delete_customer fa fa-trash' aria-hidden='true'></i> </td>";

              echo "</tr>";
            }
            mysqli_close($link);
            ?>
            
          </tbody>
        </table>
              </div>
            </div>
          
           </div>
    </div>
  </div>
<?php include_once("footer.php");
include_once( 'add_new_customer_modal.php' ); 
include_once( 'edit_customer_modal.php');
        
        ?>

        
        
<script type="text/javascript">
    

    $(function(){
  $(".delete_customer").on('click',function(){
    var first_name = $(this).attr("first_name");
    var last_name = $(this).attr("last_name");
    if(confirm("Are you sure you want to delete customer: '"+ first_name + " "+ last_name+"'?")){
        var del_id= $(this).attr('a_id');
	    // alert(del_id);
	    var $ele = $(this).parent().parent();
	    $.ajax({
	      type:'POST',
	      url:'controller_customer.php',
	      data:{
	        'action':"delete_customer",
	        'del_id':del_id
	      },
	      success: function(data){
	        if(data=="YES"){
	          $ele.fadeOut().remove();
	        }else{
	          alert("can't delete the row");
	        }
	      }
	    });
    }
  });
    
    

  $(".edit_customer").on("click",function(){
    $("#id_modal_edit_customer").val($(this).attr("a_id"))
    $("#first_name_modal_edit_customer").val($(this).attr("first_name"));
    $("#last_name_modal_edit_customer").val($(this).attr("last_name"));
    $("#e_mail_modal_edit_customer").val($(this).attr("e_mail"));
    $("#phone_modal_edit_customer").val($(this).attr("phone"));
    $("#address_modal_edit_customer").val($(this).attr("address"));
    $("#city_modal_edit_customer").val($(this).attr("city"));
    $("#state_modal_edit_customer").val($(this).attr("state"));
    $("#zipcode_modal_edit_customer").val($(this).attr("zipcode"));
    $("#country_modal_edit_customer").val($(this).attr("country"));
    $("#edit_customer_modal").modal("show");
  });

});


</script>