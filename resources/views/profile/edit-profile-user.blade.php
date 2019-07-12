@extends('template.template')
@section('content')
<div class="header-halaman-profile">
		<div class="container">
			<h3 class="judul-profile">Profile</h3>
			<div class="row header-profile">
				<div class="col-md-4">
					<center>
						<div class="image-upload-profil">
							<label for="foto-profil" style="font-size: 30px;">
								<i class="fas fa-camera"></i>
							</label>
							<input id="foto-profil" type="file" onchange="readURL(this);"/>
						</div>
						<img id="blah" class="foto-profil-header" src="Images/foto-default-user.jpg" width="200" height="200">
					</center>
				</div>
				<div class="col-md-4">
					<div class="profile-tengah">
						<h4>Dzaki Madhani</h4>
						<center>
							<button class="btn-hakakses" disabled>Platinum</button>
						</center>
					</div>
				</div>
				<div class="col-md-4">
					<div class="profile-tengah">
						<center>
							<h5 class="username-header"><i class="fas fa-user"></i> dzakimadhani</h5>
							<h5 class="join-date"><i class="far fa-calendar-check"></i> Juli 2019</h5>
						</center>
					</div>
				</div>
			</div>
		</div>
		<ul class="breadcrumb breadcrumb-2">
		    <li class="breadcrumb-item"><a href="">Profile</a></li>
		    <li class="breadcrumb-item active">Edit Profil</li>
	  	</ul>
	</div>

	<div>
		<div class="body-video">
			<div class="container">
				<center>
					<div class="header-profile-2">
						<h3>Edit Profil</h3>
					</div>
				</center>
				<div class="row">
					<div class="col-md-12">
						<div class="box-form-editprofil" style="padding: 10px;">
							<form>
								<div class="row">
									<div class="col-md-4">
										<div class="form-group">
											<span>Nama Lengkap</span>
											<input type="text" class="form-editprofil" value="Dzaki Madhani">
										</div>
										<div class="form-group">
											<span>Username</span>
											<input type="text" class="form-editprofil" value="dzakim">
										</div>
										<div class="form-group">
											<span>Email</span>
											<input type="text" class="form-editprofil" value="dzaki.madhani@gmail.com">
										</div>
										<div class="form-group">
											<span>Jenis Kelamin</span>
											<select name="select" id="select" class="select-editprofil">
												<option value="0">Jenis Kelamin</option>
												<option value="Laki-laki" selected="">Laki-laki</option>
												<option value="Perempuan">Perempuan</option>
											</select>
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<span>Kota Asal</span>
											<input type="text" class="form-editprofil" value="">
										</div>
										<div class="form-group">
											<span>Profinsi</span>
											<input type="text" class="form-editprofil" value="">
										</div>
										<div class="form-group">
											<span>Nomor Telepon</span>
											<input type="text" class="form-editprofil" value="">
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<span>Facebook</span>
											<input type="text" class="form-editprofil" value="">
										</div>
										<div class="form-group">
											<span>Twitter</span>
											<input type="text" class="form-editprofil" value="">
										</div>
										<div class="form-group">
											<span>Instagram</span>
											<input type="text" class="form-editprofil" value="">
										</div>
										<div class="form-group">
											<span>Linked In</span>
											<input type="text" class="form-editprofil" value="">
										</div>
									</div>
								</div>
								<div class="form-group">
									<input type="submit" name="update" class="btn input-editprofil" value="Update">
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection