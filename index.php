<?php
include('koneksi.php')
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Home | laundryKu </title>
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>
<body>
    <nav>
        <ul>
            <li> <a herf = "index.php"> home </a></li>
            <li><a href="layanan.php"> layanan</a></li>
            <li><a href="Login.php"> abaout me </a></li>
            <li><a href="Login.php"> daftar/masuk </a></li>
        </ul>
    </nav>
    <div class="background">
        <!-- <img src="image/backgraund.jpg" alt="gambar"> -->
        <h1> laundry ku <br/> cepat dan bersih </h1>
        <div class="jenis-cucian">
        <div class = "laundry-baju">
            <img src="image/baju_kotor.png" alt="baju kotor">
            <h4> Laundry baju 5k/kg </h4>
            <p>laundry di laundryKu di jamin <br/> bersih dan tidak merusak pakaian</p>
        </div>
<!--                       KONTEN                       -->
        <div class="laundry-handuk">
            <img src="image/handuk.png" alt="handuk">
            <h4> Laundry handuk 10k/kg </h4>
            <p>laundry di laundryKu di jamin bersih <br/> membuat handuk tidak bau dan  tidak merusak tekstur handuk</p>
        </div>
        <div class="laundry-karpet">
            <img src="image/karpet.png" alt="karpet">
            <h4> Laundry karpet 20k/kg </h4>
            <p>laundry di laundryKu di jamin <br/> bersih hingga ke sela-sela dan tidak merusak bulu bulu</p>
        </div>
        <div class="laundry-selimut">
            <img src="image/selimut.png" alt="selimut">
            <h4> Laundry selimut 25k/kg </h4>
            <p>laundry di laundryKu di jamin <br/> bersih dan wangi</p>
        </div>
    </div>
    </div>
   


</body>
</html>
