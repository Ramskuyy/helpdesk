<?php
include "koneksi.php";
session_start();
if($_SESSION['username']=='')
{
    header("location:login.php");
}else{
	

		
}



if (isset ($_POST['ubah'])){
  
    $sql_ubah = "UPDATE laporan SET
		status='".$_POST['status']."'
        WHERE id='".$_POST['id']."'";
    $query_ubah = mysqli_query($koneksi, $sql_ubah);

    if ($query_ubah) {
        echo "<script>alert('Data Berhasil di Ubah') </script>";
	   echo "<script>window.location.href = \"validasi.php\" </script>";
	   
      }else{
     	echo "<script>alert('Gagal Mengubah Data') </script>";
    }
    }


?>

  <head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <title>Sistem Pengaduan HELPDESK Fakultas Ilmu Komputer</title>
    <!-- CSS files -->
    <link href="./dist/css/tabler.min.css?1684106062" rel="stylesheet"/>
    <link href="./dist/css/tabler-flags.min.css?1684106062" rel="stylesheet"/>
    <link href="./dist/css/tabler-payments.min.css?1684106062" rel="stylesheet"/>
    <link href="./dist/css/tabler-vendors.min.css?1684106062" rel="stylesheet"/>
    <link href="./dist/css/demo.min.css?1684106062" rel="stylesheet"/>
    <style>
      @import url('https://rsms.me/inter/inter.css');
      :root {
      	--tblr-font-sans-serif: 'Inter Var', -apple-system, BlinkMacSystemFont, San Francisco, Segoe UI, Roboto, Helvetica Neue, sans-serif;
      }
      body {
      	font-feature-settings: "cv03", "cv04", "cv11";
      }
    </style>
  </head>
  <body >
    <script src="./dist/js/demo-theme.min.js?1684106062"></script>
    <div class="page">
      <!-- Sidebar -->
      <aside class="navbar navbar-vertical navbar-expand-lg" data-bs-theme="dark">
        <div class="container-fluid">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#sidebar-menu" aria-controls="sidebar-menu" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <h1 class="navbar-brand navbar-brand-autodark">
            
          </h1>
          <div class="navbar-nav flex-row d-lg-none">
           
             <div class="nav-item dropdown">
              <a href="#" class="nav-link d-flex lh-1 text-reset p-0" data-bs-toggle="dropdown" aria-label="Open user menu">
                <span class="avatar avatar-sm" style="background-image: url(./static/avatars/user.png)"></span>
                <div class="d-none d-xl-block ps-2">
                  <div>Admin</div>
                  <div class="mt-1 small text-muted">Admin</div>
                </div>
              </a>
          <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                <a href="./profile.html" class="dropdown-item">Profile</a>
				   <a href="./logout.php" class="dropdown-item">Logout</a>
            </div>
            </div>
          </div>
          <div class="collapse navbar-collapse" id="sidebar-menu">
            <ul class="navbar-nav pt-lg-3">
              <li class="nav-item">
                <a class="nav-link" href="./halaman_admin.php" >
                  <span class="nav-link-icon d-md-none d-lg-inline-block">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M5 12l-2 0l9 -9l9 9l-2 0" /><path d="M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7" /><path d="M9 21v-6a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v6" /></svg>
                  </span>
                  <span class="nav-link-title">
                    Home
                  </span>
                </a>
              </li>
			   <li class="nav-item">
                <a class="nav-link" href="./mahasiswa.php" >
                  <span class="nav-link-icon d-md-none d-lg-inline-block">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M9 11l3 3l8 -8" /><path d="M20 12v6a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2h9" /></svg>
                  </span>
                  <span class="nav-link-title">
                    Mahasiswa
                  </span>
                </a>
              </li>
			   <li class="nav-item">
                <a class="nav-link" href="./daftar_pengaduan.php" >
                  <span class="nav-link-icon d-md-none d-lg-inline-block">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M9 11l3 3l8 -8" /><path d="M20 12v6a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2h9" /></svg>
                  </span>
                  <span class="nav-link-title">
                    Daftar Pengaduan
                  </span>
                </a>
              </li>
			  <li class="nav-item">
                <a class="nav-link" href="./validasi.php" >
                  <span class="nav-link-icon d-md-none d-lg-inline-block">
				   <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-checklist" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
				<path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
				<path d="M9.615 20h-2.615a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2h8a2 2 0 0 1 2 2v8"></path>
				<path d="M14 19l2 2l4 -4"></path>
				<path d="M9 8h4"></path>
				<path d="M9 12h2"></path></svg>
                  </span>
                  <span class="nav-link-title">
                    Validasi
                  </span>
                </a>
              </li>
			   <li class="nav-item">
                <a class="nav-link" href="./rekap_pengaduan.php" >
                  <span class="nav-link-icon d-md-none d-lg-inline-block">
            
			<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-printer" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
   <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
   <path d="M17 17h2a2 2 0 0 0 2 -2v-4a2 2 0 0 0 -2 -2h-14a2 2 0 0 0 -2 2v4a2 2 0 0 0 2 2h2"></path>
   <path d="M17 9v-4a2 2 0 0 0 -2 -2h-6a2 2 0 0 0 -2 2v4"></path>
   <path d="M7 13m0 2a2 2 0 0 1 2 -2h6a2 2 0 0 1 2 2v4a2 2 0 0 1 -2 2h-6a2 2 0 0 1 -2 -2z"></path>
