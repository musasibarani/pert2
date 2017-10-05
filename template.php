<?php
	// filename: template.php
?>

<!DOCTYPE html>
<html>
	<head>
		<title></title>
		<style>
			#header{background: blue;}
			#sidebar{background: red;}
			#footer{background: orange;}
		</style>
	</head>
	<body>
		<div id="header"><h3>Sistem Informasi Kampus</h3></div>
		<div id="sidebar">
			<a href="template.php?page=mahasiswa">Mahasiswa</a>&nbsp|
			<a href="template.php?page=dosen">Dosen</a>
		</div>
		<div id="content">
			Ini adalah konten
			<?php include($_GET['page'] . ".php"); ?>
		</div>
		<div id="footer">Footer</div>
	</body>
</html>