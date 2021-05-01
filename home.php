<?php
session_start();
if(!isset($_SESSION['username']))
{
  header('location:login.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Corona Kaal</title>
    <?php include 'link/links.php'; ?>
    <?php include 'css/style.php'; ?>
</head>
<body>
<!-- navbar copy from bootstrap -->
<header>   
<nav class="navbar navbar-expand-lg nav_style p-3">
  <h3 class="pl-5 navbar-brand logo">Corona Kaal</h3>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto pr-3">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#about">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="worldupdate.php">CoronaWorldWiseUpdate</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="indiaState.php">IndiaStateWiseUpdate</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="indiaDaily.php">IndiaDailyUpdate</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#symmptoms">Symptoms</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#preventionid">Prevention</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#contectid">Contact</a>
      </li>
      
    </ul>
  </div>
</nav>
 </header>
<!-- navbar end -->

 <!-- *********welcome and logout******* -->
 <div class="">
   <div  class="row">
   <div class="col-lg-2 col-md-2 col-2">
   <hr style="background-color:yellow; height: 1px;">
   <p style="font-size:0.9em; color:gray;">Developed By:Dhiraj Thakur</p>
   <hr style="background-color:red; height: 1px;">
   </div>
   <div class="col-lg-9 col-md-9 col-9">
     <h1 class="d-flex justify-content-center align-items-center text-success mt-5 mt-0" style="font-size: 3em;">Hello <?php echo $_SESSION['username']?> be safe & stay at home</h1>
   </div>
   <div class="col-lg-1 col-md-1 col-1 mt-5 mt-0">
     <a href="#" style="font-size: 0.8em;" class="">Send Report</a><br>
     <a href="logout.php"><span class="btn btn-danger">Logout</span></a>
   </div>
   </div>
 </div>

<section class="main-hader">
<div class="row w-100 h-100">
<div class="col-lg-5 col-md-5 col-12">
<div class="leftside w-100 h-100 d-flex justify-content-center align-items-center">
<img src="images/covid2.png" width="250" height="250" class="img-cicl1">
</div>
</div>
<div class="col-lg-7 col-md-7 col-12">
<div class="rightside w-100 h-100 d-flex justify-content-center align-items-center">
<h2 style="font-size: 2.3em;">Let's Stay Safe and Fight Tougether Against Cor<span class="co-rotate"><img src="images/covid3.png" width="50px" height="50px"></span>na Virus</h2>
</div>
</div>
</div>
</section>

<!-- ******About Section******* -->
<section class="about_section mb-5">
<div class="container-fluid" id="about">
  <div>
    <h1 class="text-center">About Covid-19</h1>
  </div>
  <hr class="w-25 mx-auto">
  <div class="row mt-5 mb-5 aboutsection">
    <div class="col-lg-5 col-md-5 col-12 ml-5">
      <img src="images/covid4.jpg" class="img-fluid ">
    </div>
    <div class="col-lg-5 col-md-5 col-12 ml-5 mt-2">
      <h2>What is Covid-19 (Corona Virus)</h2>
      <p>Coronavirus disease (COVID-19) is an infectious disease caused by a newly discovered coronavirus.
      </p>
      <p>Most people who fall sick with COVID-19 will experience mild to moderate symptoms and recover without special treatment.
      </p>
    </div>
</div>
</div>
</section>
<!-- ********************symptoms section************ -->
<section class="symp" id="symmptoms">
<div>
    <h1 class="text-center">Coronavirus Symptoms</h1>
  </div>
  <hr class="w-25 mx-auto">
<div class="container">
   <div class="row">
   <div class="col-lg-4 col-md-4 col-12 mt-4">
      <figure class="text-center">
         <img src="images\icons8-coughing-64.png" width="100" height="100" class="img-fluid">
         <figcaption>Cough</figcaption>
      </figure>
   </div>
   <div class="col-lg-4 col-md-4 col-12 mt-4">
      <figure class="text-center">
         <img src="images\icons8-runny-nose-100.png" width="100" height="100" class="img-fluid">
         <figcaption>Runny Nose</figcaption>
      </figure>
   </div>
   <div class="col-lg-4 col-md-4 col-12 mt-4">
      <figure class="text-center">
         <img src="images\icons8-fever-30.png" width="100" height="100" class="img-fluid">
         <figcaption>Fever</figcaption>
      </figure>
   </div>
   <div class="col-lg-4 col-md-4 col-12 mt-4">
      <figure class="text-center">
         <img src="images\coldface.jpg" width="100" height="100" class="img-fluid">
         <figcaption>Cold</figcaption>
      </figure>
   </div>
   <div class="col-lg-4 col-md-4 col-12 mt-4">
      <figure class="text-center">
         <img src="images\icons8-person-tired-48.png" width="100" height="100" class="img-fluid">
         <figcaption>Tiredness</figcaption>
      </figure>
   </div>
   <div class="col-lg-4 col-md-4 col-12 mt-4">
      <figure class="text-center">
         <img src="images\icons8-wear-breathing-apparatus-48.png" width="100" height="100" class="img-fluid">
         <figcaption>Difficulty breathing(severe cases)</figcaption>
      </figure>
   </div>
   </div>
</div>
</section>

<!-- ****************prevension section************ -->
 <section class="about_section mt-5" id="preventionid">
 <div>
    <h2 class="text-center">6 Steps Prevention Against Coronavirus</h2>
  </div>
  <hr class="w-50 mx-auto">
  <div class="container">
    <div class="row">
        <div class="col-lg-4 col-md-4 col-12 mt-5">
            <div class="row">
              <div class="col-lg-4 col-md-4 col-12">
                  <figure class="text-center">
                    <img src="images\icons8-wash-your-hands-48.png" width="80" height="80" class="img-fluid">
                  </figure>
              </div>
              <div class="col-lg-8 col-md-8 col-12">
                  <p>Washe your hands requraly  for 20 second.with shop and water or alcohal based hand sanitzer.<p>
              </div>
            </div>
        </div>

        <div class="col-lg-4 col-md-4 col-12 mt-5">
            <div class="row">
              <div class="col-lg-4 col-md-4 col-12">
                  <figure class="text-center">
                    <img src="images\icons8-protection-mask-50.png" width="80" height="80" class="img-fluid">
                  </figure>
              </div>
              <div class="col-lg-8 col-md-8 col-12">
                  <p>Always wearing mask.or cover you nose by any tissue or fixed elbow when you cough or sneeze.<p>
              </div>
            </div>
        </div>

        <div class="col-lg-4 col-md-4 col-12 mt-5">
            <div class="row">
              <div class="col-lg-4 col-md-4 col-12">
                  <figure class="text-center">
                    <img src="images\social-distancing-5132443_1280.png" width="80" height="80" class="img-fluid">
                  </figure>
              </div>
              <div class="col-lg-8 col-md-8 col-12">
                  <p>Avoid close contect.mentain at let's 2m distance from other people. <p>
              </div>
            </div>
        </div>

        <div class="col-lg-4 col-md-4 col-12 mt-5">
            <div class="row">
              <div class="col-lg-4 col-md-4 col-12">
                  <figure class="text-center">
                    <img src="images\icons8-home-64.png" width="80" height="80" class="img-fluid">
                  </figure>
              </div>
              <div class="col-lg-8 col-md-8 col-12">
                  <p>Stay at home is the best way of prevention.so don't go out side for unnessey works.avoid to go any where<p>
              </div>
            </div>
        </div>

        <div class="col-lg-4 col-md-4 col-12 mt-5">
            <div class="row">
              <div class="col-lg-4 col-md-4 col-12">
                  <figure class="text-center">
                    <img src="images\newschannel.jpg" width="80" height="80" class="img-fluid">
                  </figure>
              </div>
              <div class="col-lg-8 col-md-8 col-12">
                  <p>Stay informated about covid-19 updates.<p>
              </div>
            </div>
        </div>

        <div class="col-lg-4 col-md-4 col-12 mt-5">
            <div class="row">
              <div class="col-lg-4 col-md-4 col-12">
                  <figure class="text-center">
                    <img src="images\icons8-thermometer-lady-50.png" width="80" height="80" class="img-fluid">
                  </figure>
              </div>
              <div class="col-lg-8 col-md-8 col-12">
                  <p>If you have fever,cought,seek or difficulty in breathing please contect doctor immedetly.<p>
              </div>
            </div>
        </div>
    </div>
  </div>
 </section>

<section id="contectid">
 <div>
   <h1 class="text-center mt-5 mb-3">Contact Us ASAP</h1> 
 </div>
 <hr class="w-25 mx-auto">
 <div class="container">
   <div class="row">
     <div class="col-lg-8 offset-lg-2 col-12">
     <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post">
     <div class="form-group">
    <label>Name</label>
    <input type="text" class="form-control" name="name" placeholder="enter your name" autocomplete="off" required>
  </div>
  <div class="form-group">
    <label>Email</label>
    <input type="email" class="form-control" name="email" placeholder="name@example.com" autocomplete="off" required>
  </div>
  <div class="form-group">
    <label>Phone</label>
    <input type="number" class="form-control" name="phone" placeholder="your phone number" autocomplete="off" required>
  </div>
  <div class="form-group">
    <label>Select Symptoms</label><br>
    <div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" name="sym[]" value="Cold">
  <label class="form-check-label">Cold</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" name="sym[]" value="Fever">
  <label class="form-check-label">Fever</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" name="sym[]" value="Difficulty in Breath">
  <label class="form-check-label">Difficulty in Breath</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" name="sym[]" value="Feeling Week">
  <label class="form-check-label">Feeling Weak</label>
</div>
  </div>
  <div class="form-group">
    <label>Massage</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="massage"></textarea>
  </div>
  <button type="submit" class="btn btn-primary" name="submit">Submit</button>

</form>
     </div>
   </div>
 </div>
</section>

<!-- 
<script tyle="text/javascript">
  $('.count').counterUp({
    delay:10,
    time:3000
  })
  </script> -->

 

<?php
include 'dbcon.php';
if(isset($_POST['submit'])){
  $name=$_POST['name'];
  $email=$_POST['email'];
  $phone=$_POST['phone'];
  $symp=$_POST['sym'];
  $massage=$_POST['massage'];
  $id=1;
  $chk='';
  foreach($symp as $chk1)
    $chk.=$chk1.",";

    $insertquery="insert into corona(name,email,phone,symp,massage) values ('$name','$email','$phone','$chk','$massage')";
    $query=mysqli_query($con,$insertquery);

if($query)
  {
      ?>
      <script>
          alert("We receved your responced.We will contect you soon.Thank you......");
      </script>
      <?php
  }
        else
        {
            ?>
            <script>
                alert("Something wrong.Please feel it again");
            </script>
            <?php
         }
}

?>


<!-- *******ffooter section******** -->
<div>
   <footer class="fot_style text-center text-white mt-5">
      <p>Copyright by Dhiraj Thakur</p>
   </footer>
</div>

</body>
</html>