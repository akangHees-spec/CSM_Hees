<!--**********************************
            Header start
        ***********************************-->
<div class="header border-bottom">
    <div class="header-content">
        <nav class="navbar navbar-expand">
            <div class="collapse navbar-collapse justify-content-between">
                <div class="header-left">
                    <div class="dashboard_bar">
                        Dashboard
                    </div>
                </div>
                <ul class="navbar-nav header-right">
                    <li class="nav-item dropdown  header-profile">
                        <a class="nav-link" href="javascript:void(0);" role="button" data-bs-toggle="dropdown">
                            <img alt="admin" class="rounded-circle admin-img-width-for-mobile"
                                src="{{ asset('admin/images/profile/profile.png') }}"
                                style="width: 50px; height: 50px;" />
                        </a>
                        <div class="dropdown-menu dropdown-menu-end">

                            <div class="dropdown-item text-primary fw-bold">
                                {{ auth()->user()->name }}
                            </div>

                            <div class="dropdown-divider"></div>

                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button type="submit" class="dropdown-item ai-icon border-0 bg-transparent">
                                    <svg id="icon-logout" xmlns="http://www.w3.org/2000/svg" class="text-danger"
                                        width="18" height="18" viewBox="0 0 24 24" fill="none"
                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
                                        <polyline points="16 17 21 12 16 7"></polyline>
                                        <line x1="21" y1="12" x2="9" y2="12"></line>
                                    </svg>
                                    <span class="ms-2">Logout</span>
                                </button>
                            </form>

                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</div>
<!--**********************************
            Header end ti-comment-alt
        ***********************************-->
