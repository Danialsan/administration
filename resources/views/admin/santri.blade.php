<x-app-layout title="Daftar Santri">

    {{-- <div class="row">
        <div class="col-12">

        </div>
    </div> --}}

    <x-slot:style>
        <link href=" {{ asset('assets\libs\bootstrap-tagsinput\bootstrap-tagsinput.css') }}" rel="stylesheet">
        <link href=" {{ asset('assets\libs\switchery\switchery.min.css') }}" rel="stylesheet" type="text/css">
        <link href=" {{ asset('assets\libs\multiselect\multi-select.css') }}" rel="stylesheet" type="text/css">
        <link href=" {{ asset('assets\libs\select2\select2.min.css') }}" rel="stylesheet" type="text/css">
        <link href=" {{ asset('assets\libs\bootstrap-select\bootstrap-select.min.css') }}" rel="stylesheet"
            type="text/css">

    </x-slot:style>

    @if ($errors->any())
    <div class="alert alert-danger">
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




    <div class="row">
        <div class="col-12">

            {{-- Pendaftaran --}}
            <div class="card shadow">
                <div class="card-body">
                    <div class="card-widgets pb-5">
                        <button type="button" class="btn btn-primary waves-effect waves-light btn-sm"
                            data-toggle="modal" data-target="#modalTambahSantri">
                            <i class="fe-plus-circle"></i>
                            <span> Tambah Santri </span>
                        </button>

                        {{-- Awal modal tambah santri --}}
                        <div id="modalTambahSantri" class="modal fade" tabindex="-1" role="dialog"
                            aria-labelledby="modalTambahSantri" aria-hidden="true" style="display: none;">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title">Data Pendaftaran</h4>
                                        <button type="button" class="close" data-dismiss="modal"
                                            aria-hidden="true">×</button>
                                    </div>
                                    <form action="{{ route('santri.store') }}" method="post">
                                        @csrf
                                        <div class="modal-body p-4">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="namaSantri" class="control-label">Nama</label>
                                                        <input type="text" class="form-control" id="namaSantri"
                                                            name="nama_santri">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="nik" class="control-label">NIK</label>
                                                        <input type="text" class="form-control" id="nik" name="nik">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="sekolahUmum" class="control-label">Sekolah
                                                            Reguler</label>
                                                        <select class="selectpicker show-tick" data-style="btn-light"
                                                            name="sekolah_umum" id="sekolahUmum">
                                                            <option selected disabled>Pilih Sekolah...</option>
                                                            <option value="smp" {{ request('sekolah_umum')=='smp'
                                                                ? 'selected' : '' }}>Sekolah Menengah Pertama ( SMP )
                                                            </option>
                                                            <option value="mts" {{ request('sekolah_umum')=='mts'
                                                                ? 'selected' : '' }}>Madrasah Stanawiyah ( MTs )
                                                            </option>
                                                            <option value="smk" {{ request('sekolah_umum')=='smk'
                                                                ? 'selected' : '' }}>Sekolah Menengah Kejuruan ( SMK )
                                                            </option>
                                                            <option value="ma" {{ request('sekolah_umum')=='ma'
                                                                ? 'selected' : '' }}>
                                                                Madrasah Aliyah ( MA )</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="sekolahMadrasah" class="control-label">Sekolah
                                                            Madrasah</label>
                                                        <input type="text" class="form-control" id="sekolahMadrasah"
                                                            name="sekolah_madrasah">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="gender" class="control-label">Gender</label>
                                                        <select name="gender" id="gender" class="selectpicker show-tick"
                                                            data-style="btn-light">
                                                            <option selected disabled>Pilih Gender...</option>
                                                            <option value="laki-laki" {{ request('gender')=='laki-laki'
                                                                ? 'selected' : '' }}>Laki - laki</option>
                                                            <option value="perempuan" {{ request('gender')=='perempuan'
                                                                ? 'selected' : '' }}>Perempuan</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="wisma" class="control-label">Wisma</label>
                                                        <select class="selectpicker show-tick" data-style="btn-light"
                                                            id="wisma" name="wisma">
                                                            <option selected disabled>Pilih Wisma...</option>
                                                            @foreach ($list_wisma as $wisma )
                                                            <option value="{{ $wisma->id }}">{{
                                                                strtoupper($wisma->singkatan) }}
                                                            </option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary waves-effect"
                                                data-dismiss="modal">Kembali</button>
                                            <button type="submit"
                                                class="btn btn-primary waves-effect waves-light">Simpan
                                                Data</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        {{-- Akhir modal tambah santri --}}

                    </div>
                    <h4 class="header-title mb-0" style="font-size: 1.4rem">Laporan Pendaftaran</h4>

                    <div class="input-group mb-1 mt-3" style="width: 300px">
                        <input type="text" class="form-control" placeholder="Masukkan Pencarian..."
                            aria-label="Recipient's username" aria-describedby="basic-addon2">
                        <div class="input-group-append">
                            <button class="btn btn-success waves-effect waves-light" type="button">
                                <i class="fe-search"></i>
                            </button>
                        </div>
                    </div>

                    <div id="cardCollpase1" class="collapse pt-3 show">
                        <div class="table-responsive">
                            <table class="table table-striped mb-0 text-center">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th class="text-left">Nama</th>
                                        <th>Gender</th>
                                        <th>Regular</th>
                                        <th>Madrasah</th>
                                        <th>Wisma</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach($list_santri as $santri)
                                    <tr>
                                        <th scope="row">{{ $loop->iteration }}</th>
                                        <td class="text-left">
                                            <b>
                                                {{ $santri->nama_santri }}
                                            </b>
                                        </td>
                                        <td>{{ $santri->gender }}</td>
                                        <td>{{ strtoupper($santri->sekolah_umum) }}</td>
                                        <td>{{ $santri->sekolah_madrasah }}</td>
                                        <td>{{ strtoupper($santri->wisma ? $santri->wisma->singkatan : '-') }}</td>
                                        <td class="text-center">

                                            {{-- <button type="button"
                                                class="btn btn-sm btn-outline-info waves-effect waves-light">
                                                <i class="fe-eye"></i>
                                            </button> --}}
                                            {{-- <button type="button"
                                                class="btn btn-sm btn-outline-warning waves-effect waves-light">
                                                <i class="fe-printer"></i>
                                            </button> --}}
                                            <button type="button"
                                                class="btn btn-sm btn-outline-danger waves-effect waves-light"
                                                data-toggle="modal" data-target="#modalHapusSantri_{{ $santri->id }}">
                                                <i class="fe-trash"></i>
                                            </button>

                                            {{-- Awal modal hapus santri --}}
                                            <div id="modalHapusSantri_{{ $santri->id }}" class="modal fade"
                                                tabindex="-1" role="dialog"
                                                aria-labelledby="modalTambahSantri_{{ $santri->id }}Title"
                                                aria-hidden="true" style="display: none;">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h4 class="modal-title"
                                                                id="modalHapusSantri_{{ $santri->id }}Title">Peringatan
                                                            </h4>
                                                            <button type="button" class="close" data-dismiss="modal"
                                                                aria-hidden="true">×</button>
                                                        </div>
                                                        <div class="modal-body p-4">
                                                            <div class="row">
                                                                <p style="font-size: 1rem; font-weight: bold">Yakin
                                                                    Ingin
                                                                    Menghapus Santri {{ $santri->nama_santri }}?</p>
                                                            </div>
                                                        </div>
                                                        <form action="{{ route('santri.destroy', $santri->id) }}"
                                                            method="post">
                                                            @csrf
                                                            @method('DELETE')
                                                            <div class="modal-footer">
                                                                <button type="button"
                                                                    class="btn btn-secondary waves-effect"
                                                                    data-dismiss="modal">Kembali</button>
                                                                <button type="submit" onclick="proses(this)"
                                                                    class="btn btn-danger waves-effect waves-light">Hapus</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                            {{-- Akhir modal hapus santri --}}

                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- Akhir pendaftaran --}}

    </div>


    <x-slot:script>
        <script src=" {{ asset('assets\libs\bootstrap-tagsinput\bootstrap-tagsinput.min.js') }}"></script>
        <script src=" {{ asset('assets\libs\switchery\switchery.min.js') }}"></script>
        <script src=" {{ asset('assets\libs\multiselect\jquery.multi-select.js') }}"></script>
        <script src=" {{ asset('assets\libs\jquery-quicksearch\jquery.quicksearch.min.js') }}"></script>
        <script src=" {{ asset('assets\libs\select2\select2.min.js') }}"></script>
        <script src=" {{ asset('assets\libs\bootstrap-select\bootstrap-select.min.js') }}"></script>
        <script src=" {{ asset('assets\libs\bootstrap-touchspin\jquery.bootstrap-touchspin.min.js') }}"></script>
        <script src=" {{ asset('assets\libs\jquery-mask-plugin\jquery.mask.min.js') }}"></script>
        <link href=" {{ asset('assets\libs\bootstrap-touchspin\jquery.bootstrap-touchspin.min.css') }}"
            rel="stylesheet">
        <script src=" {{ asset('assets\js\pages\form-advanced.init.js') }}"></script>



        <script>
            $(document).ready(function() {
                                    $('.select2').select2();
                                });
        </script>

    </x-slot:script>

</x-app-layout>