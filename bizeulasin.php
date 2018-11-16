<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Başlıksız Belge</title>
<base href="http://localhost/aaetalkina" /> 
</head>

<body>
<?php 

error_reporting(E_ALL  & ~E_NOTICE); 
$prm=$_GET['prm']; 

function seo_yap($str){
	$preg = array('Ç', 'Ş', 'Ğ', 'Ü', 'İ', 'Ö', 'ç', 'ş', 'ğ', 'ü', 'ö', 'ı', '+', '#', '.');
	$match = array('c', 's', 'g', 'u', 'i', 'o', 'c', 's', 'g', 'u', 'o', 'i', 'plus', 'sharp', '');
	$perma = strtolower(str_replace($preg, $match, $str));
	$perma = preg_replace("@[^A-Za-z0-9\-_\.\+]@i", ' ', $perma);
	$perma = trim(preg_replace('/\s+/', ' ', $perma));
	$perma = str_replace(' ', '-', $perma);
	return $perma;
}
 
?>

<h1>Bize ulaşın safyasına hoşgeldiniz</h1>
Parametre değeri : <?php echo "prm: ".$prm; echo "</br>";  ?>


<a href="index.php?prm=B"> Anasayfa </a> &nbsp;&nbsp;
<a href="hakkimizda.php"> Hakkımızda </a> &nbsp;&nbsp;
<a href="bizeulasin.php"> Bize Ulaşın </a> 


</body>
</html>