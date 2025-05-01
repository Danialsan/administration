<div class="left-side-menu shadow">

    <div class="slimscroll-menu">

        <!--- Sidemenu -->
        <div id="sidebar-menu">

            <ul class="metismenu" id="side-menu">

                <li class="menu-title">Menu</li>


                <li>
                    <x-header.link-nav href="/">
                        <i class="remixicon-dashboard-line"></i>
                        <span>Beranda</span>
                    </x-header.link-nav>
                </li>

                <li>
                    <x-header.link-nav href="#">
                        <i class="remixicon-stack-line"></i>
                        <span>Pelayanan</span>
                        <span class="menu-arrow"></span>
                    </x-header.link-nav>
                    <ul class="nav-second-level" aria-expanded="false">
                        <li>
                            <x-header.link-nav href="/petugas/pelayanan/perizinan">
                                <span>Perizinan</span>
                            </x-header.link-nav>
                        </li>
                        <li>
                            <x-header.link-nav href="/petugas/pelayanan/pembayaran">
                                <span>Pembayaran</span>
                            </x-header.link-nav>
                        </li>
                    </ul>
                </li>

                <li>
                    <x-header.link-nav href="/petugas/ppsb">
                        <i class="fe-users"></i>
                        <span>PPSB</span>
                    </x-header.link-nav>
                </li>
                <li>
                    <x-header.link-nav href="/petugas/print-out">
                        <i class="fe-printer"></i>
                        <span>Print Out</span>
                    </x-header.link-nav>
                </li>

                {{-- Admin --}}
                <li class="menu-title mt-3">Admin</li>

                <li>
                    <x-header.link-nav href="/admin/santri">
                        <i class="fe-users"></i>
                        <span>Santri</span>
                    </x-header.link-nav>
                </li>

                <li>
                    <x-header.link-nav href="#"
                        style="{{ request()->is('/admin/sekolah/umum') || request()->is('/admin/sekolah/madin') ? 'color: #FFFFFF' : '' }}">
                        <i class="remixicon-stack-line"></i>
                        <span>Sekolah</span>
                        <span class="menu-arrow"></span>
                    </x-header.link-nav>
                    <ul class="nav-second-level" aria-expanded="false">
                        <li>
                            <x-header.link-nav href="/admin/sekolah/umum">
                                <span>Umum</span>
                            </x-header.link-nav>
                        </li>
                        <li>
                            <x-header.link-nav href="/admin/sekolah/madin">
                                <span>Madin</span>
                            </x-header.link-nav>
                        </li>
                    </ul>
                </li>

                <li>
                    <x-header.link-nav href="/admin/wisma">
                        <i class="fe-users"></i>
                        <span>Wisma</span>
                    </x-header.link-nav>
                </li>

                <li>
                    <x-header.link-nav href="#"
                        style="{{ request()->is('/admin/pengaturan/wisma') || request()->is('/admin/pengaturan/keuangan') || request()->is('/admin/pengaturan/upload-user') ? 'color: #FFFFFF' : '' }}">
                        <i class="remixicon-stack-line"></i>
                        <span>Pengaturan</span>
                        <span class="menu-arrow"></span>
                    </x-header.link-nav>
                    <ul class="nav-second-level" aria-expanded="false">
                        <li>
                            <x-header.link-nav href="/admin/pengaturan/wisma">
                                <span>Wisma</span>
                            </x-header.link-nav>
                        </li>
                        <li>
                            <x-header.link-nav href="/admin/pengaturan/keuangan">
                                <span>Keuangan</span>
                            </x-header.link-nav>
                        </li>
                        <li>
                            <x-header.link-nav href="/admin/pengaturan/upload-user">
                                <span>Upload Data</span>
                            </x-header.link-nav>
                        </li>
                    </ul>
                </li>


            </ul>

        </div>
        <!-- End Sidebar -->

        {{-- <div class="clearfix"></div> --}}

    </div>
    <!-- Sidebar -left -->

</div>