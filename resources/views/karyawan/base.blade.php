<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">


    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.1.0/mdb.min.css" rel="stylesheet" />

    <!-- MDB -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.1.0/mdb.min.js"></script>

    {{-- Bootstrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    {{-- JQuery --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"
        integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="{{ asset('css/admin/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/admin/headercontent.css') }}">
    <link rel="stylesheet" href="{{ asset('css/admin/dashboard.css') }}">
    <link rel="stylesheet" href="{{ asset('css/admin/tampilan.css') }}">

    {{-- <link rel="stylesheet" href="{{ asset('MDB5/css/mdb.min.css') }}">
    <script type="text/javascript" href="{{ asset('MDB5/js/mdb.min.js') }}"></script> --}}

    <link rel="stylesheet" type="text/css" href="https://unpkg.com/trix@2.0.0/dist/trix.css">
    <script type="text/javascript" src="https://unpkg.com/trix@2.0.0/dist/trix.umd.min.js"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;500;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="{{ asset('/DataTables/datatables.min.css') }}" />

    {{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script> --}}
    <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI="
        crossorigin="anonymous"></script>
    <title>{{ $title }}</title>
</head>

<body>
    <div class="container-main">
        <div class="sidebar">
            <div class="header">
                <div class="list-item">
                    <a href="#">
                        <img src="" alt="">
                        <span class="description-header">{{ $info->namatoko }}</span>
                    </a>
                </div>
            </div>
            <div class="main">
                <div class="list-item {{ $title === 'Dashboard MyLaundry | Karyawan' ? 'active' : '' }}">
                    <a href="/dashboard">
                        <div class="icon"><i class="fa-solid fa-gauge"></i></div>
                        <span class="description">Dashboard</span>
                    </a>
                </div>
                <div class="list-item {{ $title === 'Tampilan MyLaundry | Karyawan' ? 'active' : '' }}">
                    <a href="/tampilan">
                        <div class="icon"><i class="fa-solid fa-display"></i></div>
                        <span class="description">Tampilan</span>
                    </a>
                </div>
                <div class="list-item {{ $title === 'Kategori MyLaundry | Karyawan' ? 'active' : '' }}">
                    <a href="/kategori">
                        <div class="icon"><i class="fa-solid fa-paperclip"></i></div>
                        <span class="description">Kategori</span>
                    </a>
                </div>
                <div class="list-item {{ $title === 'Antrian MyLaundry | Karyawan' ? 'active' : '' }}">
                    <a href="/antrian">
                        <div class="icon"><i class="fa-solid fa-tag"></i></div>
                        <span class="description">Antrian</span>
                    </a>
                </div>
                <div class="list-item {{ $title === 'Pesanan MyLaundry | Karyawan' ? 'active' : '' }}">
                    <a href="/order">
                        <div class="icon"><i class="fa-solid fa-tag"></i></div>
                        <span class="description">Order</span>
                    </a>
                </div>
                <div class="list-item {{ $title === 'Karyawan MyLaundry | Karyawan' ? 'active' : '' }}">
                    <a href="/employe">
                        <div class="icon"><i class="fa-solid fa-users"></i></div>
                        <span class="description">Employe</span>
                    </a>
                </div>
                <div class="list-item {{ $title === 'Laporan MyLaundry | Karyawan' ? 'active' : '' }}">
                    <a href="/report">
                        <div class="icon"><i class="fa-solid fa-file-invoice"></i></div>
                        <span class="description">Report</span>
                    </a>
                </div>
                <div class="list-item {{ $title === 'Informasi MyLaundry | Karyawan' ? 'active' : '' }}">
                    <a href="/information">
                        <div class="icon"><i class="fa-solid fa-circle-info"></i></div>
                        <span class="description">Informasi</span>
                    </a>
                </div>
                <div class="user-resize">
                    <div class="list-item {{ $title === 'Notifikasi | Karyawan' ? 'active' : '' }}">
                        <a href="#">
                            <div class="icon"><i class="fa-solid fa-bell" style="font-size: 20px;"></i></div>
                            <span class="description">Notifikasi</span>
                        </a>
                    </div>
                    <div class="list-item {{ $title === 'Profil User | Karyawan' ? 'active' : '' }}">
                        <a href="#">
                            <div class="icon"><i class="fa-solid me-2 fa-circle-user" style="font-size: 20px;"></i>
                            </div>
                            <span class="description">Username</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="main-content">
            <nav class="navbar">
                <div id="menu-button">
                    <input type="checkbox" id="menu-checkbox">
                    <label for="menu-checkbox" id="menu-label">
                        <div id="toggle">
                            <i class="fa-solid fa-bars"></i>
                        </div>
                    </label>
                </div>
                <ul class="navbar-left">
                    <li>
                        <div class="list-item ms-3">
                            <a class="nav-link active" href="/">Website</a>
                        </div>
                    </li>
                </ul>
                <ul class="navbar-right">
                    <li>
                        <div class="list-item me-3">
                            <a class="nav-link active" href="#"><i class="fa-solid fa-bell"
                                    style="font-size: 20px;"></i></a>
                        </div>
                    </li>
                    <li>
                        <div class="list-item dropdown me-5">
                            <a class="nav-link active d-flex align-items-center btndrop" onclick="dropdownclick()"><i
                                    class="fa-solid me-2 fa-circle-user" style="font-size: 20px;"></i>Username<i
                                    class="fa-solid ms-2 mb-2 fa-sort-down"></i></a>
                            <div id="myDropdown" class="dropdown-content">
                                <a href="#"><i class="fa-solid fa-right-from-bracket me-2"></i>Logout</a>
                            </div>
                        </div>
                    </li>
                    <li>

                    </li>
                </ul>
            </nav>
            <div class="content-website">
                @yield('content')
            </div>
            <footer class="footer">
                <span>Created by Mu'taz Al Farisi. © 2022</span>
            </footer>
        </div>
    </div>
    <script src="{{ asset('/js/animation.js') }}"></script>
    <script src="{{ asset('/js/showup.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/DataTables/datatables.min.js') }}"></script>

    <script>
        /* When the user clicks on the button, 
                                                                                                            toggle between hiding and showing the dropdown content */
        function dropdownclick() {
            document.getElementById("myDropdown").classList.toggle("clickdropdown");
        }
        // Close the dropdown if the user clicks outside of it
        window.onclick = function(event) {
            if (!event.target.matches('.btndrop')) {
                var dropdowns = document.getElementsByClassName("dropdown-content");
                var i;
                for (i = 0; i < dropdowns.length; i++) {
                    var openDropdown = dropdowns[i];
                    if (openDropdown.classList.contains('clickdropdown')) {
                        openDropdown.classList.remove('clickdropdown');
                    }
                }
            }
        }
    </script>
</body>

</html>
