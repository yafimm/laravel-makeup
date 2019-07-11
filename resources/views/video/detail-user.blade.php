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
			<div>
        <div class="embed-responsive embed-responsive-21by9">
          <video class="embed-responsive-item" width="320" height="240" oncontextmenu="return false;" controls>
            <source src="{{ route('getvideo', $video->id) }}" type="video/mp4">
              Your browser does not support the video tag.
            </video>
        </div>
      </div>
		</div>
	</div>

@endsection
