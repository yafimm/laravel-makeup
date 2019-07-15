        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="{{ url('') }}">
                    <img src="{{ asset('images/logo-admin.png') }}" alt="Beauty Admin" />
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li>
                            <a href="{{ url('admin/dashboard') }}">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-money-check-alt"></i>Transaksi</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="{{ url('admin/transaksi/riwayat') }}">Riwayat Transaksi</a>
                                </li>
                                <li>
                                    <a href="{{ url('admin/transaksi') }}">Transaksi</a>
                                </li>
                            </ul>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-video"></i>Video</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="{{ url('admin/video') }}">Kelola Video</a>
                                </li>
                                <li>
                                    <a href="{{ url('') }}">Kelola Kategori Video</a>
                                </li>
                            </ul>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fab fa-blogger"></i>Blog</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="{{ url('admin/blog') }}">Kelola Blog</a>
                                </li>
                                <li>
                                    <a href="{{ url('admin/blogkategori') }}">Kelola Kategori Blog</a>
                                </li>
                            </ul>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-gem"></i>Subscribe</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="{{ url('admin/akses') }}">Kelola Akun Premium</a>
                                </li>
                                <li>
                                    <a href="{{ url('admin/produk') }}">Kelola Produk Akun Premium</a>
                                </li>
                                <li>
                                    <a href="#">User Premium</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->
