<?php
include "koneksi.php";
session_start();
if($_SESSION['username']=='')
{
    header("location:login_user.php");
}else{
	
	$data_nama = $_SESSION["nama"];
		
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
		<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    <style>
      @import url('https://rsms.me/inter/inter.css');
      :root {
      	--tblr-font-sans-serif: 'Inter Var', -apple-system, BlinkMacSystemFont, San Francisco, Segoe UI, Roboto, Helvetica Neue, sans-serif;
      }
      body {
      	font-feature-settings: "cv03", "cv04", "cv11";
      }
    </style>
	<script src="./static/jquery.min.js" type="text/javascript"></script>
	
	<!-- Load File javascript config.js -->
	<script src="./static/config.js" type="text/javascript"></script>
  </head>
  <body >
    <script src="./dist/js/demo-theme.min.js?1684106062"></script>
    <div class="page">
      <!-- Navbar -->
 
      <header class="navbar-expand-md">
        <div class="collapse navbar-collapse" id="navbar-menu">
          <div class="navbar">
            <div class="container-xl">
			
			<img src="./static/photos/Logo-UMI.png"> 
			
              <ul class="navbar-nav">
                <li class="nav-item">
                  <a class="nav-link" href="./index.php" >
                    <span class="nav-link-icon d-md-none d-lg-inline-block">
                      <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M5 12l-2 0l9 -9l9 9l-2 0" /><path d="M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7" /><path d="M9 21v-6a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v6" /></svg>
                    </span>
                    <span class="nav-link-title">
                      Home
                    </span>
                  </a>
                </li>
				 <li class="nav-item">
                  <a class="nav-link" href="./laporan.php" >
                    <span class="nav-link-icon d-md-none d-lg-inline-block">
                      <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M9 11l3 3l8 -8" /><path d="M20 12v6a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2h9" /></svg>
                    </span>
                    <span class="nav-link-title">
                      Daftar
                    </span>
                  </a>
                </li>
				 <li class="nav-item active">
                  <a class="nav-link" href="./" >
                     <span class="nav-link-icon d-md-none d-lg-inline-block">
                      <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M4 4m0 2a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v1a2 2 0 0 1 -2 2h-2a2 2 0 0 1 -2 -2z" /><path d="M4 13m0 2a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v3a2 2 0 0 1 -2 2h-2a2 2 0 0 1 -2 -2z" /><path d="M14 4m0 2a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v3a2 2 0 0 1 -2 2h-2a2 2 0 0 1 -2 -2z" /><path d="M14 15m0 2a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v1a2 2 0 0 1 -2 2h-2a2 2 0 0 1 -2 -2z" /></svg>
                    </span>
                    <span class="nav-link-title">
                      Galeri
                    </span>
                  </a>
                </li>
									     <div class="d-none d-md-flex">
				 
				  <div class="nav-item dropdown d-none d-md-flex me-3">
                <a href="#" class="nav-link px-0" data-bs-toggle="dropdown" tabindex="-1" aria-label="Show notifications">
               
                  <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M10 5a2 2 0 1 1 4 0a7 7 0 0 1 4 6v3a4 4 0 0 0 2 3h-16a4 4 0 0 0 2 -3v-3a7 7 0 0 1 4 -6" /><path d="M9 17v1a3 3 0 0 0 6 0v-1" /></svg>
                  <span class="badge bg-red"></span>
                </a>
               <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-end dropdown-menu-card">
                  <div class="card">
                    <div class="card-header">
                      <h3 class="card-title">Pemberitahuan</h3>
                    </div>
                    <div class="list-group list-group-flush list-group-hoverable">
                      <div class="list-group-item">
                        <div class="row">
                          <div class="col-12"></div>
                          <div class="col text-truncate">
                         
                            <div class="d-block text-muted text-truncate mt-n8">
                               <p class="fw-light small-text mb-0">
							  <?php
						$query = "SELECT laporan, status from laporan where nama='$data_nama'";
						$result	= mysqli_query($koneksi, $query);
						  $no = 1;
						while ($data = mysqli_fetch_array($result)) {
					
                ?>
						
		
						<h4 class="card-title">Pengaduan anda mengenai <?php echo $data['laporan']?>  
						telah <?php echo $data['status']?></h4>
				
				<?php
                  }

			   ?>
							  
                            </div>
                          </div>
                          
                        </div>
                      </div>
                     
                     
                      
                    </div>
                  </div>
                </div>
              </div>
            </div>
				<div class="nav-item dropdown">
              <a href="#" class="nav-link d-flex lh-1 text-reset p-0" data-bs-toggle="dropdown" aria-label="Open user menu">
                <span class="avatar avatar-sm" style="background-image: url(./static/avatars/user.png)"></span>
                <div class="d-none d-xl-block ps-2">
                  <div><?php echo $data_nama ?></div>
                  <div class="mt-1 small text-muted">Mahasiswa</div>
                </div>
              </a>
              <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
             
				   <a href="./logout.php" class="dropdown-item">Logout</a>
            </div>
              </ul>
            
            </div>
          </div>
        </div>
      </header>
      <div class="page-wrapper">
        <!-- Page header -->
        <div class="page-header d-print-none">
          <div class="container-xl">
            <div class="row g-2 align-items-center">
              <div class="col">
                <h2 class="page-title">
				Selamat Datang, <?php echo $data_nama ?> <br><br>
                  Galeri
                </h2>
              </div>
            </div>
          </div>
        </div>
        <!-- Page body -->
        <div class="page-body">
          <div class="container-xl">
            <div class="row row-cards">
              <div class="col-12">
                <form class="card" method="post" action="index.php">
                  <div class="card-header">
                    <h4 class="card-title">Galeri</h4>
                  </div>
                  <div class="card-body">
                    <div class="row">
						        <div class="page-body">
          <div class="container-xl">
            <div class="row row-cards">
              <div class="col-sm-6 col-lg-4">
                <div class="card card-sm">
                  <a href="#" class="d-block"><img src="./images/outdoor1.jpeg" class="card-img-top"></a>
                  <div class="card-body">
                    <div class="d-flex align-items-center">
                     
                      <div>
                        <div>Pelataran</div>
                    
                      </div>
                     
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-lg-4">
                <div class="card card-sm">
                  <a href="#" class="d-block"><img src="./images/outdoor2.jpeg" class="card-img-top"></a>
                  <div class="card-body">
                    <div class="d-flex align-items-center">
                      
                      <div>
                        <div>Workshop Outdoor</div>
                       
                      </div>
                      
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-lg-4">
                <div class="card card-sm">
                  <a href="#" class="d-block"><img src="./images/balai-balai.jpeg" class="card-img-top"></a>
                  <div class="card-body">
                    <div class="d-flex align-items-center">
                     
                      <div>
                        <div>Gazebo</div>
                       
                      </div>
                      
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-lg-4">
                <div class="card card-sm">
                  <a href="#" class="d-block"><img src="./images/ruang_indoor.jpeg" class="card-img-top"></a>
                  <div class="card-body">
                    <div class="d-flex align-items-center">
                      
                      <div>
                        <div>Workshop Indoor</div>
                      
                      </div>
                     
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-lg-4">
                <div class="card card-sm">
                  <a href="#" class="d-block"><img src="./images/ruang_indoor2.jpeg" class="card-img-top"></a>
                  <div class="card-body">
                    <div class="d-flex align-items-center">
                      
                      <div>
                        <div>Laboratorium</div>
                       
                      </div>
                      
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-lg-4">
                <div class="card card-sm">
                  <a href="#" class="d-block"><img src="./images/wc.jpeg" class="card-img-top"></a>
                  <div class="card-body">
                    <div class="d-flex align-items-center">
                     
                      <div>
                        <div>WC</div>
                       
                      </div>
                 
                    </div>
                  </div>
                </div>
              </div>
              
             
              
           
              
      
            </div>
            
          </div>
        </div>
						
						
						
						
						
                  </div>
						
					 
       
                  </div>
                </div>
               
              </form>
			 
            </div>
           
     
    </div>
  </div>
  <!-- Libs JS -->
  <script src="./dist/libs/nouislider/dist/nouislider.min.js?1684106062" defer></script>
  <script src="./dist/libs/litepicker/dist/litepicker.js?1684106062" defer></script>
  <script src="./dist/libs/tom-select/dist/js/tom-select.base.min.js?1684106062" defer></script>
  <!-- Tabler Core -->
  <script src="./dist/js/tabler.min.js?1684106062" defer></script>
  <script src="./dist/js/demo.min.js?1684106062" defer></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
 
</body>



		


</html>