<?php include("header.php"); ?>

<!DOCTYPE html>
<html>
<head>
  <title>Login</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <style>
        #login_form{
            width: 500px;
            height: 750px;
            margin: auto; /* align center */
            /*border: 3px solid green;*/
            border: 3px solid #f1f1f1;
            padding: 10px;
        }
        #imgcontainer {
            text-align: center;
            margin: 24px 0 12px 0;
        }
        #avatar {
            width: 30%;
            border-radius: 50%;
        }
        
        #page_title{
            width: 500px;
            margin: auto;
            color: green;
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
        .hint{
          color: red;
        }

  </style>

<br>

</head>
<body>
    <div id="page_title"><h1><b>Create Employee</b></h1></div>
  <form id="login_form">  
      <div id="imgcontainer">
          <img src="images/login_Logo.png" alt="Avatar" id="avatar">
        </div>
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

    <!-- <input type="checkbox" checked="checked"> <b>Remember me</b> <br> -->
    <button type="submit" id="btnLogin"><b>Create User</b></button>
      <div id="forget_password">
          <!-- <span class="psw"><a href="#">Forgot password?</a></span> -->
      </div>

        <script>
        
    document.getElementById("username").onblur = function(){
      var elmessage = document.getElementById("feedbackusername");
      if(this.value.length< 8){
        elmessage.textContent = "Username must be 8 characters or more";
      } else{
        elmessage.textContent ="";
      }
    };
    document.getElementById("Password").onblur = function(){
      var elPswMsg = document.getElementById("feedbackpassword");
      if(this.value.length< 8){
        elPswMsg.textContent = "Username must be 8 characters or more";
      } else{
        elPwMsg.textContent ="";
      }
    };
    document.getElementById("cpwd").onblur = function(){
      // create varieable for get old password
      var password = document.getElementById("Password").value;
      if(this.value != password){
        document.getElementById("feedbackConPsw").textContent ="Password and confirm Pasword is not match";
      }else{
        document.getElementById("feedbackConPsw").textContent ="Password Match"
      }
    };
    document.getElementById("email").onblur = function(){
       var reg = /^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,4})$/;
      if(reg.test(this.value)){
        document.getElementById("emialFeedback").textContent ="it is a valid email address";
      }else{
        document.getElementById("emialFeedback").textContent ="it is a invalid email address";
      }
    };
    
    
  </script>
           
    
  </form>
</body>
</html>

<?php include("footer.php"); ?>