</svg>
                  </span>
                  <span class="nav-link-title">
                    Rekap Pengaduan
                  </span>
                </a>
              </li>

             
             
            </ul>
          </div>
        </div>
      </aside>
      <!-- Navbar -->
      <header class="navbar navbar-expand-md d-none d-lg-flex d-print-none" >
        <div class="container-xl">
         
          <div class="navbar-nav flex-row order-md-last">
            <div class="d-none d-md-flex">
             
             
            
            </div>
             <div class="nav-item dropdown">
              <a href="#" class="nav-link d-flex lh-1 text-reset p-0" data-bs-toggle="dropdown" aria-label="Open user menu">
                <span class="avatar avatar-sm" style="background-image: url(./static/avatars/user.png)"></span>
                <div class="d-none d-xl-block ps-2">
                  <div>Admin</div>
                  <div class="mt-1 small text-muted">Admin</div>
                </div>
              </a>
              <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
               
				   <a href="./logout_admin.php" class="dropdown-item">Logout</a>
            </div>
				
              </ul>
            
            </div>
          </div>
          <div class="collapse navbar-collapse" id="navbar-menu">
            <div>
             
            </div>
          </div>
        </div>
      </header>
      <div class="page-wrapper">
        <!-- Page header -->
      
        <!-- Page body -->
        <div class="page-body">
          <div class="container-xl">
			
			            <div class="row row-cards">
              <div class="col-12">
                <form class="card" method="get" action="daftar_pengaduan.php">
                  <div class="card-header">
                    <h4 class="card-title">Laporan Pengaduan</h4>
                  </div>	
							
   		  			  
                  <div class="card-body">
				  <div class="form-group">
								<input type="text" class="form-control" placeholder="Cari Disini" name="cari" >
							</div>
							<br>
							 <input type="submit" value="Cari" class="btn btn-primary">
							
					</form>
				 
				  <?php 
