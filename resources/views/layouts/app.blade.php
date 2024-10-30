<!DOCTYPE html>

<html lang="en" data-layout="fluid" data-sidebar-theme="colored" data-sidebar-position="left"
    data-sidebar-behavior="sticky" data-bs-theme="light">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Responsive Bootstrap 5 Admin &amp; Dashboard Template">
    <meta name="author" content="Bootlab">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link rel="shortcut icon" href="{{ asset('appstack-assets/img/favicon.ico') }}">

    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500&amp;display=swap" rel="stylesheet">

    <link href="{{ asset('appstack-assets/css/app.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('plugins/fontawesome-pro/css/all.min.css') }}">


    <script async src="https://www.googletagmanager.com/gtag/js?id=G-Q3ZYEKLQ68"></script>

    {{-- Plugins CSS --}}
    <link rel="stylesheet" href="{{ asset('plugins/sweetalert2/sweetalert2.min.css') }}">

    {{-- Datatable CSS --}}
    <link rel="stylesheet" href="{{ asset('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">

    {{-- Leaflet plugin --}}
    <link rel="stylesheet" href="{{ asset('plugins/leaflet/leaflet.css') }}">
    <script src="{{ asset('plugins/leaflet/leaflet.js') }}"></script>
    {{-- Plugins JS --}}

    {{-- JQuery --}}
    <script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>

    {{-- Datatables JS --}}
    <script src="{{ asset('plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>


    {{-- SweetAlert --}}
    <script src="{{ asset('plugins/sweetalert2/sweetalert2.all.min.js') }}"></script>

    {{-- InputMask --}}
    <script src="{{ asset('plugins/inputmask/inputmask.js') }}"></script>
    <script src="{{ asset('plugins/inputmask/jquery.inputmask.js') }}"></script>



</head>

<body>
    <div class="wrapper">


        <nav id="sidebar" class="sidebar">
            <div class="sidebar-content js-simplebar">
                <a class='sidebar-brand' href='index.html'>
                    <img src="{{ asset('images/baclogo.png') }}" class="img-fluid rounded-circle me-1 mt-n2 mb-n2"
                        alt="Chris Wood" width="40" height="40" />

                    <span class="align-middle me-3">CMU | OBPMS</span>
                </a>
                @include('layouts.navigation')

            </div>
        </nav>

        <div class="main">
            <nav class="navbar navbar-expand navbar-bg">
                <a class="sidebar-toggle">
                    <i class="hamburger align-self-center text-gray-900"></i>
                </a>

                <div class="navbar-collapse collapse">
                    <ul class="navbar-nav navbar-align">



                        <li class="nav-item dropdown">
                            <a class="nav-icon dropdown-toggle d-inline-block d-sm-none" href="#"
                                data-bs-toggle="dropdown">
                                <i class="align-middle" data-lucide="settings"></i>
                            </a>

                            <a class="nav-link dropdown-toggle d-none d-sm-inline-block" href="#"
                                data-bs-toggle="dropdown">
                                <img src="{{ asset('appstack-assets/img/avatars/avatar.jpg') }}"
                                    class="img-fluid rounded-circle me-1 mt-n2 mb-n2" alt="User Image" width="40"
                                    height="40" /> <span>{{ Auth::user()->firstname }}</span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a class='dropdown-item' href='{{ route('profile.show') }}'><i
                                        class="align-middle me-1" data-lucide="user"></i> Profile</a>
                                <div class="dropdown-divider"></div>
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <a href="{{ route('logout') }}" class="dropdown-item"
                                        onclick="event.preventDefault(); this.closest('form').submit();">
                                        <i class="align-middle me-1" data-lucide="pie-chart"></i> Logout
                                    </a>
                                </form>



                            </div>
                        </li>
                    </ul>
                </div>
            </nav>

            <main class="content">
                <div id="loadingIndicator"
                    style="display: none; position: fixed; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(0, 0, 0, 0.3); z-index: 9999;">
                    <div
                        style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); text-align: center;">
                        <div class="row">
                            <div class="spinner-grow ml-1" role="status" style="color:#ffc600">
                                <span class="sr-only">Loading...</span>
                            </div>
                            <div class="spinner-grow ml-1 text-warning" role="status">
                                <span class="sr-only">Loading...</span>
                            </div>
                            <div class="spinner-grow ml-1" role="status" style="color: #919f02">
                                <span class="sr-only">Loading...</span>
                            </div>
                            <div class="spinner-grow ml-1" role="status" style="color: #02681e">
                                <span class="sr-only">Loading...</span>
                            </div>
                            <div class="spinner-grow ml-1" role="status" style="color: #00491e">
                                <span class="sr-only">Loading...</span>
                            </div>
                        </div>
                    </div>
                </div>
                @yield('content')
            </main>

            <footer class="footer">
                <div class="container-fluid">
                    <div class="row text-muted">
                        <div class="col-6 text-start">
                            CENTRAL MINDANAO UNIVERSITY | Software Development Department
                        </div>
                        <div class="col-6 text-end">
                            <p class="mb-0">
                                &copy; 2024 - <a class='text-muted' href='cmu.edu.ph'>CMU</a>
                            </p>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>

    <script src="{{ asset('appstack-assets/js/app.js') }}"></script>
    <script>
        function showLoadingIndicator() {
            $('#loadingIndicator').show();
        }

        // Function to hide loading indicator
        function hideLoadingIndicator() {
            setTimeout(function() {
                $('#loadingIndicator').hide();
            }, 1000);
        }
    </script>

    @if ($errors->any())
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                // Retrieve the validation errors from the PHP code
                const errors = @json($errors->all());

                // Format errors as an unordered list with centered text
                let errorList = `
            <ul style="list-style: none; padding: 0; margin: 0; text-align: center; color: #dc3545;">
                ${errors.map(error => `<li style="margin-bottom: 10px;">${error}</li>`).join('')}
            </ul>
        `;

                // Display the errors using SweetAlert
                Swal.fire({
                    title: 'Error!',
                    html: errorList, // Use 'html' property to insert HTML content
                    icon: 'error',
                    confirmButtonText: 'OK',
                    confirmButtonColor: '#02681e',
                    customClass: {
                        title: 'swal-title',
                        content: 'swal-content',
                        confirmButton: 'swal-confirm',
                        confirmButtonColor: '#00491e'
                    }
                });
            });
        </script>
    @endif


    <script>
        document.addEventListener('DOMContentLoaded', function() {
            @if (Session::has('success'))
                Swal.fire({
                    title: 'Success!',
                    icon: 'success',
                    text: "{{ Session::get('success') }}",
                    confirmButtonText: 'OK',
                    confirmButtonColor: '#02681e',
                    customClass: {
                        title: 'swal-title',
                        content: 'swal-content',
                        confirmButton: 'swal-confirm',
                        confirmButtonColor: '#00491e'
                    }
                });
            @elseif (Session::has('error'))
                Swal.fire({
                    title: 'Error!',
                    icon: 'error',
                    text: "{{ Session::get('error') }}",
                    confirmButtonText: 'OK',
                    confirmButtonColor: 'red',
                    customClass: {
                        title: 'swal-title',
                        content: 'swal-content',
                        confirmButton: 'swal-confirm',
                        confirmButtonColor: 'red'
                    }
                });
            @endif
        });
    </script>

    @yield('scripts')


</body>

</html>
