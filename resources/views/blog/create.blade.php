@extends('template-admin.template')

@section('content')
<div class="col-md-9">
    <div class="card">
        <div class="card-body">
            <div class="card-title">
                <h3 class="text-center title-2">Tambah Artikel</h3>
            </div>
            <hr>
            <form action="{{ route('blog.store') }}" method="post" enctype="multipart/form-data">
              @method('POST')
              @CSRF
              @include('blog.form')
            </form>
        </div>
    </div>
</div>
@endsection
