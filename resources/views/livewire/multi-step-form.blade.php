<div>
    <form action="" method="post">

    <!-- Step 1 -->
        <div class="step-one">
            <div class="card">
                <div class="card-header bg-danger text-white">Tahap 1 | Biodata Diri</div>
                <div class="card-body">
                    <div class="row" style=" padding-bottom: 15px;">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="">Nama Lengkap</label>
                                <input type="text" class="form-control" placeholder="Nama Lengkap" name="" id="">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="">No. Telp Aktif</label>
                                <input type="number" class="form-control" placeholder="+62****" name="" id="">
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
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="">Kabupaten/Kota</label>
                                <select name="provinsi" class="form-control">
                                    <option value="">Pilih Kabupaten</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="">Kecamatan</label>
                                <select name="kecamatan" class="form-control">
                                    <option value="">Pilih Kecamatan</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="">Kelurahan</label>
                                <select name="kecamatan" class="form-control">
                                    <option value="">Pilih Kelurahan</option>
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
                </div>
            </div>
        </div>

    </form>
</div>


@push('js')
<script>
$(document).ready(function() {
    
});
</script>
@endpush