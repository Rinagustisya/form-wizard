<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Register | Data Penduduk</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <style>
    .judul {
        font-family: 'Poppins', sans-serif;
        color: gray;
    }
    .navbar {
        background-color: #fff; /* Warna latar belakang navbar */
        padding: 15px;
        display: flex;
        justify-content: space-between;
        align-items: center;
        color: #333; /* Warna teks */
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        z-index: 1000; /* Menempatkan navbar di atas elemen lain */
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); /* Efek shadow untuk memberi kedalaman */
    }
        .form-card {
            padding-top: 4rem;
        }
        .login-btn a {
        padding: 10px 20px;
        background-color: #ff0000; /* Warna background button, bisa disesuaikan */
        color: #fff; /* Warna teks button */
        text-decoration: none;
        border-radius: 5px;
        font-weight: bold;
        transition: background-color 0.3s ease, color 0.3s ease;
        }

        .login-btn a:hover {
        background-color: #ff3333; /* Warna saat dihover (merah yang sedikit lebih terang), bisa disesuaikan */
        color: #fff;
        }
    </style>
    @livewireStyles
</head>
<body>
    <!-- navbar disini -->
    <div class="navbar">
        <div class="login-btn">
            <a href="#">Login</a>
        </div>
    </div>

    
    <div class="form-card">
        <div class="container">
            <div class="row" style="margin-top: 50px;">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <h1 class="judul">Data Penduduk</h1><hr>
                            @livewire('multi-step-form')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- script -->
    @stack('ajax')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    @include('sweetalert::alert')
    @livewireScripts
</body>
</html>