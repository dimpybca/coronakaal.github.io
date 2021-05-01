<?php
session_start();
if(isset($_SESSION['username']))
{
  header('location:home.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <?php include 'link/links.php'; ?>
    <?php include 'css/style1.php'; ?>
</head>
<body>
<section id="contectid">
 <div>
   <h1 class="text-center mt-5">Login Account</h1> 
   <p class="text-center">Please login into it</p>
 </div>
 <hr class="w-25 mx-auto mb-3">
 <div class="container">
   <div class="row">
     <div class="col-lg-4 offset-lg-4 col-12">
     <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post">
  <div class="form-group">
    <label>Email</label>
    <input type="email" class="form-control" name="email" placeholder="name@example.com" autocomplete="FALSE" required>
  </div>
  <div class="form-group">
    <label>Password</label>
    <input type="password" class="form-control" name="password" placeholder="Enter password"  required>
  </div>

  <button type="submit" class="btn btn-primary" name="submit">login</button>

</form>
<p>Don't have an account? <a href="index.php">SignUp</a></p>
     </div>
   </div>
 </div>
</section>
</body>
</html>


<?php
include 'dbcon.php';
  if(isset($_POST['submit'])){
      $email=$_POST['email'];
      $password=$_POST['password'];
      $emailcheck="select * from regester where email='$email'";
      $quary=mysqli_query($con,$emailcheck);
      $count=mysqli_num_rows($quary);
      if($count)
      {
        $datafatch=mysqli_fetch_assoc($quary);
        $pass=$datafatch['password'];
        $_SESSION['username']=$datafatch['name'];
        //$passcheck=password_verify($password,$pass);
        if($password === $pass)
        {
           header('location:home.php');
        }
        else{
          echo "invalid password";
        }
      }
      else{
        echo "email dosn't existed";
      }
  }
?>
<br>
<br>
<br>
<br>
<br>
<br>
<div style="background-color: indianred; color:white; margin-bottom:0;">
   <footer class="fot_style text-center text-white mt-5">
      <p style="margin-bottom:0;">Copyright by Dhiraj Thakur</p>
   </footer>
   </div>
</body>
</html>