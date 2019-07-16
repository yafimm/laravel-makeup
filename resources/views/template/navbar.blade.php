    <div id="navbar" class="navigasi-bar sticky-top">
	    <nav class="navbar navbar-expand-lg">
	      <div class="container">
	        <div class="navbar-header">
	          <a class="navbar-brand" href="{{ url('') }}">
	              <img id="logo" class="margin-logo" src="{{ asset('images/logo.png') }}" alt="logo" width="100px">
	            </a>
	        </div>
	        <div class="navbar-container">
	          <ul>
              @if(!empty($halaman) && $halaman == 'home')
	            <li class="nav-link active-link">
              @else
              <li class="nav-link">
              @endif
                <a class="btn" href="{{ url('') }}">Home</a>
	              <div class="underline"></div>
	            </li>

              @if(!empty($halaman) && $halaman == 'video')
	            <li class="nav-link active-link">
              @else
              <li class="nav-link">
              @endif
	              <a class="btn" href="{{ url('video') }}">Video</a>
	              <div class="underline"></div>
	            </li>

              @if(!empty($halaman) && $halaman == 'blog')
	            <li class="nav-link active-link">
              @else
              <li class="nav-link">
              @endif
	              <a class="btn" href="{{ url('blog') }}">Blog</a>
	              <div class="underline"></div>
	            </li>

              @if(!empty($halaman) && $halaman == 'about')
	            <li class="nav-link active-link">
              @else
              <li class="nav-link">
              @endif
	              <a class="btn" href="{{ url('about') }}">About Us</a>
	              <div class="underline"></div>
	            </li>

	            @if(Auth::guard('user')->check())
	            <li class="nav-link">
                  <div class="dropdown">
                    <a class="btn" href="#" data-toggle="dropdown" id="dropdownMenuButton" aria-haspopup="true" aria-expanded="false" style="font-weight: bold; font-size: 18px; text-transform: uppercase;">
                      @if(Auth::guard('user')->user()->foto == null)
                        <img style="border-radius: 50%; margin: 0px 10px 0px 0px;" src="{{ asset('Images/foto-default-user.jpg') }}" width="40" height="40">
                      @else
                        <img style="border-radius: 50%; margin: 0px 10px 0px 0px;" src="{{ asset('images/profile/'. Auth::guard('user')->user()->foto) }}" width="40" height="40">
                      @endif

                      {{ Auth::guard('user')->user()->username }}
                    </a>
                    <div class="dropdown-menu" style="width: auto;">
                      <a class="dropdown-item disabled text-warning" href="#">{{ Auth::guard('user')->user()->hak_akses->nama }}</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="{{ route('profile',Auth::guard('user')->user()->username) }}">Profile</a>
                      <a class="dropdown-item" href="{{ route('profile.transaksi') }}">Transaction</a>
                      <a class="dropdown-item" href="{{ route('profile.transaksi') }}">Service</a>
                      <a class="dropdown-item" href="#" onclick="event.preventDefault();document.querySelector('#logout-form').submit();">Log Out</a>
                      <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                          @csrf
                          @method('post')
                      </form>
                    </div>
                  </div>
              </li>
              @else
              <li class="nav-link">
                <a class="btn" href="{{ url('#') }}" data-toggle="modal" data-target="#modalLogin">Log In</a>
                <div class="underline"></div>
              </li>
              @endif

	            <li class="nav-link">
	              <button class="btn btn-subscribe"><a href="{{ url('subscribe') }}"> Subscribe </a></button>
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
             <form class="" action="{{ url('login') }}" method="post">
               @CSRF
               @method('POST')
              <div class="modal-body mx-3">
              	 <div class="form-group">
              		   <input type="text" name="username" id="username" class="form-control input-lg" placeholder="username" required>
              	 </div>
              	 <div class="form-group">
              		   <input type="password" name="password" id="password" class="form-control input-lg" placeholder="Password" required>
              	 </div>
             </div>
              <!-- MODAL LOGIN FOOTER-->
             <div class="modal-footer">
              	<button class="btn btn-block btn-lg modal-regis" data-toggle="modal" data-dismiss="modal" data-target="#modalRegis">Registrasi</button>
              	<br>
              	<input type="submit" name="login" class="btn btn-block btn-lg btn-login" value="Login">
             </div>
           </form>
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
                  <form class="" action="{{ url('register') }}" method="post">
                    @CSRF
                    @method('POST')
                    <div class="form-group">
                  		<input type="text" name="nama" id="fullname" class="form-control input-lg" placeholder="Full Name" required>
                  	</div>
                  	<div class="form-group">
                  		<input type="text" name="username" id="username" class="form-control input-lg" placeholder="Username" required>
                  	</div>
                    <div class="form-group">
                        <select name="jenis_kelamin" id="select" class="au-input au-input--full form-control">
                            <option value="" disabled>Jenis Kelamin</option>
                            <option value="pria">Laki-laki</option>
                            <option value="wanita">Perempuan</option>
                        </select>
                        @if($errors->has('jenis_kelamin'))
                          <small class="form-text text-danger">*{{ $errors->first('jenis_kelamin') }}</small>
                        @endif
                    </div>
                  	<div class="form-group">
                  		<input type="text" name="email" id="email" class="form-control input-lg" placeholder="Email" required>
                  	</div>
                  	<div class="form-group">
                  		<input type="password" name="password" id="password" class="form-control input-lg" placeholder="Password" required>
                  	</div>
                    <div class="form-group">
                  		<input type="password" name="password-confirmation" id="password" class="form-control input-lg" placeholder="Re-enter Password" required>
                  	</div>
                  </div>
                  <!-- MODAL LOGIN FOOTER-->
                  <div class="modal-footer">
                  	<input type="submit" name="registrasi" class="btn btn-block btn-lg btn-login" value="Registrasi">
                  </div>
              </form>
            </div>
        </div>
    </div>
