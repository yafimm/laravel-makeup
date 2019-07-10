@extends('template.template')
@section('content')
    <div class="header-halaman-video">
			<div class="container">
				<h3 class="judul-header">videos</h3>
				<center>
					<span class="dot"></span>
					<span class="dot"></span>
					<span class="dot"></span>
				</center>
			</div>
	</div>

	<div>
		<div class="body-video">
			<div class="container">
				<div class="row">

	        @foreach($all_video as $video)
            <div class="col-md-4">
              <div class="card shadow border20 thumbnail-box">
                <a href="video-play.html">
                  <img class="border20" src="Images/695787.jpg" width="100%" height="250" >
                </a>
                <div class="info-box-video border20">
                  <div class="detail-box-video">
                    <h5 class="tipe-box-video">Konten {{ $video->akses->nama }}</h5>
                    <a class="judul-box-video" href="video-play.html"><i class='fas fa-video'> {{ $video->judul }}</i></a>
                    <a class="nama-pengunggah" href="video-play.html"><img src="Images/foto-default-user.jpg" width="25">{{ $judul->admin }}</a>
                  </div>
                </div>
              </div>
            </div>
          @endforeach

				</div>
			</div>
		</div>
	</div>
@endsection
