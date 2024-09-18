document.addEventListener('DOMContentLoaded', function () {
    var calendarEl = document.getElementById('calendar');
    var calendar = new FullCalendar.Calendar(calendarEl, {
        initialView: window.innerWidth < 900 ? 'dayGridDay' : 'dayGridMonth',
        handleWindowResize: true,
        themeSystem: 'bootstrap5',
        showNonCurrentDates: false,
        height: "auto", // will activate stickyHeaderDates automatically!
        aspectRatio: 2,
        slotMinTime: '06:00',
        slotMaxTime: '23:00',
        expandRows: true,
        navLinks: true, // can click day/week names to navigate views
        editable: true,
        customButtons: {
            myCustomButton: {
                text: '▼',
                click: function () {
                    $('#DashboardDatePicker').modal('show'); // Show the modal
                }
            }
        },
        buttonText: {
            today: 'Today',
            month: 'Month',
            week: 'Week',
            day: 'Day',
            list: 'List'
        },
        headerToolbar: {
            start: 'dayGridMonth,timeGridWeek,timeGridDay,list',
            center: 'title myCustomButton',
            end: 'today prev,next'
        },
        footerToolbar: {
            start: 'dayGridMonth,timeGridWeek,timeGridDay,list',
            center: 'title myCustomButton',
            end: 'today prev,next'
        },
        events: [
            {
                title: 'repeating event 1',
                daysOfWeek: [1, 2, 3],
                duration: '00:30'
            },
            {
                title: 'repeating event 2',
                daysOfWeek: [1, 2, 3],
                duration: '00:30'
            },
            {
                title: 'repeating event 3',
                daysOfWeek: [1, 2, 3],
                duration: '00:30'
            }
        ]
    });
    calendar.render();

    function resizeCalendar() {
        var view = window.innerWidth < 900 ? 'dayGridDay' : 'dayGridMonth';
        if (calendar.view.type !== view) {
            calendar.changeView(view);
        }

        // Update headerToolbar and footerToolbar based on window width
        var toolbarOptions = {
            start: 'dayGridMonth,timeGridWeek,timeGridDay,list',
            center: '',
            end: 'myCustomButton'
        };

        if (window.innerWidth >= 850) {
            toolbarOptions = {
                start: 'dayGridMonth,timeGridWeek,timeGridDay,list',
                center: 'title myCustomButton',
                end: 'today prev,next'
            };
        }

        calendar.setOption('headerToolbar', toolbarOptions);
        calendar.setOption('footerToolbar', toolbarOptions);
    }

    window.addEventListener('resize', resizeCalendar);
    resizeCalendar(); // Call it once on page load

    // Add custom title text to all custom buttons
    var customButtons = document.querySelectorAll('.fc-myCustomButton-button');
    customButtons.forEach(function (button) {
        button.setAttribute('title', 'Select date');
    });

    // Add custom title text attribute to list view buttons
    var customListview = document.querySelectorAll('.fc-list-button');
    customListview.forEach(function (listButton) {
        listButton.setAttribute('title', 'Event List');
    });

    // Handle apply button click
    document.getElementById('applyDateButton').addEventListener('click', function () {
        var selectedDate = document.getElementById('modalDateInput').value;
        if (selectedDate) {
            calendar.gotoDate(selectedDate);
        }
        $('#myModal').modal('hide');
    });

});

$("#DashboardDatePicker").datepicker();
