<!-- ============================================================== -->
<!-- Left Sidebar - style you can find in sidebar.scss  -->
<!-- ============================================================== -->
<aside class="left-sidebar">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
        <!-- User profile -->
        <div class="user-profile">
            {{--<!-- User profile image -->--}}
            {{--<div class="profile-img"> <img src="{{ asset("program/assets/images/users/profile.png") }}" alt="user" />--}}
                {{--<!-- this is blinking heartbit-->--}}
                {{--<div class="notify setpos"> <span class="heartbit"></span> <span class="point"></span> </div>--}}
            {{--</div>--}}
            {{--<!-- User profile text-->--}}
            <div class="profile-text">
                <h5>{{ Auth::user()->name }}</h5>
                {{--<a href="#" class="dropdown-toggle u-dropdown" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true"><i class="mdi mdi-settings"></i></a>--}}
                {{--<a href="app-email.html" class="" data-toggle="tooltip" title="Email"><i class="mdi mdi-gmail"></i></a>--}}
                {{--<a href="{{ url('/program/logout') }}"--}}
                   {{--onclick="event.preventDefault();--}}
                                    {{--document.getElementById('logout-form').submit();" class="" data-toggle="tooltip" title="Logout"><i class="mdi mdi-power"></i></a>--}}
                {{--<form id="logout-form"--}}
                      {{--action="{{ url('/program/logout') }}"--}}
                      {{--method="POST"--}}
                      {{--style="display: none;">--}}
                    {{--{{ csrf_field() }}--}}
                {{--</form>--}}
                <div class="dropdown-menu animated flipInY">
                    <!-- text-->
                    {{--<a href="#" class="dropdown-item"><i class="ti-user"></i> My Profile</a>--}}
                    {{--<div class="dropdown-divider"></div>--}}
                    {{--<!-- text-->--}}
                    {{--<a href="#" class="dropdown-item"><i class="ti-settings"></i> Account Setting</a>--}}
                    {{--<!-- text-->--}}
                    {{--<div class="dropdown-divider"></div>--}}
                    {{--<!-- text-->--}}
                    <a href="{{ url('/logout') }}"
                       onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();" class="dropdown-item"><i class="fa fa-power-off"></i> Logout</a>
                    <form id="logout-form"
                          action="{{ url('/logout') }}"
                          method="POST"
                          style="display: none;">
                        {{ csrf_field() }}
                    </form>
                    <!-- text-->
                </div>
            </div>
        </div>
        <!-- End User profile text-->
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
                {{--<li class="nav-devider"></li>--}}
                <li class="nav-small-cap">NAVIGASI</li>
                <li> <a class="waves-effect waves-dark" href="{{ url('') }}" aria-expanded="false"><i class="mdi mdi-gauge"></i><span class="hide-menu">Dashboard</span></a>

                </li>


                <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-widgets"></i><span class="hide-menu">Master Barang</span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="{{ url('program/stuff') }}">Master Barang</a></li>
                        <li><a href="{{ url('program/stuff/create') }}">Tambah Master Barang</a></li>
                    </ul>
                </li>

                <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-widgets"></i><span class="hide-menu">Barang</span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="{{ url('program/item') }}">Detail Barang</a></li>
                        <li><a href="{{ url('program/item/create') }}">Tambah Barang</a></li>
                    </ul>
                </li>

                <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-file"></i><span class="hide-menu">Perbaikan</span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="{{ url('program/repair') }}">Data Perbaikan</a></li>
                        <li><a href="{{ url('program/repair/create') }}">Tambah Perbaikan</a></li>
                        <li><a href="{{ url('program/repairback') }}">Pengembalian Perbaikan</a></li>
                    </ul>
                </li>


                {{--<li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-file"></i><span class="hide-menu">Pengadaan</span></a>--}}
                    {{--<ul aria-expanded="false" class="collapse">--}}
                        {{--<li><a href="{{ url('program/make') }}">Data Pengadaan</a></li>--}}
                        {{--<li><a href="{{ url('program/make/create') }}">Tambah Pengadaan</a></li>--}}
                    {{--</ul>--}}
                {{--</li>--}}

                {{--<li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-file"></i><span class="hide-menu">Peminjaman</span></a>--}}
                    {{--<ul aria-expanded="false" class="collapse">--}}
                        {{--<li><a href="{{ url('program/borrow') }}">Data Peminjaman</a></li>--}}
                        {{--<li><a href="{{ url('program/borrow/create') }}">Tambah Peminjaman</a></li>--}}
                        {{--<li><a href="{{ url('program/loan/back') }}">Pengembalian Peminjaman</a></li>--}}
                    {{--</ul>--}}
                {{--</li>--}}


            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>
<!-- ============================================================== -->
<!-- End Left Sidebar - style you can find in sidebar.scss  -->
<!-- ============================================================== -->
