@extends('template-admin.template')
@section('content')
                        <div class="row">
                            <div class="col-md-6 col-lg-3">
                                <div class="statistic__item">
                                    <h2 class="number">{{ $total_user_week }}</h2>
                                    <span class="desc">user bulan ini</span>
                                    <div class="icon">
                                        <i class="zmdi zmdi-account-o"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-3">
                                <div class="statistic__item">
                                    <h2 class="number">{{ $total_videos }}</h2>
                                    <span class="desc">total video</span>
                                    <div class="icon">
                                        <i class="zmdi zmdi-collection-video"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-3">
                                <div class="statistic__item">
                                    <h2 class="number">{{ $total_blogs }}</h2>
                                    <span class="desc">total blog</span>
                                    <div class="icon">
                                        <i class="zmdi zmdi-blogger"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-3">
                                <div class="statistic__item">
                                    <h2 class="number">29</h2>
                                    <span class="desc">total user premium</span>
                                    <div class="icon">
                                        <i class="zmdi zmdi-money"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-8">
                                <h3 class="title-1 judul-section">List Akun User</h3>
                                <!-- DATA TABLE -->
                                <div class="table-responsive table--no-card m-b-30">
                                    <table class="table table-borderless table-striped table-earning">
                                        <thead>
                                            <tr>
                                                <th>Nama Lengkap</th>
                                                <th>Username</th>
                                                <th>Gender</th>
                                                <th>Email</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Dzaki Madhani</td>
                                                <td>dzakim</td>
                                                <td>Laki-laki</td>
                                                <td>dzaki@gmail.com</td>
                                                <td>
                                                    <div class="table-data-feature">
                                                        <button class="item" data-placement="top" title="Delete" data-toggle="modal" data-target="#modalHapusKategori">
                                                            <i class="zmdi zmdi-delete"></i>
                                                        </button>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Dzaki Madhani</td>
                                                <td>dzakim</td>
                                                <td>Laki-laki</td>
                                                <td>dzaki@gmail.com</td>
                                                <td>
                                                    <div class="table-data-feature">
                                                        <button class="item" data-placement="top" title="Delete" data-toggle="modal" data-target="#modalHapusKategori">
                                                            <i class="zmdi zmdi-delete"></i>
                                                        </button>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Dzaki Madhani</td>
                                                <td>dzakim</td>
                                                <td>Laki-laki</td>
                                                <td>dzaki@gmail.com</td>
                                                <td>
                                                    <div class="table-data-feature">
                                                        <button class="item" data-placement="top" title="Delete" data-toggle="modal" data-target="#modalHapusKategori">
                                                            <i class="zmdi zmdi-delete"></i>
                                                        </button>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Dzaki Madhani</td>
                                                <td>dzakim</td>
                                                <td>Laki-laki</td>
                                                <td>dzaki@gmail.com</td>
                                                <td>
                                                    <div class="table-data-feature">
                                                        <button class="item" data-placement="top" title="Delete" data-toggle="modal" data-target="#modalHapusKategori">
                                                            <i class="zmdi zmdi-delete"></i>
                                                        </button>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- END DATA TABLE -->
                            </div>
                            <div class="col-lg-4">
                                <h2 class="title-1 judul-section">List User Premium</h2>
                                <div class="au-card au-card--bg-blue au-card-top-countries m-b-40">
                                    <div class="au-card-inner">
                                        <div class="table-responsive">
                                            <table class="table table-top-countries">
                                                <thead>
                                                    <tr>
                                                        <th style="color: gold;">Username</th>
                                                        <th style="color: gold;" class="text-right">Hak Akses</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>username</td>
                                                        <td class="text-right">Gold</td>
                                                    </tr>
                                                    <tr>
                                                        <td>username</td>
                                                        <td class="text-right">Silver</td>
                                                    </tr>

                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <a href="{{ route('blog.index') }}" class="au-btn au-btn-icon au-btn--green au-btn--small btn-section-dashboard">Kelola Blog</a>
                            <div class="judul-section-dashboard">
                                <h2 class="title-1 judul-section">Recent Blog</h2>
                            </div>
                            <div class="row">
                                @foreach($all_recent_blogs as $recent_blog)
                                  <div class="col-md-3">
                                      <div class="card">
                                          <img class="card-img-top" src="{{ asset('images/thumbnail/'.$recent_blog->thumbnail) }}" alt="Card image cap">
                                          <div class="card-body">
                                              <h4 class="card-title mb-3 text-center">{{ $recent_blog->judul }}</h4>
                                              <div class="row">
                                                  <div class="col-md-12"><h5 class="right">Kategori Blog</h5></div>
                                              </div>
                                          </div>
                                          <div class="card-footer text-muted">
                                            <div class="row">
                                              <div class="col-12 col-sm-12 col-md-12">
                                                <div class="row">
                                                  <div class="col-12 text-info">
                                                    <small>By : {{ $recent_blog->admin }}</small>
                                                  </div>
                                                  <div class="col-12">
                                                    <small>Date : {{ $recent_blog->created_at->format('d M Y') }}</small>
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                      </div>
                                  </div>
                                @endforeach
                            </div>
                        </div>

                        <div>
                            <a href="{{ route('video.index') }}" class="au-btn au-btn-icon au-btn--green au-btn--small btn-section-dashboard">Kelola Video</a>
                            <div class="judul-section-dashboard">
                                <h2 class="title-1 judul-section">Recent Video</h2>
                            </div>
                            <div class="row">
                              @foreach($all_recent_videos as $recent_video)
                                <div class="col-md-3">
                                    <div class="card">
                                        <img class="card-img-top" src="{{ asset('images/thumbnail/'.$recent_video->thumbnail) }}" alt="Card image cap">
                                        <div class="card-body">
                                            <h4 class="card-title mb-3 text-center">{{$recent_video->judul}}</h4>
                                            <div class="row">
                                                <div class="col-md-6"><h5 class="text-center">Kategori Video</h5></div>
                                                <div class="col-md-6"><h5 class="text-center">{{ $recent_video->akses->nama }}</h5></div>
                                            </div>
                                        </div>
                                        <div class="card-footer text-muted">
                                            <div class="row">
                                                <div class="col-12 col-sm-12 col-md-12">
                                                    <div class="row">
                                                        <div class="col-12 text-info">
                                                            <small>By : {{ $recent_video->admin }}</small>
                                                        </div>
                                                        <div class="col-12">
                                                            <small>Date : {{ $recent_video->created_at->format('d M Y') }}</small>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                              @endforeach

                            </div>
                        </div>

@endsection
