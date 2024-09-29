<div class="dlabnav">
    <div class="dlabnav-scroll">
        <ul class="metismenu" id="menu">
            <li class="header-profile">
                <a class="nav-link" href="javascript:void(0);" role="button">
                    <img src="{{asset('admin/images/profile.png')}}" width="20" alt=""/>
                    <div class="header-info ms-3">
                        <span class="font-w600 ">Hi, <b>{{auth()->user()->username}}</b></span>
                        <small class="text-end font-w400">{{auth()->user()->email}}</small>
                    </div>
                </a>
            </li>

            <li><a href="{{route('admin.home')}}" class="ai-icon pilih" id="menuHome" aria-expanded="false">
                    <i class="flaticon-381-home-2"></i>
                    <span class="nav-text">Beranda</span>
                </a>
            </li>
            <li><a href="{{route('admin.padi')}}" class="ai-icon pilih" id="menuPadi" aria-expanded="false">
                    <i class="flaticon-381-file"></i>
                    <span class="nav-text">Varietas Padi</span>
                </a>
            </li>
            <li><a href="{{route('admin.kriteria')}}" class="ai-icon" aria-expanded="false">
                    <i class="flaticon-013-checkmark"></i>
                    <span class="nav-text">Kriteria</span>
                </a>
            </li>
            <li><a href="{{route('admin.sub')}}" class="ai-icon" aria-expanded="false">
                <i class="flaticon-021-command"></i>
                <span class="nav-text">Subkriteria</span>
            </a>
        </li>
            <li><a href="{{route('admin.rules')}}" class="ai-icon" aria-expanded="false">
                    <i class="flaticon-381-star-1"></i>
                    <span class="nav-text">Bobot Atribut</span>
                </a>
            </li>
            <li><a href="{{route('admin.history')}}" class="ai-icon" aria-expanded="false">
                    <i class="flaticon-381-notepad-1"></i>
                    <span class="nav-text">History Rekomendasi</span>
                </a>
            </li>
            <!--
            <li><a href="widget-basic.html" class="ai-icon" aria-expanded="false">
                    <i class="flaticon-381-user-9"></i>
                    <span class="nav-text">Akun Admin</span>
                </a>
            </li>
            -->
            <li><a href="{{route('logout')}}" class="ai-icon" aria-expanded="false">
                    <i class="flaticon-381-exit-1"></i>
                    <span class="nav-text">Logout</span>
                </a>
            </li>
        </ul>
    </div>
</div>