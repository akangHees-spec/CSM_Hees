<!--**********************************
    Nav header start
***********************************-->
<div class="nav-header">
    <a href="index.html" class="brand-logo">
        <svg class="logo-abbr" width="55" height="55" viewbox="0 0 55 55" fill="none"
            xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" clip-rule="evenodd"
                d="M27.5 0C12.3122 0 0 12.3122 0 27.5C0 42.6878 12.3122 55 27.5 55C42.6878 55 55 42.6878 55 27.5C55 12.3122 42.6878 0 27.5 0ZM28.0092 46H19L19.0001 34.9784L19 27.5803V24.4779C19 14.3752 24.0922 10 35.3733 10V17.5571C29.8894 17.5571 28.0092 19.4663 28.0092 24.4779V27.5803H36V34.9784H28.0092V46Z"
                fill="url(#paint0_linear)"></path>
            <defs>
            </defs>
        </svg>
        <div class="brand-title">
            <h2 class="">Fillow.</h2>
            <span class="brand-sub-title">@soengsouy</span>
        </div>
    </a>
    <div class="nav-control">
        <div class="hamburger">
            <span class="line"></span><span class="line"></span><span class="line"></span>
        </div>
    </div>
</div>
<!--**********************************
    Nav header end
***********************************-->

<!--**********************************
    Sidebar start
***********************************-->
<div class="dlabnav">
    <div class="dlabnav-scroll">
        <ul class="metismenu" id="menu">

            <!-- Dashboard -->
            <li>
                <a href="{{route('dashboard')}}" aria-expanded="false">
                    <i class="fas fa-tachometer-alt"></i>
                    <span class="nav-text">Dashboard</span>
                </a>
            </li>

            <!-- Home -->
            <li>
                <a href="{{ route('sigma.company-profile.index') }}" aria-expanded="false">
                    <i class="fas fa-home"></i>
                    <span class="nav-text">Home</span>
                </a>
            </li>

            <!-- About -->
            <li>
                <a href="admin/about/index.blade.php" aria-expanded="false">
                    <i class="fas fa-info-circle"></i>
                    <span class="nav-text">About</span>
                </a>
            </li>

            <!-- Services -->
            <li>
                <a href="admin/services/index.blade.php" aria-expanded="false">
                    <i class="fas fa-concierge-bell"></i>
                    <span class="nav-text">Services</span>
                </a>
            </li>

            <!-- Portfolio -->
            <li>
                <a href="admin/portfolio/index.blade.php" aria-expanded="false">
                    <i class="fas fa-briefcase"></i>
                    <span class="nav-text">Portfolio</span>
                </a>
            </li>

            <!-- Team -->
            <li>
                <a href="admin/team/index.blade.php" aria-expanded="false">
                    <i class="fas fa-users"></i>
                    <span class="nav-text">Team</span>
                </a>
            </li>

            <!-- Messages -->
            <li>
                <a href="admin/messages/index.blade.php" aria-expanded="false">
                    <i class="fas fa-envelope"></i>
                    <span class="nav-text">Messages</span>
                </a>
            </li>

            <!-- FAQ -->
            <li>
                <a href="admin/faq/index.blade.php" aria-expanded="false">
                    <i class="fas fa-question-circle"></i>
                    <span class="nav-text">FAQ</span>
                </a>
            </li>

            <!-- Contact -->
            <li>
                <a href="admin/contact/index.blade.php" aria-expanded="false">
                    <i class="fas fa-address-book"></i>
                    <span class="nav-text">Contact</span>
                </a>
            </li>

        </ul>

        <div class="side-bar-profile">
            <div class="d-flex align-items-center justify-content-between mb-3">
                <div class="side-bar-profile-img">
                    <img src="images/user.jpg" alt="">
                </div>
                <div class="profile-info1">
                    <h4 class="fs-18 font-w500">Soeng Souy</h4>
                    <span>example@mail.com</span>
                </div>
                <div class="profile-button">
                    <i class="fas fa-caret-down scale5 text-light"></i>
                </div>
            </div>
            <div class="d-flex justify-content-between mb-2 progress-info">
                <span class="fs-12"><i class="fas fa-star text-orange me-2"></i>Task Progress</span>
                <span class="fs-12">20/45</span>
            </div>
            <div class="progress default-progress">
                <div class="progress-bar bg-gradientf progress-animated" style="width: 45%; height:10px;"
                    role="progressbar">
                    <span class="sr-only">45% Complete</span>
                </div>
            </div>
        </div>
    </div>
</div>
<!--**********************************
    Sidebar end
***********************************-->
