<x-app-layout title="Daftar Wisma">
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

            {{-- Wisma --}}
            <div class="card shadow">
                <div class="card-body">
                    <div class="card-widgets">
                        <button type="button" class="btn btn-primary waves-effect waves-light btn-sm px-4"
                            data-toggle="modal" data-target="#tambahWisma">
                            <i class="fe-plus-circle"></i>
                            <span> Tambah Wisma </span>
                        </button>
                        <div id="tambahWisma" class="modal fade" tabindex="-1" role="dialog"
                            aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title">Tambah Wisma</h4>
                                        <button type="button" class="close" data-dismiss="modal"
                                            aria-hidden="true">×</button>
                                    </div>
                                    <form action="{{ route('wisma.store') }}" method="post">
                                        @csrf
                                        <div class="modal-body p-4">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="namaWisma" class="control-label">Nama Wisma</label>
                                                        <input type="text" name="nama_wisma" class="form-control"
                                                            id="namaWisma">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="singkatan" class="control-label">Singkatan</label>
                                                        <input type="text" name="singkatan" class="form-control"
                                                            id="singkatan">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="pembayaran" class="control-label">Pembayaran</label>
                                                        <input type="text" name="pembayaran" class="form-control"
                                                            id="pembayaran">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary waves-effect"
                                                data-dismiss="modal">Kembali</button>
                                            <button type="submit"
                                                class="btn btn-info waves-effect waves-light">Simpan</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <h4 class="header-title mb-0" style="font-size: 1.4rem"> Daftar Wisma </h4>


                    <div id="cardCollpase1" class="collapse pt-3 show">
                        @foreach ($list_wisma as $wisma )

                        <div class="mb-1 d-flex justify-content-between">
                            <p style="font-size: 1.1rem; font-weight: bold">
                                {{ ucwords($wisma->nama_wisma) }}
                                <small>{{ strtoupper($wisma->singkatan) }}</small> = {{ $wisma->pembayaran }}
                            </p>
                            <div class="button-list">

                                <button type="button" class="btn btn-warning waves-effect waves-light "
                                    data-toggle="modal" data-target="#editDataWisma_{{ $wisma->id }}">
                                    <i class="fe-edit"></i>
                                    <span> Edit </span>
                                </button>
                                <button type="button" class="btn btn-danger waves-effect waves-light "
                                    data-toggle="modal" data-target="#hapusDataWisma_{{ $wisma->id }}">
                                    <i class="fe-trash"></i>
                                    <span> Hapus </span>
                                </button>

                                {{-- Modal Edit Wisma --}}
                                <div id="editDataWisma_{{ $wisma->id }}" class="modal fade" tabindex="-1" role="dialog"
                                    aria-labelledby="editDataWisma_{{ $wisma->id }}Title" aria-hidden="true"
                                    style="display: none;">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title" id="editDataWisma_{{ $wisma->id }}Title">Edit
                                                    Data Wisma</h4>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-hidden="true">×</button>
                                            </div>
                                            <form action="{{ route('wisma.update', $wisma->id) }}" method="POST">
                                                @csrf
                                                @method('PUT')
                                                <input type="hidden" name="wisma_id" value="{{ $wisma->id }}">
                                                <div class="modal-body p-4">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label for="namaWisma" class="control-label">Nama
                                                                    Wisma</label>
                                                                <input type="text" class="form-control"
                                                                    name="nama_wisma" id="namaWisma"
                                                                    value="{{ $wisma->nama_wisma }}">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label for="singkatan"
                                                                    class="control-label">Singkatan</label>
                                                                <input type="text" class="form-control" name="singkatan"
                                                                    id="singkatan" value="{{ $wisma->singkatan }}">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label for="pembayaran"
                                                                    class="control-label">Pembayaran</label>
                                                                <input type="text" class="form-control"
                                                                    name="pembayaran" id="pembayaran"
                                                                    value="{{ $wisma->pembayaran }}">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary waves-effect"
                                                        data-dismiss="modal">Kembali</button>
                                                    <button type="submit"
                                                        class="btn btn-info waves-effect waves-light">Simpan</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                {{-- End edit wisma --}}

                                {{-- Modal Hapus Wisma --}}
                                <div id="hapusDataWisma_{{ $wisma->id }}" class="modal fade" tabindex="-1" role="dialog"
                                    aria-labelledby="hapusDataWisma_{{ $wisma->id }}Title" aria-hidden="true"
                                    style="display: none;">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title" id="hapusDataWisma_{{ $wisma->id }}Title">
                                                    Peringatan
                                                </h4>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-hidden="true">×</button>
                                            </div>
                                            <div class="modal-body p-4">
                                                <div class="row">
                                                    <p style="font-size: 1rem; font-weight: bold">Yakin Ingin
                                                        Menghapus Wisma {{ $wisma->nama_wisma }}?</p>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <form action="{{ route('wisma.destroy', $wisma->id) }}" method="post">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="button" class="btn btn-secondary waves-effect"
                                                        data-dismiss="modal">Kembali</button>
                                                    <button type="submit" onclick="proses(this)"
                                                        class="btn btn-info waves-effect waves-light">Hapus</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                {{-- Akhir Modal Hapus Wisma --}}

                            </div>
                        </div>

                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        {{-- Akhir pendaftaran --}}

    </div>

</x-app-layout>