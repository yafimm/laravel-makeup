@extends('template.template')
@section('content')
<div>
    	<div class="background-subscribe">
    		<div class="container">
    			<div class="subscribe-header">
	    			<center>
	    				<strong style="font-size: 60px;">Subscribe Beauty Master</strong>
	    				<br>
	    				<strong style="font-size: 30px;">dan Dapatkan Konten Ekslusivenya</strong>
	    			</center>
	    		</div>
	    		<div class="subscribe-body">
					<div class="judul-bestseeler">
		    			<center>
		    				<strong style="font-size: 50px;">Best Seller!</strong>
		    			</center>
		    		</div>
	    			<div class="row">
	    				<div class="col-md-4">
		    				<div class="card shadow box-subscribe">
		    					<center>
		    						<img class="pricing-image" src="images/1-bulan.png" width="200">
		    						<div class="bawah-pricing-image">
		    							<h3>1 Bulan Menjadi Membership</h3>
			    						<h5>Coba 1 Bulan Jika Anda Ragu</h5>
			    						<h5 class="tidak-diskon">.</h5>
			    						<h4>Rp. 200.000,00</h4>
			    						<a class="btn btn-lg btn-daftar" href="#">Daftar</a>
		    						</div>
		    					</center>
		    				</div>
		    			</div>
		    			<div class="col-md-4">
		    				<div class="card shadow box-subscribe">
		    					<center>
		    						<img class="pricing-image" src="images/3-bulan.png" width="200">
		    						<div class="bawah-pricing-image">
		    							<h3>3 Bulan Menjadi Membership</h3>
			    						<h5>Lebih hemat 150 ribu</h5>
			    						<h5 class="coret">Rp.600.000,00</h5>
			    						<h4>Rp. 450.000,00</h4>
			    						<a class="btn btn-lg btn-daftar" href="#">Daftar</a>
		    						</div>
		    					</center>
		    				</div>
		    			</div>
		    			<div class="col-md-4">
		    				<div class="card shadow box-subscribe">
		    					<center>
		    						<img class="pricing-image" src="images/6-bulan.png" width="200">
		    						<div class="bawah-pricing-image">
		    							<h3>6 Bulan Menjadi Membership</h3>
			    						<h5>Paling hemat! Diskon 450 ribu</h5>
			    						<h5 class="coret">Rp.1.200.000,00</h5>
			    						<h4>Rp. 750.000,00</h4>
			    						<a class="btn btn-lg btn-daftar" href="#">Daftar</a>
		    						</div>
		    					</center>
		    				</div>
		    			</div>
	    			</div>
	    		</div>
    		</div>
			<div class="background-subscribe-2">
    			<div class="container">
    				<div class="subscribe-body-2">
					@foreach($all_produk as $produk_detail)
	    				<div class="row">
						@foreach($produk_detail->produk_akses as $produk)
	    					<div class="col-md-4">
	    						<div class="card shadow box-subscribe-2">
								<center>
									<img class="pricing-image" src="images/6-bulan.png" width="200">
									<div class="bawah-pricing-image">
										<h3>{{ $produk->waktu }} Bulan Menjadi Membership</h3>
										<h5>{{ $produk->deskripsi }}</h5>
										@if($produk->potongan_harga != 0 && $produk->potongan_harga != NULL)
										<h5 class="coret">Rp.{{ helper_money_format($produk->harga) }}</h5>
										<h4>Rp. {{ helper_money_format($produk->harga - $produk->potongan_harga) }}</h4>
									@else
										<h4>Rp. {{ helper_money_format($produk->harga) }}</h4>
									@endif
										<a class="btn btn-lg btn-daftar" href="{{ url('subscribe/pesan?idproduk='.$produk->id) }}">Daftar</a>
									</div>
								</center>
								</div>
							</div>
						@endforeach
						</div>
					@endforeach
					</div>
				</div>
			</div>
    	</div>
    </div>


    <div>
		<div class="testimoni-background">
			<div class="container">
				<div  class="header-testimoni">
					<h2>testimonial</h2>
				</div>
				<div class="body-testimoni">
					<div class="row">
						<div class="col-md-4">
							<div class="card shadow box-testimoni">
								<figure class="figure">
									<img class="d-block mx-auto foto-testimoni" src="Images/foto-default-user.jpg" width="150">
								</figure>
								<h4>Nama User</h4>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
								tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
								quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo</p>
							</div>
						</div>
						<div class="col-md-4">
							<div class="card shadow box-testimoni">
								<figure class="figure">
									<img class="d-block mx-auto foto-testimoni" src="Images/foto-default-user.jpg" width="150">
								</figure>
								<h4>Nama User</h4>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
								tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
								quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo</p>
							</div>
						</div>
						<div class="col-md-4">
							<div class="card shadow box-testimoni">
								<figure class="figure">
									<img class="d-block mx-auto foto-testimoni" src="Images/foto-default-user.jpg" width="150">
								</figure>
								<h4>Nama User</h4>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
								tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
								quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection
