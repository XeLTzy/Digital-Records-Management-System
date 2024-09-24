<nav class="navbar navbar-expand p-3 d-flex align-items-md-center justify-content-md-between">

    <div class="d-flex align-items-center">
        <button type="button" class="btn d-block d-xl-none" data-bs-toggle="offcanvas"
            data-bs-target="#MobileSidebarMenu" aria-expanded="false" aria-controls="MobileSidebarMenu"
            style="color: white; padding: 0;">
            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor"
                class="bi bi-list" viewBox="0 0 16 16">
                <path fill-rule="evenodd"
                    d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z" />
            </svg>
        </button>
    </div>

    <div class="flex-grow-1 text-white text-center">
        <!-- d-block d-xl-none d:xl- -->
        <span class="h5 m-0 " id="SmallAndMediumScreenTooltips">Dashboard</span>
    </div>

    <!-- User Profile -->
    <div class="p-1">
        <ul class="navbar-nav ms-auto">
            <li class="nav-item dropdown">
                <a href="#" data-bs-toggle="dropdown"
                    class="nav-icon pe-md-0 py-3 d-flex align-items-center" style="text-decoration: none;">
                    <i class="fa-regular fa-circle-user fa-xl img-fluid"
                        style="color: white; text-decoration: none;"></i>
                </a>
                <ul class="dropdown-menu dropdown-menu-end collapse text-center p-2 me-4"
                    id="Userprofiledropdown">
                    <li><a class="dropdown-item" href="#" id="UserSettings" data-bs-toggle="modal"
                            data-bs-target="#UserSettingsModal">Settings</a></li>
                    <li><a class="dropdown-item" href="#" id="UserLogout">Logout</a></li>
                </ul>
            </li>
        </ul>
    </div>
    <!-- <form action="#" class="d-none d-sm-inline-block ms-auto">
                   
                </form> -->
    <!-- User profile -->
</nav>