<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="">
	<meta name="description" content="">

	<title>Portfolio Jaja Jumhara</title>
<!--

Template 2080 Minimax

http://www.tooplate.com/view/2080-minimax

-->
	<!-- stylesheet css -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/nivo-lightbox.css">
	<link rel="stylesheet" href="css/nivo_themes/default/default.css">
	<link rel="stylesheet" href="css/style.css">
	<!-- google web font css -->
	<link href='http://fonts.googleapis.com/css?family=Raleway:400,300,600,700' rel='stylesheet' type='text/css'>

</head>
<body data-spy="scroll" data-target=".navbar-collapse">
	
<!-- navigation -->
<div class="navbar navbar-default navbar-fixed-top" role="navigation">
	<div class="container">
		<div class="navbar-header">
			<button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
				<span class="icon icon-bar"></span>
				<span class="icon icon-bar"></span>
				<span class="icon icon-bar"></span>
			</button>
			<a href="#home" class="navbar-brand smoothScroll">Jaja Jumhara</a>
		</div>
		<div class="collapse navbar-collapse">
			<ul class="nav navbar-nav navbar-right">
				<li><a href="#home" class="smoothScroll">HOME</a></li>
				<li><a href="#about" class="smoothScroll">ABOUT</a></li>
				<li><a href="#portfolio" class="smoothScroll">PORTFOLIO</a></li>
				<li><a href="#service" class="smoothScroll">KNOWLEDGE</a></li>
				<li><a href="#pricing" class="smoothScroll">EXPERIENCED</a></li>
				<li><a href="#contact" class="smoothScroll">CONTACT</a></li>
			</ul>
		</div>
	</div>
</div>		

<!-- home section -->
<div id="home">
	<div class="container">
		<div class="row">
			<div class="col-md-offset-6 col-md-6 col-sm-offset-6 col-sm-6">
				
				<h1>Jaja<strong>Jumhara</strong></h1>
				<p>Project Engineer, Network Engineer & Software Engineer </p>
				<a href="#about" class="btn btn-default smoothScroll">GET STARTED</a>
			</div>
		</div>
	</div>
</div>



<!-- divider section -->
<div class="container">
	<div class="row">
		<div class="col-md-1 col-sm-1"></div>
		<div class="col-md-10 col-sm-10">
			<hr>
		</div>
		<div class="col-md-1 col-sm-1"></div>
	</div>
</div>

<!-- about section -->
<div id="about">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12">
				<h2>Summary</h2>
			</div>
			<div class="col-md-6 col-sm-6">
				<img src="images/about-img.jpg" class="img-responsive" alt="about img">
			</div>

		<?php
		include("koneksi.php");
		$sql = "SELECT * FROM summary";
		$hasil = mysqli_query($koneksi, $sql);

		$jmlArtikel = mysqli_num_rows($hasil);
		if ($jmlArtikel > 0) {
			while($row = mysqli_fetch_assoc($hasil)) {
		?>
			<div class="col-md-6 col-sm-6">
				<h3><?=$row["judul"]; ?></h3>
				<p><?=$row["isi"]; ?></p>
			</div>
			<?php
			}
		}
		?>
		</div>
	</div>
</div>

<!-- divider section -->
<div class="container">
	<div class="row">
		<div class="col-md-1 col-sm-1"></div>
		<div class="col-md-10 col-sm-10">
			<hr>
		</div>
		<div class="col-md-1 col-sm-1"></div>
	</div>
</div>



<!-- divider section -->
<div class="container">
	<div class="row">
		<div class="col-md-1 col-sm-1"></div>
		<div class="col-md-10 col-sm-10">
			<hr>
		</div>
		<div class="col-md-1 col-sm-1"></div>
	</div>
</div>

