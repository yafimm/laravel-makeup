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
                                      <img class="card-img-top" src="{{ asset('images/thumbnail/'.$video->thumbnail) }}" alt="Card image cap">
                                      <div class="card-body">
                                          <h4 class="card-title mb-3 text-center">{{ $video->judul }}</h4>
                                          <div class="row">
                                              <div class="col-md-6"><h5 class="text-center">Kategori Video</h5></div>
                                              <div class="col-md-6"><h5 class="text-center">{{ $video->akses->nama }}</h5></div>
                                          </div>
                                      </div>
                                      <div class="card-footer text-muted">
                                        <div class="row">
                                          <div class="col-7 col-sm-7 col-md-7">
                                            <div class="row">
                                              <div class="col-12 text-info">
                                                <small>By : {{ $video->admin }}</small>
                                              </div>
                                              <div class="col-12">
                                                <small>Date : {{ $video->created_at->format('d M, Y') }}</small>
                                              </div>
                                            </div>
                                          </div>
                                          <div class="col-2 col-sm-2 col-md-2">
                                            <a href="{{ route('video.edit', $video->id) }}" class="btn btn-edit-konten"><i class="fa fa-edit"></i></a>
                                          </div>
                                          <div class="col-2 col-sm-2 col-md-2">
                                            <form class="" action="{{ route('video.destroy', $video->id) }}" method="post">
                                                @method('DELETE')
                                                @CSRF
                                                <button class="btn btn-hapus-konten" type="submit">
                                                  <i class="fa fa-trash-o btn-hapus-konten"></i>
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
