@extends('template-admin.template')
@section('content')
<h3 class="text-center title-1 judul-halaman">Kelola Hak Akses Video</h3>
                        <div class="row">
                            <div class="col-md-12">
                                <!-- DATA TABLE -->
                                <div class="table-data__tool">
                                    
                                    <div class="table-data__tool-right">
                                        <button class="au-btn au-btn-icon au-btn--green au-btn--small" data-toggle="modal" data-target="#modalTambahHakAkses">
                                            <i class="zmdi zmdi-plus"></i>add item</button>
                                    </div>
                                </div>



                                <div class="table-responsive table-responsive-data2">
                                    <table class="table table-data2">
                                        <thead>
                                            <tr>
                                                <th>nama</th>
                                                <th>deskripsi</th>
                                                <th>harga</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="tr-shadow">
                                                <td>Lori Lynch</td>
                                                <td class="desc">Samsung S8 Black</td>
                                                <td>$679.00</td>
                                                <td>
                                                    <div class="table-data-feature">
                                                        <button class="item" data-placement="top" title="Edit" data-toggle="modal" data-target="#modalEditHakAkses">
                                                            <i class="zmdi zmdi-edit"></i>
                                                        </button>
                                                        <button class="item" data-placement="top" title="Delete" data-toggle="modal" data-target="#modalHapusHakAkses">
                                                            <i class="zmdi zmdi-delete"></i>
                                                        </button>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="spacer"></tr>
                                            <tr class="tr-shadow">
                                                <td>Lori Lynch</td>
                                                <td class="desc">Samsung S8 Black</td>
                                                <td>$679.00</td>
                                                <td>
                                                    <div class="table-data-feature">
                                                        <button class="item" data-placement="top" title="Edit" data-toggle="modal" data-target="#modalEditHakAkses">
                                                            <i class="zmdi zmdi-edit"></i>
                                                        </button>
                                                        <button class="item" data-placement="top" title="Delete" data-toggle="modal" data-target="#modalHapusHakAkses">
                                                            <i class="zmdi zmdi-delete"></i>
                                                        </button>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="spacer"></tr>
                                            <tr class="tr-shadow">
                                                <td>Lori Lynch</td>
                                                <td class="desc">Samsung S8 Black</td>
                                                <td>$679.00</td>
                                                <td>
                                                    <div class="table-data-feature">
                                                        <button class="item" data-placement="top" title="Edit" data-toggle="modal" data-target="#modalEditHakAkses">
                                                            <i class="zmdi zmdi-edit"></i>
                                                        </button>
                                                        <button class="item" data-placement="top" title="Delete" data-toggle="modal" data-target="#modalHapusHakAkses">
                                                            <i class="zmdi zmdi-delete"></i>
                                                        </button>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="spacer"></tr>
                                            
                                        </tbody>
                                    </table>
                                </div>
                                <!-- END DATA TABLE -->
                            </div>
                        </div>
@endsection