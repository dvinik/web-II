<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<style>
        #login_form{
            width: 500px;
            height: 490px;
            margin: auto; /* align center */
            /*border: 3px solid green;*/
            border: 3px solid #f1f1f1;
            padding: 10px;
             position:absolute;
            top:0;
            right:0;
            bottom:0;
            left:0;
        }
        #imgcontainer {
            text-align: center;
            margin: 24px 0 12px 0;
        }
        #Bakery {
            width: 40%;
            border-radius: 50%;
        }
        
        #page_title{
             width: 500px;
            margin: auto;
            color: green;
            margin-top:120px;
        }
        #btnLogin{
            background-color: #4CAF50;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            cursor: pointer;
            width: 100%;
        }
        #forget_password{
            float: right;
        }

	</style>

</head>
<body>
    <div id="page_title"><b>Login to Bakery's Accounting System</b></div>
	<form id="login_form" action="controllers/login.php" method="post">  
    	<div id="imgcontainer">
        	<img src="images/Bakery Logo.png" alt="Bakery" id="Bakery">
      	</div>
        <div class="form-group">
          <label for="usr">User Name:</label>
          <input type="text" placeholder="Enter Username" class="form-control" id="usr" name="username">
        </div>
        <div class="form-group">
          <label for="pwd">Password:</label>
          <input type="password" placeholder="Enter Password" class="form-control" id="pwd" name="password">
        </div>
        <input type="checkbox" checked="checked"> Remember me <br>

        <button type="submit" id="btnLogin">Login</button>
    	<div id="forget_password">
    	    <span class="psw"><a href="#">Forgot password?</a></span>
	    </div>
        
        <!-- <a href="Create_User.html">Create User</a> -->
           
	</form>
</body>
</html>