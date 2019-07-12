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
		    <li class="breadcrumb-item"><a href="{{ url('blog') }}">Blog</a></li>
		    <li class="breadcrumb-item active">{{ $artikel->judul }}</li>
	  	</ul>
	</div>

	<div>
		<div class="blog-background">
			<div class="container">
				<div class="row">
					<div class="col-md-9 daftar-blog">
						<div class="body-blog">
							<div class="judul-blog">
								<center><h1>{{ $artikel->judul }}</h1></center>
							</div>
							<div class="isi-blog">
								<img src="{{ asset('images/thumbnail/'.$artikel->thumbnail) }}" width="100%">
								{!! $artikel->isi_blog !!}
							</div>
						</div>
						<div class="footer-blog">
							<div class="judul-footer-blog">
								<h4>Artikel Terkait</h4>
							</div>
							<div class="isi-footer-blog">
								<div class="row">

                  @foreach($all_artikel_terkait as $artikel_terkait)
                  <div class="col-md-4 artikel-terkait">
                    <a href="{{ url('blog/'.$artikel_terkait->id.'/'.$artikel_terkait->slug) }}">
                      <img src="{{ asset('images/thumbnail/'.$artikel_terkait->thumbnail) }}" width="100%">
                    </a>
                    <div class="judul-artikel-terkait">
                      <a href="{{ url('blog/'.$artikel_terkait->id.'/'.$artikel_terkait->slug) }}">{{ str_limit($artikel_terkait->judul, $limit = 100, $end = '...') }}</a>
                    </div>
                  </div>
                  @endforeach

								</div>
							</div>
						</div>
					</div>
          @include('blog.sidebar-user')
				</div>
			</div>
		</div>
	</div>
@endsection
