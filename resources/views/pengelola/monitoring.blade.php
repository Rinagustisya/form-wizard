@extends('master.admin', ['title'=>'Monitoring Pengelola'])

@section('content')
<div class="card">
    <div class="card-header">
        <h3>Data Penduduk Berdasarkan Kode ID</h3>
    </div>
    <div class="card-body">
        <table class="table table-hover table-striped">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Kode ID</th>
                    <th>Nama Lengkap</th>
                    <th>NIK</th>
                </tr>
            </thead>
            <tbody>
                <?php $no = $data->firstItem(); ?>
                @foreach ( $data as $row ) 
                <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ $row->kode_ID }}</td>
                    <td>{{ $row->nama_lengkap }}</td>
                    <td>{{ $row->nik }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection