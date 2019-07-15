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
									<th class="text-center">Id Transaksi</th>
									<th class="text-center">Produk</th>
									<th class="text-center">Harga</th>
									<th class="text-center">Tanggal</th>
									<th class="text-center">Deskripsi</th>
								</tr>
							</thead>
							<tbody id="myTable">
								<tr>
									<td>#122142314</td>
									<td>Akun Premium</td>
									<td>Rp.450.000</td>
									<td>02/07/2019</td>
									<td>Membership Akun Premium - 3 Bulan (02/07/2019 - 02/10/2019)*</td>
								</tr>
								<tr>
									<td>#647676956</td>
									<td>Akun Premium</td>
									<td>Rp.450.000</td>
									<td>02/07/2019</td>
									<td>Membership Akun Premium - 3 Bulan (02/07/2019 - 02/10/2019)*</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
    </div>
@endsection