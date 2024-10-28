<aside class="shadow app-sidebar bg-body-secondary" data-bs-theme="dark">
    <div class="sidebar-brand">

        <a href="/" class="brand-link">
            <img src="{{ asset('assets') }}/img/AdminLTELogo.png" alt="AdminLTE Logo"
                class="shadow opacity-75 brand-image">
            <span class="brand-text fw-light">AdminLTE 4</span>
        </a>

    </div>
    <div class="sidebar-wrapper">
        <nav class="mt-2">
            <ul class="nav sidebar-menu flex-column" data-lte-toggle="treeview" role="menu" data-accordion="false">

                <li class="nav-item">
                    <a href="{{ route('dashboard') }}"
                        class="nav-link {{ route('dashboard') == request()->routeIs('dashboard') ? 'active' : '' }}">
                        <i class="nav-icon bi bi-speedometer"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('berita') }}"
                        class="nav-link {{ route('berita') == request()->routeIs('berita') ? 'active' : '' }}">
                        <i class="nav-icon bi bi-send"></i>
                        <p>
                            Berita
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('kategori') }}"
                        class="nav-link {{ route('kategori') == request()->routeIs('kategori') ? 'active' : '' }}">
                        <i class="nav-icon bi bi-send"></i>
                        <p>
                            Kategori
                        </p>
                    </a>
                </li>

            </ul>
        </nav>
    </div>
</aside>
