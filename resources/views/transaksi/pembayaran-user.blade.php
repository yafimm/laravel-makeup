@extends('template.template')
@section('content')
    <div>
		<div class="background-subscribe">
			<div class="container">
				<div class="subscribe-header">
					<center>
						<strong style="font-size: 60px;">Pembayaran Akun Premium</strong>
					</center>
				</div>
				<div class="pembayaran-body">
					<div class="judul-metode-pembayaran">
						<h3 class="text-center">Detail Pembayaran</h3>
					</div>
					<div class="isi-metode-pembayaran">
						<div class="box-detail-pembayaran col-md-12" style="border: 1px solid pink; padding: 15px;">
							<div class="table-responsive">
								<table class="table" width="auto">
									<thead>
										<tr>
											<th>Deskripsi</th>
											<th class="text-center">Jumlah</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>Membership Akun {{ $produk->akses->nama }} - {{ $produk->waktu }} Bulan *({{ $estimasi_mulai }} - {{ $estimasi_habis }})</td>
											<td class="text-center">Rp. {{ helper_money_format($produk->harga) }}</td>
										</tr>
										<tr>
											<td style="text-align: right; font-weight: bold;">Sub Total</td>
											<td class="text-center">Rp. {{ helper_money_format($produk->harga) }}</td>
										</tr>
										<tr>
											<td style="text-align: right; font-weight: bold;">PPN 0%</td>
											<td class="text-center">Rp. 0,00</td>
										</tr>
										<tr>
											<td style="text-align: right; font-weight: bold;">Potongan Harga</td>
											<td class="text-center">- Rp. {{ helper_money_format($produk->potongan_harga) }}</td>
										</tr>
										<tr>
											<td style="text-align: right; font-weight: bold; font-size: 20px;">Total</td>
											<td class="text-center" style="font-weight: bold; font-size: 20px;">Rp. {{ helper_money_format($produk->harga - $produk->potongan_harga) }}</td>
										</tr>
									</tbody>
								</table>
							</div>
              <small class="form-text text-info">*Tanggal Estimasi siklus akun premium, jika membayar dan dikonfirmasi tepat waktu</small>
              <small class="form-text text-info">*Waktu dimulai setelah admin mengaktifasi</small>
              <small class="form-text text-danger">*Jika akun anda sudah premium dan membeli akun premium yang berbeda, maka akun premium yang aktif akan tertimpa dengan yang baru</small>
              <small class="form-text text-danger">*Jika akun anda sudah premium dan membeli akun premium yang sama, maka akan memperpanjang masa aktif akun premium anda</small>
						</div>
					</div>
				</div>
				<div class="pembayaran-body">
					<div class="judul-metode-pembayaran">
						<h3 class="text-center">Pilih Bank</h3>
						<small><p class="text-center">(bisa transfer dari bank mana saja)</p></small>
					</div>
					<div class="isi-metode-pembayaran">
						<div class="tab-bank">
							<button class="tablinks" onclick="openCity(event, 'bri')"><img src="{{ asset('Images/bri.png') }}" width="50" alt="logo-bri" height="40"></button>
							<button class="tablinks" onclick="openCity(event, 'mandiri')"><img src="{{ asset('Images/mandiri.png') }}" width="60" alt="logo-mandiri" height="40"></button>
							<button class="tablinks" onclick="openCity(event, 'bca')"><img src="{{ asset('Images/bca.png') }}" width="60" alt="logo-bca" height="40"></button>
						</div>

						<div id="bri" class="tabcontent">
							<h3>BANK BRI</h3>
							<p>No Rek <strong>1370012937096</strong></p>
							<p>a/n Yafi Maulana Malik</p>
							<p>Telkom University</p>
              <p class="text-info">*Tulis Berita menggunakan ID Transaksi, agar mudah diproses</p>
						</div>

						<div id="mandiri" class="tabcontent">
							<h3>BANK MANDIRI</h3>
							<p>No Rek <strong>1370012937096</strong></p>
							<p>a/n Yafi Maulana Malik</p>
							<p>Telkom University</p>
              <p class="text-info">*Tulis Berita menggunakan ID Transaksi, agar mudah diproses</p>
						</div>

						<div id="bca" class="tabcontent">
							<h3>BANK BCA</h3>
							<p>No Rek <strong>1370012937096</strong></p>
							<p>a/n Yafi Maulana Malik</p>
							<p>Telkom University</p>
              <p class="text-info">*Tulis Berita menggunakan ID Transaksi, agar mudah diproses</p>
						</div>
					</div>
					<div class="footer-metode-pembayaran">
            <form class="" action="{{ route('pesan.store') }}" method="POST">
              @method('POST')
              @CSRF
              <input type="hidden" name="id_produk" value="{{ $produk->id }}">
              <input type="submit" class="btn input-pembayaran" value="Konfirmasi">
            </form>
						<a href="{{ url('subscribe') }}" class="btn input-pembayaran">Batal</a>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection
