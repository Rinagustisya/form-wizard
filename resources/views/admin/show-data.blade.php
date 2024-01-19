@extends('master.admin', ['title'=>'Show Data'])

@section('content')
<h4><b>Profil</b></h4>
   <form action="" method="post" enctype="multipart/form-data">
      <div class="card">
         <div class="card-body">
                  <div class="card col-12">
                     <div class="row">
                        <div class="card-body">
                              <label for="">Nama Lengkap</label>
                              <input type="text" class="form-control" id="" value="{{ $row->nama_lengkap }}" readonly>
                        </div>
                     </div>
                  </div>
                  <!-- end input 1 -->
                  <div class="card col-12">
                     <div class="row">
                        <div class="card-body">
                              <label for="">NIK</label>
                              <input type="text" class="form-control" id="" value="{{ $row->nik }}" readonly>
                        </div>
                     </div>
                  </div>
                  <!-- end input 2 -->
                  <div class="card col-12">
                     <div class="row">
                        <div class="card-body">
                              <label for="">Tanggal Lahir</label>
                              <input type="text"  class="form-control" id="" value="{{ $row->tgl_lahir }}"  readonly>
                        </div>
                     </div>
                  </div>
                  <!-- end input 3 -->
                  <div class="card col-12">
                     <div class="row">
                        <div class="card-body">
                              <label for="">Tempat Lahir</label>
                              <input type="text" class="form-control" id="" value="{{ $row->tempat_lahir }}"  readonly>
                        </div>
                     </div>
                  </div>
                  <!-- end input 4 -->
                  <div class="card col-12">
                     <div class="row">
                        <div class="card-body">
                              <label for="">No. Telp</label>
                              <input type="text" class="form-control" id="" value="{{ $row->no_telp }}"  readonly>
                        </div>
                     </div>
                  </div>
                  <!-- end input 4 -->
                  <div class="card col-12">
                     <div class="row">
                        <div class="card-body">
                              <label for="">No. Paspor</label>
                              <input type="text" class="form-control" id="" value="{{ $row->no_paspor }}" placeholder="No. Paspor" readonly>
                        </div>
                     </div>
                  </div>
                  <!-- end input 4 -->
                  <div class="card col-12">
                     <div class="row">
                        <div class="card-body">
                              <label for="">Alamat</label>
                              <input type="text" class="form-control" id="" value="{{ $row->alamat }}"  readonly>
                        </div>
                     </div>
                  </div>
                  <!-- end input 4 -->
                  <div class="card col-12">
                     <div class="row">
                        <div class="card-body">
                              <label for="">Provinsi</label>
                              <input type="text" class="form-control" id="" value="{{ $row->provinsi }}"  readonly>
                        </div>
                     </div>
                  </div>
                  <!-- end input 4 -->
                  <div class="card col-12">
                     <div class="row">
                        <div class="card-body">
                              <label for="">Kabupaten</label>
                              <input type="text" class="form-control" id="" value="{{ $row->kabupaten }}"  readonly>
                        </div>
                     </div>
                  </div>
                  <!-- end input 4 -->
                  <div class="card col-12">
                     <div class="row">
                        <div class="card-body">
                              <label for="">Kecamatan</label>
                              <input type="text" class="form-control" id="" value="{{ $row->kecamatan }}"  readonly>
                        </div>
                     </div>
                  </div>
                  <!-- end input 4 -->
                  <div class="card col-12">
                     <div class="row">
                        <div class="card-body">
                              <label for="">Kelurahan/Desa</label>
                              <input type="text" class="form-control" id="" value="{{ $row->kelurahan }}"  readonly>
                        </div>
                     </div>
                  </div>
                  <!-- end input 4 -->
                  <div class="card col-12">
                     <div class="row">
                        <div class="card-body">
                              <label for="">Nama Ayah</label>
                              <input type="text" class="form-control" id="" value="{{ $row->nama_ayah }}"  readonly>
                        </div>
                     </div>
                  </div>
                  <!-- end input 4 -->
                  <div class="card col-12">
                     <div class="row">
                        <div class="card-body">
                              <label for="">Nama Ibu</label>
                              <input type="text" class="form-control" id="" value="{{ $row->nama_ibu }}"  readonly>
                        </div>
                     </div>
                  </div>
                  <!-- end input 4 -->
                  <div class="card col-12">
                     <div class="row">
                        <div class="card-body">
                              <label for="">Username</label>
                              <input type="text" class="form-control" id="" value="{{ $row->username }}"  readonly>
                        </div>
                     </div>
                  </div>
                  <!-- end input 4 -->
                  <div class="card col-12">
                     <div class="row">
                        <div class="card-body">
                              <label for="">E-mail</label>
                              <input type="text" class="form-control" id="" value="{{ $row->email }}"  readonly>
                        </div>
                     </div>
                  </div>
                  <!-- end input 4 -->
                  <div class="card col-12">
                     <div class="row">
                        <div class="card-body">
                              <label for="">Kode ID</label>
                              <input type="text" class="form-control" id="" value="{{ $row->kode_ID }}"  readonly>
                        </div>
                     </div>
                  </div>
                  <!-- end input 4 -->
                  <div class="card col-12">
                     <div class="row">
                        <div class="card-body">
                              <label for="">Data Diri</label>
                              <img src="{{ route('show.foto', ['filename' => basename($row->foto)]) }}" alt="gambar" class="img-fluid">
                        </div>
                     </div>
                  </div>
                  <!-- end input 4 -->

         </div>
      </div>
   </form>
@endsection