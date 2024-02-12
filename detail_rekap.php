<?php
include "koneksi.php";
session_start();
if($_SESSION['username']=='')
{
    header("location:login.php");
}else{
	

		
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
                <form class="card" method="post" action="index.php" enctype="multipart/form-data">
                  <div class="card-header">
                    <h4 class="card-title">Laporan Pengaduan</h4>
                  </div>
                  <div class="card-body">
                    <div class="row">
		                  <div class="table-responsive">
                    <table class="table card-table table-vcenter text-nowrap datatable">
                      <thead>
                        <tr>
                         
                         
                          <th>No</th>
                          <th>Tanggal</th>
                          <th>Lokasi</th>
						  <th>Fasilitas</th>
						   <th>Jenis</th>
                          <th>Laporan</th>
                          <th>Status</th>
                       
						 
                        </tr>
                      </thead>
                      <tbody>
						
						 <?php
						 $bulan = $_GET['bulan'];
						$tahun = $_GET['tahun'];
						
						$query = "SELECT * from laporan where MONTHNAME(tanggal) ='$bulan' and YEAR(tanggal) ='$tahun'";
						$result	= mysqli_query($koneksi, $query);
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
												    <td><?php echo $row['jenis'] ?></td>
												    <td><?php echo $row['laporan'] ?></td>
													
													  <td><?php echo $row['status'] ?></td>  
													  
													  </tr>
					   
											 <?php } ?>
						
                      </tbody>
                    </table>
					<br>
				  	<a class="btn btn-primary" href="cetak.php?bulan=<?php echo $bulan ?> & tahun=<?php echo $tahun ?>">
                                    <i class="fas fa-print"></i> Cetak</a>
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