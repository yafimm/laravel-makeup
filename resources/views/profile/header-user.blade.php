<div class="container">
  <h3 class="judul-profile">Profile</h3>

  <div class="row header-profile">
    <div class="col-md-4">
      @if($user->foto == null)
      <img class="foto-profil-header" src="{{ asset('images/foto-default-user.jpg') }}" width="200">
      @else
      <img class="foto-profil-header" src="{{ asset('images/profile/'.$user->foto) }}" width="200">
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
