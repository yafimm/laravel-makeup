@extends('template-admin.template')

@section('content')
<div class="col-md-12">
    <div class="card">
        <div class="card-body">
            <div class="card-title">
                <h3 class="text-center title-2">Edit Transaksi</h3>
            </div>
            <hr>
            <form action="{{ route('transaksi.update', $transaksi->id) }}" method="post" enctype="multipart/form-data">
              @method('PUT')
              @CSRF
              @include('transaksi.form')
            </form>
        </div>
    </div>
</div>
@endsection
