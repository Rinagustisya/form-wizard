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
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $no = $data->firstItem(); ?>
                @foreach ( $data as $row ) 
                <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ $row->nama_lengkap }}</td>
                    <td>{{ $row->no_telp }}</td>
                    <td>{{ $row->nik }}</td>
                    <td>{{ $row->provinsi }}</td>
                    <td>{{ $row->kabupaten }}</td>
                    <td>{{ $row->kecamatan }}</td>
                    <td>{{ $row->kelurahan }}</td>
                    <td>
                        <x-btn-show :link="route('show-data',['id'=>$row->id])" />
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection