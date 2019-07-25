<!DOCTYPE html>
<html lang="en">
<head>

<title>Dashboard | Buat Surat Izin Sekolah Generator</title>
  <meta charset="utf-8">
    <link rel="icon" type="image/png" href="img/icon.png">
	<meta charset="UTF-8">
	
  <meta name="description" content="Buat Surat Izin Sekolah Kamu disini dijamin Cepat dan Mudah">
  <meta name="keywords" content="Bikin SUrat,surat,surat izin,make surat izin,surat sekolah,contoh surat sekolah,surat sekolah generator,surat izin generator,surat izin tidak masuk sekolah,surat sekolah,surat tdk masuk,surat izin tdk sekolah">
  <meta name="author" content="Ahmad Ansori">
  
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <style>
  body {
    font: 20px Montserrat, sans-serif;
    line-height: 1.8;
    color: black;
  }
  img[alt*="www.000webhost.com"] {
display: none;
}
  p {font-size: 16px;}
  .margin {margin-bottom: 45px;}
  .bg-1 { 
    background-color: #1abc9c; /* Green */
    color: #ffffff;
  }
  img[alt*="www.000webhost.com"] {
display: none;
}
  .bg-2 { 
    background-color: #474e5d; /* Dark Blue */
    color: #ffffff;
  }
  .bg-3 { 
    background-color: #ffffff; /* White */
    color: #555555;
  }
  .bg-4 { 
    background-color: #2f2f2f; /* Black Gray */
    color: #fff;
  }
  .container-fluid {
    padding-top: 70px;
    padding-bottom: 70px;
  }
  .navbar {
    padding-top: 15px;
    padding-bottom: 15px;
    border: 0;
    border-radius: 0;
    margin-bottom: 0;
    font-size: 12px;
    letter-spacing: 5px;
  }
  .navbar-nav  li a:hover {
    color: #1abc9c !important;
  }
  </style>
</head>
<body>



<!-- Navbar -->
<nav class="navbar navbar-default">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">Dashboard</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="tutorial.php">Tutorial</a></li>
        <li><a href="about.php">Tentang Saya</a></li>
        <li><a href="https://paypa.me/aantech.php">Donasi</a></li>
      </ul>
    </div>
  </div>
</nav>


<center>
<?php
$tanggal= mktime(date("m"),date("d"),date("Y"));
echo "Tanggal : <b>".date("d-M-Y", $tanggal)."</b> ";
date_default_timezone_set('Asia/Jakarta');
$jam=date("H:i:s");
echo "| Pukul : <b>". $jam." "."</b>";
$a = date ("H");
if (($a>=6) && ($a<=11)){
echo "<b>, Selamat Pagi :)</b>";
}
else if(($a>11) && ($a<=15))
{
echo ", Selamat Pagi !!";}
else if (($a>15) && ($a<=18)){
echo ", Selamat Malam !!";}
else { echo ", <b> Selamat Malam :) </b>";}
?> 
<h1 >Selamat Datang <?php echo $_SESSION['username']?>! </h1>
<a href="surat" class="btn btn-primary" >Buat Surat Izin v.1</a><br>
<a href="surat/index2.php" class="btn btn-warning" >Buat Surat Izin v.2</a><br>
<a href="about.php" class="btn btn-success">Tentang Saya</a><br>
<a href="logout.php" class="btn btn-info">Keluar</a><br>
<img src="img/2.gif" class="img-rounded" height="300px">

<center>






<!-- Footer -->
<footer class="container-fluid bg-4 text-center">
  <p>Aplikasi Web dibuat oleh <a href="http://www.ahmadansori.xyz">@ahmadansori_id</a></p> 
</footer>

</body>
</html>
