@extends('template-admin.template')
@section('content')
  <h3 class="text-center title-1 judul-halaman">Kelola Kategori Blog</h3>
      @include('_partial.flash_message')
      <div class="row">
        <div class="col-3">
          <a href="{{ url('/admin/blogkategori/create') }}" class="btn btn-success">Add Data  </a>
        </div>
      </div>
      <div class="row">
          <div class="col-md-6 mx-auto">
              <!-- DATA TABLE -->

              <div class="table-responsive table-responsive-data2">
                  <table class="table table-data2">
                      <thead>
                          <tr>
                              <th>ID</th>
                              <th>Nama</th>
                              <th>Action</th>
                          </tr>
                      </thead>
                      <tbody>
                          @foreach($all_blog_kategori as $blog_kategori)
                            <tr class="tr-shadow">
                                <td>{{ $blog_kategori->id }}</td>
                                <td class="desc">{{ $blog_kategori->nama_kategori }}</td>
                                <td>
                                    <div class="table-data-feature">
                                        <!-- <button class="item" data-placement="top" title="Edit" data-toggle="modal" data-target="#modalEditKategori">
                                            <i class="zmdi zmdi-edit"></i>
                                        </button>

                                        <button class="item" data-placement="top" title="Delete" data-toggle="modal" data-target="#modalHapusKategori">
                                            <i class="zmdi zmdi-delete"></i>
                                        </button> -->

                                        <a href="{{ route('blogkategori.edit', $blog_kategori->id) }}" class="item"><i class="zmdi zmdi-edit"></i></a>
                                        <form class="" action="{{ route('blogkategori.destroy', $blog_kategori->id) }}" method="post">
                                            @method('DELETE')
                                            @CSRF
                                            <button class="item" type="submit">
                                                <i class="zmdi zmdi-delete"></i>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                            <tr class="spacer"></tr>
                          @endforeach
                      </tbody>
                  </table>
              </div>
              <!-- END DATA TABLE -->
          </div>
      </div>
@endsection
