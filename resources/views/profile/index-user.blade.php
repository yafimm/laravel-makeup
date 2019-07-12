@extends('template.template')
@section('content')
    <div class="header-halaman-profile">
		<div class="container">
			<h3 class="judul-profile">Profile</h3>

			<div class="row header-profile">
				<div class="col-md-4">
					<img class="foto-profil-header" src="{{ asset('Images/foto-default-user.jpg') }}" width="200">
				</div>
				<div class="col-md-4">
					<div class="profile-tengah">
						<h4>Dzaki Madhani</h4>
						<center>
							<span class="dot-profile"></span>
							<span class="dot-profile"></span>
							<span class="dot-profile"></span>
						</center>
					</div>
				</div>
				<div class="col-md-4">
					<div class="profile-tengah">
						<center>
							<button class="btn-hakakses" disabled>Platinum</button>
						</center>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div>
		<div class="body-video">
			<div class="container">
				<center>
					<a class="btn btn-editprofil" href="#">Edit Profil</a>
					<a class="btn btn-editprofil" href="#">Ubah Password</a>
				</center>
				<div class="row">
					<div class="col-md-6">
						<div class="col-md-12 info-profil-grup">
							<div class="row">
								<div class="col-md-4 info-profil-span" >
									<span>Email</span>
								</div>
								<div class="col-md-8 info-profil">
									<p  >dzaki.madhani@gmail.com</p>
								</div>
							</div>							
						</div>
						<div class="col-md-12 info-profil-grup">
							<div class="row">
								<div class="col-md-4 info-profil-span">
									<span>Nomor Telepon</span>
								</div>
								<div class="col-md-8 info-profil">
									<p  >08123456798</p>
								</div>
							</div>							
						</div>
						<div class="col-md-12 info-profil-grup">
							<div class="row">
								<div class="col-md-4 info-profil-span">
									<span>Gender</span>
								</div>
								<div class="col-md-8 info-profil">
									<p  >Laki-laki</p>
								</div>
							</div>							
						</div>
						<div class="col-md-12 info-profil-grup">
							<div class="row">
								<div class="col-md-4 info-profil-span">
									<span>Kota Asal</span>
								</div>
								<div class="col-md-8 info-profil">
									<p  >-</p>
								</div>
							</div>							
						</div>
						<div class="col-md-12 info-profil-grup">
							<div class="row">
								<div class="col-md-4 info-profil-span">
									<span>Profinsi</span>
								</div>
								<div class="col-md-8 info-profil">
									<p  >-</p>
								</div>
							</div>							
						</div>
					</div>
					<div class="col-md-6">
						<div class="col-md-12 info-profil-grup">
							<div class="row">
								<div class="col-md-4  info-profil-span">
									<span>Facebook</span>
								</div>
								<div class="col-md-8 info-profil">
									<p  >-</p>
								</div>
							</div>							
						</div>
						<div class="col-md-12 info-profil-grup">
							<div class="row">
								<div class="col-md-4  info-profil-span">
									<span>Twitter</span>
								</div>
								<div class="col-md-8 info-profil">
									<p  >-</p>
								</div>
							</div>							
						</div>
						<div class="col-md-12 info-profil-grup">
							<div class="row">
								<div class="col-md-4  info-profil-span" >
									<span>Instagram</span>
								</div>
								<div class="col-md-8 info-profil">
									<p  >-</p>
								</div>
							</div>							
						</div>
						<div class="col-md-12 info-profil-grup">
							<div class="row">
								<div class="col-md-4  info-profil-span">
									<span>Linked In</span>
								</div>
								<div class="col-md-8 info-profil">
									<p  >-</p>
								</div>
							</div>							
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection