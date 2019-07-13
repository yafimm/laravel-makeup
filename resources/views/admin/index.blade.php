@extends('template-admin.template')
@section('content')
                        <div class="row">
                            <div class="col-md-6 col-lg-3">
                                <div class="statistic__item">
                                    <h2 class="number">14</h2>
                                    <span class="desc">user minggu ini</span>
                                    <div class="icon">
                                        <i class="zmdi zmdi-account-o"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-3">
                                <div class="statistic__item">
                                    <h2 class="number">74</h2>
                                    <span class="desc">total video</span>
                                    <div class="icon">
                                        <i class="zmdi zmdi-collection-video"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-3">
                                <div class="statistic__item">
                                    <h2 class="number">31</h2>
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
                            <a href="" class="au-btn au-btn-icon au-btn--green au-btn--small btn-section-dashboard">Kelola Blog</a>
                            <div class="judul-section-dashboard">
                                <h2 class="title-1 judul-section">Recent Blog</h2>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="card">
                                        <img class="card-img-top" src="{{ asset('images/bg-title-01.jpg') }}" alt="Card image cap">
                                        <div class="card-body">
                                            <h4 class="card-title mb-3 text-center">Judul Blog</h4>
                                            <div class="row">
                                                <div class="col-md-12"><h5 class="right">Kategori Blog</h5></div>
                                            </div>
                                        </div>
                                        <div class="card-footer text-muted">
                                          <div class="row">
                                            <div class="col-7 col-sm-7 col-md-7">
                                              <div class="row">
                                                <div class="col-12 text-info">
                                                  <small>By : admin</small>
                                                </div>
                                                <div class="col-12">
                                                  <small>Date : 7 Juli 2019</small>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="card">
                                        <img class="card-img-top" src="{{ asset('images/bg-title-01.jpg') }}" alt="Card image cap">
                                        <div class="card-body">
                                            <h4 class="card-title mb-3 text-center">Judul Blog</h4>
                                            <div class="row">
                                                <div class="col-md-12"><h5 class="right">Kategori Blog</h5></div>
                                            </div>
                                        </div>
                                        <div class="card-footer text-muted">
                                          <div class="row">
                                            <div class="col-7 col-sm-7 col-md-7">
                                              <div class="row">
                                                <div class="col-12 text-info">
                                                  <small>By : admin</small>
                                                </div>
                                                <div class="col-12">
                                                  <small>Date : 7 Juli 2019</small>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="card">
                                        <img class="card-img-top" src="{{ asset('images/bg-title-01.jpg') }}" alt="Card image cap">
                                        <div class="card-body">
                                            <h4 class="card-title mb-3 text-center">Judul Blog</h4>
                                            <div class="row">
                                                <div class="col-md-12"><h5 class="right">Kategori Blog</h5></div>
                                            </div>
                                        </div>
                                        <div class="card-footer text-muted">
                                          <div class="row">
                                            <div class="col-7 col-sm-7 col-md-7">
                                              <div class="row">
                                                <div class="col-12 text-info">
                                                  <small>By : admin</small>
                                                </div>
                                                <div class="col-12">
                                                  <small>Date : 7 Juli 2019</small>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="card">
                                        <img class="card-img-top" src="{{ asset('images/bg-title-01.jpg') }}" alt="Card image cap">
                                        <div class="card-body">
                                            <h4 class="card-title mb-3 text-center">Judul Blog</h4>
                                            <div class="row">
                                                <div class="col-md-12"><h5 class="right">Kategori Blog</h5></div>
                                            </div>
                                        </div>
                                        <div class="card-footer text-muted">
                                          <div class="row">
                                            <div class="col-7 col-sm-7 col-md-7">
                                              <div class="row">
                                                <div class="col-12 text-info">
                                                  <small>By : admin</small>
                                                </div>
                                                <div class="col-12">
                                                  <small>Date : 7 Juli 2019</small>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div>
                            <a href="" class="au-btn au-btn-icon au-btn--green au-btn--small btn-section-dashboard">Kelola Video</a>
                            <div class="judul-section-dashboard">
                                <h2 class="title-1 judul-section">Recent Video</h2>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="card">
                                        <img class="card-img-top" src="{{ asset('images/bg-title-01.jpg') }}" alt="Card image cap">
                                        <div class="card-body">
                                            <h4 class="card-title mb-3 text-center">Judul Video</h4>
                                            <div class="row">
                                                <div class="col-md-6"><h5 class="text-center">Kategori Video</h5></div>
                                                <div class="col-md-6"><h5 class="text-center">Hak Akses</h5></div>
                                            </div>
                                        </div>
                                        <div class="card-footer text-muted">
                                            <div class="row">
                                                <div class="col-7 col-sm-7 col-md-7">
                                                    <div class="row">
                                                        <div class="col-12 text-info">
                                                            <small>By : admin</small>
                                                        </div>
                                                        <div class="col-12">
                                                            <small>Date : 7 Juli 2019</small>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="card">
                                        <img class="card-img-top" src="{{ asset('images/bg-title-01.jpg') }}" alt="Card image cap">
                                        <div class="card-body">
                                            <h4 class="card-title mb-3 text-center">Judul Video</h4>
                                            <div class="row">
                                                <div class="col-md-6"><h5 class="text-center">Kategori Video</h5></div>
                                                <div class="col-md-6"><h5 class="text-center">Hak Akses</h5></div>
                                            </div>
                                        </div>
                                        <div class="card-footer text-muted">
                                            <div class="row">
                                                <div class="col-7 col-sm-7 col-md-7">
                                                    <div class="row">
                                                        <div class="col-12 text-info">
                                                            <small>By : admin</small>
                                                        </div>
                                                        <div class="col-12">
                                                            <small>Date : 7 Juli 2019</small>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="card">
                                        <img class="card-img-top" src="{{ asset('images/bg-title-01.jpg') }}" alt="Card image cap">
                                        <div class="card-body">
                                            <h4 class="card-title mb-3 text-center">Judul Video</h4>
                                            <div class="row">
                                                <div class="col-md-6"><h5 class="text-center">Kategori Video</h5></div>
                                                <div class="col-md-6"><h5 class="text-center">Hak Akses</h5></div>
                                            </div>
                                        </div>
                                        <div class="card-footer text-muted">
                                            <div class="row">
                                                <div class="col-7 col-sm-7 col-md-7">
                                                    <div class="row">
                                                        <div class="col-12 text-info">
                                                            <small>By : admin</small>
                                                        </div>
                                                        <div class="col-12">
                                                            <small>Date : 7 Juli 2019</small>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="card">
                                        <img class="card-img-top" src="{{ asset('images/bg-title-01.jpg') }}" alt="Card image cap">
                                        <div class="card-body">
                                            <h4 class="card-title mb-3 text-center">Judul Video</h4>
                                            <div class="row">
                                                <div class="col-md-6"><h5 class="text-center">Kategori Video</h5></div>
                                                <div class="col-md-6"><h5 class="text-center">Hak Akses</h5></div>
                                            </div>
                                        </div>
                                        <div class="card-footer text-muted">
                                            <div class="row">
                                                <div class="col-7 col-sm-7 col-md-7">
                                                    <div class="row">
                                                        <div class="col-12 text-info">
                                                            <small>By : admin</small>
                                                        </div>
                                                        <div class="col-12">
                                                            <small>Date : 7 Juli 2019</small>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

@endsection