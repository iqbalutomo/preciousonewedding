
	<!-- pricelist -->
	<section id="pricelist">
		<table id="data-pricelist" class="striped">
			<h6><?= $this->session->flashdata('success'); ?></h6>
			<h6><?= $this->session->flashdata('error'); ?></h6>
			<h5 class="center">DATA PRICE LIST</h5>
			<a href="#info" class="modal-trigger"><i class="material-icons">info_outline</i></a>

			<!-- info -->
				<div id="info" class="modal">
			    <div class="modal-content">
			    	<h5 class="center">Instructions</h5>
			    	<p>Price</p>
			    	<p>Masukkan harga paket price-list, misal harga paket 189jt berarti input seperti ini : IDR 189.000K</p>
			    	<p>Description		: </p>
			    	<p>Untuk menginput/update description bisa click button EDIT DESCRIPTION</p>
			    </div>
			  </div>
			<!-- end info -->

			<!-- table -->
				<thead>
					<tr>
							<th>ID</th>
							<th>Title Price List</th>
							<th>Price</th>
							<th>Option</th>
					</tr>
				</thead>

				<tbody>
					<?php
					$no = 1;
					foreach ($pricelist as $pricerow) {
						?>
						<tr>
							<td><?=$no++?></td>
							<td><?=$pricerow->nama?></td>
							<td><?=$pricerow->harga?></td>
							<td>
								<!-- tips : ambil id-nya untuk mengedit, taro didalam a/button pakai href/target/onclick -->
								<a href="#edit" onclick="loadFormEdit(<?=$pricerow->id?>)" class="waves-effect waves-light btn-small modal-trigger precious-bgcolor"><i class="material-icons left">color_lens</i>Edit</a>  
								<a href="#description" onclick="loadFormEditDesc(<?=$pricerow->id?>)" class="waves-effect waves-light btn-small modal-trigger gold-bgcolor"><i class="material-icons left">border_color</i>Edit Description</a>
								<?php
									switch($pricerow->is_active){
										case 1:
										?>
										<a class="waves-effect waves-light btn-small modal-trigger red" href="<?=site_url('admin/status_pricelist/'.$pricerow->id)?>"><i class="material-icons left">clear</i>Deactivate</a>
										<?php
										break;
										case 0:
										?>
										<a class="waves-effect waves-light btn-small modal-trigger green" href="<?=site_url('admin/status_pricelist/'.$pricerow->id)?>"><i class="material-icons left">check</i>Activate</a>
										<?php
										break;
									}
								?>
							</td>
						</tr>

						<?php
					}
					?>
				</tbody>
	    </table>
	    <!-- end table -->

	    <!-- modal edit -->
	    <div id="edit" class="modal">
		    <div class="modal-content">
					<form action="<?=site_url('admin/update_pricelist')?>" method="post">
						<div id="form_edit">
							
						</div>
					</form>
		    </div>
		</div>
	    <!-- end modal edit -->

	    <!-- modal description -->
	    <div id="description" class="modal">
		    <div class="modal-content">
		    	<h5 class="center">EDIT DATA</h5>
		      <form action="<?=site_url('admin/update_desc_pricelist')?>" method="post">
						<div id="form_edit_desc">
		      	</div>
		      </form>
		    </div>
		</div>
	    <!-- end modal description -->
	    	
	    </div>
	</section>
	<!-- end slider -->
