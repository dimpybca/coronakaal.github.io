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
    <title>India State's</title>
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
        <a class="nav-link" href="home.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="worldupdate.php">WorldWiseUpdate</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#isw">IndiaStateWiseUpdate</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="indiaDaily.php">IndiaDailyUpdate</a>
      </li>
      
    </ul>
  </div>
</nav>
 </header>


   
<!-- updatee section -->
<section class="info" id="isw">
<div>
  <h1 class="text-uppercase text-center up info mt-5">Covid-19 India StateWise Updates</h1>
</div>
<hr class="w-50 mx-auto">
<div class="table-responsive container-fluid">
<table class="table table-bordered text-center table-striped" id="tbval">
<tr>
<th style="background-color: #FD7272;">LastUpdatedTime</th>
<th style="background-color: #F8EFBA;">State</th>
<th style="background-color: #58B19F;">Confirmed</th>
<th style="background-color: #1B9CFC;">Active</th>
<th style="background-color: #BDC581;">Recovered</th>
<th style="background-color: #CAD3C8; color:red;">Death's</th>
</tr>


<?php

$data=file_get_contents('https://api.covid19india.org/data.json');
$detail=json_decode($data,true);

$totalstate=count($detail['statewise']);
$i=1;
while($i<$totalstate)
{
    ?>
<tr>
<td style="background-color: #FD7272;"><?php echo $detail['statewise'][$i]['lastupdatedtime'] ?></td>
<td style="background-color: #F8EFBA;"><?php echo $detail['statewise'][$i]['state'] ?></td>
<td style="background-color: #58B19F;"><?php echo $detail['statewise'][$i]['confirmed'] ?></td>
<td style="background-color: #1B9CFC;"><?php echo $detail['statewise'][$i]['active'] ?></td>
<td style="background-color: #BDC581;"><?php echo $detail['statewise'][$i]['recovered'] ?></td>
<td style="background-color: #CAD3C8; color:red";><?php echo $detail['statewise'][$i]['deaths'] ?></td>
</tr>

    <?php
    $i++;
}
?> 

</table>
</div>
</section>


<div>
   <footer class="fot_style text-center text-white mt-5">
      <p>Copyright by Dhiraj Thakur</p>
   </footer>
</div>

</body>
</html>

