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

<div>
    <br>
    <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block">Selesaikan Transaksi
    </button>
</div>
