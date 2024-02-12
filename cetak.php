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

      <!-- Navbar -->
     
      <div class="page-wrapper">
        <!-- Page header -->
      
        <!-- Page body -->
        <div class="page-body">
          <div class="container-xl">
			
			            <div class="row row-cards">
              <div class="col-12">
                <form class="card" enctype="multipart/form-data">
                  <div class="card-header">
                    <h4 class="card-title">Laporan Pengaduan</h4>
                  </div>
                  <div class="card-body">
                    <div class="row">
		                  <div class="table-responsive">
                    <table class="table table-vcenter card-table">
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
					
					<script>
		window.print();
	</script>
					
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