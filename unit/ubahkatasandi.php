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
						<ul class="collapse" id="collapseKelola">
							<li><a href="#">Input Data Pengajuan</a></li>
							<li><a href="#">Input Data Detail Pengajuan</a></li>
						</ul>
					</li>
				</ul>
			</div>
			<div class="admin-content col-md-10">
				<div class="page-header">
					<h1>SISTEM INVENTARIS BARANG BPJS</h1>
					<h3>Ubah Kata Sandi</h3>
				</div>
				<div class="panel panel-primary">
					<div class="panel-heading">
						<h3 class="panel-title">Form Ubah Kata Sandi</h3>
					</div>
					<div class="panel-body">
						<form>
							<div class="form-group">
								<label for="inputUsername">Username</label>
								<input type="text" class="form-control" id="inputUsername" placeholder="Username" disabled/>
							</div>
							<div class="form-group">
								<label for="inputKataSandiLama">Kata Sandi Lama</label>
								<input type="text" class="form-control" id="inputKataSandiLama" placeholder="Kata Sandi Lama" required/>
							</div>
							<div class="form-group">
								<label for="inputKataSandiBaru">Kata Sandi Baru</label>
								<input type="text" class="form-control" id="inputKataSandiBaru" placeholder="Kata Sandi Baru" required/>
							</div>
							<button type="submit" class="btn btn-default">Ubah</button>
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