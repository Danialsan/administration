<x-app-layout title="Upload Data">

    <x-slot:style>
        <link href=" {{ asset('assets\libs\bootstrap-tagsinput\bootstrap-tagsinput.css') }}" rel="stylesheet">
        <link href=" {{ asset('assets\libs\switchery\switchery.min.css') }}" rel="stylesheet" type="text/css">
        <link href=" {{ asset('assets\libs\multiselect\multi-select.css') }}" rel="stylesheet" type="text/css">
        <link href=" {{ asset('assets\libs\select2\select2.min.css') }}" rel="stylesheet" type="text/css">
        <link href=" {{ asset('assets\libs\bootstrap-select\bootstrap-select.min.css') }}" rel="stylesheet"
            type="text/css">

        <style>
            .chose {
                display: block;
                width: 100%;
                padding: 0.375rem 0.75rem;
                font-size: 1rem;
                line-height: 1.5;
                color: #495057;
                background-color: #fff;
                background-clip: padding-box;
                border: 1px solid #ced4da;
                border-radius: 0.25rem;
                transition: border-color .15s ease-in-out, box-shadow .15s ease-in-out;
            }

            input[type="file"] {
                display: block;
                width: 100%;
            }
        </style>
    </x-slot:style>

    <div class="row">
        <div class="col-12">

            {{-- Pendaftaran --}}
            <div class="card shadow">
                <div class="card-body">
                    <div class="d-flex align-items-center" style="gap: .5rem">
                        <input type="file" class="form-control chose col-7 col-md-8" id="example-fileinput">
                        <select class="selectpicker show-tick" data-style="btn-light">
                            <option>Role</option>
                            <option>Admin</option>
                            <option>Petugas</option>
                            <option>Santri</option>
                        </select>
                        <div class="input-group-append">
                            <button class="btn btn-success waves-effect waves-light py-0" type="button">
                                <i class="fe-upload"></i>
                                <span>Upload</span>
                            </button>
                        </div>

                    </div>

                    <div class="row mt-2">
                        <div class="col-12">
                            <p class="mb-0">Contoh file excel yang bisa digunakan:</p>
                            <small class="mb-2 text-danger d-block">pastikan bahwa pembimbing dan dudi di upload
                                terlebih
                                dahulu
                                sebelum
                                siswa

                                <br>
                                pastikan isi file dicek terlebih dahulu, jangan upload file jika isi sama
                            </small>
                            <div class="table-responsive">
                                <table class="table">
                                    <tr>
                                        <th style="width: 10%">Admin</th>
                                        <th style="width: 5%">:</th>
                                        <th><a href="{{ asset('assets/excel/pembimbing.xlsx') }}"
                                                class="btn btn-sm btn-danger">download</a>
                                        </th>
                                    </tr>
                                    <tr>
                                        <th>Petugas</th>
                                        <th>:</th>
                                        <th><a href="{{ asset('assets/excel/dudi.xlsx') }}"
                                                class="btn btn-sm btn-success">download</a></th>
                                    </tr>
                                    <tr>
                                        <th>Santri</th>
                                        <th>:</th>
                                        <th><a href="{{ asset('assets/excel/siswa.xlsx') }}"
                                                class="btn btn-sm btn-warning">download</a>
                                        </th>
                                    </tr>

                                </table>
                            </div>
                            <small class="text-warning d-block">
                                sedikit saran isi file dibuat <b>50 user</b> dan seterusnya agar tidak terlalu lama
                                dalam
                                proses upload
                            </small>
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
    </x-slot:script>

</x-app-layout>