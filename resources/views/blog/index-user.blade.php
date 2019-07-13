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

	</div>

	<div>
		<div class="blog-background">
			<div class="container">
				<div class="row">
					<div class="col-md-9 daftar-blog">

						@foreach($all_blog as $blog)
						<div class="col box-blog">
							<div class="row">
								<div class="col-md-4">
									<img src="{{ asset('images/thumbnail/'.$blog->thumbnail) }}" width="100%">
								</div>
								<div class="col-md-8">
									<div class="judul-daftar-blog">
										<h3>{{ $blog->judul }}</h3>
									</div>
									<div class="tanggal-daftar-blog">
										<p><i class="fa fa-calendar"></i> {{ $blog->created_at->format('d M Y') }}  /  <i class="fa fa-user"></i>{{ $blog->admin }}</p>
									</div>
									<div class="isi-daftar-blog">
										{!! str_limit($blog->isi_blog, $limit = 500, $end = '...') !!}
									</div>
									<div class="read-more-blog">
										<a class="btn read-more" href="{{ url('blog/'.$blog->id.'/'.$blog->slug) }}">read more</a>
									</div>
								</div>
							</div>
						</div>
            @endforeach

					</div>
          @include('blog.sidebar-user')
				</div>
			</div>
		</div>
	</div>
@endsection
