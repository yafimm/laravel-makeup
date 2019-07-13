      <input type="hidden" name="id" value="{{ $blog->id }}">
      <div class="row form-group">
          <div class="col col-md-3">
              <label for="nama-kategori" class=" form-control-label">Judul Artikel</label>
          </div>
          <div class="col-12 col-md-9">
              <input type="text" id="nama-kategori" name="judul" placeholder="Masukkan judul artikel" class="form-control" value="{{ old('judul', $blog->judul) }}">
              @if($errors->has('judul'))
              <small class="form-text text-danger">*{{ $errors->first('judul') }}</small>
              @endif
          </div>
      </div>

      <div class="row form-group">
          <div class="col col-md-3">
              <label for="nama-kategori" class=" form-control-label">Kategori Artikel</label>
          </div>
          <div class="col-12 col-md-9">
              <select name="id_blog_kategori" id="select" class="form-control">
                <option disabled>Pilih Kategori artikel.</option>
                @foreach($all_blog_kategori as $blog_kategori)
                  <option value="{{ $blog_kategori->id }}" {{ ($blog_kategori->id == $blog->id) ? 'selected' : ''}}>{{ $blog_kategori->nama_kategori }}</option>
                @endforeach
              </select>
            @if($errors->has('id_blog_kategori'))
              <small class="form-text text-danger">*{{ $errors->first('id_blog_kategori') }}</small>
              @endif
          </div>
      </div>

      <div class="row form-group">
          <div class="col col-md-3">
              <label for="nama-kategori" class=" form-control-label">Thumbnail Artikel</label>
          </div>
          <div class="col-12 col-md-9">
              <input type="file" name="thumbnail" class="form-control" value="{{ old('thumbnail', $blog->thumbnail) }}">
              @if($errors->has('thumbnail'))
              <small class="form-text text-danger">*{{ $errors->first('thumbnail') }}</small>
              @endif
          </div>
      </div>

      <div class="row form-group">
          <div class="col col-md-3">
              <label for="nama-kategori" class=" form-control-label">Isi Artikel</label>
          </div>
          <div class="col-12 col-md-9">
              <textarea name="isi_blog" id="summernote">{{ old('isi_blog', $blog->isi_blog) }}</textarea>
              @if($errors->has('isi_blog'))
              <small class="form-text text-danger">*{{ $errors->first('isi_blog') }}</small>
              @endif
          </div>
      </div>

      <div>
          <br>
          <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block">Submit
          </button>
      </div>
