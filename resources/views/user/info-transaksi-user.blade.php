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
									<th class="text-center">Status</th>
									<th class="text-center">Action</th>
								</tr>
							</thead>
							<tbody id="myTable">
               @foreach($all_transaksi as $transaksi)
								<tr>
									<td>{{ $transaksi->id }}</td>
									<td>{{ $transaksi->produk_akses->akses->nama }}</td>
									<td>Rp. {{ helper_money_format($transaksi->total_harga) }}</td>
                  <td>{{ $transaksi->created_at->format('d/m/Y') }}</td>
									<td>{{ $transaksi->status }}</td>
									<td>
                      <a href="{{ route('profile.transaksi.show', $transaksi->id) }}">Detail</a>
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
