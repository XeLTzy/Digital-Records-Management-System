// Sidebar highlights for active and inactive & Hide tooltips
document.querySelectorAll('.DesktopSidebarButton, .MobileSidebarButton').forEach(button => {
    button.addEventListener('click', function (event) {
        event.preventDefault();

        // Remove active class from all buttons in both sidebars
        document.querySelectorAll('.DesktopSidebarButton, .MobileSidebarButton').forEach(btn => {
            btn.classList.remove('active');
        });

        // Add active class to the clicked button and the corresponding button in the other sidebar
        const section = this.getAttribute('data-section');

        document.querySelectorAll(`.DesktopSidebarButton[data-section="${section}"], .MobileSidebarButton[data-section="${section}"]`).forEach(btn => {
            btn.classList.add('active');
        });

        // Hide all content sections
        document.querySelectorAll('.content-section').forEach(section => {
            section.classList.add('d-none');
        });

        // Show the selected content section
        document.getElementById(section).classList.remove('d-none');

        // Update the span with the active section name
        const capitalizedSection = section.charAt(0).toUpperCase() + section.slice(1);
        document.getElementById('SmallAndMediumScreenTooltips').textContent = capitalizedSection;
    });
});

const sidebar = document.getElementById('sidebar');
const sidebarBtn = document.getElementById('sidebarbtn');
let isSidebarExpanded = true;

sidebarBtn.addEventListener('click', function () {
    isSidebarExpanded = !isSidebarExpanded;

    // Toggle the sidebar's width class (you can adjust this part based on your CSS)
    sidebar.classList.toggle('collapsed'); // Example class for toggling

    // Show or hide tooltips based on sidebar state
    if (isSidebarExpanded) {
        showTooltips();
    } else {
        hideTooltips();
    }
});

function hideTooltips() {
    const tooltipElements = document.querySelectorAll('[data-bs-toggle="tooltip"]');
    tooltipElements.forEach(el => {
        const tooltipInstance = bootstrap.Tooltip.getInstance(el);
        if (tooltipInstance) {
            tooltipInstance.hide();
            tooltipInstance.disable();
        }
    });
}

function showTooltips() {
    const tooltipElements = document.querySelectorAll('[data-bs-toggle="tooltip"]');
    tooltipElements.forEach(el => {
        const tooltipInstance = bootstrap.Tooltip.getInstance(el);
        if (tooltipInstance) {
            tooltipInstance.enable();
        } else {
            new bootstrap.Tooltip(el);
        }
    });
}

// Tooltips initialization on DOMContentLoaded
document.addEventListener('DOMContentLoaded', function () {
    var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
    var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
        return new bootstrap.Tooltip(tooltipTriggerEl);
    });
});

//Sidebar expand functions
const hamBurger = document.querySelector(".toggle-btn");

hamBurger.addEventListener("click", function () {
  document.querySelector("#sidebar").classList.toggle("expand");
});