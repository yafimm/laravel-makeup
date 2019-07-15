@extends('template-admin.template')

@section('content')
<div class="col-md-12">
    <div class="card">
        <div class="card-body">
            <div class="card-title">
                <h3 class="text-center title-2">Tambah Produk Akun Premium</h3>
            </div>
            <hr>
            <form action="{{ route('produk.store') }}" method="post">
              @method('POST')
              @CSRF
              @include('produk.form')
            </form>
        </div>
    </div>
</div>
@endsection
