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
<body onload="fetch()">
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
        <a class="nav-link" href="#cwu">WorldWiseUpdate</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="indiaState.php">IndiaStateWiseUpdate</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="indiaDaily.php">IndiaDailyUpdate</a>
      </li>
      
    </ul>
  </div>
</nav>
 </header>



<!-- updatee section -->
<section class="info" id="cwu">
<div>
  <h1 class="text-uppercase text-center up info">Covid-19 WorldWise Updates</h1>
</div>
<hr class="w-25 mx-auto">
<div class="table-responsive container-fluid">
<table class="table table-bordered text-center table-striped" id="tbval">
<tr>
<th>Country</th>
<th>Total Conformed</th>
<th>Total Recovered</th>
<th>Total Deaths</th>
<th>New Conformed</th>
<th>New Recovered</th>
<th>New Deaths</th>
</tr>
</table>
</div>
</section>

<script>
   function fetch(){
       $.get("https://api.covid19api.com/summary",
       function(data){
        //  console.log("data['Countries'].length");
         var tbval=document.getElementById("tbval");
         for(var i=1;i<(data['Countries'].length);i++)
         {
           var x=tbval.insertRow();

             x.insertCell(0);
             tbval.rows[i].cells[0].innerHTML=data['Countries'][i]['Country'];
             tbval.rows[i].cells[0].style.background='#e17055';
             tbval.rows[i].cells[0].style.color='#dfe6e9';
             
             x.insertCell(1);
             tbval.rows[i].cells[1].innerHTML=data['Countries'][i]['TotalConfirmed'];
             tbval.rows[i].cells[1].style.background="#0984e3";

             x.insertCell(2);
             tbval.rows[i].cells[2].innerHTML=data['Countries'][i]['TotalRecovered'];
             tbval.rows[i].cells[2].style.background='#81ecec';

             x.insertCell(3);
             tbval.rows[i].cells[3].innerHTML=data['Countries'][i]['TotalDeaths'];
             tbval.rows[i].cells[3].style.background='#74b9ff';

             x.insertCell(4);
             tbval.rows[i].cells[4].innerHTML=data['Countries'][i]['NewConfirmed'];
             tbval.rows[i].cells[4].style.background='#81ecec';

             x.insertCell(5);
             tbval.rows[i].cells[5].innerHTML=data['Countries'][i]['NewRecovered'];
             tbval.rows[i].cells[5].style.background='#81ecec';

             x.insertCell(6);
             tbval.rows[i].cells[6].innerHTML=data['Countries'][i]['NewDeaths'];
             tbval.rows[i].cells[6].style.background='#81ecec';

         }
       }
       );
   }

  </script>

<div style="background-color: indianred; color:white; margin-bottom:0;">
   <footer class="fot_style text-center text-white mt-5">
      <p style="margin-bottom:0;">Copyright by Dhiraj Thakur</p>
   </footer>
   </div>
</body>
</html>