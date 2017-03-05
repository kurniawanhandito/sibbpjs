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
						<a class="navbar-brand" href="#">UNIT 1</a>
					</div>
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						<ul class="nav navbar-nav navbar-right">
							<li>
								<button type="button" class="btn-logout btn btn-default navbar-btn"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Ubah Kata Sandi</button>
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
						<a class="dropdown-toggle" role="button" data-toggle="collapse" href="#collapseKelola" aria-expanded="false" aria-controls="collapseKelola"><span class="glyphicon glyphicon-th-list" aria-hidden="true"></span> Pengajuan <span class="caret"></span></a>
						<ul class="collapsed" id="collapseKelola">
							<li><a href="#">Input Data Pengajuan</a></li>
							<li><a class="right-here" href="#">Input Data Detail Pengajuan</a></li>
						</ul>
					</li>
				</ul>
			</div>
			<div class="admin-content col-md-10">
				<div class="page-header">
					<h1>SISTEM INVENTARIS BARANG BPJS</h1>
					<h3>Input Data Detail Pengajuan</h3>
				</div>
				<div class="panel panel-primary">
					<div class="panel-heading">
						<h3 class="panel-title">Form Input Data Detail Pengajuan</h3>
					</div>
					<div class="panel-body">
						<form>
							<div class="form-group">
								<label for="idPengajuan">ID Pengajuan</label>
								<select class="form-control">
									<option>1</option>
								</select>
								<br/>
								<input type="text" class="form-control" id="idPengajuan" placeholder="ID Pengajuan" disabled/>
							</div>
							<div class="form-group">
								<label for="status">Status</label>
								<input type="text" class="form-control" id="status" placeholder="Status pengajuan sekarang" disabled/>
							</div>
							<div class="form-group">
								<label for="oleh">Oleh</label>
								<input type="text" class="form-control" id="oleh" placeholder="Diajukan oleh" disabled/>
							</div>
							<div class="alert alert-warning" role="alert">Tentukan status pengajuan terbaru.</div>
							<div class="form-group">
								<label for="namaBarang">Nama Barang</label>
								<input type="text" class="form-control" id="status" placeholder="Nama Barang" required/>
							</div>
							<div class="form-group">
								<label for="jumlah">Jumlah</label>
								<input type="number" class="form-control" id="jumlah" placeholder="Jumlah" required/>
							</div>
							<div class="alert alert-danger" role="alert">Masukkan kata sandi pengguna.</div>
							<div class="form-group">
								<label for="authentifikasiPengguna">Authentifikasi Pengguna</label>
								<input type="text" class="form-control" id="authentifikasiPengguna" placeholder="Kata Sandi Pengguna" required/>
							</div>
							<button type="submit" class="btn btn-default">Input</button>
							<button type="button" class="btn btn-danger">Reset</button>
						</form>
					</div>
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