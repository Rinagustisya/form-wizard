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
                                <select name="provinsi" class="provinsi" class="form-control">
                                    <option value="Aceh">Aceh</option>
                                    <option value="Sumatera Utara">Sumatera Utara</option>
                                    <option value="Sumatera Barat">Sumatera Barat</option>
                                    <option value="Riau">Riau</option></option>
                                    <option value="Aceh">Kepulauan Riau</option>
                                    <option value="Jambi">Jambi</option>
                                    <option value="Bengkulu">Bengkulu</option>
                                    <option value="Sumatera Selatan">Sumatera Selatan</option>
                                    <option value="Kepulauan Bangka Belitung">Kepulauan Bangka Belitung</option>
                                    <option value="Lampung">Lampung</option>
                                    <option value="Banten">Banten</option>
                                    <option value="DKI Jakarta (Daerah Khusus Ibukota Jakarta)">DKI Jakarta</option>
                                    <option value="Jawa Barat">Jawa Barat</option>
                                    <option value="Jawa Tengah">Jawa Tengah</option>
                                    <option value="Daerah Istimewa Yogyakarta">Daerah Istimewa Yogyakarta</option>
                                    <option value="Jawa Timur">Jawa Timur</option>
                                    <option value="Bali">Bali</option>
                                    <option value="Nusa Tenggara Barat">Nusa Tenggara Barat</option>
                                    <option value="Nusa Tenggara Timur">Nusa Tenggara Timur</option>
                                    <option value="Kalimantan Barat">Kalimantan Barat</option>
                                    <option value="Kalimantan Tengah">Kalimantan Tengah</option>
                                    <option value="Kalimantan Selatan">Kalimantan Selatan</option>
                                    <option value="Kalimantan Timur">Kalimantan Timur</option>
                                    <option value="Kalimantan Utara">Kalimantan Utara</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                    <div class="col-md-3">
                            <div class="form-group">
                                <label for="">Kabupaten/Kota</label>
                                <select name="provinsi[]" class="provinsi" class="form-control">
                                </select>
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