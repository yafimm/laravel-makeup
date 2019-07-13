@extends('template.template')
@section('content')
  <div class="header-video">
	   <div class="container">
  			<div class="judul-header-video">
  				<h2>{{ $video->judul }}</h2>
  				<h5>{{ $video->admin }} <img src="{{ asset('Images/foto-default-user.jpg') }}" width="30" ></h5>
  			</div>
		 </div>
		  <ul class="breadcrumb">
		    <li class="breadcrumb-item"><a href="{{ url('video') }}">Videos</a></li>
		    <li class="breadcrumb-item active">{{ $video->judul }}</li>
	  	</ul>
	</div>

  <div class="body-video">
		<div class="container">
			<div>
        {!! $video->deskripsi !!}
      </div>
      @if($akses == 'BISA');
			<div>
        <div class="embed-responsive embed-responsive-21by9">
          <video class="embed-responsive-item" width="320" height="240" oncontextmenu="return false;" controls>
            <source src="{{ route('getvideo', $video->id) }}" type="video/mp4">
              Your browser does not support the video tag.
            </video>
        </div>
      </div>
      @else
      <div class="cant-play" style="width:560px; height:315px; margin: auto; background-color: black; padding: 50px 30px 50px 30px;">
        <h3 style="color: gold; font-weight: bold; text-align: center; margin-bottom: 30px">Konten Premium</h3>
        <p style="color: white;">Jadilah membership agar dapat mengakses konten premium ini.</p>
        <center>
          <i class="far fa-hand-point-down" style="font-size: 40px; color: white;"></i>
          <br>
          <a class="btn btn-upgrade-akun" href="subscribe.html">Subscribe</a>
        </center>
      </div>
      @endif
		</div>
	</div>

@endsection
