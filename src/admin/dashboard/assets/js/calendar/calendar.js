document.addEventListener('DOMContentLoaded', function () {
    var calendarEl = document.getElementById('calendar');
    var calendar = new FullCalendar.Calendar(calendarEl, {
        initialView: 'dayGridMonth',
        // selectable: true,
        themeSystem: 'bootstrap5',
        showNonCurrentDates: false,
        height: 'auto', // will activate stickyHeaderDates automatically!
        //slotDuration: '00:06:00', // very small slots will make the calendar really tall
        aspectRatio: 2,
        slotMinTime: '06:00',
        slotMaxTime: '23:00',
        expandRows: true,
        handleWindowResize: true,
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