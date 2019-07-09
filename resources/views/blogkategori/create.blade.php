@extends('template-admin.template')

@section('content')
<div class="col-md-9">
    <div class="card">
        <div class="card-body">
            <div class="card-title">
                <h3 class="text-center title-2">Tambah Kategori Blog</h3>
            </div>
            <hr>
            <form action="{{ url('/admin/blogkategori') }}" method="post">
              @method('POST')
              @CSRF
              @include('blogkategori.form')
            </form>
        </div>
    </div>
</div>
@endsection
