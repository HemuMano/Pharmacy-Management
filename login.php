<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Pharmacy Management - Login</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
		<script src="bootstrap/js/jquery.min.js"></script>
		<script src="bootstrap/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link rel="shortcut icon" href="images/icon.svg" type="image/x-icon">
    <link rel="stylesheet" href="css/index.css">
    <script src="js/index.js"></script>
    <script src="js/validateForm.js"></script>
    <script>
      var xhttp = new XMLHttpRequest();
      xhttp.onreadystatechange = function() {
        if(xhttp.readyState = 4 && xhttp.status == 200)
          xhttp.responseText;
      };
      xhttp.open("GET", "php/db_connection.php?action=is_logged_in", false);
      xhttp.send();

      //alert(xhttp.responseText);
      if(xhttp.responseText == "")
        window.location.href = "http://localhost/Pharmacy-Management/index.html";
      if(xhttp.responseText == "true")
        window.location.href = "http://localhost/Pharmacy-Management/home.php";

    </script>
  </head>
  <body>
    <div class="container">

      <div id="login-form" class="card m-auto p-2">
        <div class="card-body">
          <form name="login-form" class="login-form" action="home.php" method="post" onsubmit="return validateCredentials();">
            <div class="logo">
        			<img src="images/prof.jpg" class="profile"/>
        			<h1 class="logo-caption"><span class="tweak">L</span>ogin</h1>
        		</div> <!-- logo class -->
            <div class="input-group form-group">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-user text-white"></i></span>
              </div>
              <input name="username" type="text" class="form-control" placeholder="username" onkeyup="validate();" required>
            </div> <!--input-group class -->
            <div class="input-group form-group">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-key text-white"></i></span>
              </div>
              <input name="password" type="password" class="form-control" placeholder="password" onkeyup="validate();" required>
            </div> <!-- input-group class -->
            <div class="form-group">
              <button class="btn btn-default btn-block btn-custom">Login</button>
            </div>
          </form><!-- form close -->

        </div> <!-- cord-body class -->
        <div class="card-footer">
          <div class="text-center">
            <a class="text-light" onclick="displayForgotPasswordForm();" style="cursor: pointer;">Forgot password?</a>
          </div>
        </div> <!-- cord-footer class -->
      </div> <!-- card class -->

      <div id="forgot-password-form" class="card m-auto p-2" style="display: none;">
        <div class="card-body">
          <div name="login-form" class="login-form">
            <div class="logo">
              <img src="images/prof.jpg" class="profile"/>
              <h1 class="logo-caption"><span class="tweak">F</span>orget <span class="tweak">P</span>assword</h1>
            </div> <!-- logo class -->

            <div id="email-number-fields">
              <p class="h6 text-center text-light">Enter email and contact number below to reset username and password<p>
              <div class="input-group form-group">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fas fa-envelope text-white"></i></span>
                </div>
                <input id="email" type="email" class="form-control" placeholder="enter email" required>
              </div> <!--input-group class -->

              <div class="input-group form-group">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fas fa-key text-white"></i></span>
                </div>
                <input id="contact_number" type="number" class="form-control" placeholder="enter contact number" onkeyup="validate();" required>
              </div> <!-- input-group class -->

              <div class="form-group">
                <button class="btn btn-default btn-block btn-custom" onclick="verifyEmailNumber();">Verify</button>
              </div>
            </div>


            <div id="username-password-fields" style="display: none;">
              <div class="input-group form-group">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fas fa-user text-white"></i></span>
                </div>
                <input id="username" type="text" class="form-control" placeholder="enter username" onblur="notNull(this.value, 'username_error');" >
              </div> <!--input-group class -->
              <code class="text-light small font-weight-bold float-right mb-2" id="username_error" style="display: none;"></code>

              <div class="input-group form-group">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fas fa-lock text-white"></i></span>
                </div>
                <input id="password" type="text" class="form-control" placeholder="enter password" onkeyup="validatePassword();" >
              </div> <!-- input-group class -->
              <code class="text-light small font-weight-bold float-right mb-2" id="password_error" style="display: none;"></code>

              <div class="input-group form-group">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fas fa-key text-white"></i></span>
                </div>
                <input id="confirm_password" type="password" class="form-control" placeholder="confirm password" onkeyup="validatePassword();" >
              </div> <!-- input-group class -->
              <code class="text-light small font-weight-bold float-right mb-2" id="confirm_password_error" style="display: none;"></code>
              <div class="form-group">
                <button class="btn btn-default btn-block btn-custom" onclick="updateUsernamePassword();">Reset Password</button>
              </div>
            </div>
          </div><!-- form close -->

        </div> <!-- cord-body class -->
        <div class="card-footer">
          <div class="text-center">
            <a class="text-light" onclick="displayLoginForm();" style="cursor: pointer;">Login here</a>
          </div>
        </div> <!-- cord-footer class -->
      </div> <!-- card class -->

    </div> <!-- container class -->
  </body>
</html>
