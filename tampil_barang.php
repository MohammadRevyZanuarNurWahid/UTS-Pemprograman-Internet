<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Dashboard - SB Admin</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="index.html">Mohammad Revy Zanuar Nur Wahid</a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                <div class="input-group">
                    <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
                    <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
                </div>
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#!">Settings</a></li>
                        <li><a class="dropdown-item" href="#!">Activity Log</a></li>
                        <li><hr class="dropdown-divider" /></li>
                        <li><a class="dropdown-item" href="#!">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
                    <div class="sb-sidenav-footer">
                        <div class="small">Data Barang</div>
                        20510009
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">TAMBAH DATA</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">ISI DATA DIBAWAH INI</li>
                        </ol>
	<h3>Data Barang</h3>
	<table class="table table-hover table-striped">
		<thead>
			<tr>
				<th>NO</th>
				<th>NAMA</th>
				<th>TANGGAL PRODUKSI</th>
				<th>TEMPAT PRODUKSI</th>
				<th>JENIS BARAJNG</th>
				<th>AKSI</th>
			</tr>
		</thead>
		<tbody>
<?php
			include "koneksi.php";
			$qry_barang=mysqli_query($conn,"SELECT * FROM barang JOIN jenis_barang ON jenis_barang.kode_barang = barang.kode_barang");
			$no=0;
			while ($data_barang=mysqli_fetch_array($qry_barang))
			{ 
				$no++;
			?>
			<tr>
					<td><?=$no?>
					</td>
					<td><?=$data_barang['nama']?>
					</td>
					<td><?=$data_barang['tanggal_produksi']?>
					</td>
					<td><?=$data_barang['tempat_produksi']?>
					</td>
					<td><?=$data_barang['kode_barang']?>	
					</td>
					<td><a href="ubah_barang.php?id_barang=<?=$data_barang['id_barang']?>" class="btn btn-success">Ubah</a> | <a href="hapus_barang.php?id_barang=<?=$data_barang['id_barang']?>" onclick="return confirm('Apakah anda yakin akan mengahapus data ini?')" class="btn btn-danger">Hapus</a>
					</td>
				</tr>
			<?php
			}
			?>
			</tbody>
	</table>
</main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright by &copy; Mohammad Revy Zanuar Nur Wahid</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
        <script src="js/bootstrap.bundle.min.js" type="text/css" ></script>
        <script src="js/bootstrap.bundle.js" type="text/css"></script>
        <script type="js/bootstrap" type="text/css"></script>
    </body>
</html>
