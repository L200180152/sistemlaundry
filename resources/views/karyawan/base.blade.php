<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

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
    <title>{{ $title }}</title>
</head>

<body>
    <div class="container-main">
        <div class="sidebar">
            <div class="header">
                <div class="list-item">
                    <a href="#">
                        <img src="" alt="">
                        <span class="description-header">MyLaundry.</span>
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
                <div class="list-item {{ $title === 'Informasi MyLaundry | Karyawan' ? 'active' : '' }}">
                    <a href="/information">
                        <div class="icon"><i class="fa-solid fa-circle-info"></i></div>
                        <span class="description">Information</span>
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
                            <a class="nav-link active mb-1" href="/">Website</a>
                        </div>
                    </li>
                    <li>
                        <div class="list-item ms-3">
                            <div class="input-group input-group-sm mb-3">
                                <input type="text" class="form-control" placeholder="Pencarian"
                                    aria-label="Pencarian" aria-describedby="search" style="font-size: 12px;">
                                <button class="btn btn-primary" type="button" id="search"><i
                                        class="fas fa-search"></i></button>
                            </div>
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
                        <div class="list-item me-5">
                            <a class="nav-link active d-flex align-items-center" href="#beranda"><i
                                    class="fa-solid me-2 fa-circle-user" style="font-size: 20px;"></i>Username<i
                                    class="fa-solid ms-2 mb-1 fa-sort-down"></i></a>
                        </div>
                    </li>
                </ul>
            </nav>
            <div class="content-website">
                @yield('content')
            </div>
        </div>
    </div>

    <script src="{{ asset('/js/animation.js') }}"></script>
</body>

</html>
