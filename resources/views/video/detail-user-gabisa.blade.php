@extends('template.template')
@section('content')
    <div class="header-video">
		<div class="container">
			<div class="judul-header-video">
				<h2>judul yang diupload pengunggah</h2>
				<h5>Nama Pengunggah <img src="Images/foto-default-user.jpg" width="30" ></h5>
			</div>
		</div>
		<ul class="breadcrumb">
		    <li class="breadcrumb-item"><a href="video.html">Videos</a></li>
		    <li class="breadcrumb-item active">Judul Video</li>
	  	</ul>
	</div>

	<div>
		<div class="body-video">
			<div class="container">
				<div>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				</div>
				<div class="cant-play" style="width:560px; height:315px; margin: auto; background-color: black; padding: 50px 30px 50px 30px;">
					<h3 style="color: gold; font-weight: bold; text-align: center; margin-bottom: 30px">Konten Premium</h3>
					<p style="color: white;">Jadilah membership agar dapat mengakses konten premium ini.</p>
					<center>
						<i class="far fa-hand-point-down" style="font-size: 40px; color: white;"></i>
						<br>
						<a class="btn btn-upgrade-akun" href="subscribe.html">Subscribe</a>
					</center>
				</div>
			</div>
		</div>
	</div>

@endsection