<!-- portfolio section -->
<div id="portfolio">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12">
				<div class="title">
					<h2>Portfolio</h2>
				</div>
				<!-- ISO section -->
				<div class="iso-section">
					<ul class="filter-wrapper clearfix">
                   		 <li><a href="#" data-filter="*" class="selected opc-main-bg">All</a></li>
                   		 <li><a href="#" class="opc-main-bg" data-filter=".html">Inteligent-System</a></li>
                   		 <li><a href="#" class="opc-main-bg" data-filter=".photoshop">Network&Service</a></li>
                    	 <li><a href="#" class="opc-main-bg" data-filter=".wordpress">Cisco</a></li>
                    	 <li><a href="#" class="opc-main-bg" data-filter=".mobile">Web</a></li>
               		</ul>
               		<div class="iso-box-section">
               			<div class="iso-box-wrapper col4-iso-box">

               				<div class="iso-box html photoshop wordpress mobile col-md-4 col-sm-6 col-xs-12">
               				 	<a href="images/portfolio-img1.jpg" data-lightbox-gallery="portfolio-gallery"><img src="images/portfolio-img1.jpg" alt="portfolio img"></a>
               				 </div>

               				 <div class="iso-box html col-md-4 col-sm-6 col-xs-12">
               				 	<a href="images/portfolio-img2.png" data-lightbox-gallery="portfolio-gallery"><img src="images/portfolio-img2.png" alt="portfolio img"></a>
               				 </div>

               				 <div class="iso-box html col-md-4 col-sm-6 col-xs-12">
               				 	<a href="images/portfolio-img3.png" data-lightbox-gallery="portfolio-gallery"><img src="images/portfolio-img3.png" alt="portfolio img"></a>
               				 </div>

               				 <div class="iso-box html  col-md-6 col-sm-6 col-xs-12">
               				 	<a href="images/portfolio-img4.png" data-lightbox-gallery="portfolio-gallery"><img src="images/portfolio-img4.png" alt="portfolio img"></a>
               				 </div>

               				 <div class="iso-box wordpress col-md-6 col-sm-6 col-xs-12">
               				 	<a href="images/portfolio-img5.png" data-lightbox-gallery="portfolio-gallery"><img src="images/portfolio-img5.png" alt="portfolio img"></a>
               				 </div>

               				 <div class="iso-box photoshop col-md-4 col-sm-6 col-xs-12">
               				 	<a href="images/portfolio-img6.jpg" data-lightbox-gallery="portfolio-gallery"><img src="images/portfolio-img6.jpg" alt="portfolio img"></a>
               				 </div>

               				 <div class="iso-box photoshop col-md-4 col-sm-6 col-xs-12">
               				 	<a href="images/portfolio-img7.jpg" data-lightbox-gallery="portfolio-gallery"><img src="images/portfolio-img7.jpg" alt="portfolio img"></a>
               				 </div>

               				 <div class="iso-box mobile col-md-4 col-sm-6 col-xs-12">
               				 	<a href="images/portfolio-img8.jpg" data-lightbox-gallery="portfolio-gallery"><img src="images/portfolio-img8.jpg" alt="portfolio img"></a>
               				 </div>

               			</div>
               		</div>

				</div>
			</div>
		</div>
	</div>
</div>

<!-- service section -->
<div id="service">
	<div class="container">
		<div class="row">
		<div class="col-md-12 col-sm-12">
				<h2>Knowledge</h2>
		</div>

		<?php
		include("koneksi.php");
		$sql = "SELECT * FROM artikel";
		$hasil = mysqli_query($koneksi, $sql);

		$jmlArtikel = mysqli_num_rows($hasil);
		if ($jmlArtikel > 0) {
			while($row = mysqli_fetch_assoc($hasil)) {
		?> 
			<div class="col-md-4 col-sm-4">
				<h3><?=$row["judul"]; //echo $row["judul] ?></h3>
				<p>
				<?=$row["isi"];  ?>
				</p>
			</div>
		<?php
			}
		}
		?>
		</div>
	</div>
</div>

<!-- divider section -->
<div class="container">
	<div class="row">
		<div class="col-md-1 col-sm-1"></div>
		<div class="col-md-10 col-sm-10">
			<hr>
		</div>
		<div class="col-md-1 col-sm-1"></div>
	</div>
</div>

<!-- pricing section -->
<div id="pricing">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12">
				<h2>Experienced</h2>
			</div>


		<?php
		include("koneksi.php");
		$sql = "SELECT * FROM Experienced";
		$hasil = mysqli_query($koneksi, $sql);

		$jmlArtikel = mysqli_num_rows($hasil);
		if ($jmlArtikel > 0) {
			while($row = mysqli_fetch_assoc($hasil)) {
		?> 
			<div class="col-md-4 col-sm-4">
				<h4><?=$row["judul"]; ?></h4>
				<p><?=$row["isi"]; ?></p>
			</div>
			<?php
			}
		}
		?>
			
			</div>
	</div>
</div>

<!-- divider section -->
<div class="container">
	<div class="row">
		<div class="col-md-1 col-sm-1"></div>
		<div class="col-md-10 col-sm-10">
			<hr>
		</div>
		<div class="col-md-1 col-sm-1"></div>
	</div>
</div>

<!-- contact section -->
<div id="contact">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12">
				<h2>Keep in touch</h2>
			</div>
			<form action="<?php $_SERVER['PHP_SELF'] ?>" method="post" role="form">
			<?php if(!empty($notify)){ ?>
				<p class="notify <?php echo !empty($notifyClass)?$notifyClass:''; ?>"><?php echo $notify; ?></p>
            <?php } 
			
			$notify = '';
$notifyClass = '';
  
