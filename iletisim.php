<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Başlıksız Belge</title>
</head>

<body>
<?php error_reporting(E_ALL  & ~E_NOTICE); ?>
<?php $prm=$_GET['prm']; ?>

<h1>İletişim safyasına hoşgeldiniz</h1>
Parametre değeri : <?php echo "prm: ".$prm; echo "</br>";  ?>

<a href="index.php?prm=I"> Anasayfa </a> &nbsp;&nbsp;
<a href="hakkimizda.php"> Hkkımızda </a> &nbsp;&nbsp;
<a href="bizeulasin.php"> Bize Ulaşın </a> 


</body>
</html>