<!DOCTYPE html>
<html>
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>

    <link rel="stylesheet" href="{{ asset('assets\css\defaultAdminStyle.css') }}">  
    
    <!-- Boostrap icons -->
    <link rel="stylesheet" href="{{ asset('frameworks/bootstrap-icons-1.11.3/font/bootstrap-icons.min.css') }}">

    <!-- Font awesome icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" />

    <!-- Boostrap 5 Local-->
    <link rel="stylesheet" href="{{ asset('frameworks/bootstrap-5.3.3/dist/css/bootstrap.min.css') }}">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    <!-- New table -->
    <link rel="stylesheet" href="{{ asset('frameworks/bootstrap-table-master/dist/bootstrap-table.min.css') }}">
    
    @yield('styles')
</head>

<body>

    <div class="wrapper">

        <!-- Large screen sidebar -->
        @include('admin.layout.components.sidebarlarge')

        <div class="main">

            <!-- navbar -->
            @include('admin.layout.components.navbar')

            <main class="content py-3">
                <div class="container-fluid">

                    <div id="dashboard" class="container-fluid content-section">
                    @yield('dashboard-content')
                    </div>

                    <!-- Patient Section -->
                    <div id="patient" class="content-section d-none">
                    @yield('patient-content')
                        <!-- End of patient -->
                    </div>

                    <!-- Services Section -->
                    <div id="services" class="content-section d-none">
                        @yield('services-content')
                        <!-- End of Services-->
                    </div>

                    <!-- Transaction Section -->
                    <div id="invoices" class="content-section d-none">

                        <p class="h3 m-2">List of Transactions</p>

                        <!-- End of transaction -->
                    </div>

                    <!-- Schedule Section -->
                    <div id="schedule" class="content-section d-none" style="min-height:80svh;">

                        <p class="h3 m-2">List of Schedule</p>

                    </div>

                    <!-- Report Section -->
                    <div id="report" class="content-section d-none container-fluid" style="height:80svh ;">
                        <h3 class="fw-bold fs-4 mb-3">Sales Report</h3>
                    </div>

                </div>
            </main>

        </div>
    </div>

    <!-- Sidebar for small and medium screen -->
    @include('admin.layout.components.sidebarsmallandmedium')

    <!-- Main html here -->
    <script src="{{ asset('assets/js/SidebarHighlights&Tooltips.js')}}"></script>

    @yield('scripts')

    <script src="{{ asset('frameworks/bootstrap-table-master/dist/bootstrap-table.min.js')}}"></script>

    <script src="{{ asset('frameworks/bootstrap-5.3.3/dist/js/bootstrap.bundle.min.js') }}"></script>

</body>

</html>