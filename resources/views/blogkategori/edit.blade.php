@extends('template-admin.template')

@section('content')
<div class="col-md-6">
    <div class="card">
        <div class="card-body">
            <div class="card-title">
                <h3 class="text-center title-2">Edit Kategori Blog</h3>
            </div>
            <hr>
            <form action="{{ route('blogkategori.update', $blog_kategori->id) }}" method="post">
              @method('PUT')
              @CSRF
              @include('blogkategori.form')
            </form>
        </div>
    </div>
</div>
@endsection
