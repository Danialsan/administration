<x-app-layout title="PPSB">


    <div class="row">
        <div class="col-12">

            {{-- Pendaftaran --}}
            <div class="card shadow">
                <div class="card-body">
                    <div class="card-widgets">
                        <button type="button" class="btn btn-primary waves-effect waves-light btn-sm"
                            data-toggle="modal" data-target="#con-close-modal">
                            <i class="fe-plus-circle"></i>
                            <span> Tambah Data Pendaftaran </span>
                        </button>
                        <div id="con-close-modal" class="modal fade" tabindex="-1" role="dialog"
                            aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title">Data Pendaftaran</h4>
                                        <button type="button" class="close" data-dismiss="modal"
                                            aria-hidden="true">×</button>
                                    </div>
                                    <div class="modal-body p-4">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="field-1" class="control-label">Nama</label>
                                                    <input type="text" class="form-control" id="field-1"
                                                        placeholder="John">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="field-2" class="control-label">NIK</label>
                                                    <input type="text" class="form-control" id="field-2"
                                                        placeholder="1920435">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="field-3" class="control-label">Wali Murid</label>
                                                    <input type="text" class="form-control" id="field-3"
                                                        placeholder="12/08/2024/S">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group no-margin">
                                                    <label for="field-7" class="control-label">alamat</label>
                                                    <textarea class="form-control" id="field-7"
                                                        placeholder="Write something about yourself"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary waves-effect"
                                            data-dismiss="modal">Kembali</button>
                                        <button type="button" class="btn btn-info waves-effect waves-light">Simpan
                                            Log</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <h4 class="header-title mb-0" style="font-size: 1.4rem">Laporan Pendaftaran</h4>


                    <div id="cardCollpase1" class="collapse pt-3 show">
                        <div class="row mb-3">
                            <div class="button-list">
                                <button class="btn btn-warning waves-effect waves-light py-0" type="button">
                                    <i class="fe-folder-plus"></i>
                                    Cetak Data Pendaftar PDF
                                </button>
                                <button class="btn btn-primary waves-effect waves-light py-0" type="button">
                                    <i class="fe-file-text"></i>
                                    Cetak Data Pendaftar Excel
                                </button>
                            </div>

                        </div>
                        <div class="table-responsive">
                            <table class="table table-striped mb-0 text-center">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Alamat</th>
                                        <th>NIK</th>
                                        <th>Tanggal Pendaftaran</th>
                                        <th>Tindakan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Kusnadi</td>
                                        <td>Taman, Sreseh, Sampang</td>
                                        <td>1234567890</td>
                                        <td>20 Januari 2024</td>
                                        <td>

                                            <button type="button"
                                                class="btn btn-sm btn-outline-info waves-effect waves-light">
                                                <i class="fe-eye"></i>
                                            </button>
                                            <button type="button"
                                                class="btn btn-sm btn-outline-warning waves-effect waves-light">
                                                <i class="fe-printer"></i>
                                            </button>
                                            <button type="button"
                                                class="btn btn-sm btn-outline-danger waves-effect waves-light">
                                                <i class="fe-trash"></i>
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
        {{-- Akhir pendaftaran --}}

    </div>

</x-app-layout>