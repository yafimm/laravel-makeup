@extends('template-admin.template')

@section('content')
<div class="col-md-12">
    <div class="card">
        <div class="card-body">
            <div class="card-title">
                <h3 class="text-center title-2">Edit Artikel</h3>
            </div>
            <hr>
            <form action="{{ route('blog.update', $blog->id) }}" method="post" enctype="multipart/form-data">
              @method('PUT')
              @CSRF
              @include('blog.form')
            </form>
        </div>
    </div>
</div>
@endsection
