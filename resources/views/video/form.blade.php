
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
              <label for="nama-kategori" class=" form-control-label">Judul</label>
          </div>
          <div class="col-12 col-md-9">
              <input type="text" id="nama-kategori" name="judul" placeholder="Masukkan judul video" class="form-control" value="{{ old('judul', $video->judul) }}">
              @if($errors->has('judul'))
              <small class="form-text text-danger">*{{ $errors->first('judul') }}</small>
              @endif
          </div>
      </div>

      <div class="row form-group">
        <div class="col col-md-3">
          <label for="nama-kategori" class=" form-control-label">Thumbnail</label>
        </div>
        <div class="col-12 col-md-9">
          <input type="file" id="nama-kategori" name="thubmnail" class="form-control" value="{{ old('thumbnail', $video->thumbnail) }}">
          @if($errors->has('thumbnail'))
          <small class="form-text text-danger">*{{ $errors->first('thumbnail') }}</small>
          @endif
        </div>
      </div>

      <div class="row form-group">
          <div class="col col-md-3">
              <label for="nama-kategori" class=" form-control-label">Video</label>
          </div>
          <div class="col-12 col-md-9">
              <input type="file" id="nama-kategori" name="video" class="form-control">
              @if($errors->has('video'))
              <small class="form-text text-danger">*{{ $errors->first('video') }}</small>
              @endif
          </div>
      </div>

      <div class="row form-group">
          <div class="col col-md-3">
            <label for="nama-kategori" class=" form-control-label">Hak akses</label>
          </div>
          <div class="col-12 col-md-9">
            <select name="hak_akses" id="select" class="form-control">
              <option disabled>Pilih hak akses video ..</option>
              @foreach($all_akses as $akses)
                <option value="{{ $akses->id }}" {{ ($video->hak_akses == $akses->id) ? 'selected' : '' }}>{{ $akses->nama }}</option>
              @endforeach
            </select>
              <small class="form-text text-info">*Hak akses minimal yang dapat melihat video</small>
          </div>

      </div>

      <div class="row form-group">
          <div class="col col-md-3">
              <label for="nama-kategori" class=" form-control-label">Deskripsi</label>
          </div>
          <div class="col-12 col-md-9">
              <textarea id="summernote" name="deskripsi">{{ $video->deskripsi }}</textarea>
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
