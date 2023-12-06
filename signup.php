<script>
   if (window.history.replaceState) {
     window.history.replaceState(null, null, window.location.href);
   }
 
 </script>
 
 <?php
 
 require "registerationsystem.php";
 
 
 // Check for form submissions and perform the corresponding action
 if (isset($_POST["signup"])) {
   signup();
 }
 
 ?>

<!DOCTYPE html>
<!-- Created By CodingNepal -->
<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title>Login Form Design | CodeLab</title>
      <link rel="stylesheet" href="css/login.css">
   </head>
   <body>
      <div class="wrapper">
         <div class="title">
            Signup Form
         </div>
         <form action="#" method="post">
            <div class="field">
               <input type="text" required name="email">
               <label>Email Address</label>
            </div>
            <div class="field">
               <input type="password" required name="password">
               <label>Password</label>
            </div>
            <div class="content">
               <div class="checkbox">
                  <input type="checkbox" id="remember-me">
                  <label for="remember-me">Remember me</label>
               </div>
               <div class="pass-link">
                  <a href="#">Forgot password?</a>
               </div>
            </div>
            <div class="field">
               <input type="submit" value="signup" name="signup">
            </div>
            <div class="signup-link">
               Not a member? <a href="login.php">Already have an account ?</a>
            </div>
         </form>
      </div>
   </body>
</html>