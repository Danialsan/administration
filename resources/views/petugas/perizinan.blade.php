<x-app-layout title="Pelayanan perizinan">

    <x-slot:style>
        <style>
            .table td,
            .table th {
                vertical-align: middle !important;
            }
        </style>
    </x-slot:style>

    @if ($errors->any())
    <div class="alert alert-danger pb-0">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    @if(session('message'))
    <div class="alert alert-{{ session('icon') }} alert-dismissible fade show" role="alert">
        {!! session('message') !!}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    @endif

    {{-- Navigasi surat --}}
    <div class="row">
        <div class="col-xl-3 col-md-6">
            <div class="card-box border-0 shadow">
                <div class="float-left" dir="ltr">
                    <input data-plugin="knob" data-width="70" data-height="70" data-fgcolor="#1abc9c"
                        data-bgcolor="#d1f2eb" value="5" data-skin="tron" data-angleoffset="0" data-readonly="true"
                        data-thickness=".15">
                </div>
                <div class="text-right">
                    <h3 class="mb-1" style="color : #1abc9c"> 5 Surat</h3>
                    <p class="text-muted mb-1">Hari ini</p>
                </div>
            </div>
        </div><!-- end col -->

        <div class="col-xl-3 col-md-6">
            <div class="card-box border-0 shadow">
                <div class="float-left" dir="ltr">
                    <input data-plugin="knob" data-width="70" data-height="70" data-fgcolor="#3bafda"
                        data-bgcolor="#d8eff8" value="9" data-skin="tron" data-angleoffset="0" data-readonly="true"
                        data-thickness=".15">
                </div>
                <div class="text-right">
                    <h3 class="mb-1" style="color : #3bafda"> 9 Surat</h3>
                    <p class="text-muted mb-1">Minggu ini</p>
                </div>
            </div>
        </div><!-- end col -->

        <div class="col-xl-3 col-md-6">
            <div class="card-box border-0 shadow">
                <div class="float-left" dir="ltr">
                    <input data-plugin="knob" data-width="70" data-height="70" data-fgcolor="#f672a7"
                        data-bgcolor="#fde3ed" value="15" data-skin="tron" data-angleoffset="0" data-readonly="true"
                        data-thickness=".15">
                </div>
                <div class="text-right">
                    <h3 class="mb-1" style="color : #f672a7"> 15 Surat </h3>
                    <p class="text-muted mb-1">Bulan ini</p>
                </div>
            </div>
        </div><!-- end col -->

        <div class="col-xl-3 col-md-6">
            <div class="card-box border-0 shadow">
                <div class="float-left" dir="ltr">
                    <input data-plugin="knob" data-width="70" data-height="70" data-fgcolor="#6c757d"
                        data-bgcolor="#e2e3e5" value="37" data-skin="tron" data-angleoffset="0" data-readonly="true"
                        data-thickness=".15">
                </div>
                <div class="text-right">
                    <h3 class="mb-1" style="color : #6c757d"> 37 Surat </h3>
                    <p class="text-muted mb-1">Tahun ini</p>
                </div>
            </div>

        </div>
    </div>
    {{-- Akhir navigasi surat --}}

    <div class="row">
        <div class="col-12">

            {{-- Log surat --}}

            <div class="card shadow">
                <div class="card-body">
                    <div class="card-widgets">
                        <button type="button" class="btn btn-primary waves-effect waves-light btn-sm"
                            data-toggle="modal" data-target="#modalTambahPerizinan">
                            <i class="fe-plus-circle"></i>
                            <span> Buat Perizinan </span>
                        </button>

                        {{-- modal tambah perizinan --}}
                        <div id="modalTambahPerizinan" class="modal fade" tabindex="-1" role="dialog"
                            aria-labelledby="modalTambahPerizinan" aria-hidden="true" style="display: none;">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title">Tambah Perizinan Santri</h4>
                                        <button type="button" class="close" data-dismiss="modal"
                                            aria-hidden="true">×</button>
                                    </div>
                                    <form action="{{ route('perizinan.store') }}" method="POST">
                                        @csrf
                                        <div class="modal-body p-4">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="santri" class="control-label">Pilih Santri</label>
                                                        <select name="santri" id="santri" class="selectpicker show-tick"
                                                            data-style="btn-light" required>
                                                            <option selected disabled>Pilih Santri
                                                            </option>
                                                            @foreach ($list_santri as $santri )
                                                            <option value="{{ $santri->id }}">
                                                                {{ ucwords($santri->nama_santri) }}
                                                            </option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                                {{-- <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="field-2" class="control-label">NIK</label>
                                                        <input type="text" class="form-control" id="field-2"
                                                            placeholder="1920435">
                                                    </div>
                                                </div> --}}
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="noSurat" class="control-label">Nomor Surat</label>
                                                        <input type="text" class="form-control" id="noSurat"
                                                            name="no_surat">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group no-margin">
                                                        <label for="jenisSurat" class="control-label">Jenis
                                                            Surat</label>
                                                        <input type="text" class="form-control" id="jenisSurat"
                                                            name="jenis_surat">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary waves-effect"
                                                data-dismiss="modal">Kembali</button>
                                            <button type="submit" class="btn btn-info waves-effect waves-light">Simpan
                                                Log</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        {{-- Akhir modal tambah perizinan --}}

                    </div>
                    <h4 class="header-title mb-0" style="font-size: 1.5rem">Daftar Log Surat</h4>

                    {{-- Daftar Log Surat --}}
                    <div id="cardCollpase1" class="collapse pt-3 show">
                        <div class=" row d-flex justify-content-between align-items-center mt-3 mb-4">
                            <div class="col-sm-4">
                                <div class="input-group">
                                    <input class="form-control" style="height: 30px" type="month" id="example-month"
                                        name="month">
                                    <div class="input-group-append">
                                        <button class="btn btn-success waves-effect waves-light py-0" type="button">
                                            <i class="fe-search"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-4">
                                <div class="input-group">
                                    <input type="text" class="form-control" style="height: 30px;"
                                        placeholder="Masukkan Pencarian..." aria-label="Recipient's username"
                                        aria-describedby="basic-addon2">
                                    <div class="input-group-append">
                                        <button class="btn btn-success waves-effect waves-light py-0" type="button">
                                            <i class="fe-search"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="table-responsive">
                            <table class="table table-striped mb-0 text-center" style="vertical-align : middle;">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nomor & Tanggal Surat</th>
                                        <th>Jenis Surat</th>
                                        <th>NIK & Nama</th>
                                        <th>Tindakan</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach ($perizinanSantri as $perizinan)
                                    <tr>
                                        <th scope="row">{{ $loop->iteration }}</th>
                                        <td>
                                            <b>{{ $perizinan->no_surat }}</b><br>
                                            {{ $perizinan->created_at->translatedFormat('d F Y') }}
                                        </td>
                                        <td>{{ $perizinan->jenis_surat }}</td>
                                        <td>
                                            <b>{{ $perizinan->santri->nik }}</b><br>
                                            {{ $perizinan->santri->nama_santri }}
                                        </td>
                                        <td>
                                            {{-- <button type="button"
                                                class="btn btn-sm btn-outline-primary waves-effect waves-light">
                                                <i class="fe-printer"></i>

                                            </button>
                                            <button type="button"
                                                class="btn btn-sm btn-outline-info waves-effect waves-light">
                                                <i class="fe-eye"></i>

                                            </button>
                                            <button type="button"
                                                class="btn btn-sm btn-outline-warning waves-effect waves-light">
                                                <i class="fe-edit"></i>

                                            </button> --}}

                                            <button type="button"
                                                class="btn btn-sm btn-outline-danger waves-effect waves-light"
                                                data-toggle="modal"
                                                data-target="#modalHapusPerizinan_{{ $perizinan->id }}">
                                                <i class="fe-trash"></i>

                                            </button>

                                            <div id="modalHapusPerizinan_{{ $perizinan->id }}" class="modal fade"
                                                tabindex="-1" role="dialog"
                                                aria-labelledby="modalHapusPerizinan{{ $perizinan->id }}Title"
                                                aria-hidden="true" style="display: none;">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h4 class="modal-title"
                                                                id="modalHapusPerizinan{{ $perizinan->id }}Title">
                                                                Peringatan</h4>
                                                            <button type="button" class="close" data-dismiss="modal"
                                                                aria-hidden="true">×</button>
                                                        </div>
                                                        <div class="modal-body p-4">
                                                            <div class="row">
                                                                <p style="font-size: 1rem; font-weight: bold">Yakin
                                                                    Ingin
                                                                    Menghapus Perizinan Santri {{
                                                                    $perizinan->santri->nama_santri }}?</p>
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <form
                                                                action="{{ route('perizinan.destroy', $perizinan->id) }}"
                                                                method="POST">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button type="button"
                                                                    class="btn btn-secondary waves-effect"
                                                                    data-dismiss="modal">Kembali</button>
                                                                <button type="submit" onclick="proses(this)"
                                                                    class="btn btn-info waves-effect waves-light">Hapus</button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Akhir Log surat --}}

        </div>
    </div>

    <x-slot:script>
        <script>
            var izinBulanan = @json(session('izinBulanan', []));
       
           <script>
            document.addEventListener('DOMContentLoaded', function() {
            document.querySelector('form').addEventListener('submit', function(event) {
                var selectedSantri = document.getElementById('santri').value;
        
                if (izinBulanan.includes(parseInt(selectedSantri))) {
                    event.preventDefault();
                    alert('Santri ini sudah membuat perizinan pada bulan ini.');
                }
            });
        });
        </script>
        </script>
    </x-slot:script>

</x-app-layout>