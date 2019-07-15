@extends('template-admin.template')

@section('content')
<div class="col-md-12">
    <div class="card">
        <div class="card-body">
            <div class="card-title">
                <h3 class="text-center title-2">Detail Transaksi</h3>
            </div>
            <hr>

            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="nama-kategori" class=" form-control-label">ID Transaksi</label>
                </div>
                <div class="col-12 col-md-9">
                    <input type="text" name="idtransaksi" class="form-control" value="{{ $transaksi->id }}" disabled>
                </div>
            </div>

            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="nama-kategori" class=" form-control-label">User</label>
                </div>
                <div class="col-12 col-md-9">
                    <input type="text" name="user" class="form-control" value="{{ $transaksi->user }}" disabled>
                </div>
            </div>

            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="nama-kategori" class=" form-control-label">Admin</label>
                </div>
                <div class="col-12 col-md-9">
                    <input type="text" name="admin" class="form-control" value="{{ $transaksi->admin }}" disabled>
                </div>
            </div>

            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="nama-kategori" class=" form-control-label">Total Harga</label>
                </div>
                <div class="col-12 col-md-9">
                    <input type="text" name="totalharga" class="form-control" value="{{ $transaksi->total_harga }}" disabled>
                </div>
            </div>

            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="nama-kategori" class=" form-control-label">Siklus Aktif</label>
                </div>
                <div class="col-12 col-md-9">
                    <input type="text" name="sikluswaktu" class="form-control" value="{{ $transaksi->waktu }} Bulan" disabled>
                </div>
            </div>

            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="nama-kategori" class=" form-control-label">Status</label>
                </div>
                <div class="col-12 col-md-9">
                    <input type="text" name="status" class="form-control" value="{{ $transaksi->status }}" disabled>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection
