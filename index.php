<?php

// include composer autoloader
require_once __DIR__ . '/vendor/autoload.php';

// create stemmer
// cukup dijalankan sekali saja, biasanya didaftarkan di service container
$stemmerFactory = new \Sastrawi\Stemmer\StemmerFactory();
$stemmer  = $stemmerFactory->createStemmer();

// stem
//$sentence = 'Perekonomian Indonesia sedang dalam pertumbuhan yang membanggakan';
//$output   = $stemmer->stem($sentence);

//echo $output . "\n";

////memasukan file koneksi
//include 'koneksi.php';
//include 'stemming.php';
//$kamus = $koneksi->query("SELECT katadasar FROM tb_katadasar");
//$kamus_data = array();
//while ($d = mysqli_fetch_array($kamus)) {
//	array_push($kamus_data, $d['katadasar']);
//}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Search Engin</title>
	<link rel="stylesheet" href="assets/css/bootstrap.css">
</head>
<body style="background: #e3f4e6">
	<section>

		<nav class="navbar navbar-expand-lg" style="background: #96e09d">
  			<a class="navbar-brand" href="#">Navbar</a>
  				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    				<span class="navbar-toggler-icon"></span>
  				</button>
  				<div class="collapse navbar-collapse" id="navbarNav">
    				<ul class="navbar-nav">
      					<li class="nav-item active">
        					<a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      					</li>
    				</ul>
  				</div>
		</nav>

		<div class="container">
  			<div class="row" style="margin-top: 150px;">
    			<div class="col-2"></div>
    				<div class="col-8">
    					<div class="card">
    						<div class="card-body">
      						<h2 style="text-align: center;">Pencarian</h2>
							<form action="" method="post" style="margin-bottom: 10px">
								<div class="col-12">
									<div class="row">
										<div class="col-10">
											<input type="text" name="kata" placeholder="Masukan kata" class=" form-control"/>
										</div>
										<div class="col-2">
											<input type="submit" name="submit" value="Cari" class="btn btn-sm btn-primary"/>	
										</div>
									</div>
								</div>
							</form>
	
							<?php
							if (isset($_POST['kata'])) {
								$kata = $_POST['kata'];
                                $output   = $stemmer->stem($kata);

								echo $output . "\n";
							}
							?>

							</div>
						</div>
					</div>
				<div class="col-sm-2"></div>
			</div>
		</div>
	</section>
	
</body>
</html>