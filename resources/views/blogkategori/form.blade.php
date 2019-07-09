
      @if(isset($blog_kategori) && $blog_kategori->id != null)
        <div class="row form-group">
            <div class="col col-md-3" >
                <label for="nama-kategori" class=" form-control-label">ID Kategori</label>
            </div>
            <div class="col-12 col-md-9">
                {{ $blog_kategori->id }}
            </div>
        </div>
      @endif
      <div class="row form-group">
          <div class="col col-md-3">
              <label for="nama-kategori" class=" form-control-label">Nama Kategori</label>
          </div>
          <div class="col-12 col-md-9">
              <input type="text" id="nama-kategori" name="nama_kategori" placeholder="masukkan nama kategori blog" class="form-control" value="{{ old('nama_kategori', $blog_kategori->nama_kategori) }}">
              @if($errors->has('nama_kategori'))
              <small class="form-text text-danger">*{{ $errors->first('nama_kategori') }}</small>
              @endif
          </div>
      </div>

      <div>
          <br>
          <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block">Submit
          </button>
      </div>
