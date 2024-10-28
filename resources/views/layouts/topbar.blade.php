<nav class="app-header navbar navbar-expand bg-body">
    <div class="container-fluid">
        <ul class="navbar-nav">

            <li class="nav-item">
                <a class="nav-link" data-lte-toggle="sidebar" href="#" role="button">
                    <i class="bi bi-list"></i>
                </a>
            </li>

        </ul>
        <ul class="navbar-nav ms-auto">

            <li class="nav-item">
                <a class="nav-link" href="#" data-lte-toggle="fullscreen">
                    <i data-lte-icon="maximize" class="bi bi-arrows-fullscreen"></i>
                    <i data-lte-icon="minimize" class="bi bi-fullscreen-exit" style="display: none;"></i>
                </a>
            </li>

            <li class="nav-item dropdown user-menu">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                    <img src="{{ asset('assets') }}/img/user2-160x160.jpg" class="shadow user-image rounded-circle"
                        alt="User Image">
                    <span class="d-none d-md-inline">{{ Auth::user()->name }}</span>
                </a>
                <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-end">
                    <li class="user-header text-bg-primary">
                        <img src="{{ asset('assets') }}/img/user2-160x160.jpg" class="shadow rounded-circle"
                            alt="User Image">
                        <p>
                            {{ Auth::user()->name }} - {{ Auth::user()->email }}
                            <small>
                                {{ \Carbon\Carbon::parse(Auth::user()->created_at)->format('d M Y H:m:s') }}
                            </small>
                        </p>
                    </li>
                    <li class="user-body">
                        <div class="row">
                            <div class="text-center col-4"> <a href="#">Followers</a> </div>
                            <div class="text-center col-4"> <a href="#">Sales</a> </div>
                            <div class="text-center col-4"> <a href="#">Friends</a> </div>
                        </div>
                    </li>

                    <li class="user-footer">

                        <form action="{{ route('logout') }}" method="post" class="form-inline">
                            @csrf
                            <a href="#" class="btn btn-default btn-flat">Profile</a>

                            <button type="submit" class="btn btn-default btn-flat float-end">
                                Sign out
                            </button>
                        </form>

                    </li>

                </ul>
            </li>
        </ul>
    </div>
</nav>
