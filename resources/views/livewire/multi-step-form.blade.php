<div>
                    <form wire:submit.prevent="register">

                    @if ($currentStep == 1)
                    <!-- Step 1 -->
                        <div class="step-one">
                            <div class="card">
                                <div class="card-header bg-danger text-white">Tahap 1 | Biodata Diri</div>
                                <div class="card-body">
                                    <div class="row" style="padding-bottom: 10px;">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="">Nama Lengkap <small style="color: red;">**Wajib Diisi</small></label>
                                                <input type="text" class="form-control" placeholder="Nama Lengkap" wire:model="nama_lengkap">
                                                <span class="text-danger">
                                                    @error('nama_lengkap')
                                                        {{ $message }}
                                                    @enderror
                                                </span>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="">No. Telp Aktif <small style="color: red;">**Wajib Diisi</small></label>
                                                <input type="number" class="form-control" placeholder="085****" wire:model="no_telp">
                                                <span class="text-danger">
                                                    @error('no_telp')
                                                        {{ $message }}
                                                    @enderror
                                                </span>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="">NIK (Sesuai KTP) <small style="color: red;">**Wajib Diisi</small></label>
                                                <input type="number" class="form-control" placeholder="NIK Sesuai KTP" wire:model="nik">
                                                <span class="text-danger">
                                                    @error('nik')
                                                        {{ $message }}
                                                    @enderror
                                                </span>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="provinsi">Provinsi <small style="color: red;">**Wajib Diisi</small></label>
                                                <select  class="form-control" wire:model="provinsi" id="provinsi">
                                                    <option value="">Pilih Provinsi</option>
                                                    @foreach ($provinces as $provinsi )
                                                        <option value="{{$provinsi->id}}">{{$provinsi->name}}</option>
                                                    @endforeach
                                                </select>
                                                <span class="text-danger">
                                                    @error('provinsi')
                                                        {{ $message }}
                                                    @enderror
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row" style="padding-bottom: 10px;">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="">Kabupaten/Kota <small style="color: red;">**Wajib Diisi</small></label>
                                                <select class="form-control" wire:model="kabupaten" id="kabupaten">
                                                </select>
                                                <span class="text-danger">
                                                    @error('kabupaten')
                                                        {{ $message }}
                                                    @enderror
                                                </span>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="">Kecamatan <small style="color: red;">**Wajib Diisi</small></label>
                                                <select class="form-control" wire:model="kecamatan" id="kecamatan">
                                                </select>
                                                <span class="text-danger">
                                                    @error('kecamatan')
                                                        {{ $message }}
                                                    @enderror
                                                </span>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="">Kelurahan <small style="color: red;">**Wajib Diisi</small></label>
                                                <select class="form-control" wire:model="kelurahan" id="desa">
                                                </select>
                                                <span class="text-danger">
                                                    @error('kelurahan')
                                                        {{ $message }}
                                                    @enderror
                                                </span>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="">Alamat Lengkap <small style="color: red;">**Wajib Diisi</small></label>
                                                <input type="text" class="form-control" placeholder="Alamat Lengkap Domisili" wire:model="alamat">
                                                <span class="text-danger">
                                                    @error('alamat')
                                                        {{ $message }}
                                                    @enderror
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row" style="padding-bottom: 10px;">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="">Tempat Lahir <small style="color: red;">**Wajib Diisi</small></label>
                                                <input type="text" class="form-control" wire:model="tempat_lahir" placeholder="Tempat Lahir">
                                                <span class="text-danger">
                                                    @error('tempat_lahir')
                                                        {{ $message }}
                                                    @enderror
                                                </span>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="">Tanggal Lahir <small style="color: red;">**Wajib Diisi</small></label>
                                                <input type="date" class="form-control" wire:model="tgl_lahir">
                                                <span class="text-danger">
                                                    @error('tgl_lahir')
                                                        {{ $message }}
                                                    @enderror
                                                </span>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="">Jenis Kelamin <small style="color: red;">**Wajib Diisi</small></label>
                                                <select class="form-control" wire:model="jenis_kelamin">
                                                    <option value="L">Laki-Laki</option>
                                                    <option value="P">Perempuan</option>
                                                </select>
                                                <span class="text-danger">
                                                    @error('jenis_kelamin')
                                                        {{ $message }}
                                                    @enderror
                                                </span>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="">No. Paspor <b><small style="color: blue;">(Opsional)</small></b></label>
                                                <input type="number" class="form-control" placeholder="No. Paspor" wire:model="no_paspor">
                                                <span class="text-danger">
                                                    @error('no_paspor')
                                                        {{ $message }}
                                                    @enderror
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                    <!-- step 2 -->
                    @if ($currentStep == 2)
                    <div class="step-two">
                            <div class="card">
                                <div class="card-header bg-danger text-white">Tahap 2 | Data Keluarga</div>
                                <div class="card-body">
                                    <div class="row" style="padding-bottom: 10px;">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="">Nama Ayah <small style="color: red;">**Wajib Diisi</small></label>
                                                <input type="text" class="form-control" placeholder="Nama Ayah" wire:model="nama_ayah">
                                                <span class="text-danger">
                                                    @error('nama_ayah')
                                                        {{ $message }}
                                                    @enderror
                                                </span>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="">Nama Ibu <small style="color: red;">**Wajib Diisi</small></label>
                                                <input type="text" class="form-control" placeholder="Nama Ibu" wire:model="nama_ibu">
                                                <span class="text-danger">
                                                    @error('nama_ibu')
                                                        {{ $message }}
                                                    @enderror
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endif
                    <!-- step 3 -->
                    @if ($currentStep == 3)
                    <div class="step-three">
                            <div class="card">
                                <div class="card-header bg-danger text-white">Tahap 3 | Data Lainnya</div>
                                <div class="card-body">
                                    <div class="row" style="padding-bottom: 10px;">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="">Upload Foto Ktp <small style="color: red;">**Wajib Diisi</small></label>
                                                <input type="file" class="form-control" wire:model="foto">
                                                <span class="text-danger">
                                                    @error('foto')
                                                        {{ $message }}
                                                    @enderror
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> 
                        @endif
                        <!-- step 4 -->
                        @if ($currentStep == 4)
                        <div class="step-four">
                            <div class="card">
                                <div class="card-header bg-danger text-white">Tahap 4 | Data Akun</div>
                                <div class="card-body">
                                    <div class="row" style="padding-bottom: 10px;">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="">Username <small style="color: red;">**Wajib Diisi</small></label>
                                                <input type="text" class="form-control" wire:model="username">
                                                <span class="text-danger">
                                                    @error('username')
                                                        {{ $message }}
                                                    @enderror
                                                </span>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="">Email <small style="color: red;">**Wajib Diisi</small></label>
                                                <input type="email" class="form-control" wire:model="email">
                                                <span class="text-danger">
                                                    @error('email')
                                                        {{ $message }}
                                                    @enderror
                                                </span>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="">Kode ID <small style="color: red;">**Wajib Diisi</small></label>
                                                <input type="number" class="form-control" wire:model="kode_ID">
                                                <span class="text-danger">
                                                    @error('kode_ID')
                                                        {{ $message }}
                                                    @enderror
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>  
                        @endif
                        <!-- end -->

                        <!-- button -->
                        <div class="action-button d-flex justify-content-between bg-white pt-2 pb-2">
                            @if ($currentStep == 1)
                            <div></div>
                            @endif

                            @if ($currentStep == 2 || $currentStep == 3 || $currentStep == 4)
                            <button type="button" class="btn btn-md btn-secondary" wire:click="decreaseStep()">Back</button>
                            @endif

                            @if ($currentStep == 1 || $currentStep == 2 || $currentStep == 3)
                            <button type="button" class="btn btn-sm btn-success" wire:click="increaseStep()">Simpan & Lanjutkan</button>
                            @endif

                            @if ($currentStep == 4)
                            <button type="submit" class="btn btn-sm btn-primary">Submit</button>
                            @endif
                        </div>
                    </form>
                </div>

                <!-- Javascript -->
                @push('ajax')
                    <script>
                        $(function () {
                            $.ajaxSetup({
                                headers : { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')  }
                            });

                            $(function() {
                                $('#provinsi').on('change',function() {
                                    let id_provinsi = $('#provinsi').val();

                                    // console.log(id_provinsi);
                                    $.ajax({
                                        type : 'POST',
                                        url : "{{ route('getKabupaten') }}",
                                        data: { id_provinsi: id_provinsi },
                                        cache : false,
                                        dataType: 'html',
                                        success: function(msg) {
                                            $('#kabupaten').html(msg);
                                            $('#kecamatan').html('');
                                            $('#desa').html('');
                                        },

                                        error: function(data) {
                                            console.log('error:', data)
                                        },
                                    })
                                })
                            });

                            $(function() {
                                $('#kabupaten').on('change',function() {
                                    let id_kabupaten = $('#kabupaten').val();

                                    // console.log(id_provinsi);
                                    $.ajax({
                                        type : 'POST',
                                        url : "{{ route('getKecamatan') }}",
                                        data: { id_kabupaten: id_kabupaten },
                                        cache : false,
                                        dataType: 'html',
                                        success: function(msg) {
                                            $('#kecamatan').html(msg);
                                            $('#desa').html('');
                                        },

                                        error: function(data) {
                                            console.log('error:', data)
                                        },
                                    })
                                })
                            });

                            $(function() {
                                $('#kecamatan').on('change',function() {
                                    let id_kecamatan = $('#kecamatan').val();

                                    // console.log(id_provinsi);
                                    $.ajax({
                                        type : 'POST',
                                        url : "{{ route('getDesa') }}",
                                        data: { id_kecamatan: id_kecamatan },
                                        cache : false,
                                        dataType: 'html',
                                        success: function(msg) {
                                            $('#desa').html(msg);
                                        },

                                        error: function(data) {
                                            console.log('error:', data)
                                        },
                                    })
                                })
                            });

                        });
                    </script>
                @endpush