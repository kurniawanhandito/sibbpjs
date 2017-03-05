<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<!-- This (user-scalable=no) tag disables zooming, meaning users are only able to scroll -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	
	<title>SIB | BPJS Kesehatan</title>
	
	<link href="../asset/img/icon.gif" rel="icon" type="image/gif">
	<link href="../asset/css/bootstrap.min.css" rel="stylesheet">
	<link href="../asset/css/style.css" rel="stylesheet">
	
	<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
	<div class="container-fluid">
		<div class="row">
			<nav class="admin-navbar navbar navbar-default navbar-fixed-top">
				<div class="container-fluid">
					<div class="navbar-header">
						<a class="navbar-brand" href="#">ADMIN</a>
					</div>
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						<ul class="nav navbar-nav navbar-right">
							<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-hdd" aria-hidden="true"></span> Konfirmasi Pengajuan <span class="caret"></span></a>
								<ul class="dropdown-menu">
									<li><a href="#">Unit 1<br/>Ditolak</a></li>
									<li role="separator" class="divider"></li>
									<li><a href="#">Unit 2<br/>Belum Disetujui</a></li>
									<li role="separator" class="divider"></li>
									<li><a href="#">Lihat Semua Pengajuan</a></li>
								</ul>
							</li>
							<li>
								<button type="button" class="btn-logout btn btn-default navbar-btn"><span class="glyphicon glyphicon-off" aria-hidden="true"></span> Log Out</button>
							</li>
						</ul>
					</div>
				</div>
			</nav>
		</div>
		<div class="admin-container row">
			<div class="admin-sidebar col-md-2">
				<ul class="nav navbar-nav navbar-left">
					<li class="dropdown">
						<a class="dropdown-toggle" role="button" data-toggle="collapse" href="#collapseKelola" aria-expanded="false" aria-controls="collapseKelola"><span class="glyphicon glyphicon-th-list" aria-hidden="true"></span> Kelola Data Barang <span class="caret"></span></a>
						<ul class="collapse" id="collapseKelola">
							<li><a href="#">Input Data Barang</a></li>
							<li><a href="#">Mutasi Data Barang</a></li>
							<li><a href="#">Evaluasi Data Barang</a></li>
							<li><a href="#">Cari Data Barang</a></li>
						</ul>
					</li>
				</ul>
				<ul class="nav navbar-nav navbar-left">
					<li class="dropdown">
						<a class="dropdown-toggle" role="button" data-toggle="collapse" href="#collapsePelaporan" aria-expanded="false" aria-controls="collapsePelaporan"><span class="glyphicon glyphicon-th-list" aria-hidden="true"></span> Pelaporan <span class="caret"></span></a>
						<ul class="collapse" id="collapsePelaporan">
							<li><a href="#">Laporan Data Barang</a></li>
							<li><a href="#">Laporan Data Mutasi</a></li>
							<li><a href="#">Laporan Data Pengajuan</a></li>
						</ul>
					</li>
				</ul>
			</div>
			<div class="admin-content col-md-10">
				<div class="admin-content-logo">
					
				</div>
			</div>
		</div>
	</div>
	
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="../asset/js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../asset/js/bootstrap.min.js"></script>
</body>
</html>