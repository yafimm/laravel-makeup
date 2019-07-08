    <div id="navbar" class="navigasi-bar sticky-top">
	    <nav class="navbar navbar-expand-lg">
	      <div class="container">
	        <div class="navbar-header">
	          <a class="navbar-brand" href="#">
	              <img id="logo" class="margin-logo" src="images/logo.png" alt="logo" width="100px">
	            </a>
	        </div>
	        <div class="navbar-container">
	          <ul>
	            <li class="nav-link active-link">
	              <a class="btn" href="index.html">Home</a>
	              <div class="underline"></div>
	            </li>
	            <li class="nav-link">
	              <a class="btn" href="video.html">Video</a>
	              <div class="underline"></div>
	            </li>
	            <li class="nav-link">
	              <a class="btn" href="blog.html">Blog</a>
	              <div class="underline"></div>
	            </li>
	            <li class="nav-link">
	              <a class="btn" href="#">About Us</a>
	              <div class="underline"></div>
	            </li>
	            <li class="nav-link">
	              <a class="btn" href="#" data-toggle="modal" data-target="#modalLogin">Log In</a>
	              <div class="underline"></div>
	            </li>
	            <li class="nav-link">
	              <button class="btn btn-subscribe"><a href="subscribe.html"> Subscribe </a></button>
	            </li>
	          </ul>
	        </div>
	      </div>
	    </nav>
  	</div>

	<!-- The Modal -->
  	<div class="modal fade" id="modalLogin" role="dialog">
        <div class="modal-dialog" role="document">
			<div class="modal-content">
				<!-- MODAL LOGIN HEADER -->
				<div class="modal-header">
					<div class="row">
						<h3 class="modal-title w-100 font-weight-bold text-center">LOGIN</h3>
						<p>Silakan masukkan email dan password akun anda untuk mengakses konten ekslusif</p>
					</div>
					
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    	<span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <!-- MODAL LOGIN BODY -->
                <div class="modal-body mx-3">
                	<div class="form-group">
                		<input type="text" name="username" id="username" class="form-control input-lg" placeholder="Email" required>
                	</div>
                	<div class="form-group">
                		<input type="password" name="password" id="password" class="form-control input-lg" placeholder="Password" required>
                	</div>
                	<div class="float-right"><a href="#" style="font-size: 12px;">lupa kata sandi?</a></div>
                </div>
                <!-- MODAL LOGIN FOOTER-->
                <div class="modal-footer">
                	<button class="btn btn-block btn-lg modal-regis" data-toggle="modal" data-target="#modalRegis">Registrasi</button>
                	<br>
                	<input type="submit" name="login" class="btn btn-block btn-lg btn-login" value="Login">
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="modalRegis" role="dialog">
        <div class="modal-dialog" role="document">
			<div class="modal-content">
				<!-- MODAL LOGIN HEADER -->
				<div class="modal-header">
					<div class="row">
						<h3 class="modal-title w-100 font-weight-bold text-center">REGISTRASI</h3>
						<p>Silakan mengisi data diri anda untuk melakukan pendaftaran menjadi member dan mendapatkan akses ke dalam konten eksklusif</p>
					</div>
					
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    	<span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <!-- MODAL LOGIN BODY -->
                <div class="modal-body mx-3">
                	<div class="form-group">
                		<input type="text" name="fullname" id="fullname" class="form-control input-lg" placeholder="Full Name" required>
                	</div>
                	<div class="form-group">
                		<input type="text" name="noTelepon" id="noTelepon" class="form-control input-lg" placeholder="Phone Number" required>
                	</div>
                	<div class="form-group">
                		<input type="text" name="email" id="email" class="form-control input-lg" placeholder="Email" required>
                	</div>
                	<div class="form-group">
                		<input type="password" name="password" id="password" class="form-control input-lg" placeholder="Password" required>
                	</div>
                </div>
                <!-- MODAL LOGIN FOOTER-->
                <div class="modal-footer">
                	<input type="submit" name="registrasi" class="btn btn-block btn-lg btn-login" value="Registrasi">
                </div>
            </div>
        </div>
    </div>