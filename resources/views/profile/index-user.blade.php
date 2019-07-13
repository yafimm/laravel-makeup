@extends('template.template')
@section('content')
    <div class="header-halaman-profile">
    @include('profile.header-user')
	</div>

	<div>
		<div class="body-video">
			<div class="container">

        @include('_partial.flash_message')

        @if(Auth::guard('user')->check() && Auth::guard('user')->user()->username == $user->username)
        <center>
          <a class="btn btn-editprofil" href="{{ route('profile.edit') }}">Edit Profil</a>
          <a class="btn btn-editprofil" href="{{ route('password.edit') }}">Ubah Password</a>
        </center>
        @endif
				<div class="row">
					<div class="col-md-6">
						<div class="col-md-12 info-profil-grup">
							<div class="row">
								<div class="col-md-4 info-profil-span" >
									<span>Email</span>
								</div>
								<div class="col-md-8 info-profil">
									<p>{{ $user->email }}</p>
								</div>
							</div>
						</div>
						<div class="col-md-12 info-profil-grup">
							<div class="row">
								<div class="col-md-4 info-profil-span">
									<span>Nomor Telepon</span>
								</div>
								<div class="col-md-8 info-profil">
									<p>{{ $user->no_telp }}</p>
								</div>
							</div>
						</div>
						<div class="col-md-12 info-profil-grup">
							<div class="row">
								<div class="col-md-4 info-profil-span">
									<span>Gender</span>
								</div>
								<div class="col-md-8 info-profil">
									<p>{{ $user->jenis_kelamin }}</p>
								</div>
							</div>
						</div>
						<div class="col-md-12 info-profil-grup">
							<div class="row">
								<div class="col-md-4 info-profil-span">
									<span>Alamat</span>
								</div>
								<div class="col-md-8 info-profil">
									<p>{{ $user->alamat }}</p>
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
									<p>{{ $user->facebook }}</p>
								</div>
							</div>
						</div>
						<div class="col-md-12 info-profil-grup">
							<div class="row">
								<div class="col-md-4  info-profil-span">
									<span>Twitter</span>
								</div>
								<div class="col-md-8 info-profil">
									<p>{{ $user->twitter }}</p>
								</div>
							</div>
						</div>
						<div class="col-md-12 info-profil-grup">
							<div class="row">
								<div class="col-md-4  info-profil-span" >
									<span>Instagram</span>
								</div>
								<div class="col-md-8 info-profil">
									<p>{{ $user->instagram }}</p>
								</div>
							</div>
						</div>
						<div class="col-md-12 info-profil-grup">
							<div class="row">
								<div class="col-md-4  info-profil-span">
									<span>Linked In</span>
								</div>
								<div class="col-md-8 info-profil">
									<p>{{ $user->linkedin }}</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection
