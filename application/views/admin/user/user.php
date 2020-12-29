
	<!-- user -->
	<section id="user">
        <table id="data-user" class="striped">
            <h6><?= $this->session->flashdata('success'); ?></h6>
            <h6><?= $this->session->flashdata('error'); ?></h6>
			<h5 class="center">DATA USER</h5>
			<a href="#upload" class="waves-effect waves-light btn modal-trigger black"><i class="material-icons left">file_upload</i>Add new</a>
			<!-- info -->
			<div id="info" class="modal">
					<div class="modal-content">
						<h5 class="center">Instructions</h5>

						<p>Username 	: Masukkan Username admin untuk login nanti.</p>
						<p>Password 	: Masukkan password untuk akun admin (Min. 6 Karakter).</p>
						<p>Password Confirmation	: Masukkan konfirmasi password untuk akun admin (Min. 6 Karakter sama dengan password).</p>
						<p>Email 	    : Masukkan email admin.</p>
						<p>Name      	: Masukkan nama admin.</p>
						<p>Role 	    : Pilih role/jabatan dari admin, guna role/jabatan untuk membatasi kewenangan admin.</p>
					</div>
				</div>
			<!-- end info -->
			<!-- upload -->
				<!-- Modal Structure -->
				<div id="upload" class="modal">
					<div class="modal-content">
						<a href="#info" class="modal-trigger"><i class="material-icons">info_outline</i></a>
						<h5 class="center">INPUT DATA</h5>
						<form action="<?=base_url('index.php/admin/c_user')?>" method="post">
							<div class="input-field">
								<input id="username" name="username" type="text" class="validate" required="" aria-required="true">
								<label for="username">Username</label>
							</div>
							<div class="input-field">
								<input id="password" name="password" type="password" class="validate" required="" aria-required="true">
								<label for="password">Password</label>
							</div>		
							<div class="input-field">
								<input id="passconf" name="passconf" type="password" class="validate" required="" aria-required="true">
								<label for="passconf">Password Confirmation</label>
							</div>
							<div class="input-field">
								<input id="email" name="email" type="email" class="validate" required="" aria-required="true">
								<label for="email">Email</label>
							</div>
							<div class="input-field">
								<input id="nama" name="nama" type="text" class="validate" required="" aria-required="true">
								<label for="nama">Name</label>
							</div>
							<div class="input-field">
								<select id="role" name="role" class="browser-default" required="" aria-required="true"> 
									<option value="0" disabled selected>Role</option>
									<option value="1">Root</option>
									<option value="2">Blog Admin</option>
									<!--Penjelasan Jabatan/Role Admin-->
									<!--Root memiliki akses untuk semua menu-->
									<!--Blog Admin memiliki akses untuk menu blog saja-->
								</select>
								<!--label for="role">Role</label-->
							</div>
							<button class="btn waves-effect waves-light gold-bgcolor" type="submit">Submit</button>
						</form>
					</div>
				</div>
			<!-- end upload -->
			<!-- table -->
				<thead>
					<tr>
						<th>ID</th>
						<th>Username</th>
						<th>Name</th>
						<th>Role</th>
						<th>Option</th>
					</tr>
				</thead>
				<tbody>
					<?php
						foreach ($user as $userrow) {
					?>
					<tr>
						<td><?=$userrow->id;?></td>
						<td><?=$userrow->username;?></td>
						<td><?=$userrow->nama;?></td>
						<td><?php
								if($userrow->role == 1){
										?>Root<?php
								}else{
										?>Blog Admin<?php
								}
							?>
						</td>
						<td>
							<a href="#edit" onclick="loadFormEdit(<?=$userrow->id?>)" class="waves-effect waves-light btn-small modal-trigger precious-bgcolor"><i class="material-icons left">color_lens</i>Edit</a>  
							<?php
								if($userrow->username != $this->session->userdata('username')){
									switch($userrow->is_active){
										case 1:
										?>
										<a class="waves-effect waves-light btn-small modal-trigger red" href="<?=site_url('admin/status_user/'.$userrow->id)?>"><i class="material-icons left">clear</i>Deactivate</a>
										<?php
										break;
										case 0:
										?>
										<a class="waves-effect waves-light btn-small modal-trigger green" href="<?=site_url('admin/status_user/'.$userrow->id)?>"><i class="material-icons left">check</i>Activate</a>
										<?php
										break;
									}
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
						<h5 class="center">EDIT DATA</h5>
						<form action="<?=site_url('admin/update_user')?>" method="post">
						<div id="form_edit">
							
						</div>
						</form>
					</div>
					</div>
				</div>
	    <!-- end modal edit -->
	    	
	    </div>
	</section>
	<!-- end slider -->

