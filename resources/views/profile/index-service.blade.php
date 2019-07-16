@extends('template.template')
@section('content')
    <div class="header-halaman-profile">
        @include('profile.header-user')
    </div>

    <div>
		<div class="body-video">
			<div class="container">
				<div class="cari-blog" style="width: 20%">
					<input id="myInput" type="text" class="form-control" placeholder="Search...">
				</div>
				<div class="isi-info-transaksi">
					<div class="table-responsive-md">
						<table class="table" width="auto">
							<thead>
								<tr>
									<th class="text-center">No</th>
									<th class="text-center">Jenis Akun</th>
									<th class="text-center">Waktu Mulai</th>
                  <th class="text-center">Waktu Habis</th>
									<th class="text-center">Status</th>
									<th class="text-center">Action</th>
								</tr>
							</thead>
							<tbody id="myTable">
               @foreach($all_user_akses as $user_akses)
								<tr>
									<td>{{ $user_akses->id }}</td>
									<td>{{ $user_akses->nama }}</td>
									<td>{{ date('d M Y', strtotime($user_akses->pivot->waktu_mulai)) }}</td>
                  <td>{{ date('d M Y', strtotime($user_akses->pivot->waktu_berakhir)) }}</td>
									<td>{{ $user_akses->pivot->status }}</td>
									<td>
                      <a href="">Detail</a>
                  </td>
								</tr>
						   @endforeach
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
    </div>
@endsection
