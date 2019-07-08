@extends('template.template')
@section('content')
    <div class="header-halaman-blog">
		<div class="container">
			<h3 class="judul-header">blog</h3>
			<center>
				<span class="dot"></span>
				<span class="dot"></span>
				<span class="dot"></span>
			</center>
		</div>
		<ul class="breadcrumb">
		    <li class="breadcrumb-item"><a href="blog.html">Blog</a></li>
		    <li class="breadcrumb-item active">keistimewaan berwudhu untuk kecantikan wajah</li>
	  	</ul>
	</div>

	<div>
		<div class="blog-background">
			<div class="container">
				<div class="row">
					<div class="col-md-9 daftar-blog">
						<div class="body-blog">
							<div class="judul-blog">
								<center><h1>Keistimewaan Berwudhu Untuk Kecantikan Wajah</h1></center>
							</div>
							<div class="isi-blog">
								<img src="Images/gambar-blog.jpg" width="100%">
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
								tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
								quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
								consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
								cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
								proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
								tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
								quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
								consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
								cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
								proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
								tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
								quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
								consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
								cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
								proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
								tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
								quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
								consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
								cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
								proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
							</div>
						</div>
						<div class="footer-blog">
							<div class="judul-footer-blog">
								<h4>Artikel Terkait</h4>
							</div>
							<div class="isi-footer-blog">
								<div class="row">
									<div class="col-md-4 artikel-terkait">
										<a href="#">
											<img src="Images/gambar-blog.jpg" width="100%">
										</a>
										<div class="judul-artikel-terkait">
											<a href="#">keistimewaan berwudhu untuk kecantikan wajah</a>
										</div>
									</div>
									<div class="col-md-4 artikel-terkait">
										<a href="#">
											<img src="Images/gambar-blog.jpg" width="100%">
										</a>
										<div class="judul-artikel-terkait">
											<a href="#">keistimewaan berwudhu untuk kecantikan wajah</a>
										</div>
									</div>
									<div class="col-md-4 artikel-terkait">
										<a href="#">
											<img src="Images/gambar-blog.jpg" width="100%">
										</a>
										<div class="judul-artikel-terkait">
											<a href="#">keistimewaan berwudhu untuk kecantikan wajah</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-3">
						<div class="cari-blog">
							<div class="input-group">
							    <input type="text" class="form-control" placeholder="Search this blog">
							    <div class="input-group-append">
							    	<button class="btn btn-cari-blog" type="button">
							    		<i class="fa fa-search"></i>
							    	</button>
							    </div>
							</div>
						</div>
						<div class="kategori-blog">
							kategori
						</div>
						<div class="daftar-kategori-blog">
							<ul class="list-group list-group-flush">
								<li class="list-group-item"><a href="#">lorem</a></li>
								<li class="list-group-item"><a href="#">lorem</a></li>
								<li class="list-group-item"><a href="#">lorem</a></li>
								<li class="list-group-item"><a href="#">lorem</a></li>
							</ul>
						</div>
						<div class="kategori-blog">
							recent post
						</div>
						<div class="daftar-kategori-blog">
							<ul class="list-group list-group-flush">
								<li class="list-group-item"><a href="#">lorem</a></li>
								<li class="list-group-item"><a href="#">lorem</a></li>
								<li class="list-group-item"><a href="#">lorem</a></li>
								<li class="list-group-item"><a href="#">lorem</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection