<?php
	$host = "ec2-35-172-246-19.compute-1.amazonaws.com";
	$user = "tdoeiyphusxrcl";
	$pass = "fb10dae443fb786f27a8207d5663edf71d96da8b750020eb76f3875ab12aafca";
	$port = "5432";
	$dbname = "deqi9ft2oro2ho";
	$conn = pg_connect("host=".$host." port=".$port." dbname=".$dbname." user=".$user." password=".$pass) or die("Gagal");
?>
