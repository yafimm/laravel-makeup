@extends('template-admin.template')
@section('content')
  <h3 class="text-center title-1 judul-halaman">Kelola Hak Akses Video</h3>
    @include('_partial.flash_message')
    <div class="row">
        <div class="col-md-12">
            <!-- DATA TABLE -->
            <div class="table-data__tool">

                <div class="table-data__tool-right">
                    <!-- <button class="au-btn au-btn-icon au-btn--green au-btn--small" data-toggle="modal" data-target="#modalTambahHakAkses">
                        <i class="zmdi zmdi-plus"></i>Add item</button> -->
                      <a href="{{ route('akses.create') }}" class="au-btn au-btn-icon au-btn--green au-btn--small">
                              <i class="zmdi zmdi-plus"></i> Add item</a>
                </div>
            </div>



            <div class="table-responsive table-responsive-data2">
                <table class="table table-data2">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nama</th>
                            <th>Harga</th>
                            <th>Nilai Akses</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                      @foreach($all_akses as $akses)
                        <tr class="tr-shadow">
                            <td>{{ $akses->id }}</td>
                            <td class="desc">{{ $akses->nama }}</td>
                            <td>{{ $akses->harga }}</td>
                            <td>{{ $akses->nilai_akses }}</td>
                            <td>
                                <div class="table-data-feature">
                                    <!-- <button class="item" data-placement="top" title="Edit" data-toggle="modal" data-target="#modalEditHakAkses">
                                        <i class="zmdi zmdi-edit"></i>
                                    </button>
                                    <button class="item" data-placement="top" title="Delete" data-toggle="modal" data-target="#modalHapusHakAkses">
                                        <i class="zmdi zmdi-delete"></i>
                                    </button> -->
                                    <a href="{{ route('akses.edit', $akses->id) }}" class="item"><i class="zmdi zmdi-edit"></i></a>
                                    <form class="" action="{{ route('akses.destroy', $akses->id) }}" method="post">
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
