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
				<div>
					<iframe style="display:block;margin: auto; padding-top: 2%" width="560" height="315" src="https://www.youtube.com/embed/otRWBsGElhQ" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				</div>
			</div>
		</div>
	</div>

@endsection