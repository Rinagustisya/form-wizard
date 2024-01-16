@extends('master.admin', ['title'=>'Monitoring Admin'])

@section('content')
<div class="card">
    <div class="card-header">
        <h3>Data Semua Penduduk</h3>
    </div>
    <div class="card-body">
        <table class="table table-hover table-striped">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Nama Lengkap</th>
                    <th>No. Telp</th>
                    <th>NIK</th>
                    <th>Provinsi</th>
                    <th>Kabupaten</th>
                    <th>Kecamatan</th>
                    <th>Kelurahan</th>
                    <th>Alamat Lengkap</th>
                    <th>Tempat Lahir</th>
                    <th>Tanggal Lahir</th>
                    <th>Jenis Kelamin</th>
                </tr>
            </thead>
        </table>
    </div>
</div>
@endsection