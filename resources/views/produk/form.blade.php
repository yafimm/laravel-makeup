      <div class="row form-group">
          <div class="col col-md-3">
              <label for="nama-kategori" class=" form-control-label">Jenis Akun</label>
          </div>
          <div class="col-12 col-md-9">
              <select name="akun_akses" id="select" class="form-control">
                <option disabled>Pilih Jenis Akun.</option>
                @foreach($all_jenis_akun as $jenis_akun)
                  <option value="{{ $jenis_akun->id }}" {{ ($jenis_akun->id == $produk->id_akses) ? 'selected' : ''}}>{{ $jenis_akun->nama }}</option>
                @endforeach
              </select>
            @if($errors->has('akun_akses'))
              <small class="form-text text-danger">*{{ $errors->first('akun_akses') }}</small>
              @endif
          </div>
      </div>




      <div class="row form-group">
          <div class="col col-md-3">
              <label for="nama-kategori" class=" form-control-label">Waktu</label>
          </div>
          <div class="col-12 col-md-9">
              <input type="text" id="nama-kategori" name="waktu" placeholder="Masukkan waktu akses akun premium" class="form-control" value="{{ old('waktu', $produk->waktu) }}">
              <small class="form-text text-info">*Satuan yang digunakan bulan, contoh 3 bulan waktu akun premium</small>
              @if($errors->has('waktu'))
              <small class="form-text text-danger">*{{ $errors->first('waktu') }}</small>
              @endif
          </div>
      </div>

      <div class="row form-group">
          <div class="col col-md-3">
              <label for="nama-kategori" class=" form-control-label">Harga</label>
          </div>
          <div class="col-12 col-md-9">
              <input type="text" id="nama-kategori" name="harga" placeholder="Harga akun subscribe" class="form-control" value="{{ old('harga', $produk->harga) }}">
              <small class="form-text text-info">*Harga akun per bulan </small>
              @if($errors->has('harga'))
              <small class="form-text text-danger">*{{ $errors->first('harga') }}</small>
              @endif
          </div>
      </div>

      <div class="row form-group">
          <div class="col col-md-3">
              <label for="nama-kategori" class=" form-control-label">Potongan harga</label>
          </div>
          <div class="col-12 col-md-9">
              <input type="text" id="nama-kategori" name="potongan_harga" placeholder="Potongan Harga Akun" class="form-control" value="{{ old('potongan_harga', $produk->potongan_harga) }}">
              <small class="form-text text-info">*Potongan harga akun premium, kosongkan jika produk ini tidak ada diskon </small>
              @if($errors->has('potongan_harga'))
              <small class="form-text text-danger">*{{ $errors->first('potongan_harga') }}</small>
              @endif
          </div>
      </div>

      <div class="row form-group">
          <div class="col col-md-3">
              <label for="nama-kategori" class="form-control-label">Deskripsi</label>
          </div>
          <div class="col-12 col-md-9">
              <textarea name="deskripsi" class="form-control">{{ $produk->deskripsi }}</textarea>
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
