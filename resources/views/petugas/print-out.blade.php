<x-app-layout title="Print Out">
    <x-slot:style>
        <link href=" {{ asset('assets\libs\bootstrap-tagsinput\bootstrap-tagsinput.css') }}" rel="stylesheet">
        <link href=" {{ asset('assets\libs\switchery\switchery.min.css') }}" rel="stylesheet" type="text/css">
        <link href=" {{ asset('assets\libs\multiselect\multi-select.css') }}" rel="stylesheet" type="text/css">
        <link href=" {{ asset('assets\libs\select2\select2.min.css') }}" rel="stylesheet" type="text/css">
        <link href=" {{ asset('assets\libs\bootstrap-select\bootstrap-select.min.css') }}" rel="stylesheet"
            type="text/css">

    </x-slot:style>

    <div class="row">
        <div class="col-12">

            {{-- Print-out --}}
            <div class="card shadow">
                <div class="card-body">
                    <h4 class="header-title mb-0 text-gray" style="font-size: 1.5rem">Data Santri</h4>


                    <div id="cardCollpase1" class="collapse pt-3 show">


                        <div class="row">

                            <div class="col-lg-4 order-1 order-lg-2">
                                <div class="card-box">
                                    <div class="input-group mb-2">
                                        <input type="text" class="form-control" placeholder="Masukkan Pencarian..."
                                            aria-label="Recipient's username" aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-success waves-effect waves-light" type="button">
                                                <i class="fe-search"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="d-flex">
                                        <select class="selectpicker show-tick" data-style="btn-light">
                                            <option>Pilih Pos...</option>
                                            <option>Latas</option>
                                            <option>LBA</option>
                                            <option>LBI</option>
                                        </select>
                                        <div class="input-group-append">
                                            <button class="btn btn-success waves-effect waves-light" type="button">
                                                <i class="fe-search"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div> <!-- end card-box -->
                            </div>

                            <div class="col-lg-8 order-2 order-lg-1">
                                <div class="table-responsive">
                                    <table class="table mb-0">
                                        <thead class="thead-light">
                                            <tr>
                                                <th>No</th>
                                                <th>Nama</th>
                                                <th>Pos</th>
                                                <th>Tindakan</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">1</th>
                                                <td>Kusnadi</td>
                                                <td>Latas</td>
                                                <td>

                                                    <button type="button"
                                                        class="btn btn-sm btn-outline-info waves-effect waves-light">
                                                        <i class="fe-eye"></i>
                                                    </button>
                                                    <button type="button"
                                                        class="btn btn-sm btn-outline-warning waves-effect waves-light">
                                                        <i class="fe-printer"></i>
                                                    </button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">2</th>
                                                <td>Lutfi Hasan</td>
                                                <td>Latas</td>
                                                <td>

                                                    <button type="button"
                                                        class="btn btn-sm btn-outline-info waves-effect waves-light">
                                                        <i class="fe-eye"></i>
                                                    </button>
                                                    <button type="button"
                                                        class="btn btn-sm btn-outline-warning waves-effect waves-light">
                                                        <i class="fe-printer"></i>
                                                    </button>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>


                        </div>


                    </div>
                </div>
            </div>
        </div>
        {{-- Akhir print-out --}}

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