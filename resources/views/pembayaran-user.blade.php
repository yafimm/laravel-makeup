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
							<h5>Kode Pembayaran : #4398734653</h5>
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
											<td>Membership Akun Premium - 3 Bulan (02/07/2019 - 02/10/2019)*</td>
											<td class="text-center">Rp. 600.000,00</td>
										</tr>
										<tr>
											<td style="text-align: right; font-weight: bold;">Sub Total</td>
											<td class="text-center">Rp. 600.000,00</td>
										</tr>
										<tr>
											<td style="text-align: right; font-weight: bold;">PPN 0%</td>
											<td class="text-center">Rp. 0,00</td>
										</tr>
										<tr>
											<td style="text-align: right; font-weight: bold;">Potongan Harga</td>
											<td class="text-center">- Rp. 150.000,00</td>
										</tr>
										<tr>
											<td style="text-align: right; font-weight: bold; font-size: 20px;">Total</td>
											<td class="text-center" style="font-weight: bold; font-size: 20px;">Rp. 450.000,00</td>
										</tr>
									</tbody>
								</table>
							</div>
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
							<div>
								<input type="submit" name="pembayaran" class="btn input-pembayaran" value="Konfirmasi">
							</div>
						</div>

						<div id="mandiri" class="tabcontent">
							<h3>BANK MANDIRI</h3>
							<p>No Rek <strong>1370012937096</strong></p>
							<p>a/n Yafi Maulana Malik</p>
							<p>Telkom University</p>
							<div>
								<input type="submit" name="pembayaran" class="btn input-pembayaran" value="Konfirmasi">
							</div>
						</div>

						<div id="bca" class="tabcontent">
							<h3>BANK BCA</h3>
							<p>No Rek <strong>1370012937096</strong></p>
							<p>a/n Yafi Maulana Malik</p>
							<p>Telkom University</p>
							<div>
								<input type="submit" name="pembayaran" class="btn input-pembayaran" value="Konfirmasi">
							</div>
						</div>
					</div>
					<div class="footer-metode-pembayaran">
						<a href="#" class="btn input-pembayaran">Batal</a>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection