
	<!-- sidenav -->
	<nav class="black">
	   	<a href="#" data-target="slide-out" class="sidenav-trigger"><i class="material-icons gold-text">menu</i></a>
	</nav>
	<!-- end sidenav -->
	
<main>

	<!-- navbar -->
    <ul id="slide-out" class="sidenav sidenav-fixed black">
    	<li>
    		<div class="user-view">
		      	<div class="background">
		        	<img src="<?=base_url('assets/img/admin/cover-navbar-admin.png')?>">
		      	</div>
	      		<!-- <img class="circle" src="<?=base_url('')?>img/admin/Miqu.png"> -->
	      		<span class="white-text name precious-textcolor"><?=$this->session->userdata('nama')?></span>
	      		<span class="white-text email precious-textcolor"><?=$this->session->userdata('email')?></span>
    		</div>
    	</li>

    	<li>
    		<a href="<?=base_url('index.php/admin')?>" class=" gold-text"><i class="material-icons gold-text">home</i>Dashboard</a>
    	</li>
    	<li>
    		<div class="divider"></div>
		</li>
		<?php
		if($this->session->userdata('role') == 1){
			?><li>
			<a class="waves-effect gold-text" href="<?=base_url('index.php/admin/v_user')?>">User</a>
		</li>
    	<li>
    		<a class="waves-effect gold-text" href="<?=base_url('index.php/admin/v_slider')?>">Slider</a>
    	</li>
    	<li>
    		<a class="waves-effect gold-text" href="<?=base_url('index.php/admin/v_pricelist')?>">Price List</a>
    	</li>
    	<li>
    		<a class="waves-effect gold-text" href="<?=base_url('index.php/admin/v_promo')?>">Promo Package</a>
    	</li>
    	<li>
    		<a class="waves-effect gold-text" href="<?=base_url('index.php/admin/v_client')?>">Client</a>
    	</li>
    	<li>
    		<a class="waves-effect gold-text" href="<?=base_url('index.php/admin/v_vendor')?>">Vendor List</a>
    	</li>
    	<li>
    		<a class="waves-effect gold-text" href="<?=base_url('index.php/admin/v_blog')?>">Blog</a>
    	</li>
    	<li>
    		<a class="waves-effect gold-text" href="#">Newsletter</a>
    	</li>
    	<li>
    		<a class="waves-effect gold-text" href="<?=base_url('index.php/admin/v_career')?>">Careers</a>
    	</li>
        <li>
            <a class="waves-effect btn gold-text" href="#!">Bug Report</a>
        </li>
        <li>
            <a class="waves-effect gold-text" href="<?=base_url('index.php/admin/logout')?>">Logout</a>
        </li><?php
		}else if($this->session->userdata('role') == 2){
			?>
		<li>
    		<a class="waves-effect gold-text" href="<?=base_url('index.php/admin/v_blog')?>">Blog</a>
    	</li>
		<li>
            <a class="waves-effect btn gold-text" href="#!">Bug Report</a>
        </li>
		<li>
            <a class="waves-effect gold-text" href="<?=base_url('index.php/admin/logout')?>">Logout</a>
        </li>
		><?php
		}else{
			redirect(site_url('admin/logout'));
		}
		?>
		
  	</ul>
	<!-- end navbar -->
