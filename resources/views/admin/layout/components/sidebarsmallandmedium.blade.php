    <!-- Sidebar for small, medium and large screen -->
    <div class="offcanvas offcanvas-start" tabindex="-1" id="MobileSidebarMenu" aria-labelledby="offcanvasNavbarLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title text-light" id="offcanvasNavbarLabel">Dentista Royale Dental Works</h5>
            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"
                aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <div class="d-grid gap-2">
                <button class="MobileSidebarButton btn text-light d-flex align-items-center active"
                    data-section="dashboard" type="button">
                    <i class="fa-solid fa-house-medical fa-lg"></i>
                    <span class="mx-auto">Dashboard</span>
                </button>
                <button class="MobileSidebarButton btn text-light d-flex align-items-center" data-section="patient"
                    type="button">
                    <i class="fa-solid fa-hospital-user fa-lg" id="mobilepatient"></i>
                    <span class="mx-auto">Patient</span>
                </button>
                <button class="MobileSidebarButton btn text-light d-flex align-items-center" data-section="services"
                    type="button">
                    <i class="fa-solid fa-notes-medical fa-lg"></i>
                    <span class="mx-auto">Services</span>
                </button>
                <button class="MobileSidebarButton btn text-light d-flex align-items-center" data-section="invoices"
                    type="button">
                    <i class="fa-solid fa-receipt fa-xl" id="invoicesID"></i>
                    <span id="Sidebarinvoices" class="mx-auto">Transaction</span>
                </button>
                <button class="MobileSidebarButton btn text-light d-flex align-items-center" data-section="schedule"
                    type="button">
                    <i class="fa-solid fa-list-check fa-lg"></i>
                    <span class="mx-auto">Schedule</span>
                </button>
                <button class="MobileSidebarButton btn text-light d-flex align-items-center" data-section="report"
                    type="button">
                    <i class="fa-regular fa-file-lines fa-xl"></i>
                    <span class="mx-auto">Report</span>
                </button>
            </div>
        </div>
    </div>