@extends('template-admin.template')
@section('content')
  <h3 class="text-center title-1 judul-halaman">Riwayat Transaksi</h3>
    @include('_partial.flash_message')
    <div class="row">
        <div class="col-md-12">
            <!-- DATA TABLE -->
            <div class="table-responsive table-responsive-data2">
                <table class="table table-data2">
                    <thead>
                        <tr>
                            <th>ID Transaksi</th>
                            <th>User</th>
                            <th>Admin</th>
                            <th>Total Harga</th>
                            <th>Tanggal</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                      @foreach($all_transaksi as $transaksi)
                        <tr class="tr-shadow">
                            <td>{{ $transaksi->id }}</td>
                            <td class="desc">{{ $transaksi->user }}</td>
                            <td>{{ $transaksi->admin }}</td>
                            <td>{{ $transaksi->total_harga }}</td>
                            <td>{{ $transaksi->created_at->format('d M Y') }}</td>
                            <td>{{ $transaksi->status }}</td>
                            <td>
                                <div class="table-data-feature">
                                    <a href="{{ route('transaksi.show-riwayat', $transaksi->id) }}" class="item"><i class="zmdi zmdi-edit"></i></a>
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
      {{ $all_transaksi->links() }}
    </div>

@endsection
