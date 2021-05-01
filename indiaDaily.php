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
    <title>India Daily Corona Update</title>
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
        <a class="nav-link" href="indiaState.php">IndiaStateWiseUpdate</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#idu">IndiaDailyUpdate</a>
      </li>
      
    </ul>
  </div>
</nav>
 </header>


   
<!-- updatee section -->
<section class="info" id="idu">
<div>
  <h1 class="text-uppercase text-center up info mt-5">Covid-19 India Daily Updates</h1>
</div>
<hr class="w-50 mx-auto">
<div class="table-responsive container-fluid">
<table class="table table-bordered text-center table-striped" id="tbval">

<?php

$data=file_get_contents('https://api.covid19india.org/data.json');
$detail=json_decode($data,true);

$dailyreport=count($detail['cases_time_series']);
$i=337;
while($i<$dailyreport)
{
    ?>

  <tr ><th colspan="4" class="text-left " style="background-color: #D6A2E8;">Date & Months</th></tr>  
  <tr><td colspan="4" class="text-left"><?php echo $detail['cases_time_series'][$i]['date'] ?></td></tr>
 <tr>
<th style="background-color: #FD7272;">Date</th>
<th style="background-color: #F8EFBA;">Today's Conformed Case</th>
<th style="background-color: #58B19F;">Today's Recorved Case</th>
<th style="background-color: #1B9CFC;">Today's Death</th>
</tr>

<tr>
<td style="background-color: #FD7272;"><?php echo $detail['cases_time_series'][$i]['dateymd'] ?></td>
<td style="background-color: #F8EFBA;"><?php echo $detail['cases_time_series'][$i]['dailyconfirmed'] ?></td>
<td style="background-color: #58B19F;"><?php echo $detail['cases_time_series'][$i]['dailyrecovered'] ?></td>
<td style="background-color: #1B9CFC;"><?php echo $detail['cases_time_series'][$i]['dailydeceased'] ?></td>
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
