<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <script src="assets/js/jquery-3.3.1.min.js"></script>



    <link rel="stylesheet" href="assets/css/customUI.css">
    <title>Please Share</title>


    <script>
      $(document).ready(function() {
        $("#reg").click(function() {
          $("#login-form").css('display','none');
          $("#registration").css('display','block');
        });
      });
      // $(document).ready(function() {
      //   $("#reg-button").click(function() {
      //     var regName=document.getElementById("reg-name").value;
      //     var regEmail=document.getElementById("reg-email").value;
      //     var regPassword=document.getElementById("reg-password").value;
      //     var confPassword=document.getElementById("conf-password").value;
      //     if(regPassword!=confPassword) {
      //       alert("please confirm password...");
      //       location.reload();
      //     }
      //     else {
      //
      //       var regData={
      //         "name":""+regName,
      //         "email":""+regEmail,
      //         "password":""+regPassword
      //       }
      //       console.log(regData);
      //       alert("password confirmed");
      //       window.location.replace("server/registration.php");
      //     }
      //   });
      // });
    </script>
  </head>
  <body>
    <div class="main">
      <div class="login-form" id="login-form">
        <form class="login" action="server/login.php" method="post">
          <input type="email" name="email" placeholder="enter email" id="login-email"><br><br>
          <input type="password" name="password" placeholder="enter password" id="login-password"><br><br>
          <!-- <button type="button" name="login-button" class="btn-primary">click to login</button> -->
          <input type="submit" name="submit" value="login">
        </form><br>
        <a href="admin/admin_login.html"> <button type="button" name="admin" id="admin">login as admin</button></a>
        <button type="button" name="reg" id="reg">register </button>
      </div>
      <div class="registration" id="registration">

        <form class="reg-form" action="server/registration.php" method="post">
          <input type="text" name="reg-name" placeholder="enter name" id="reg-name"><br><br>
          <input type="email" name="reg-email" placeholder="enter your email" id="reg-email"><br><br>
          <input type="password" name="reg-password" placeholder="enter password" id="reg-password"><br><br>

          <input type="submit" name="submit" value="Register">
        </form>
        <!-- <button type="button" name="reg-button" id="reg-button">click to register</button> -->
      </div>
    </div>
  </body>
</html>
