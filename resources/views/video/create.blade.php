@extends('template-admin.template')

@section('content')
<div class="col-md-9">
    <div class="card">
        <div class="card-body">
            <div class="card-title">
                <h3 class="text-center title-2">Tambah Video</h3>
            </div>
            <hr>
            <form action="{{ route('video.store') }}" method="post" enctype="multipart/form-data">
              @method('POST')
              @CSRF
              @include('video.form')
            </form>
        </div>
    </div>
</div>
@endsection
