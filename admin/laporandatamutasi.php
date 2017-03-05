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
						<ul class="collapsed" id="collapsePelaporan">
							<li><a href="#">Laporan Data Barang</a></li>
							<li><a class="right-here" href="#">Laporan Data Mutasi</a></li>
							<li><a href="#">Laporan Data Pengajuan</a></li>
						</ul>
					</li>
				</ul>
			</div>
			<div class="admin-content col-md-10">
				<div class="page-header">
					<h1>SISTEM INVENTARIS BARANG BPJS</h1>
					<h3>Laporan Data Mutasi</h3>
				</div>
				<form class="form-inline">
					<div class="form-group">
						<label for="inputDateDari">Dari</label>
						<input type="date" class="form-control" id="inputDateDari" placeholder="Tanggal">
					</div>
					<div class="form-group">
						<label for="InputDateHingga">Hingga</label>
						<input type="email" class="form-control" id="InputDateHingga" placeholder="Tanggal">
					</div>
					<button type="submit" class="btn btn-default">Lihat</button>
				</form>
				<br/>
				<div class="panel panel-primary">
					<div class="panel-heading">
						<h3 class="panel-title">Pelaporan Data Mutasi</h3>
					</div>
					<div class="panel-body">
						<table class="table table-hover">
							<tr>
								<th>ID Barang</th>
								<th>Nama Barang</th>
								<th>Kepemilikan</th>
								<th>Jumlah</th>
								<th>Kondisi Baik</th>
								<th>Kondisi Buruk</th>
							</tr>
							<tr>
								<td>BRGXXX</td>
								<td>Pensil</td>
								<td>Unit 1</td>
								<td>25</td>
								<td>23</td>
								<td>2</td>
							</tr>
							<tr>
								<td>BRGXXX</td>
								<td>Pensil</td>
								<td>Unit 1</td>
								<td>25</td>
								<td>23</td>
								<td>2</td>
							</tr>
							<tr>
								<td>BRGXXX</td>
								<td>Pensil</td>
								<td>Unit 1</td>
								<td>25</td>
								<td>23</td>
								<td>2</td>
							</tr>
							<tr>
								<td>BRGXXX</td>
								<td>Pensil</td>
								<td>Unit 1</td>
								<td>25</td>
								<td>23</td>
								<td>2</td>
							</tr>
						</table>
					</div>
				</div>
				<button class="btn btn-primary" type="submit">Cetak Laporan</button>
				<br/><br/>
			</div>
		</div>
	</div>
	
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="../asset/js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../asset/js/bootstrap.min.js"></script>
</body>
</html>