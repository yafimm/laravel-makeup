@extends('template-admin.template')

@section('content')
<div class="col-md-12">
    <div class="card">
        <div class="card-body">
            <div class="card-title">
                <h3 class="text-center title-2">Edit Produk akun premium</h3>
            </div>
            <hr>
            <form action="{{ route('produk.update', $produk->id) }}" method="post">
              @method('PUT')
              @CSRF
              @include('produk.form')
            </form>
        </div>
    </div>
</div>
@endsection
