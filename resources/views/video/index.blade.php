@extends('template-admin.template')
@section('content')
                    <h3 class="text-center title-1 judul-halaman">Konten Video</h3>
                        <div class="table-data__tool">
                            <div class="table-data__tool-right">
                                <!-- <button class="au-btn au-btn-icon au-btn--green au-btn--small" data-toggle="modal" data-target="#modalTambahVideo"> -->
                                    <!-- <i class="zmdi zmdi-plus"></i>add item</button> -->
                                  <a href="{{ route('video.create') }}" class="au-btn au-btn-icon au-btn--green au-btn--small"><i class="zmdi zmdi-plus"></i> Add Video</a>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                            @foreach($all_video as $video)
                              <div class="col-md-4">
                                  <div class="card">
                                      <img class="card-img-top" src="{{ asset('images/bg-title-01.jpg') }}" alt="Card image cap">
                                      <div class="card-body">
                                          <h4 class="card-title mb-3 text-center">{{ $video->judul }}</h4>
                                          <div class="row">
                                              <div class="col-md-6"><h5 class="text-center">Kategori Video</h5></div>
                                              <div class="col-md-6"><h5 class="text-center">{{ $video->akses->nama }}</h5></div>
                                          </div>
                                      </div>
                                      <div class="card-footer">
                                          <div class="right">
                                            <a href="{{ route('video.edit', $video->id) }}" class="btn btn-primary"><i class="fa fa-edit"></i></a>
                                            <form class="" action="{{ route('video.destroy', $video->id) }}" method="post">
                                                @method('DELETE')
                                                @CSRF
                                                <button class="btn btn-danger" type="submit">
                                                  <i class="fa fa-trash-o"></i>
                                                </button>
                                            </form>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                            @endforeach
                        </div>
@endsection