if(isset($_POST['submit'])){
    // Membuat variabl untuk menerima data dari form
    $email = $_POST['email'];
    $name = $_POST['name'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
  
    // Cek apakah ada data yang belum diisi
    if(!empty($email) && !empty($name) && !empty($subject) && !empty($message)){
  
        if(filter_var($email, FILTER_VALIDATE_EMAIL) === false){
            $notify = 'Email Anda salah. Silakan ketikan alamat email yang benar.';
            $notifyClass = 'errordiv';
        }else{
            // Pengaturan penerima email dan subjek email
            $toEmail = 'jajajumhara7@gmail.com'; // Ganti dengan alamat email yang Anda inginkan
            $emailSubject = 'Pesan website dari '.$name;
            $htmlContent = '<h2> via Form Kontak Website</h2>
                <h4>Nama</h4><p>'.$name.'</p>
                <h4>Email</h4><p>'.$email.'</p>
                <h4>Subject</h4><p>'.$subject.'</p>
                <h4>Message</h4><p>'.$message.'</p>';
  
            // Mengatur Content-Type header untuk mengirim email dalam bentuk HTML
            $headers = "MIME-Version: 1.0" . "\r\n";
            $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
  
            // Header tambahan
            $headers .= 'From: '.$name.'<'.$email.'>'. "\r\n";
  
            // Kirim email
            if(mail($toEmail,$emailSubject,$htmlContent,$headers)){
                $notify = 'Pesan Anda sudah terkirim dengan sukses !';
                $notifyClass = 'succdiv';
            }else{
                $notify = 'Maaf pesan Anda gagal terkirim, silahkan ulangi lagi.';
                $notifyClass = 'errordiv';
            }
        }
    }else{
        $notify = 'Harap mengisi semua field data';
        $notifyClass = 'errordiv';
    }
}
			?>
			
				<div class="col-md-1 col-sm-1"></div>
				<div class="col-md-10 col-sm-10">
					<div class="col-md-6 col-sm-6">
						<input name="name" type="text" class="form-control" id="name" placeholder="Name">
				  	</div>
					<div class="col-md-6 col-sm-6">
						<input name="email" type="email" class="form-control" id="email" placeholder="Email">
				  	</div>
                    <div class="col-md-12 col-sm-12">
						<input name="subject" type="text" class="form-control" id="subject" placeholder="Subject">
	    	  	  	</div>
					<div class="col-md-12 col-sm-12">
						<textarea name="message" rows="5" class="form-control" id="message" placeholder="Message"></textarea>
					</div>
					<div class="col-md-4 col-sm-4">
						<input name="submit" type="submit" class="form-control" id="submit" value="SEND MESSAGE">
					</div>
				</div>
				<div class="col-md-1 col-sm-1"></div>
			</form>
		</div>
	</div>
</div>






<!-- divider section -->
<div class="container">
	<div class="row">
		<div class="col-md-1 col-sm-1"></div>
		<div class="col-md-10 col-sm-10">
			<hr>
		</div>
		<div class="col-md-1 col-sm-1"></div>
	</div>
</div>

<!-- footer section -->
<footer>
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-sm-6">
				<h2>Contact</h2>
				<p>Email: <span>jajajumhara7@gmail.com</span></p>
				<p>Phone: <span>085777815824</span></p>
			</div>
			<div class="col-md-6 col-sm-6">
				<h2>Social</h2>
				<ul class="social-icons">
					<li><a href="https://www.linkedin.com/in/jaja-jumhara-623568179/" class="fa fa-linkedin"></a></li>
					<li><a href="http://www.facebook.com/jaja.jumhara" class="fa fa-facebook"></a></li>
                    <li><a href="https://www.instagram.com/jajajmhr7/" class="fa fa-instagram"></a></li>
					<li><a href="https://www.tokopedia.com/natha-print" class="fa fa-cart-check "></a></li>
				</ul>
			</div>
		</div>
	</div>
</footer>

<!-- divider section -->
<div class="container">
	<div class="row">
		<div class="col-md-1 col-sm-1"></div>
		<div class="col-md-10 col-sm-10">
			<hr>
		</div>
		<div class="col-md-1 col-sm-1"></div>
	</div>
</div>

<!-- copyright section -->
<div class="copyright">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12">
				<p>Copyright &copy; 2016 Minimax Digital Firm 
                
                - Design: tooplate</p>
			</div>
		</div>
	</div>
</div>

<!-- scrolltop section -->
<a href="#top" class="go-top"><i class="fa fa-angle-up"></i></a>


<!-- javascript js -->	
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>	
<script src="js/nivo-lightbox.min.js"></script>
<script src="js/smoothscroll.js"></script>
<script src="js/jquery.nav.js"></script>
<script src="js/isotope.js"></script>
<script src="js/imagesloaded.min.js"></script>
<script src="js/custom.js"></script>

</body>
</html>