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
          {!! Embed::make($video->video)->parseUrl()->getIframe() !!}
        </div>
			</div>
		</div>
	</div>

@endsection
