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
		<ul class="breadcrumb breadcrumb-2">
		    <li class="breadcrumb-item"><a href="">Profile</a></li>
		    <li class="breadcrumb-item active">Ubah Password</li>
	  	</ul>
	</div>

	<div>
		<div class="body-video">
			<div class="container">
				<center>
					<div class="header-profile-2">
						<h3>Ubah Password</h3>
					</div>
					<div class="col-md-6">
						<div class="box-form-editprofil" style="padding: 10px;">
							<form>
								<div class="form-group">
									<span>Password Lama</span>
									<input type="password" class="form-editprofil">
								</div>
								<div class="form-group">
									<span>Password Baru</span>
									<input type="password" class="form-editprofil">
								</div>
								<div class="form-group">
									<span>Ulangi Password Baru</span>
									<input type="password" class="form-editprofil" >
								</div>
								<div class="form-group">
									<input type="submit" name="update" class="btn input-editprofil" value="Update">
								</div>
							</form>
						</div>
					</center>
				</div>
			</div>
		</div>
	</div>
@endsection