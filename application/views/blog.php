<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Our Blog | The Precious One Wedding</title>

	<!--Let browser know website is optimized for mobile-->
  	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>

  	<link rel="icon" href="<?=base_url('assets/img/fav-icon/fav-icon.png')?>" type="image" sizes="16x16">

	<!-- Preloader -->
	<link rel="stylesheet" href="<?=base_url('assets/css/preloader.css')?>">

	<!-- Materialize css -->
	<link rel="stylesheet" href="<?=base_url('assets/css/materialize.min.css')?>">

	<!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

  <!-- font google -->
  <link href="https://fonts.googleapis.com/css?family=Oleo+Script" rel="stylesheet">

	<!-- Animate.css -->
  <link rel="stylesheet" href="<?=base_url('')?>assets/css/animate.min.css">

  <!-- client css -->
  <link rel="stylesheet" href="<?=base_url('')?>assets/css/blog.css">



	<!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
<body>
	<!-- PRELOADER -->
	<!-- Preloader dijadiin partials/static sama kaya footer -->
      <div class="preloader-background">
          <div class="lds-css ng-scope">
            <div class="lds-flickr">
              <div></div>
              <div></div>
              <div></div>
            </div>
          </div>
      </div>
	<!-- END PRELOADER -->


	<!-- NAVBAR -->
	<div class="navbar-fixed">
	    <nav class="font-google precious-bgcolor">
	      <div class="nav-wrapper container">
	        <a href="<?=site_url('home');?>" class="brand-logo gold-text center"><img src="<?=base_url('assets/img/logo/logoprecious.png');?>" width="200" alt=""></a>
	        <a href="<?=site_url('home');?>" class="sidenav-trigger"><i class="material-icons gold-text">arrow_back</i></a>
	        <ul id="top-menu" class="left hide-on-med-and-down">
	          <li class="active"></li>
	          <li><a href="<?=site_url('home');?>"><i class="material-icons gold-text">arrow_back</i></a></li>
	        </ul>
	      </div>
	    </nav>
	</div>
	<!-- END NAVBAR -->


	<!-- HEADER -->
    <div id="intro" class="view">

        <div class="">

            <div class="title-header">
                <!-- Heading -->
                 <h3 class="center font-google gold-text">
                  Our Blog
                 </h3>
           
                <!-- Description -->
                <h5 class="light center white-text">Sharing tips mengenai pernikahan</h5>
        	</div>

        </div>

    </div>
	<!-- END HEADER -->


	<!-- CONTENT -->
  <section id="content">
    <div class="container">
      <div class="row">
        <ul class="tabs tabs-fixed-width tab-demo z-depth-1">
          <li class="tab"><a href="#wpreparation">WEDDING PREPARATION</a></li>
          <li class="tab"><a class="active" href="#wides">WEDDING IDEAS</a></li>
          <li class="tab"><a href="#honeymoon_travel">HONEYMOON & TRAVEL</a></li>
        </ul>
	  </div>
	</div>

    <!-- wedding preparation -->
    <div id="wpreparation" class="col s12">
    	<div class="container">
				<div class="row">
					<?php foreach($blog as $rowblog){ 
						if($rowblog->type == 1){?>
					<div class="col s12 m4 l4 xl4">
						<div class="card medium">
							<div class="card-image">
								<img src="<?=base_url($rowblog->image_loc.'/'.$rowblog->cover_image);?>">
							</div>
							<div class="card-content">
									<span class="card-title"><?=$rowblog->judul;?></span>
								<p class="gold-text font-google">
								<p class="light gold-text"><?php
								$date = date_create($rowblog->updated_at);
								echo date_format($date,"d F Y");
								?></p>
								<p class="light gold-text">Wedding Preparation</p><br>
								</p>
								<div class="light precious-textcolor"><?=$rowblog->konten?></div>
							</div>
							<div class="card-action">
								<a href="<?=site_url('home/content/'.$rowblog->ID);?>" class="precious-textcolor">Read More</a>
							</div>
						</div>
					</div>
					<?php }
					} ?>	

			</div>
		</div>
    </div>
    
	<!-- wedding ideas -->
    <div id="wides" class="col s12">
    	<div class="container">
        	<div class="row">

        		<?php foreach($blog as $rowblog){ 
						if($rowblog->type == 2){?>
					<div class="col s12 m4 l4 xl4">
						<div class="card medium">
							<div class="card-image">
								<img src="<?=base_url($rowblog->image_loc.'/'.$rowblog->cover_image);?>">
							</div>
							<div class="card-content">
									<span class="card-title"><?=$rowblog->judul;?></span>
								<p class="gold-text font-google">
								<p class="light gold-text"><?php
								$date = date_create($rowblog->updated_at);
								echo date_format($date,"d F Y");
								?></p>
								<p class="light gold-text">Wedding Ideas</p><br>
								</p>
								<div class="light precious-textcolor"><?=$rowblog->konten?></div>
							</div>
							<div class="card-action">
								<a href="<?=site_url('home/content/'.$rowblog->ID);?>" class="precious-textcolor">Read More</a>
							</div>
						</div>
					</div>
					<?php }
					} ?>	
			</div>
		</div>
    </div>
    
	<!-- honeymoon -->
    <div id="honeymoon_travel" class="col s12">
    	<div class="container">
        	<div class="row">

        		<?php foreach($blog as $rowblog){ 
						if($rowblog->type == 3){?>
					<div class="col s12 m4 l4 xl4">
						<div class="card medium">
							<div class="card-image">
								<img src="<?=base_url($rowblog->image_loc.'/'.$rowblog->cover_image);?>">
							</div>
							<div class="card-content">
									<span class="card-title"><?=$rowblog->judul;?></span>
								<p class="gold-text font-google">
								<p class="light gold-text"><?php
								$date = date_create($rowblog->updated_at);
								echo date_format($date,"d F Y");
								?></p>
								<p class="light gold-text">Honeymoon & Travel</p><br>
								</p>
								<div class="light precious-textcolor"><?=$rowblog->konten?></div>
							</div>
							<div class="card-action">
								<a href="<?=site_url('home/content/'.$rowblog->ID);?>" class="precious-textcolor">Read More</a>
							</div>
						</div>
					</div>
					<?php }
					} ?>					

			</div>
		</div>
    </div>
  </section>
	<!-- END CONTENT -->

	
	<!-- FOOTER -->
		<footer id="footer" class="page-footer precious-bgcolor">

			<div class="container">
			<div class="row">

				<div class="col s12 m3 l3 xl3">
					<p class="gold-text">NEWSLETTER</p>
					<form action="">
						<div class="row">
							<div class="col s12">
								<div class="input-field inline">
									<input id="email_subscribe" type="email" class="validate" required="" aria-required="true">
									<label for="email_subscribe">Email Anda</label>
									<span class="helper-text" data-error="Masukkan email dengan benar" data-success="Email sesuai"></span>
									<button class="modal-close btn modal-trigger gold-bgcolor" type="submit" name="action">subscribe!</button>
									<span class="helper-text gold-text" >Subscribe untuk mendapatkan info paket promo dan price list secara update</span>
								</div>
							</div>
						</div>
					</form>
				</div>

				<div class="col s12 m3 l3 xl3 offset-xl1">
					<ul>
						<li><p class="gold-text">SITEMAP</p></li>
						<li><a class="white-text text-lighten-2" href="<?=site_url('#about')?>">About Us</a></li>
						<li><a class="white-text text-lighten-2" href="<?=site_url('#promo')?>">Price List</a></li>
						<li><a class="white-text text-lighten-2" href="<?=site_url('#clients')?>">Clients</a></li>
						<li><a class="white-text text-lighten-2" href="<?=site_url('#vendor')?>">Vendor List</a></li>
						<li><a class="white-text text-lighten-2" href="<?=site_url('#blog')?>">Blog</a></li>
						<li><a class="white-text text-lighten-2" href="<?=site_url('#contact-us')?>">Contact Us</a></li>
					</ul>
				</div>

				<div class="col s12 m3 l3 xl3">
					<ul>
						<li><a class="white-text text-lighten-2" href="<?=site_url('home/career')?>">Careers</a></li>
						<li><a class="white-text text-lighten-2" href="<?=site_url('home/terms')?>">Terms & Conditions</a></li>
						<li><a class="white-text text-lighten-2" href="<?=site_url('home/privacy')?>">Privacy Policy</a></li><br>
					</ul>
				</div>

				<div class="col s12 m3 l3 xl2 center">
					<ul>
						<p class="gold-text">FOLLOW US</p>
						<a href=""><img src="<?=base_url('assets/img/icon/instagram.png');?>" width="25" alt="">&nbsp;&nbsp;&nbsp;</a>
						<a href=""><img src="<?=base_url('assets/img/icon/facebook.png');?>" width="25" alt="">&nbsp;&nbsp;&nbsp;</a>
						<a href=""><img src="<?=base_url('assets/img/icon/youtube.png');?>" width="28" alt=""></a>
					</ul>
				</div>


			</div>
		</div>

		<div class="footer-copyright">
			<div class="container">
				<div class="row">
					<div class="col s12">
						<div class="center">
							<p class="gold-text">Your Wedding Day is Our Big Day</p>
							© 2018 The Precious One Wedding
							<!-- <p>Made with <i class="tiny material-icons">favorite</i> in <a class="blue-text text-lighten-3" href="https://instagram.com/iqbalutomo" target="_blank">Jakarta</a></p> -->
						</div>
					</div>
				</div>
			</div>
		</div>

	</footer>
	<!-- END FOOTER -->






	<!-- Preloader -->
	<script type="text/javascript" src="<?=base_url('assets/js/preloader.js')?>"></script>

	<!-- Materialize JS -->
	<script type="text/javascript" src="<?=base_url('assets/js/materialize.min.js')?>"></script>
  
  <!-- Jquery -->
  <script type="text/javascript" src="<?=base_url('assets/jquery/jquery-3.3.1.min.js')?>"></script>
  
  <!-- Custom Blog -->
  <script type="text/javascript" src="<?=base_url('assets/js/custom_blog.js')?>"></script>


</body>
</html>