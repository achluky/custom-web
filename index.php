<?php 
	include "config/koneksi.php"; 
	session_start();
?>
<!doctype html>
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!--[if IE 9]>    <html class="no-js ie9" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--> <html> <!--<![endif]-->
<head>
	<?php $web = getWebDescription(); ?>
    <?php echo $web['deskripsi']; ?>
    <title><?php echo $web['judul_web']; ?></title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
 
    <!-- Custom Google Web Font -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Arvo:400,700' rel='stylesheet' type='text/css'>
	
    <!-- Custom CSS-->
    <link href="css/general.css" rel="stylesheet">
	
	 <!-- Owl-Carousel -->
    <link href="css/custom.css" rel="stylesheet">
	<link href="css/owl.carousel.css" rel="stylesheet">
    <link href="css/owl.theme.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
	<link href="css/animate.css" rel="stylesheet">
	
	<!-- Magnific Popup core CSS file -->
	<link rel="stylesheet" href="css/magnific-popup.css"> 
	
	<script src="js/modernizr-2.8.3.min.js"></script>  <!-- Modernizr /-->
	<!--[if IE 9]>
		<script src="js/PIE_IE9.js"></script>
	<![endif]-->
	<!--[if lt IE 9]>
		<script src="js/PIE_IE678.js"></script>
	<![endif]-->

	<!--[if lt IE 9]>
		<script src="js/html5shiv.js"></script>
	<![endif]-->
	<style type="text/css">
		.fit-view{
			width: 100%;
			height: 100vh;
			object-fit: cover;
			background-position: center center;
			background-repeat: no-repeat;
			overflow: hidden;
		}
	</style>

</head>

