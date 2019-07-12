<div class="col-md-3">
  <div class="cari-blog">
    <form action="{{ url('blog') }}" method="post" enctype="multipart/form-data">
      <div class="input-group">
          <input type="text" name="search" class="form-control" placeholder="Search this blog">
          <div class="input-group-append">
            <button class="btn btn-cari-blog" type="input">
              <i class="fa fa-search"></i>
            </button>
          </div>
      </div>
    </form>
  </div>
  <div class="kategori-blog">
    kategori
  </div>
  <div class="daftar-kategori-blog">
    <ul class="list-group list-group-flush">
      <li class="list-group-item"><a href="#">lorem</a></li>
      <li class="list-group-item"><a href="#">lorem</a></li>
      <li class="list-group-item"><a href="#">lorem</a></li>
      <li class="list-group-item"><a href="#">lorem</a></li>
    </ul>
  </div>
  <div class="kategori-blog">
    recent post
  </div>
  <div class="daftar-kategori-blog">
    <ul class="list-group list-group-flush">
      @foreach($recent_post as $post)
      <li class="list-group-item">
        <a href="{{ url('blog/'.$post->id.'/'.$post->slug) }}">{{ str_limit($post->judul, $limit = 75, $end = '...') }}</a>
        <div class="col-12">
          <small>Posted in {{ $post->created_at->diffForHumans() }}</small>
        </div>
      </li>
      @endforeach
    </ul>
  </div>
</div>