if(isset($_GET['cari'])){
	$cari = $_GET['cari'];
	echo "<b><font color='white'>Hasil pencarian : ".$cari."</font></b>";
}
?>
                    <div class="row">
					
					
		                  <div class="table-responsive">
                    <table class="table card-table table-vcenter text-nowrap datatable">
                      <thead>
                        <tr>
                          <br>
                         
                          <th>No</th>
                          <th>Tanggal</th>
                          <th>Lokasi</th>
						  <th>Fasilitas</th>
                          <th>Laporan</th>
                          <th>Status</th>
                          <th>Aksi</th>
                        </tr>
                      </thead>
                      <tbody>
					  
					  <?php 
	if(isset($_GET['cari'])){
		$cari = $_GET['cari'];
		$result = mysqli_query($koneksi,"select * from laporan where lokasi like '%".$cari."%' and laporan.status='Diterima' or laporan.status='Dikerjakan' or laporan.status='Selesai'");				
	}else{
					
						$query = "SELECT * from laporan where laporan.status='Diterima' or laporan.status='Dikerjakan' or laporan.status='Selesai'";
						$result	= mysqli_query($koneksi, $query);
	}
						$i = 0;
						while ($row = mysqli_fetch_array($result)) {
						$i++;
						?> 
							<tr>
                                                <td><?php echo $i ?></td>
                                                <td><?php $tgl = $row['tanggal'];
												echo date("d-M-Y", strtotime($tgl)) ?></td>
												
												  <td><?php echo $row['lokasi'] ?></td>
												   <td><?php echo $row['fasilitas'] ?></td>
												    <td><?php echo $row['laporan'] ?></td>
													
													  <td><?php echo $row['status'] ?></td>
                                                <td>
												<input type="hidden" name="id" value="<?php echo $row['id'] ?>">
												
												<form method="post" action="daftar_pengaduan.php">
											<input type="hidden" name="id" value="<?php echo $row['id'] ?>">
									<button class="btn btn-primary" name="detail" type="button" data-bs-toggle="modal" data-bs-target="#detail<?php echo $row['id'] ?>">
									Detail</button>	
									
									</form>		
												
												
												
												

									</td>
									
									
				
									
								
									
									
					   </tr>
					   
					  
<div class="modal modal-blur fade" id="detail<?php echo $row['id'] ?>" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Pengaduan</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
		    <form action="daftar_pengaduan.php" method="post">
           <div class="form-group">
              <div class="row">
              <label class="col-sm-3 control-label text-right">Nama<span class="text-red"></span></label> :
              <div class="col-sm-8"><?php echo $row['nama'] ?></div>
              </div>
            </div>
			<div class="form-group">
              <div class="row">
              <label class="col-sm-3 control-label text-right">Tanggal<span class="text-red"></span></label> :
              <div class="col-sm-8"><?php $tgl = $row['tanggal'];
												echo date("d-M-Y", strtotime($tgl)) ?></div>
              </div>
            </div>
			<div class="form-group">
              <div class="row">
              <label class="col-sm-3 control-label text-right">Lokasi<span class="text-red"></span></label> :
              <div class="col-sm-8"><?php echo $row['lokasi'] ?></div>
              </div>
            </div>
			<div class="form-group">
              <div class="row">
              <label class="col-sm-3 control-label text-right">Fasilitas<span class="text-red"></span></label> :
              <div class="col-sm-8"><?php echo $row['fasilitas'] ?></div>
              </div>
            </div>
			<div class="form-group">
              <div class="row">
              <label class="col-sm-3 control-label text-right">Jenis<span class="text-red"></span></label> :
              <div class="col-sm-8"><?php echo $row['jenis'] ?></div>
              </div>
            </div>
			<div class="form-group">
              <div class="row">
              <label class="col-sm-3 control-label text-right">Laporan<span class="text-red"></span></label> :
              <div class="col-sm-8"><?php echo $row['laporan'] ?></div>
              </div>
            </div>
			
			<div class="form-group">
              <div class="row">
			  <label class="col-sm-3 control-label text-right">Status<span class="text-red"></span></label> :
              <div class="col-sm-8">
			 <select name="status" class="form-control">
			 <option value="-">-Pilih-</option>
			<option value="Dikerjakan">Dikerjakan</option>
			<option value="Selesai">Selesai</option>
			</select>
			</div>
              </div>
            </div>
			<div class="form-group">
              <div class="row">
              <label class="col-sm-3 control-label text-right">Obyek<span class="text-red"></span></label> :
              <div class="col-sm-8"><img src="./static/<?php echo $row['obyek'] ?>" ></div>
              </div>
            </div>
			<div class="form-group">
              <div class="row">
              <label class="col-sm-3 control-label text-right">Catatan<span class="text-red"></span></label> :
              <div class="col-sm-8"><?php echo $row['catatan'] ?></div>
              </div>
            </div>
			<div class="form-group">
              <div class="row">
              <div class="col-sm-8">
			  <input type="hidden" name="id" value="<?php echo $row['id'] ?>"></div>
              </div>
            </div>
          </div>
          <div class="modal-footer">
		    <button class="btn btn-success" type="submit" name="ubah">Ubah</button>
            <button type="button" class="btn me-auto" data-bs-dismiss="modal">Close</button>
           
          </div>
		   </form>
        </div>
      </div>
    </div>
					   
					   
											
											 <?php } ?>



						
						
						
						
						
						
						
						
						
						
						
						
						
                      </tbody>
                    </table>
                  </div>
						
					 
       
                  </div>
                </div>
               
              </form>
			 
            </div>
           
     
    </div>
			
			
			
          </div>
        </div>
       
      </div>
    </div>

    <!-- Libs JS -->
    <script src="./dist/libs/apexcharts/dist/apexcharts.min.js?1684106062" defer></script>
    <script src="./dist/libs/jsvectormap/dist/js/jsvectormap.min.js?1684106062" defer></script>
    <script src="./dist/libs/jsvectormap/dist/maps/world.js?1684106062" defer></script>
    <script src="./dist/libs/jsvectormap/dist/maps/world-merc.js?1684106062" defer></script>
    <!-- Tabler Core -->
    <script src="./dist/js/tabler.min.js?1684106062" defer></script>
    <script src="./dist/js/demo.min.js?1684106062" defer></script>
    
  </body>
</html>