	<!-- vendor -->
	<section id="vendor">
		<h3 class="center">DATA VENDOR</h3><hr>

		<!-- makeup & gown -->
		<h5 class="center">Make Up & Gown</h5>
			<a href="#upload-makeup" class="waves-effect waves-light btn modal-trigger black"><i class="material-icons left">file_upload</i>upload</a>

			<!-- upload -->
			  <!-- Modal Structure -->
			  <div id="upload-makeup" class="modal">
			    <div class="modal-content">

			      <form action="">

			      	<div class="input-field">
			          <input id="vendor_makeup" type="text" class="validate" required="" aria-required="true">
			          <label for="vendor_makeup">Vendor Name</label>
			        </div>

			        <button class="btn waves-effect waves-light gold-bgcolor" type="submit" name="action">UPLOAD</button>

			      </form>
			    </div>
			  </div>
			<!-- end upload -->

				<table id="data-makeup" class="striped">
	        <thead>
	          <tr>
	              <th>ID</th>
	              <th>Vendor Name</th>
	              <th>Option</th>
	          </tr>
	        </thead>

	        <tbody>
	          <tr>
	            <td>1</td>
	            <td>Dinda Sakato</td>
	            <td>
	            	<!-- tips : ambil id-nya untuk mengedit, taro didalam a/button pakai href/target/onclick -->
	            	<a href="#edit-makeup" class="waves-effect waves-light btn-small modal-trigger precious-bgcolor"><i class="material-icons left">color_lens</i>Edit</a>  
	            	<a href="#!" class="waves-effect waves-light btn-small modal-trigger red"><i class="material-icons left">clear</i>Delete</a>
	            </td>
	          </tr>

	          <tr>
	            <td>2</td>
	            <td>Iva Yuniskha</td>
	            <td>
	            	<!-- tips : ambil id-nya untuk mengedit, taro didalam a/button pakai href/target/onclick -->
	            	<a href="#edit-makeup" class="waves-effect waves-light btn-small modal-trigger precious-bgcolor"><i class="material-icons left">color_lens</i>Edit</a>  
	            	<a href="#!" class="waves-effect waves-light btn-small modal-trigger red"><i class="material-icons left">clear</i>Delete</a>
	            </td>
	          </tr>

			  <tr>
	            <td>3</td>
	            <td>Ratu Wedding</td>
	            <td>
	            	<!-- tips : ambil id-nya untuk mengedit, taro didalam a/button pakai href/target/onclick -->
	            	<a href="#edit-makeup" class="waves-effect waves-light btn-small modal-trigger precious-bgcolor"><i class="material-icons left">color_lens</i>Edit</a>  
	            	<a href="#!" class="waves-effect waves-light btn-small modal-trigger red"><i class="material-icons left">clear</i>Delete</a>
	            </td>
	          </tr>

	          <tr>
	            <td>4</td>
	            <td>Red Berry</td>
	            <td>
	            	<!-- tips : ambil id-nya untuk mengedit, taro didalam a/button pakai href/target/onclick -->
	            	<a href="#edit-makeup" class="waves-effect waves-light btn-small modal-trigger precious-bgcolor"><i class="material-icons left">color_lens</i>Edit</a>  
	            	<a href="#!" class="waves-effect waves-light btn-small modal-trigger red"><i class="material-icons left">clear</i>Delete</a>
	            </td>
	          </tr>
	        </tbody>
	    </table>
	    <!-- end table -->

	    <!-- modal edit -->
	    <div id="edit-makeup" class="modal">
		    <div class="modal-content">
		    	<h5 class="center">EDIT VENDOR MAKEUP & GOWN</h5>

		      <form action="">

		      	<div class="input-field">
		          <input id="edit_vendor_makeup" type="text" class="validate" required="" aria-required="true">
		          <label for="edit_vendor_makeup">Vendor Name</label>
		        </div>

		        <button class="btn waves-effect waves-light gold-bgcolor" type="submit" name="action">UPDATE</button>

		      </form>
		    </div>
		</div>
	    <!-- end modal edit -->
	    <!-- end makeup & gown -->


	    <!-- photo & video -->
		<h5 class="center">Photo & Video</h5>
		<table id="data-photo" class="striped">
			<a href="#upload-photo" class="waves-effect waves-light btn modal-trigger black"><i class="material-icons left">file_upload</i>upload</a>

			<!-- upload -->
			  <!-- Modal Structure -->
			  <div id="upload-photo" class="modal">
			    <div class="modal-content">
			    	<h5 class="center">INPUT VENDOR PHOTO & VIDEO</h5>

			      <form action="">

			      	<div class="input-field">
			          <input id="vendor_photo" type="text" class="validate" required="" aria-required="true">
			          <label for="vendor_photo">Vendor Name</label>
			        </div>

			        <button class="btn waves-effect waves-light gold-bgcolor" type="submit" name="action">UPLOAD</button>

			      </form>
			    </div>
			  </div>
			<!-- end upload -->

			<!-- table -->
	        <thead>
	          <tr>
	              <th>ID</th>
	              <th>Vendor Name</th>
	              <th>Option</th>
	          </tr>
	        </thead>

	        <tbody>
	          <tr>
	            <td>1</td>
	            <td>Precious Potret</td>
	            <td>
	            	<!-- tips : ambil id-nya untuk mengedit, taro didalam a/button pakai href/target/onclick -->
	            	<a href="#edit-photo" class="waves-effect waves-light btn-small modal-trigger precious-bgcolor"><i class="material-icons left">color_lens</i>Edit</a>  
	            	<a href="#!" class="waves-effect waves-light btn-small modal-trigger red"><i class="material-icons left">clear</i>Delete</a>
	            </td>
	          </tr>

	          <tr>
	            <td>2</td>
	            <td>Verve Photo</td>
	            <td>
	            	<!-- tips : ambil id-nya untuk mengedit, taro didalam a/button pakai href/target/onclick -->
	            	<a href="#edit-photo" class="waves-effect waves-light btn-small modal-trigger precious-bgcolor"><i class="material-icons left">color_lens</i>Edit</a>  
	            	<a href="#!" class="waves-effect waves-light btn-small modal-trigger red"><i class="material-icons left">clear</i>Delete</a>
	            </td>
	          </tr>

	          <tr>
	            <td>3</td>
	            <td>Mirza Photography</td>
	            <td>
	            	<!-- tips : ambil id-nya untuk mengedit, taro didalam a/button pakai href/target/onclick -->
	            	<a href="#edit-photo" class="waves-effect waves-light btn-small modal-trigger precious-bgcolor"><i class="material-icons left">color_lens</i>Edit</a>  
	            	<a href="#!" class="waves-effect waves-light btn-small modal-trigger red"><i class="material-icons left">clear</i>Delete</a>
	            </td>
	          </tr>
	        </tbody>
	    </table>
	    <!-- end table -->

	    <!-- modal edit -->
	    <div id="edit-photo" class="modal">
		    <div class="modal-content">
		    	<h5 class="center">EDIT VENDOR PHOTO & VIDEO</h5>

		      <form action="">

		      	<div class="input-field">
		          <input id="edit_vendor_photo" type="text" class="validate" required="" aria-required="true">
		          <label for="edit_vendor_photo">Vendor Name</label>
		        </div>

		        <button class="btn waves-effect waves-light gold-bgcolor" type="submit" name="action">UPDATE</button>

		      </form>
		    </div>
		</div>
	    <!-- end modal edit -->
	    <!-- end photo & video -->


		<!-- decoration -->
		<h5 class="center">Decoration</h5>
		<table id="data-decor" class="striped">
			<a href="#upload-decor" class="waves-effect waves-light btn modal-trigger black"><i class="material-icons left">file_upload</i>upload</a>

			<!-- upload -->
			  <!-- Modal Structure -->
			  <div id="upload-decor" class="modal">
			    <div class="modal-content">
			    	<h5 class="center">INPUT VENDOR DECORATION</h5>

			      <form action="">

			      	<div class="input-field">
			          <input id="vendor_decor" type="text" class="validate" required="" aria-required="true">
			          <label for="vendor_decor">Vendor Name</label>
			        </div>

			        <button class="btn waves-effect waves-light gold-bgcolor" type="submit" name="action">UPLOAD</button>

			      </form>
			    </div>
			  </div>
			<!-- end upload -->

			<!-- table -->
	        <thead>
	          <tr>
	              <th>ID</th>
	              <th>Vendor Name</th>
	              <th>Option</th>
	          </tr>
	        </thead>

	        <tbody>
	          <tr>
	            <td>1</td>
	            <td>Adam Decor's</td>
	            <td>
	            	<!-- tips : ambil id-nya untuk mengedit, taro didalam a/button pakai href/target/onclick -->
	            	<a href="#edit-decor" class="waves-effect waves-light btn-small modal-trigger precious-bgcolor"><i class="material-icons left">color_lens</i>Edit</a>  
	            	<a href="#!" class="waves-effect waves-light btn-small modal-trigger red"><i class="material-icons left">clear</i>Delete</a>
	            </td>
	          </tr>

	          <tr>
	            <td>2</td>
	            <td>Rich Art</td>
	            <td>
	            	<!-- tips : ambil id-nya untuk mengedit, taro didalam a/button pakai href/target/onclick -->
	            	<a href="#edit-decor" class="waves-effect waves-light btn-small modal-trigger precious-bgcolor"><i class="material-icons left">color_lens</i>Edit</a>  
	            	<a href="#!" class="waves-effect waves-light btn-small modal-trigger red"><i class="material-icons left">clear</i>Delete</a>
	            </td>
	          </tr>
	        </tbody>
	    </table>
	    <!-- end table -->

	    <!-- modal edit -->
	    <div id="edit-decor" class="modal">
		    <div class="modal-content">
		    	<h5 class="center">EDIT VENDOR DECORATION</h5>

		      <form action="">

		      	<div class="input-field">
		          <input id="edit_vendor_decor" type="text" class="validate" required="" aria-required="true">
		          <label for="edit_vendor_decor">Vendor Name</label>
		        </div>

		        <button class="btn waves-effect waves-light gold-bgcolor" type="submit" name="action">UPDATE</button>

		      </form>
		    </div>
		</div>
	    <!-- end modal edit -->
	    <!-- end decoration -->


	    <!-- catering -->
		<h5 class="center">Catering</h5>
		<table id="data-catering" class="striped">
			<a href="#upload-catering" class="waves-effect waves-light btn modal-trigger black"><i class="material-icons left">file_upload</i>upload</a>

			<!-- upload -->
			  <!-- Modal Structure -->
			  <div id="upload-catering" class="modal">
			    <div class="modal-content">
			    	<h5 class="center">INPUT VENDOR CATERING</h5>

			      <form action="">

			      	<div class="input-field">
			          <input id="vendor_catering" type="text" class="validate" required="" aria-required="true">
			          <label for="vendor_catering">Vendor Name</label>
			        </div>

			        <button class="btn waves-effect waves-light gold-bgcolor" type="submit" name="action">UPLOAD</button>

			      </form>
			    </div>
			  </div>
			<!-- end upload -->

			<!-- table -->
	        <thead>
	          <tr>
	              <th>ID</th>
	              <th>Vendor Name</th>
	              <th>Option</th>
	          </tr>
	        </thead>

	        <tbody>
	          <tr>
	            <td>1</td>
	            <td>Adam Catering</td>
	            <td>
	            	<!-- tips : ambil id-nya untuk mengedit, taro didalam a/button pakai href/target/onclick -->
	            	<a href="#edit-catering" class="waves-effect waves-light btn-small modal-trigger precious-bgcolor"><i class="material-icons left">color_lens</i>Edit</a>  
	            	<a href="#!" class="waves-effect waves-light btn-small modal-trigger red"><i class="material-icons left">clear</i>Delete</a>
	            </td>
	          </tr>

	          <tr>
	            <td>2</td>
	            <td>Alfabet</td>
	            <td>
	            	<!-- tips : ambil id-nya untuk mengedit, taro didalam a/button pakai href/target/onclick -->
	            	<a href="#edit-catering" class="waves-effect waves-light btn-small modal-trigger precious-bgcolor"><i class="material-icons left">color_lens</i>Edit</a>  
	            	<a href="#!" class="waves-effect waves-light btn-small modal-trigger red"><i class="material-icons left">clear</i>Delete</a>
	            </td>
	          </tr>

	          <tr>
	            <td>3</td>
	            <td>Puspa Catering</td>
	            <td>
	            	<!-- tips : ambil id-nya untuk mengedit, taro didalam a/button pakai href/target/onclick -->
	            	<a href="#edit-catering" class="waves-effect waves-light btn-small modal-trigger precious-bgcolor"><i class="material-icons left">color_lens</i>Edit</a>  
	            	<a href="#!" class="waves-effect waves-light btn-small modal-trigger red"><i class="material-icons left">clear</i>Delete</a>
	            </td>
	          </tr>
	        </tbody>
	    </table>
	    <!-- end table -->

	    <!-- modal edit -->
	    <div id="edit-catering" class="modal">
		    <div class="modal-content">
		    	<h5 class="center">EDIT VENDOR CATERING</h5>

		      <form action="">

		      	<div class="input-field">
		          <input id="edit_vendor_catering" type="text" class="validate" required="" aria-required="true">
		          <label for="edit_vendor_catering">Vendor Name</label>
		        </div>

		        <button class="btn waves-effect waves-light gold-bgcolor" type="submit" name="action">UPDATE</button>

		      </form>
		    </div>
		</div>
	    <!-- end modal edit -->
	    <!-- end catering -->

	    <!-- entertainment -->
		<h5 class="center">Entertainment</h5>
		<table id="data-entertainment" class="striped">
			<a href="#upload-entertainment" class="waves-effect waves-light btn modal-trigger black"><i class="material-icons left">file_upload</i>upload</a>

			<!-- upload -->
			  <!-- Modal Structure -->
			  <div id="upload-entertainment" class="modal">
			    <div class="modal-content">
			    	<h5 class="center">INPUT VENDOR ENTERTAINMENT</h5>

			      <form action="">

			      	<div class="input-field">
			          <input id="vendor_entertainment" type="text" class="validate" required="" aria-required="true">
			          <label for="vendor_entertainment">Vendor Name</label>
			        </div>

			        <button class="btn waves-effect waves-light gold-bgcolor" type="submit" name="action">UPLOAD</button>

			      </form>
			    </div>
			  </div>
			<!-- end upload -->

			<!-- table -->
	        <thead>
	          <tr>
	              <th>ID</th>
	              <th>Vendor Name</th>
	              <th>Option</th>
	          </tr>
	        </thead>

	        <tbody>
	          <tr>
	            <td>1</td>
	            <td>Kenny Jo Entertainment</td>
	            <td>
	            	<!-- tips : ambil id-nya untuk mengedit, taro didalam a/button pakai href/target/onclick -->
	            	<a href="#edit-entertainment" class="waves-effect waves-light btn-small modal-trigger precious-bgcolor"><i class="material-icons left">color_lens</i>Edit</a>  
	            	<a href="#!" class="waves-effect waves-light btn-small modal-trigger red"><i class="material-icons left">clear</i>Delete</a>
	            </td>
	          </tr>
	        </tbody>
	    </table>
	    <!-- end table -->

	    <!-- modal edit -->
	    <div id="edit-entertainment" class="modal">
		    <div class="modal-content">
		    	<h5 class="center">EDIT VENDOR ENTERTAINMENT</h5>

		      <form action="">

		      	<div class="input-field">
		          <input id="edit_vendor_entertainment" type="text" class="validate" required="" aria-required="true">
		          <label for="edit_vendor_entertainment">Vendor Name</label>
		        </div>

		        <button class="btn waves-effect waves-light gold-bgcolor" type="submit" name="action">UPDATE</button>

		      </form>
		    </div>
		</div>
	    <!-- end modal edit -->
	    <!-- end catering -->

	</section>
	<!-- end slider -->