<x-app-layout title="Pelayanan pembayaran">

    <x-slot:style>
        <link href=" {{ asset('assets\libs\bootstrap-tagsinput\bootstrap-tagsinput.css') }}" rel="stylesheet">
        <link href=" {{ asset('assets\libs\switchery\switchery.min.css') }}" rel="stylesheet" type="text/css">
        <link href=" {{ asset('assets\libs\multiselect\multi-select.css') }}" rel="stylesheet" type="text/css">
        <link href=" {{ asset('assets\libs\select2\select2.min.css') }}" rel="stylesheet" type="text/css">
        <link href=" {{ asset('assets\libs\bootstrap-select\bootstrap-select.min.css') }}" rel="stylesheet"
            type="text/css">

        <style>
            .table {
                width: 100%;
                /* Atur lebar tabel */
            }

            .table th,
            .table td {
                padding: 16px;
                /* Atur jarak dalam sel */
                text-align: left;
                /* Atur teks rata kiri */
                white-space: nowrap;
                /* Mencegah teks berpindah ke baris berikutnya */
            }

            .table th:nth-child(4),
            .table td:nth-child(4) {
                width: 150px;
                /* Atur lebar kolom Pos Bayar */
            }

            .form-inline .form-control {
                width: auto;
                /* atau atur sesuai kebutuhan */
            }
        </style>

    </x-slot:style>

    <div class="row mb-3">
        <div class="col-lg-12">
            <!-- Portlet card -->
            <div class="card shadow">
                <div class="card-header bg-info py-2 text-white">
                    <div class="card-widgets">
                        <a data-toggle="collapse" href="#cardCollpase7" role="button" aria-expanded="false"
                            aria-controls="cardCollpase2"><i class="mdi mdi-minus"></i></a>
                    </div>
                    <h5 class="card-title mb-0 text-white" style="font-size: 1.1rem">Filter Data Pembayaran Santri</h5>
                </div>
                <div id="cardCollpase7" class="collapse show">
                    <div class="card-body">
                        <form method="get">
                            <div
                                class="col-sm-12 d-flex justify-content-center align-items-center flex-column flex-lg-row">
                                <div class="col-12 col-lg-2 text-lg-left text-center order-1 order-lg-1">
                                    <h5>Pilih Santri</h5>
                                </div>
                                <div class="col-12 col-lg-8 order-3 order-lg-2 mb-2 mb-lg-0 d-flex align-items-center">
                                    <select name="santri" class="form-control select2 w-100">
                                        <option value="" {{ is_null($santri) ? 'selected' : '' }}>
                                            - Cari Nama Santri -
                                        </option>

                                        @foreach ($list_santri as $santriItem)
                                        <option value="{{ $santriItem->id }}" {{ $santri && $santri->id ==
                                            $santriItem->id ? 'selected' : '' }}>
                                            {{ ucwords($santriItem->nama_santri) }}
                                        </option>
                                        @endforeach
                                    </select>

                                    <button class="btn btn-success waves-effect waves-light ml-2" type="submit"
                                        onchange="this.form.submit()">
                                        <i class="fe-search"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- end card-->
        </div>
        <!-- end col -->
    </div>


    @if ($santri)
    <div class="row">
        <div class="col-lg-5">
            <div class="card shadow">
                <div class="card-body">
                    <div class="card-widgets">
                        <a data-toggle="collapse" href="#cardCollpase1" role="button" aria-expanded="false"
                            aria-controls="cardCollpase1"><i class="mdi mdi-minus"></i></a>
                    </div>

                    <h5 class="card-title mb-0" style="font-size: 1.1rem">Informasi Santri</h5>

                    <div id="cardCollpase1" class="collapse pt-3 show">
                        <div class="table-responsive">
                            <table class="table table-striped mb-0">

                                <tbody>
                                    {{-- <tr>
                                        <th class="col-4">Tahun Ajaran</th>
                                        <td class="col-none">:</td>
                                        <td class="col-8"><b> Semua tahun ajaran </b></td>
                                    </tr> --}}
                                    <tr>
                                        <th scope="row">NIS</th>
                                        <td>:</td>
                                        <td>{{ $santri->nik }}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Nama Santri</th>
                                        <td>:</td>
                                        <td>{{ $santri->nama_santri }}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Sekolah</th>
                                        <td>:</td>
                                        <td>{{ strtoupper($santri->sekolah_umum) }}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Madrasah Diniyah</th>
                                        <td>:</td>
                                        <td>{{ $santri->sekolah_madrasah }}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Wisma</th>
                                        <td>:</td>
                                        <td>{{ $santri->wisma ? $santri->wisma->nama_wisma : '-'}}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </div> <!-- end col -->

        <div class="col-lg-7">

            <div class="card border-warning shadow">
                <div class="card-header bg-warning py-2 text-white">
                    <div class="card-widgets">
                        <a data-toggle="collapse" href="#cardCollpase9" role="button" aria-expanded="false"
                            aria-controls="cardCollpase2"><i class="mdi mdi-minus"></i></a>
                    </div>
                    <h5 class="card-title mb-0 text-white" style="font-size: 1.1rem">Tagihan Bulanan</h5>
                </div>
                <div id="cardCollpase9" class="collapse show">
                    <div class="card-body">
                        <div class="table-responsive">
                            @if ($santri->pembayaranSantri->isEmpty())
                            <p>Pembayaran Santri tidak ada</p>
                            @else
                            <table class="table table-striped mb-0" cellpadding="10px">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        {{-- <th>Tahun</th> --}}
                                        {{-- <th>Bulan</th> --}}
                                        {{-- <th>Pos Bayar</th> --}}
                                        {{-- <th>Jenis</th> --}}
                                        <th>Tagihan</th>
                                        <th>Dibayar</th>
                                        <th>Status</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($santri->pembayaranSantri as $pembayaran)

                                    <tr>
                                        <th scope="row">{{ $loop->iteration }}</th>
                                        {{-- <td>2024</td> --}}
                                        {{-- <td>Januari</td> --}}
                                        {{-- <td>SMK</td> --}}
                                        {{-- <td>SPP</td> --}}
                                        <td>{{ $santri->wisma ? $santri->wisma->pembayaran : '-' }}</td>
                                        <td>{{ $pembayaran->dibayar }}</td>
                                        <td>
                                            @if($santri->wisma && $santri->wisma->pembayaran != null)
                                            @if($pembayaran->dibayar == $santri->wisma->pembayaran)
                                            <span class="badge badge-primary">
                                                Lunas
                                            </span>
                                            @else
                                            <span class="badge badge-danger">
                                                Belum lunas
                                            </span>
                                            @endif
                                            @endif
                                        </td>
                                        <td>
                                            @if($santri->wisma && $santri->wisma->pembayaran != null)
                                            @if ($pembayaran->dibayar == $santri->wisma->pembayaran)
                                            <button type="button"
                                                class="btn btn-sm btn-primary waves-effect waves-light py-0">
                                                <i class="fe-search"></i>
                                                Detail
                                            </button>
                                            @else
                                            <button type="button"
                                                class="btn btn-sm btn-danger waves-effect waves-light py-0"
                                                data-toggle="modal" data-target="#bayar_{{ $pembayaran->id }}">
                                                <i class="fe-plus"></i>
                                                Bayar
                                            </button>

                                            {{-- Modal tombol bayar --}}
                                            <div id="bayar_{{ $pembayaran->id }}" class="modal fade" tabindex="-1"
                                                role="dialog" aria-labelledby="bayar_{{ $pembayaran->id }}Title"
                                                aria-hidden="true" style="display: none;">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h4 class="modal-title"
                                                                id="bayar_{{ $pembayaran->id }}Title">
                                                                Bayar</h4>
                                                            <button type="button" class="close" data-dismiss="modal"
                                                                aria-hidden="true">×</button>
                                                        </div>
                                                        <form action="{{ route('pembayaran.update', $pembayaran->id) }}"
                                                            method="POST">
                                                            @csrf
                                                            @method('PUT')
                                                            <input type="hidden" name="pembayaran_id"
                                                                value="{{ $pembayaran->id }}">
                                                            <div class="modal-body p-4">
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <div class="form-group">
                                                                            <label for="dibayar"
                                                                                class="control-label">Nominal</label>
                                                                            <input type="text" class="form-control"
                                                                                name="dibayar" id="dibayar"
                                                                                value="{{ $pembayaran->dibayar }}">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button"
                                                                    class="btn btn-secondary waves-effect"
                                                                    data-dismiss="modal">Kembali</button>
                                                                <button type="submit"
                                                                    class="btn btn-info waves-effect waves-light">Simpan</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                            {{-- akhir modal tombol bayar --}}
                                            @endif
                                            @endif

                                        </td>
                                        <td>
                                            @if($santri->wisma && $santri->wisma->pembayaran != null)
                                            <button type="button"
                                                class="btn btn-sm btn-primary waves-effect waves-light py-0" {{
                                                $pembayaran->dibayar == $santri->wisma->pembayaran ? '' : 'disabled' }}>
                                                <i class="fe-printer"></i>
                                                Cetak
                                            </button>
                                            @endif
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!-- end table-responsive-->
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>

    @else
    <h4 class="text-center"> - Tidak ada santri yang di pilih - </h4>
    @endif

    <!-- end col -->


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