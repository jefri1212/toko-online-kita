<?php 
	session_start();
	if($_SESSION['status_login'] != true){
		echo '<script>window.location="login.php"</script>';
	}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Toko Online Jamu Manza</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">
</head>
<body>
	<!-- header -->
	<header>
		<div class="container">
			<h1><a href="dashboard.php">Toko Online Jamu Manza</a></h1>
			<ul>
				<li><a href="dashboard.php">Dashboard</a></li>
				<li><a href="profil.php">Profil</a></li>
				<li><a href="data-kategori.php">Data Kategori</a></li>
				<li><a href="data-produk.php">Data Produk</a></li>
				<li><a href="keluar.php">Keluar</a></li>
			</ul>
		</div>
	</header>

	<!-- content -->
	<div class="section">
		<div class="container">
			<h3>Dashboard</h3>
			<div class="box">
				<h4>Selamat Datang <?php echo $_SESSION['a_global']->admin_name ?> di Toko Online Jamu Manza</h4>
				
			</div>
			<div class="box">
			<h4> Warung Jamu Manja adalah UMKM yang bergerak di bidang jamu tradisional dengan bahan-bahan herbal alami dan tentunya premium!
				 Minum jamu secara rutin dipercaya membantu menjaga kesehatan tubuh dan juga menyegarkan loh! 
				 Jamu Manza dibuat tanpa pengawet, siap minum. Cocok untuk konsumsi harian. Chill & Heal dengan Jamu Manza!</h4>
			</div>
		</div>
	</div>

</body>
</html>