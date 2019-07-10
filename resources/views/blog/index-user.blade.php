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
									<img src="{{ asset('Images/gambar-blog.jpg') }}" width="100%">
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
										<a class="btn read-more" href="{{ url('blog/'.$blog->id) }}">read more</a>
									</div>
								</div>
							</div>
						</div>
            @endforeach

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
