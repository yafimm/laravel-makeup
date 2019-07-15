@extends('template-admin.template')
@section('content')
  <h3 class="text-center title-1 judul-halaman">Kelola Produk akun premium</h3>
    @include('_partial.flash_message')
    <div class="row">
        <div class="col-md-12">
            <!-- DATA TABLE -->
            <div class="table-data__tool">

                <div class="table-data__tool-right">
                      <a href="{{ route('produk.create') }}" class="au-btn au-btn-icon au-btn--green au-btn--small">
                              <i class="zmdi zmdi-plus"></i> Add item</a>
                </div>
            </div>



            <div class="table-responsive table-responsive-data2">
                <table class="table table-data2">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Akun Premium</th>
                            <th>Harga</th>
                            <th>Potongan Harga</th>
                            <th>Waktu</th>
                            <th>Deskripsi</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                      @foreach($all_produk as $produk)
                        <tr class="tr-shadow">
                            <td>{{ $produk->id }}</td>
                            <td class="desc">{{ $produk->akses->nama }}</td>
                            <td>{{ $produk->harga }}</td>
                            <td>{{ $produk->potongan_harga }}</td>
                            <td>{{ $produk->waktu }} bulan</td>
                            <td>{{ $produk->deskripsi }}</td>
                            <td>
                                <div class="table-data-feature">
                                    <a href="{{ route('produk.edit', $produk->id) }}" class="item"><i class="zmdi zmdi-edit"></i></a>
                                    <form class="" action="{{ route('produk.destroy', $produk->id) }}" method="post">
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

    <div class="d-flex justify-content-center">
      {{ $all_produk->links() }}
    </div>

@endsection
