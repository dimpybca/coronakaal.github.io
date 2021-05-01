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
    <title>Sign Up</title>
    <?php include 'link/links.php'; ?>
    <?php include 'css/style1.php'; ?>
</head>
<body>
<section id="contectid">
 <div>
   <h2 class="text-center mt-3">Create Account</h2> 
   <p class="text-center">Get started with your free account</p>
 </div>
 <hr class="w-25 mx-auto">
 <div class="container">
   <div class="row">
     <div class="col-lg-4 offset-lg-4 col-12">
     <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post">
     <div class="form-group">
    <label>Name</label>
    <input type="text" class="form-control" name="name" placeholder="enter your name" autocomplete="FALSE" required>
  </div>
  <div class="form-group">
    <label>Email</label>
    <input type="email" class="form-control" name="email" placeholder="name@example.com" autocomplete="FALSE" required>
  </div>
  <div class="form-group">
    <label>Phone</label>
    <input type="number" class="form-control" name="phone" placeholder="your phone number" autocomplete="FALSE" required>
  </div>
  <div class="form-group">
    <label>Password</label>
    <input type="password" class="form-control" name="password" placeholder="Enter password"  required>
  </div>
  <div class="form-group">
    <label>Conform Password</label>
    <input type="password" class="form-control" name="conpassword" placeholder="Conform password" require>
  </div>

  <button type="submit" class="btn btn-primary" name="submit">Create Account</button>

</form>
<p>Have an account? <a href="login.php">Login</a></p>
     </div>
   </div>
 </div>
</section>

<!-- *******ffooter section******** -->



<?php
include 'dbcon.php';
if(isset($_POST['submit']))
{
    $name=mysqli_real_escape_string($con,$_POST['name']);
    $email=mysqli_real_escape_string($con,$_POST['email']);
    $phone=mysqli_real_escape_string($con,$_POST['phone']);
    $pass=mysqli_real_escape_string($con,$_POST['password']);
    $conpass=mysqli_real_escape_string($con,$_POST['conpassword']);

     //password incrupeted
    //$p=password_hash($pass,PASSWORD_BCRYPT);
    $cp=password_hash($conpass,PASSWORD_BCRYPT);
     

    //email check
    $emailcheck="select * from regester where email='$email' ";
    $queary=mysqli_query($con,$emailcheck);
    $emailcount=mysqli_num_rows($queary);

    if($emailcount>0)
    {
        echo "This email allready regesterd";
    }
    else{
        if($pass === $conpass)
        {
            $insert="insert into regester(name,email,phone,password,conpassword) values('$name','$email','$phone','$pass','$cp')";
             $insertquary=mysqli_query($con,$insert);


            if($insertquary)
            {
            ?>
            <script>
            alert("Your Regerestation is Successful");
            </script>
            <?php
              header('location:login.php');
            }
            else
            {
            ?>
           <script>
            alert("Regerestation Failed");
            </script> 
           
            <?php
            }

        }
             else{
                 echo "Password not matched";
             }
        }
}
?>

<html>
<body>
<div style="background-color: indianred; color:white; margin-bottom:0;">
   <footer class="fot_style text-center text-white mt-5">
      <p style="margin-bottom:0;">Copyright by Dhiraj Thakur</p>
   </footer>
   </div>
</body>
</html>