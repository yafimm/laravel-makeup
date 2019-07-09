      <div class="row form-group">
          <div class="col col-md-3">
              <label for="nama-kategori" class=" form-control-label">Nama Subscribe</label>
          </div>
          <div class="col-12 col-md-9">
              <input type="text" id="nama-kategori" name="nama" placeholder="Masukkan nama subscribe" class="form-control" value="{{ old('nama', $akses->nama) }}">
              @if($errors->has('nama'))
              <small class="form-text text-danger">*{{ $errors->first('nama') }}</small>
              @endif
          </div>
      </div>

      <div class="row form-group">
          <div class="col col-md-3">
              <label for="nama-kategori" class=" form-control-label">Nilai Akses</label>
          </div>
          <div class="col-12 col-md-9">
              <input type="text" id="nama-kategori" name="nilai_akses" placeholder="Masukkan nilai akses subscribe" class="form-control" value="{{ old('nilai_akses', $akses->nilai_akses) }}">
              <small class="form-text text-info">*nilai ini digunakan untuk membandingkan tingkatan hak akses</small>
              @if($errors->has('nilai_akses'))
              <small class="form-text text-danger">*{{ $errors->first('nilai_akses') }}</small>
              @endif
          </div>
      </div>

      <div class="row form-group">
          <div class="col col-md-3">
              <label for="nama-kategori" class=" form-control-label">Harga</label>
          </div>
          <div class="col-12 col-md-9">
              <input type="text" id="nama-kategori" name="harga" placeholder="Harga akun subscribe" class="form-control" value="{{ old('nilai_akses', $akses->harga) }}">
              <small class="form-text text-info">*Harga akun per bulan </small>
              @if($errors->has('harga'))
              <small class="form-text text-danger">*{{ $errors->first('harga') }}</small>
              @endif
          </div>
      </div>

      <div class="row form-group">
          <div class="col col-md-3">
              <label for="nama-kategori" class=" form-control-label">Deskripsi</label>
          </div>
          <div class="col-12 col-md-9">
              <textarea id="summernote" name="deskripsi">{{ $akses->deskripsi }}</textarea>
              @if($errors->has('deskripsi'))
                <small class="form-text text-danger">*{{ $errors->first('deskripsi') }}</small>
              @endif
          </div>
      </div>

      <div>
          <br>
          <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block">Submit
          </button>
      </div>
