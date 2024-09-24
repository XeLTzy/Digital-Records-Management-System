<aside id="sidebar" class="d-none d-xl-block">
    <div class="d-flex align-items-center gap-3">

        <button id="sidebarbtn" class="toggle-btn mt-1" type="button">
            <i class="bi bi-list" style="color: white;"></i>
        </button>

        <div class="sidebar-logo img-fluid">
            <img src="assets/images/Icons/logo-v5.png" alt="icons"
                style=" height: 45px; max-height: 45px; max-width: 100%; margin-top: 13px;">
        </div>
    </div>


    <!-- Sidebar for extra Large Screen -->
    <ul class="sidebar-nav">
        <li class="sidebar-item mx-auto active">
            <a href="#" class="sidebar-link DesktopSidebarButton active" data-bs-toggle="tooltip"
                data-bs-placement="right" data-bs-title="Dashboard" data-section="dashboard">
                <i class="fa-solid fa-house-medical fa-lg"></i>
                <span class="ms-4">Dashboard</span>
            </a>
        </li>
        <li class="sidebar-item mx-auto">
            <a href="#" class="sidebar-link DesktopSidebarButton" data-bs-toggle="tooltip"
                data-bs-placement="right" data-bs-title="Patient" data-section="patient">
                <i class="fa-solid fa-hospital-user fa-lg"></i>
                <span class="ms-4">Patient</span>
            </a>
        </li>
        <li class="sidebar-item mx-auto">
            <a href="#" class="sidebar-link DesktopSidebarButton" data-bs-toggle="tooltip"
                data-bs-placement="right" data-bs-title="Services" data-section="services">
                <i class="fa-solid fa-notes-medical fa-lg"></i>
                <span class="ms-4">Services</span>
            </a>
        </li>
        <li class="sidebar-item mx-auto">
            <a href="#" class="sidebar-link DesktopSidebarButton" data-bs-toggle="tooltip"
                data-bs-placement="right" data-bs-title="Invoices" data-section="invoices">
                <i class="fa-solid fa-receipt fa-2xl" id="invoicesID"></i>
                <span id="Sidebarinvoices" style="margin-left: 28px;">Transaction</span>
            </a>
        </li>
        <li class="sidebar-item mx-auto">
            <a href="#" class="sidebar-link DesktopSidebarButton" data-bs-toggle="tooltip"
                data-bs-placement="right" data-bs-title="Schedule" data-section="schedule">
                <i class="fa-solid fa-list-check"></i>
                <span class="ms-4">Schedule</span>
            </a>
        </li>
        <li class="sidebar-item mx-auto">
            <a href="#" class="sidebar-link DesktopSidebarButton" data-bs-toggle="tooltip"
                data-bs-placement="right" data-bs-title="Report" data-section="report">
                <i class="fa-regular fa-file-lines fa-2xl"></i>
                <span id="LarlgeSreemSidebarReport" style="margin-left: 28px;">Report</span>
            </a>
        </li>
    </ul>

</aside>