<body id="home">
	<?php
		if(isset($_GET['cmd'])){
			if($_GET['cmd'] == "login"){
				include "config/login.php";
				exit();
			}elseif($_GET['cmd'] == "logout"){
				include "config/logout.php";
				exit();
			}elseif($_GET['cmd'] == "home"){
			}
		}
	?>
	<!-- Preloader -->
	<div id="preloader">
		<div id="status"></div>
	</div>
	
	<!-- FullScreen -->
	<?php $tmpSilder = getSlider("result") ?>
    <div id="carousel-id" class="carousel slide" data-ride="carousel">
    	<ol class="carousel-indicators">
    		<li data-target="#carousel-id" data-slide-to="0" class=""></li>
    		<li data-target="#carousel-id" data-slide-to="1" class=""></li>
    		<li data-target="#carousel-id" data-slide-to="2" class="active"></li>
    	</ol>
    	<div class="carousel-inner" >
    		<?php $j = JumlahData(getSlider("query")); $i=0; 
    		while($slider = $tmpSilder->fetch(PDO::FETCH_ASSOC)){ ?>
				<div class="item <?php if($i==$j-1){ echo "active"; } ?>" >
					<center><img class="fit-view" alt="<?php echo $slider['foto']; ?> slide" src="img/galeri/<?php echo $slider['foto']; ?>"></center>
					<div class="container">
						<div class="carousel-caption">
						<h2 style="padding-bottom: 150px;"><?php echo $slider['keterangan']; ?></h2>
							<p></p>
							<p><a class="btn btn-lg btn-primary" href="#galeri" role="button">Browse gallery</a></p>
						</div>
					</div>
				</div>
			<?php $i++; } ?>
    	</div>
    </div>

	
	<!-- NavBar-->
	<nav class="navbar-default" role="navigation">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#home"><?php echo $web['judul_web']; ?></a>
			</div>

			<div class="collapse navbar-collapse navbar-right navbar-ex1-collapse">
				<ul class="nav navbar-nav">
					
					<li class="menuItem"><a href="#profil">Profil</a></li>
					<li class="menuItem"><a href="#visi">Visi</a></li>
					<li class="menuItem"><a href="#misi">Misi</a></li>
					<li class="menuItem"><a href="#galeri">Galeri</a></li>
					<li class="menuItem"><a href="#contact">Kontak</a></li>
					<?php
					if(isset($_SESSION['username'])){
						echo'
						<li class="dropdown">
	                        <a class="page-scroll dropdown-toggle" data-toggle="dropdown" href="javascript:;">Admin<span class="caret"></span></a>
                            <ul class="dropdown-menu">
                            	<li><a href="admin/?data=custom" style="color: #555">Custom Web</a></li>
                                <li><a href="admin/?data=user" style="color: #555">Ganti Password</a></li>
                                <li><a href="?cmd=logout" style="color: #555">Logout</a></li>
                            </ul>
	                    </li>
						';
					}
					?>
				</ul>
			</div>
		</div>
	</nav> 
	
	<?php
		$profil = getProfil();
	?>

	<!-- What is -->
	<div id="profil" class="content-section-b" style="border-top: 0">
		<div class="container">

			<center><div class="col-md-12 col-md-offset-3 text-center wrap_title" style="margin-left:0px;">
				<h2>Profil</h2>
				<p class="lead" style="margin-top:0">Sejarah Berdirinya Perusahaan</p>
				
			</div>
			</center>
			
			<div class="row lead">
					<?php echo $profil['detail_profil']; ?>
				<img src="<?php echo "img/galeri/profil/".$profil['foto_profil']; ?>" class="col-md-12 img-responsive img-rounded" style="padding-right: 0px; padding-left: 0px;">
			</div><!-- /.row -->
		</div>
	</div>
	
	<!-- Use it -->
    <div id ="visi" class="content-section-a">

        <div class="container">
			
            <div class="row">
			
				<div class="col-sm-6 pull-right wow fadeInRightBig">
                    <img class="img-responsive img-rounded" src="<?php echo "img/galeri/profil/".$profil['foto_visi']; ?>" alt="">
                </div>
				
                <div class="col-sm-6 wow fadeInLeftBig"  data-animation-delay="200">   
                    <h3 class="section-heading">Visi</h3>
					<div class="sub-title lead3">Visi kami dalam mewujudkan cita-cita perusahaan ini yaitu: </div>
                    <p class="lead">
						<?php echo $profil['visi']; ?>
					</p>
				</div>   
            </div>
        </div>
        <!-- /.container -->
    </div>

    <div id="misi" class="content-section-b"> 
		
		<div class="container">
            <div class="row">
                <div class="col-sm-6 pull-left wow fadeInRightBig">
                    <img class="img-responsive img-rounded" src="<?php echo "img/galeri/profil/".$profil['foto_visi']; ?>" alt="">
                </div>
				
                <div class="col-sm-6 wow fadeInRightBig"  data-animation-delay="200">   
                    <h3 class="section-heading">Misi</h3>
					<div class="sub-title lead3">Misi kami dalam mewujudkan cita-cita perusahaan ini yaitu: </div>
                    <p class="lead">
						<?php echo $profil['misi']; ?>
					</p>
				</div>  			
			</div>
        </div>
    </div>

    <?php $client = getClient(); ?>
    <!-- What is -->
	<div id="client" class="content-section-c" style="border-top: 0">
		<div class="container">

			<div class="col-md-6 col-md-offset-3 text-center wrap_title white">
				<h2>Client Kami</h2>
				<p class="lead" style="margin-top:0">Beberapa perusahaan yang pernah kami tangani.</p>
				
			</div>
			<?php if(count($client) <= 6 || count($client) >= 6) { ?>
			<div class="row">
				<div class="col-sm-4 wow fadeInDown text-center white">
				  <img class="rotate" src="img/icon/avatar_1.svg" alt="Generic placeholder image" style="width: 100px; height: 100px;">
				  <h3><?php echo $client[0][0]; ?></h3>
				  <p class="lead"><?php echo $client[0][1]; ?></p>

				  <!-- <p><a class="btn btn-embossed btn-primary view" role="button">View Details</a></p> -->
				</div><!-- /.col-lg-4 -->
				
				<div class="col-sm-4 wow fadeInDown text-center white">
				  <img  class="rotate" src="img/icon/avatar_2.svg" alt="Generic placeholder image" style="width: 100px; height: 100px;">
				   <h3><?php echo $client[1][0]; ?></h3>
				   <p class="lead"><?php echo $client[1][1]; ?></p>
				   <!-- <p><a class="btn btn-embossed btn-primary view" role="button">View Details</a></p> -->
				</div><!-- /.col-lg-4 -->
				
				<div class="col-sm-4 wow fadeInDown text-center white">
				  <img  class="rotate" src="img/icon/avatar_3.svg" alt="Generic placeholder image" style="width: 100px; height: 100px;">
				   <h3><?php echo $client[2][0]; ?></h3>
				   <p class="lead"><?php echo $client[2][1]; ?></p>
				  <!-- <p><a class="btn btn-embossed btn-primary view" role="button">View Details</a></p> -->
				</div><!-- /.col-lg-4 -->
			</div><!-- /.row -->
			<?php } if(count($client) >= 6){ ?>
			<div class="row tworow">
				<div class="col-sm-4  wow fadeInDown text-center white">
				  <img class="rotate" src="img/icon/avatar_4.svg" alt="Generic placeholder image" style="width: 100px; height: 100px;">
				  <h3><?php echo $client[3][0]; ?></h3>
				  <p class="lead"><?php echo $client[3][1]; ?></p>
				 <!-- <p><a class="btn btn-embossed btn-primary view" role="button">View Details</a></p> -->
				</div><!-- /.col-lg-4 -->
				
				<div class="col-sm-4 wow fadeInDown text-center white">
				  <img  class="rotate" src="img/icon/avatar_5.svg" alt="Generic placeholder image" style="width: 100px; height: 100px;">
				   <h3><?php echo $client[4][0]; ?></h3>
				   <p class="lead"><?php echo $client[4][1]; ?></p>
				   <!-- <p><a class="btn btn-embossed btn-primary view" role="button">View Details</a></p> -->
				</div><!-- /.col-lg-4 -->
				
				<div class="col-sm-4 wow fadeInDown text-center white">
				  <img  class="rotate" src="img/icon/avatar_6.svg" alt="Generic placeholder image" style="width: 100px; height: 100px;">
				   <h3><?php echo $client[5][0]; ?></h3>
				   <p class="lead"><?php echo $client[5][1]; ?></p>
				  <!-- <p><a class="btn btn-embossed btn-primary view" role="button">View Details</a></p> -->
				</div><!-- /.col-lg-4 -->
			</div><!-- /.row -->
			<?php } ?>
		</div>
	</div>
    
    <?php $pelayanan = getPelayanan(); ?>
    <div class="content-section-a">
        <div class="container">
             <div class="row">
				<div class="col-sm-6 pull-right wow fadeInRightBig">
                    <iframe class="img-rounded" width="560" height="400" src="https://www.youtube.com/embed/yaowjxs2K0g" frameborder="0" allowfullscreen></iframe>
                </div>
			 
                <div class="col-sm-6 wow fadeInLeftBig"  data-animation-delay="200">   
                    <h3 class="section-heading">Pelayanan</h3>
                    <p class="lead">Lorem ipsum dolor sit atmet sit dolor greand fdanrh sdfs sit atmet sit dolor greand fdanrh sdfs:
					</p>
					
					<ul class="descp lead2">
						<li><i class="glyphicon glyphicon-check"></i> <?php echo $pelayanan['pelayanan1']; ?> </li>
						<li><i class="glyphicon glyphicon-check"></i> <?php echo $pelayanan['pelayanan2']; ?> </li>
						<li><i class="glyphicon glyphicon-check"></i> <?php echo $pelayanan['pelayanan3']; ?> </li>
						<li><i class="glyphicon glyphicon-check"></i> <?php echo $pelayanan['pelayanan4']; ?> </li>
						<li><i class="glyphicon glyphicon-check"></i> <?php echo $pelayanan['pelayanan5']; ?> </li>
					</ul>
					<p>
						<a class="btn btn-embossed btn-info" href="#contact" role="button">Hubungi Kami</a>
					</p>
				</div>           
            </div>
        </div>
    </div>
    <?php
    	$galeri = getGaleri();
    	//$galeri = PdoQuery("SELECT foto FROM galeri");
    	//while($gal = $galeri->fetch(PDO::FETCH_ASSOC)) { echo "$gal[foto]";}
    ?>
	<!-- Screenshot -->
	<div id="galeri" class="content-section-b">
        <div class="container">
          <div class="row" >
			 <div class="col-md-6 col-md-offset-3 text-center wrap_title ">
				<h2>Galeri</h2>
				<p class="lead" style="margin-top:0">Galeri Perusahaan Kami.</p>
			 </div>
		  </div>
		    <div class="row wow bounceInUp" >
				<div id="owl-demo" class="owl-carousel">
					<?php while($gal = $galeri->fetch(PDO::FETCH_ASSOC)) { ?>
						<a href="<?php echo 'img/galeri/'.$gal['foto']; ?>" class="image-link">
							<div class="item">
								<img  class="img-responsive img-rounded" style="object-fit:cover; width:100%; height:678px;" src="<?php echo 'img/galeri/'.$gal['foto']; ?>" alt="Owl Image">
							</div>
						</a>
					<?php  } ?>
				</div>       
			</div>
        </div>
	</div>

	<!-- Credits -->
	<div id="credits" class="content-section-a">
		<div class="container">
			<div class="row">
			
			<div class="col-md-6 col-md-offset-3 text-center wrap_title">
				<h2>Jangkauan</h2>
				<p class="lead" style="margin-top:0">Dapat melayani disegala jangkauan.</p>
			 </div>
			 
				<div class="col-sm-6  block wow bounceIn">
					<div class="row">
						<div class="col-md-4 box-icon rotate"> 
							<i class="fa fa-building-o fa-4x "> </i> 
						</div>
						<div class="col-md-8 box-ct">
							<h3> Perkantoran </h3>
							<p> Lorem ipsum dolor sit ametconsectetur adipiscing elit. Suspendisse orci quam.</p>
						</div>
				  </div>
			  </div>
			  <div class="col-sm-6 block wow bounceIn">
					<div class="row">
					  <div class="col-md-4 box-icon rotate"> 
						<i class="fa fa-hospital-o fa-4x "> </i> 
					  </div>
					  <div class="col-md-8 box-ct">
						<h3> Rumah Sakit </h3>
						<p> Lorem ipsum dolor sit ametconsectetur adipiscing elit. Suspendisse orci quam.</p> 
					  </div>
					</div>
			  </div>
		  </div>
		  
		  <div class="row tworow">
				<div class="col-sm-6  block wow bounceIn">
					<div class="row">
						<div class="col-md-4 box-icon rotate"> 
							<i class="fa fa-home fa-4x "> </i> 
						</div>
						<div class="col-md-8 box-ct">
							<h3> Perumahan </h3>
							<p> Nullam mo arcu ac molestie scelerisqu vulputate, molestie ligula gravida, tempus ipsum.</p>
						</div>
				  </div>
			  </div>
			  <div class="col-sm-6 block wow bounceIn">
					<div class="row">
					  <div class="col-md-4 box-icon rotate"> 
						<i class="fa fa-globe fa-4x "> </i> 
					  </div>
					  <div class="col-md-8 box-ct">
						<h3> Dan Lain Lain</h3>
						<p> Nullam mo arcu ac molestie scelerisqu vulputate, molestie ligula gravida, tempus ipsum.</p> 
					  </div>
					</div>
			  </div>
		  </div>
		</div>
	</div>
	
	<!-- Contact -->
	<?php 
		$kontak = getKontak();
	?>
	<div id="contact" class="content-section-a">
		<div class="container">
			<div class="row">
			
			<div class="col-md-6 col-md-offset-3 text-center wrap_title">
				<h2>Kontak Kami</h2>
				<p class="lead" style="margin-top:0">Kami akan menanggapi dengan cepat.</p>
			</div>
			<div class="col-md-6">
				<?php echo $kontak['maps']; ?>
			</div>	
			<hr class="featurette-divider hidden-lg">
				<div class="col-md-5 col-md-push-1 address">
					<address>
					<h3>Lokasi Perusahaan</h3>
					<p class="lead">
						<?php echo $kontak['kontak']; ?>
					</p>
					</address>
					<h3>Social</h3>
					<li class="social"> 
					<a href="<?php echo $kontak['facebook']; ?>" target="_blank"><i class="fa fa-facebook-square fa-size"> </i></a>
					<a href="https://www.twitter.com/<?php echo $kontak['twitter']; ?>" target="_blank"><i class="fa fa-twitter-square fa-size"> </i> </a> 
					<a href="<?php echo $kontak['google']; ?>"><i class="fa fa-google-plus-square fa-size" target="_blank"> </i></a>
					<a href="https://www.instagram.com/<?php echo $kontak['instagram']; ?>" target="_blank"><i class="fa fa-instagram fa-size"> </i> </a>
					</li>
				</div>
			</div>
		</div>
	</div>
	
    <!-- JavaScript -->
    <script src="js/jquery-1.10.2.js"></script>
    <script src="js/bootstrap.js"></script>
	<script src="js/owl.carousel.js"></script>
	<script src="js/script.js"></script>
	<!-- StikyMenu -->
	<script src="js/stickUp.min.js"></script>
	<script type="text/javascript">
	  jQuery(function($) {
		$(document).ready( function() {
		  $('.navbar-default').stickUp();
		  
		});
	  });
	
	</script>
	<!-- Smoothscroll -->
	<script type="text/javascript" src="js/jquery.corner.js"></script> 
	<script src="js/wow.min.js"></script>
	<script>
	 new WOW().init();
	</script>
	<script src="js/classie.js"></script>
	<script src="js/uiMorphingButton_inflow.js"></script>
	<!-- Magnific Popup core JS file -->
	<script src="js/jquery.magnific-popup.js"></script> 
