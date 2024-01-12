<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register | Data Penduduk</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <style>
    .judul {
        font-family: 'Poppins', sans-serif;
        color: gray;
    }
    </style>
    @livewireStyles
</head>
<body>
    <div class="container">
        <div class="row" style="margin-top: 50px;">
            <div class="col-md-12">
                <h1 class="judul">Data Penduduk</h1><hr>
                <div>
                    <form action="" method="post">

                    <!-- Step 1 -->
                        <div class="step-one">
                            <div class="card">
                                <div class="card-header bg-danger text-white">Tahap 1 | Biodata Diri</div>
                                <div class="card-body">
                                    <div class="row" style="padding-bottom: 10px;">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="">Nama Lengkap</label>
                                                <input type="text" class="form-control" placeholder="Nama Lengkap" name="" id="">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="">No. Telp Aktif</label>
                                                <input type="number" class="form-control" placeholder="085****" name="" id="">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="">NIK (Sesuai KTP)</label>
                                                <input type="number" class="form-control" placeholder="NIK Sesuai KTP" name="" id="">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="">Provinsi</label>
                                                <select name="provinsi"  class="form-control">
                                                    <option value="">Pilih Provinsi</option>
                                                    @foreach ($provinces as $provinsi )
                                                        <option>{{$provinsi->name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row" style="padding-bottom: 10px;">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="">Kabupaten/Kota</label>
                                                <select name="provinsi" class="form-control">
                                                    <option value="">Pilih Kabupaten</option>
                                                    @foreach ($districts as $kabupaten )
                                                        <option>{{$kabupaten->name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="">Kecamatan</label>
                                                <select name="kecamatan" class="form-control">
                                                    <option value="">Pilih Kecamatan</option>
                                                    @foreach ($regencies as $kecamatan )
                                                        <option>{{$kecamatan->name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="">Kelurahan</label>
                                                <select name="kecamatan" class="form-control">
                                                    <option value="">Pilih Kelurahan</option>
                                                    @foreach ($villages as $desa )
                                                        <option>{{$desa->name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="">Alamat Lengkap</label>
                                                <input type="text" class="form-control" placeholder="Alamat Lengkap Domisili" name="" id="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row" style="padding-bottom: 10px;">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="">Tempat Lahir</label>
                                                <select name="tempat_lahir" class="form-control">
                                                    <option value="">Pilih Tempat Lahir</option>
                                                    @foreach ($districts as $kabupaten )
                                                        <option>{{$kabupaten->name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="">Tanggal Lahir</label>
                                                <input type="date" class="form-control" name="" id="">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="">Jenis Kelamin</label>
                                                <select name="jenis_kelamin" class="form-control">
                                                    <option value="L">Laki-Laki</option>
                                                    <option value="P">Perempuan</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="">No. Paspor <b><small style="color: blue;">(Opsional)</small></b></label>
                                                <input type="number" class="form-control" placeholder="No. Paspor" name="" id="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    <!-- step 2 -->
                    
                    </form>
                </div>
            </div>
        </div>
    </div>


    <!-- script -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    @include('sweetalert::alert')
    @livewireScripts
</body>
</html>