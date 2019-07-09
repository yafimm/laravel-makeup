            <!-- modal Hapus Video -->
            <div class="modal fade" id="modalDeleteVideo" tabindex="-1" role="dialog" aria-labelledby="staticModalLabel" aria-hidden="true"
             data-backdrop="static">
                <div class="modal-dialog modal-sm" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="staticModalLabel">Hapus Video</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <p>
                                Anda Yakin Ingin Menghapus Video Judul Video?
                            </p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                            <button type="button" class="btn btn-primary">Hapus</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end modal Hapus Video -->
            <!-- modal Edit Hak Akses -->
            <div class="modal fade" id="modalEditKategori" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="mediumModalLabel">Edit Hak Akses</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="" method="post" novalidate="novalidate">
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="nama-hakakses" class=" form-control-label">Nama</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="text" id="nama-hakakses" name="text-input" value="Makeup" class="form-control">
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="deskripsi-hakakses" class=" form-control-label">Deskripsi</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <textarea name="textarea-input" id="deskripsi-hakakses" rows="9" class="form-control">Bla bla bla bla Bla bla bla bla Bla bla bla bla</textarea>
                                    </div>
                                </div>
                                <div>
                                    <br>
                                    <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block">Edit
                                    </button>
                                </div>
                            </form>         
                        </div>
                    </div>
                </div>
            </div>
            <!-- end modal Edit Hak Akses -->
            <!-- modal Hapus Hak Akses -->
            <div class="modal fade" id="modalHapusKategori" tabindex="-1" role="dialog" aria-labelledby="staticModalLabel" aria-hidden="true"
             data-backdrop="static">
                <div class="modal-dialog modal-sm" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="staticModalLabel">Hapus Hak Akses</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <p>
                                Anda Yakin Ingin Menghapus Kategori Makeup?
                            </p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                            <button type="button" class="btn btn-primary">Hapus</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end modal Hapus Hak Akses -->
            <!-- modal Tambah Hak Akses -->
            <div class="modal fade" id="modalTambahHakAkses" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="mediumModalLabel">Tambah Hak Akses</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="" method="post" novalidate="novalidate">
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="nama-hakakses" class=" form-control-label">Nama</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="text" id="nama-hakakses" name="text-input" placeholder="masukkan nama hak akses" class="form-control">
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="deskripsi-hakakses" class=" form-control-label">Deskripsi</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <textarea name="textarea-input" id="deskripsi-hakakses" rows="9" placeholder="Deskripsi hak akses" class="form-control"></textarea>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="harga-hakakses" class=" form-control-label">Harga</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="text" id="harga-hakakses" name="text-input" placeholder="Rp." class="form-control">
                                    </div>
                                </div>
                                <div>
                                    <br>
                                    <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block">Submit
                                    </button>
                                </div>
                            </form>         
                        </div>
                    </div>
                </div>
            </div>
            <!-- end modal Tambah Hak Akses -->
            <!-- modal Edit Hak Akses -->
            <div class="modal fade" id="modalEditHakAkses" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="mediumModalLabel">Edit Hak Akses</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="" method="post" novalidate="novalidate">
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="nama-hakakses" class=" form-control-label">Nama</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="text" id="nama-hakakses" name="text-input" value="Gold" class="form-control">
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="deskripsi-hakakses" class=" form-control-label">Deskripsi</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <textarea name="textarea-input" id="deskripsi-hakakses" rows="9" class="form-control">Bla bla bla bla Bla bla bla bla Bla bla bla bla</textarea>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="harga-hakakses" class=" form-control-label">Harga</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="text" id="harga-hakakses" name="text-input" value="1000000" class="form-control">
                                    </div>
                                </div>
                                <div>
                                    <br>
                                    <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block">Edit
                                    </button>
                                </div>
                            </form>         
                        </div>
                    </div>
                </div>
            </div>
            <!-- end modal Edit Hak Akses -->
            <!-- modal Hapus Hak Akses -->
            <div class="modal fade" id="modalHapusHakAkses" tabindex="-1" role="dialog" aria-labelledby="staticModalLabel" aria-hidden="true"
             data-backdrop="static">
                <div class="modal-dialog modal-sm" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="staticModalLabel">Hapus Hak Akses</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <p>
                                Anda Yakin Ingin Menghapus Hak Akses Gold?
                            </p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                            <button type="button" class="btn btn-primary">Hapus</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end modal Hapus Hak Akses -->
            <!-- modal Edit Hak Akses -->
            <div class="modal fade" id="modalEditKategori" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="mediumModalLabel">Edit Hak Akses</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="" method="post" novalidate="novalidate">
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="nama-hakakses" class=" form-control-label">Nama</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="text" id="nama-hakakses" name="text-input" value="Makeup" class="form-control">
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="deskripsi-hakakses" class=" form-control-label">Deskripsi</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <textarea name="textarea-input" id="deskripsi-hakakses" rows="9" class="form-control">Bla bla bla bla Bla bla bla bla Bla bla bla bla</textarea>
                                    </div>
                                </div>
                                <div>
                                    <br>
                                    <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block">Edit
                                    </button>
                                </div>
                            </form>         
                        </div>
                    </div>
                </div>
            </div>
            <!-- end modal Edit Hak Akses -->
            <!-- modal Hapus Hak Akses -->
            <div class="modal fade" id="modalHapusKategori" tabindex="-1" role="dialog" aria-labelledby="staticModalLabel" aria-hidden="true"
             data-backdrop="static">
                <div class="modal-dialog modal-sm" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="staticModalLabel">Hapus Hak Akses</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <p>
                                Anda Yakin Ingin Menghapus Kategori Makeup?
                            </p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                            <button type="button" class="btn btn-primary">Hapus</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end modal Hapus Hak Akses -->