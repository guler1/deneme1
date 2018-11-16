<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Başlıksız Belge</title>
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

<h1>İndex safyasına hoşgeldiniz</h1>
Parametre değeri : <?php echo "prm: ".$prm; echo "</br>"; ?>


<a href="index.php"> Anasayfa </a> &nbsp;&nbsp;
<a href="hakkimizda.php"> Hakkımızda </a> &nbsp;&nbsp;
<a href="iletisim.php?prm=I"> İletişim </a> &nbsp;&nbsp;
<a href="bizeulasin.php"> Bize Ulaşın </a> 

<a href="<?php echo 'iletisim'.'/'.'I' ?>"> İLETİŞİM</a>
<a href="iletisim/I"> İLETİŞİM2</a>
<a href="hakkimizda/"> HAKKIMIZDA</a>
<a href="<?php echo 'aaetalkin/hakkimizda' ?>"> HAKKIMIZDA2</a>
<a href="<?php echo 'hakkimizda' ?>"> Hazkkımızda</a>

</body>
</html>

1.satır eklendi

2.satır eklendi