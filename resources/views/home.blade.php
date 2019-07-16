@extends('template.template')
@section('content')
	<div>
    	<div class="jumbotron-1">
    		<section>
    			<div class="container isi-jumbotron">
	    			<h1>Belajar makeup dan kecantikan lebih mudah,</h1>
	    			<h1>dimana dan kapan saja.</h1>
	    			<a class="float-right" href="{{ url('video') }}"><button class="btn btn-lg">Mulai Belajar</button></a>
	    		</div>
    		</section>
    	</div>
    </div>

	<div>
		<div class="section-about">
			<section>
				<div class="container">
					<div class="row">
						<div class="col-6">
							<center>
								<h3 class="judul-about"><strong>Tentang Beauty Master</strong></h3>
							</center>
							<p style="font-size: 30px; text-transform: uppercase; padding-top: 100px; color: black;">Website yang membantu anda menemukan resep-resep makanan</p>
							<p style="font-size: 24px; padding-top: 30px; color: black;">Beauty Master merupakan website pertama yang menyediakan tutorial tutorial makeup yang premium </p>
							<a href="{{ url('about') }}"><button id="read-more" class="btn read-more">read more . . .</button></a>
						</div>
						<div class="col-6">
							<center>
								<img class="margin-logo" src="images/logo.png" alt="logo" width="80%">
							</center>
						</div>
					</div>
				</div>
			</section>
		</div>
	</div>

	<div>
		@include('template.testimonial')
	</div>
@endsection
