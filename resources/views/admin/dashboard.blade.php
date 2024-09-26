@extends('admin.layout.default')

@section('title', 'Calendar Dashboard')

@section('styles')
<script src="{{ asset('frameworks/fullcalendar-6.1.15/dist/index.global.min.js') }}"></script>
@endsection

<!-- Start patient content -->

@section('dashboard-content')

<div id='calendar' data-appointments='@json($appointments)'></div>

<div class="modal" id="DashboardDatePicker">
    <div class="modal-dialog">
        <div class="modal-content">


            <div class="modal-header">
                <h4 class="modal-title">Select date</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>


            <div class="modal-body">
                <input type="date" class="form-control" id="modalDateInput">
            </div>


            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-bs-dismiss="modal"
                    id="applyDateButton">Apply</button>
            </div>

        </div>
    </div>
</div>

@endsection

<!-- End of patient content -->

@section('scripts')
<!-- <script src="{{asset('assets\js\calendar\calendar.js')}}"></script> -->

<!-- <script>
    document.addEventListener('DOMContentLoaded', function() {
        var calendarEl = document.getElementById('calendar');
        var appointments = @json($appointments); // Output the JSON

        var calendar = new FullCalendar.Calendar(calendarEl, {
            handleWindowResize: true,
            contentHeight: "auto",
            fixedWeekCount: true,
            themeSystem: 'bootstrap5',
            showNonCurrentDates: false,
            height: "auto",
            expandRows: 'true',
            aspectRatio: "auto",
            slotMinTime: '06:00',
            slotMaxTime: '23:00',
            expandRows: true,
            navLinks: true,
            editable: true,
            customButtons: {
                myCustomButton: {
                    text: '▼',
                    click: function() {
                        $('#DashboardDatePicker').modal('show');
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
            events: appointments, // This is where the JSON is used
            eventColor: '#378006',
        });

        calendar.render();
        calendar.updateSize();

        var customButtons = document.querySelectorAll('.fc-myCustomButton-button');
        customButtons.forEach(function(button) {
            button.setAttribute('title', 'Select date');
        });

        var customListview = document.querySelectorAll('.fc-list-button');
        customListview.forEach(function(listButton) {
            listButton.setAttribute('title', 'Event List');
        });

        document.getElementById('applyDateButton').addEventListener('click', function() {
            var selectedDate = document.getElementById('modalDateInput').value;
            if (selectedDate) {
                calendar.gotoDate(selectedDate);
            }
            $('#myModal').modal('hide');
        });
    });
</script> -->

<!-- <script>
    document.addEventListener('DOMContentLoaded', function() {
        var calendarEl = document.getElementById('calendar');

        // Fetch the appointments JSON from the data attribute
        var appointments = JSON.parse(calendarEl.getAttribute('data-appointments'));

        var calendar = new FullCalendar.Calendar(calendarEl, {
            // FullCalendar options
            handleWindowResize: true,
            contentHeight: "auto",
            fixedWeekCount: true,
            themeSystem: 'bootstrap5',
            showNonCurrentDates: false,
            height: "auto",
            expandRows: 'true',
            aspectRatio: "auto",
            slotMinTime: '06:00',
            slotMaxTime: '23:00',
            expandRows: true,
            navLinks: true,
            editable: true,
            customButtons: {
                myCustomButton: {
                    text: '▼',
                    click: function() {
                        $('#DashboardDatePicker').modal('show');
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
            events: appointments, // Use the appointments JSON here
            
        });

        var customButtons = document.querySelectorAll('.fc-myCustomButton-button');
        customButtons.forEach(function(button) {
            button.setAttribute('title', 'Select date');
        });

        var customListview = document.querySelectorAll('.fc-list-button');
        customListview.forEach(function(listButton) {
            listButton.setAttribute('title', 'Event List');
        });

        document.getElementById('applyDateButton').addEventListener('click', function() {
            var selectedDate = document.getElementById('modalDateInput').value;
            if (selectedDate) {
                calendar.gotoDate(selectedDate);
            }
            $('#myModal').modal('hide');
        });

        calendar.render();
        calendar.updateSize();
        calendar.render();
    });
</script> -->

<script>
    document.addEventListener('DOMContentLoaded', function() {
        var calendarEl = document.getElementById('calendar');

        // Fetch the appointments JSON from the data attribute
        var appointments = JSON.parse(calendarEl.getAttribute('data-appointments'));

        var calendar = new FullCalendar.Calendar(calendarEl, {
            // FullCalendar options
            handleWindowResize: true,
            contentHeight: "auto",
            fixedWeekCount: true,
            themeSystem: 'bootstrap5',
            showNonCurrentDates: false,
            height: "auto",
            expandRows: 'true',
            aspectRatio: "auto",
            slotMinTime: '06:00',
            slotMaxTime: '23:00',
            expandRows: true,
            navLinks: true,
            editable: true,
            customButtons: {
                myCustomButton: {
                    text: '▼',
                    click: function() {
                        $('#DashboardDatePicker').modal('show');
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
            events: appointments, // Use the appointments JSON here
            
        });

        var customButtons = document.querySelectorAll('.fc-myCustomButton-button');
        customButtons.forEach(function(button) {
            button.setAttribute('title', 'Select date');
        });

        var customListview = document.querySelectorAll('.fc-list-button');
        customListview.forEach(function(listButton) {
            listButton.setAttribute('title', 'Event List');
        });

        document.getElementById('applyDateButton').addEventListener('click', function() {
            var selectedDate = document.getElementById('modalDateInput').value;
            if (selectedDate) {
                calendar.gotoDate(selectedDate);
            }
            $('#myModal').modal('hide');
        });

        calendar.render();
        calendar.updateSize();
        calendar.render();
    });
</script>

<link rel="stylesheet" href="{{ asset('frameworks/fullcalendar-6.1.15/dist/main.min.css') }}">
@endsection