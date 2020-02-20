<!DOCTYPE html>
<html lang="en">
<head>
	<title>Taman Kuranji Darussalam</title>
	<meta charset="utf-8">
	<meta name="author" content="pixelhint.com">
	<meta name="description" content="Sublime Stunning free HTML5/CSS3 website template"/>
	<link rel="stylesheet" type="text/css" href="css/reset.css">
	<link rel="stylesheet" type="text/css" href="css/fancybox-thumbs.css">
	<link rel="stylesheet" type="text/css" href="css/fancybox-buttons.css">
	<link rel="stylesheet" type="text/css" href="css/fancybox.css">
	<link rel="stylesheet" type="text/css" href="css/animate.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/bootstrap-theme.min.css">
    <link href="grid.css" rel="stylesheet">
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/fancybox.js"></script>
    <script type="text/javascript" src="js/fancybox-buttons.js"></script>
    <script type="text/javascript" src="js/fancybox-media.js"></script>
    <script type="text/javascript" src="js/fancybox-thumbs.js"></script>
    <script type="text/javascript" src="js/wow.js"></script>
    <script type="text/javascript" src="js/main.js"></script>
</head>
<body>

	<section class="billboard light">
		<header class="wrapper light">
			<a href="#"><img class="logo" src="img/acn.png" alt=""/></a>
			<br><br>
			<div class="container">
			<div class="dropdown">
				<ul class="nav navbar-nav navbar-right">
				<li class="active"><a href="index.php">Beranda</a></li>
				<li class="active">
				<a class="dropdown-toggle" data-toggle="dropdown">Produk Unggulan<span class="caret"></span></a>
				<ul class="dropdown-menu">
				<li><a href="#">Taman Kuranji Darussalam</a></li>
				<li><a href="#">Taman Kuranji Bogor</a></li>
				</ul>
				</li>
				<li><a href="#">Tentang Kami</a></li>
				</ul>
				</div>
				</div>
			</div>
		</div>
		</header>

		<div class="caption light animated wow fadeInDown clearfix">
		<br><br><br><br><br><br><br><br><br><br><br><br><br><br>
			<p>Komplek Pertokoan Uje BP,By Pass Km. 9, Samping Polsek Kuranji,Kota Padang, Sumatera Barat 25586 (ACN Property).</p>
			<hr>
		</div>
		<div class="shadow"></div>
	</section><!--  End billboard  -->


	<section class="services wrapper">
		<ul class="clearfix">
			<li class="animated wow fadeInDown">
				<img class="icon" src="img/icon1.png" alt=""/>
				<span class="separator"></span>
				<h2>Tanpa Denda</h2>
				<p>sed do eiusmod tempor incididunt ut labore et dolore magna aliqua voluptate velit esse
				cillum dolore.</p>
			</li>
			<li class="animated wow fadeInDown"  data-wow-delay=".2s">
				<img class="icon" src="img/icon2.png" alt=""/>
				<span class="separator"></span>
				<h2>Tanba Riba</h2>
				<p>aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
			</li>
			<li class="animated wow fadeInDown"  data-wow-delay=".4s">
				<img class="icon" src="img/icon3.png" alt=""/>
				<span class="separator"></span>
				<h2>Tanpa Sita</h2>
				<p>nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat enim ad minim veniam.</p>
			</li>
		</ul>
	</section><!--  End services  -->
	<section class="blog_posts">
		<div class="wrapper">
			<div class="title animated wow fadeIn">
				<h2>Video Taman Kuranji</h2>
				<h3>Video Taman Kuranji Darussalam</h3>
				<hr class="separator"/>
			</div>

			<ul class="clearfix">
				<li class="animated wow fadeInDown">
					<div class="box-content">
							
							<?php 
							function youtube($url){
								$link=str_replace('http://www.youtube.com/watch?v=', '', $url);
								$link=str_replace('https://www.youtube.com/watch?v=', '', $link);
								$data='<object width="400" height="250" data="http://www.youtube.com/v/'.$link.'" type="application/x-shockwave-flash">
								<param name="src" value="http://www.youtube.com/v/'.$link.'" />
								</object>';
								return $data;
							}
							include "admin/koneksi.php";							 
							$ambil_data= mysql_query("SELECT * FROM video");							 
								while($data=mysql_fetch_array($ambil_data))	
								{		
										echo "&nbsp;&nbsp;";
										echo youtube($data['url']);
										echo "&nbsp;&nbsp;";
 								}
								
							?>
							</div>
						</div>
				</li>
			</ul>
		</div>
	</section><!--  End blog_posts  -->

	<section class="testimonials wrapper">
		<div class="title animated wow fadeIn">
			<h2>Kesan dan Pesan Pembeli</h2>
			<h3>what clients are saying about us</h3>
			<hr class="separator"/>
		</div>
		<?php
			include "admin/koneksi.php";
			$ambil_data= mysql_query("SELECT * FROM kesan order by id desc limit 3");							 
			while($data=mysql_fetch_array($ambil_data))	
				{	
					echo "	
							<div id='kiri'>
							<ul class='clearfix'>
							<li class='animated wow fadeInDown'>
							<p><img src='img/quotes.png' alt='' class='quotes'>".$data['komentar'].
							"<span class='triangle'></span></p>";
					echo "<img src='admin/images_kesan/" . $data['foto'] . "' width='50' height='50' class='avatar'>";
					echo "
									<div class='client'>
									<div class='client_details'>
									<h5>".$data['nama']."</h5>
									<h5>".$data['pekerjaan']."</h5>
									</div></div>";
					echo "</li></ul></div>";
				}
				echo "<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>";
		?>
</ul>
	</section><!--  End testimonials  -->

	<section class="blog_posts">
		<div class="wrapper">
			<div class="title animated wow fadeIn">
				<h2>Taman Kuranji</h2>
				<h3>the most recent posts from our blog</h3>
				<hr class="separator"/>
			</div>

			<ul class="clearfix">
				<li class="animated wow fadeInDown">
					<div class="media">
						<div class="date">
							<span class="day">18</span>
							<span class="month">Jan</span>
						</div>
						<a href="#">
							<img src="img/tkd.jpg" alt=""/>
						</a>
					</div>
				</li>
				<li class="animated wow fadeInDown" data-wow-delay=".2s">
					<div class="media">
						<div class="date">
							<span class="day">18</span>
							<span class="month">Feb</span>
						</div>
						<a href="#">
							<img src="img/tkb.jpg" alt=""/>
						</a>
					</div>					
				</li>
			</ul>
		</div>
	</section><!--  End blog_posts  -->
	<section class="testimonials wrapper">
		<div class="title animated wow fadeIn">
			<h2>Lokasi Taman Kuranji Darussalam</h2>
			<hr class="separator"/>
			<img src="img/map.jpg">
		</div>
	</section><!--  End testimonials  -->

	<footer>
		<div class="wrapper">
			<div class="rights">
				<img src="img/footer_logo.png" alt="" class="footer_logo"/>
				<p>©Muslim Technology. All Rights Reserved 2018</p>
			</div>
		</div>		
	</footer><!--  End footer  -->
    <script src='../ga.js'></script>
    <script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>