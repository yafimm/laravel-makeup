@extends('template.template')
@section('content')
<form action="{{ route('profile.update') }}" method="post" enctype="multipart/form-data">
	@CSRF
	@method('PUT')
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
									<input id="foto-profil" type="file" name="foto" onchange="readURL(this);"/>
								</div>
								@if($user->foto == null)
									<img id="blah" class="foto-profil-header" src="{{ asset('Images/foto-default-user.jpg') }}" width="200" height="200">
								@else
								  <img id="blah" class="foto-profil-header" src="{{ asset('images/profile/'. $user->foto) }}" width="200" height="200">
								@endif

							</center>
							@if($errors->has('foto'))
								<small class="form-text text-danger">*{{ $errors->first('foto') }}</small>
							@endif

						</div>
						<div class="col-md-4">
							<div class="profile-tengah">
								<h4>{{ $user->nama }}</h4>
								<center>
									<button class="btn-hakakses" disabled>{{ $user->hak_akses->nama }}</button>
								</center>
							</div>
						</div>
						<div class="col-md-4">
							<div class="profile-tengah">
								<center>
									<h5 class="username-header"><i class="fas fa-user"></i> {{ $user->username }}</h5>
									<h5 class="join-date"><i class="far fa-calendar-check"></i> {{ $user->created_at->format('M Y') }}</h5>
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
										<div class="row">
											<div class="col-md-4">
												<div class="form-group">
													<span>Nama Lengkap</span>
													<input type="text" class="form-editprofil" name="nama" value="{{ old('nama', $user->nama) }}">
													@if($errors->has('nama'))
											 			<small class="form-text text-danger">*{{ $errors->first('nama') }}</small>
													@endif
												</div>
												<div class="form-group">
													<span>Email</span>
													<input type="text" class="form-editprofil" name="email" value="{{ old('email', $user->email) }}" disabled>
												</div>
												<div class="form-group">
													<span>Jenis Kelamin</span>
													<select name="select" id="select" name="jenis_kelamin" class="select-editprofil">
														<option value="0" disabled>Jenis Kelamin</option>
														@if(isset($user->jenis_kelamin) && $user->jenis_kelamin == 'Pria')
														 <option value="Pria" selected="">Pria</option>
											    	 <option value="Wanita">Wanita</option>
														@else
														 <option value="Laki-laki">Pria</option>
														 <option value="Perempuan" selected="">Wanita</option>
														@endif
													</select>

													@if($errors->has('jenis_kelamin'))
														<small class="form-text text-danger">*{{ $errors->first('jenis_kelamin') }}</small>
													@endif

												</div>
											</div>
											<div class="col-md-4">
												<div class="form-group">
													<span>Alamat</span>
													<textarea name="alamat" class="form-editprofil" rows="3" cols="40">{{ $user->alamat }}</textarea>
													@if($errors->has('alamat'))
													<small class="form-text text-danger">*{{ $errors->first('alamat') }}</small>
													@endif
												</div>
												<div class="form-group">
													<span>Nomor Telepon</span>
													<input type="text" class="form-editprofil" name="no_telp" value="{{ old('no_telp', $user->no_telp) }}">
													@if($errors->has('no_telp'))
														<small class="form-text text-danger">*{{ $errors->first('no_telp') }}</small>
													@endif
												</div>
											</div>
											<div class="col-md-4">
												<div class="form-group">
													<span>Facebook</span>
													<input type="text" class="form-editprofil" name="facebook" value="{{ old('facebook', $user->facebook) }}">
													@if($errors->has('facebook'))
														<small class="form-text text-danger">*{{ $errors->first('facebook') }}</small>
													@endif
												</div>
												<div class="form-group">
													<span>Twitter</span>
													<input type="text" class="form-editprofil" name="twitter" value="{{ old('twitter', $user->twitter)}}">
													@if($errors->has('twitter'))
														<small class="form-text text-danger">*{{ $errors->first('twitter') }}</small>
													@endif
												</div>
												<div class="form-group">
													<span>Instagram</span>
													<input type="text" class="form-editprofil" name="instagram" value="{{ old('instagram', $user->instagram) }}">
													@if($errors->has('instagram'))
														<small class="form-text text-danger">*{{ $errors->first('instagram') }}</small>
													@endif
												</div>
												<div class="form-group">
													<span>Linked In</span>
													<input type="text" class="form-editprofil" name="linkedin" value="{{ old('linkedin', $user->linkedin) }}">
													@if($errors->has('linkedin'))
														<small class="form-text text-danger">*{{ $errors->first('linkedin') }}</small>
													@endif
												</div>
											</div>
										</div>
										<div class="form-group">
											<input type="submit" name="update" class="btn input-editprofil" value="Update">
										</div>
								</div>
							</div>
						</div>
					</div>
				</div>
		</div>
</form>
@endsection
