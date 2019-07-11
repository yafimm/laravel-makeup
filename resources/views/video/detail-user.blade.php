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

	<div>
		<div class="body-video">
			<div class="container">
				<div>
          {!! $video->deskripsi !!}
        </div>
				<div>
          <video
					<iframe style="display:block;margin: auto; padding-top: 2%" width="560" height="315" src="https://www.youtube.com/watch?v=nJSdYlAFKqA" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <!-- {!! $video->video_html !!} -->
            <video width="400" controls>
                <source src="{{ asset('videos/thread/'.$video->video) }}" type="video/mp4">
                <source src="mov_bbb.ogg" type="video/ogg">
                Your browser does not support HTML5 video.
            </video>
        </div>
			</div>
		</div>
	</div>

@endsection
