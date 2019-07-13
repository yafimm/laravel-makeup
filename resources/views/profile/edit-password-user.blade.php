@extends('template.template')
@section('content')
    <div class="header-halaman-profile">
    @include('profile.header-user')
		<ul class="breadcrumb breadcrumb-2">
		    <li class="breadcrumb-item"><a href="{{ url('/'.$user->username) }}">Profile</a></li>
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
							<form action="{{ route('password.update') }}" method="post">
                @CSRF
                @method('PUT')
								<div class="form-group">
									<span>Password Lama</span>
									<input type="password" class="form-editprofil" name="password">
                  @if($errors->has('password'))
                    <small class="form-text text-danger">*{{ $errors->first('password') }}</small>
                  @endif
								</div>
								<div class="form-group">
									<span>Password Baru</span>
									<input type="password" class="form-editprofil" name="new_password">
                  @if($errors->has('new_password'))
                    <small class="form-text text-danger">*{{ $errors->first('new_password') }}</small>
                  @endif
								</div>
								<div class="form-group">
									<span>Ulangi Password Baru</span>
									<input type="password" class="form-editprofil" name="new_password_confirmation">
								</div>
								<div class="form-group">
									<input type="submit" name="update" class="btn input-editprofil" value="Update">
                  @if($errors->has('new_password_confirmation'))
                    <small class="form-text text-danger">*{{ $errors->first('new_password_confirmation') }}</small>
                  @endif
              	</div>
							</form>
						</div>
					</center>
				</div>
			</div>
		</div>
	</div>
@endsection