</body>

</html>

<?php 
	function getWebDescription(){
		$sql_deskripsi = "SELECT *FROM deskripsi_web ORDER BY id_deskripsi DESC LIMIT 1";
		$web = PdoSelect($sql_deskripsi);

		return $web;
	}

	function getProfil(){
		$sql_profil = "SELECT *FROM profil ORDER BY id_profil DESC LIMIT 1";
		$profil = PdoSelect($sql_profil);

		return $profil;
	}

	function getGaleri(){
		$sql_galeri = "SELECT foto FROM galeri ORDER BY id_galeri DESC";
		$galeri = PdoQuery($sql_galeri);

		return $galeri;
	}

	function getSlider($type){
		$sql_slider = "SELECT foto, keterangan FROM galeri WHERE slider = '1' ORDER BY id_galeri DESC";
		$slider = PdoQuery($sql_slider);
		if($type == "result"){
			return $slider;
		}elseif($type == "query"){
			return $sql_slider;
		}
	}

	function getKontak(){
		$sql_kontak = "SELECT *FROM kontak ORDER BY id_kontak DESC LIMIT 1";
		$kontak = PdoSelect($sql_kontak);

		return $kontak;
	}

	function getClient(){
		$sql_client = PdoQuery("SELECT *FROM client ORDER BY id_client ASC LIMIT 6");
		$i=0;
		while ($data = $sql_client->fetch(PDO::FETCH_ASSOC)) {
			if($data['nama'] != NULL && $data['nama'] != "" && $data['alamat'] != NULL && $data['alamat'] != ""){
				$client[$i][0] = $data['nama'];
				$client[$i++][1] = $data['alamat'];
			}
		}
		/*if(count($client) <= 6){
			for ($i=0; $i < 6; $i++) { 
				if(!isset($client[$i])){
					$client[$i][0] = "Client ".$i;
					$client[$i][1] = "Alamat Client ".$i;
				}
			}
		}*/
		return $client;
	}

	function getPelayanan(){
		$sql_pelayanan = "SELECT *FROM pelayanan ORDER BY id_pelayanan DESC LIMIT 1";
		$pelayanan = PdoSelect($sql_pelayanan);

		return $pelayanan;
	}
?>
