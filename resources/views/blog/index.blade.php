@extends('template-admin.template')
@section('content')
                    <h3 class="text-center title-1 judul-halaman">Kelola Blog</h3>
                        <div class="table-data__tool">
                            <div class="table-data__tool-right">
                                <a href="{{ route('blog.create') }}" class="au-btn au-btn-icon au-btn--green au-btn--small">

                                    <i class="zmdi zmdi-plus"></i>add item</a>
                                </div>
                            </div>
                        </div>
                        <div class="row">

                            @foreach($all_blog as $blog)
                            <div class="col-md-4">
                                <div class="card">
                                    <img class="card-img-top" src="{{ asset('images/thumbnail/'.$blog->thumbnail) }}" alt="Card image cap">
                                    <div class="card-body">
                                        <h4 class="card-title mb-3 text-center">{{ $blog->judul }}</h4>
                                        <div class="row">
                                            <div class="col-md-12"><h5 class="right">{{ $blog->blog_kategori->nama_kategori }}</h5></div>
                                        </div>
                                        <br>
                                        <p class="card-text">{!! str_limit($blog->isi, $limit = 300, $end = '...') !!}</p>
                                    </div>
                                    <div class="card-footer text-muted">
                                      <div class="row">
                                        <div class="col-7 col-sm-7 col-md-7">
                                          <div class="row">
                                            <div class="col-12 text-info">
                                              <small>By : {{ $blog->admin }}</small>
                                            </div>
                                            <div class="col-12">
                                              <small>Date : {{ $blog->created_at->format('d M, Y') }}</small>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="col-2 col-sm-2 col-md-2">
                                          <a href="{{ route('blog.edit', $blog->id) }}" class="btn"><i class="fa fa-edit"></i></a>
                                        </div>
                                        <div class="col-2 col-sm-2 col-md-2">
                                          <form class="" action="{{ route('blog.destroy', $blog->id) }}" method="post">
                                              @method('DELETE')
                                              @CSRF
                                              <button class="btn" type="submit">
                                                <i class="fa fa-trash-o"></i>
                                              </button>
                                          </form>
                                        </div>
                                      </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach


                        </div>
@endsection
