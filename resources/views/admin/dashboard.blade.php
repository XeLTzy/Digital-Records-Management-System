@extends('admin.layout.default')

@section('title', 'Calendar Dashboard')

@section('styles')
<script src="{{ asset('frameworks/fullcalendar-6.1.15/dist/index.global.min.js') }}"></script>
@endsection

<!-- Start patient content -->

@section('dashboard-content')

<div id='calendar'></div>

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
<script src="{{asset('assets\js\calendar\calendar.js')}}"></script>
<link rel="stylesheet" href="{{ asset('frameworks/fullcalendar-6.1.15/dist/main.min.css') }}">
@endsection