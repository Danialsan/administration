<x-app-layout title="Pengaturan Keuangan">

    <x-slot:style>
        <style>
            .table td,
            .table th {
                vertical-align: middle !important;
            }

            .rupiah-input {
                font-weight: bold;
            }
        </style>
    </x-slot:style>

    <div class="row">
        <div class="col-12">

            {{-- Print-out --}}
            <div class="card shadow">

                <div class="card-body">
                    <div class="card-widgets">
                        <a data-toggle="collapse" href="#cardCollpase1" role="button" aria-expanded="false"
                            aria-controls="cardCollpase1"><i class="mdi mdi-minus"></i></a>
                    </div>
                    <h5 class="card-title mb-2" style="font-size: 1.3rem">Pengaturan Keuangan</h5>

                    <div id="cardCollpase1" class="collapse pt-3 show">
                        <div class="table-responsive">
                            <table class="table mb-0">

                                <tbody>
                                    <tr>
                                        <th class="col-3">SMP / MTS</th>
                                        <td class="col-none">:</td>
                                        <td class="col-9">
                                            <input type="text" class="form-control col-12 col-lg-6 rupiah-input"
                                                id="field-2" placeholder="Rp.000,00">
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">MA / SMK</th>
                                        <td>:</td>
                                        <td><input type="text" class="form-control col-12 col-lg-6 rupiah-input"
                                                id="field-2" placeholder="Rp.000,00"></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Wisma</th>
                                        <td>:</td>
                                        <td><input type="text" class="form-control col-12 col-lg-6 rupiah-input"
                                                id="field-2" placeholder="Rp.000,00"></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <button type="button" class="btn btn-info waves-effect waves-light ml-1 mt-2">Simpan</button>
                    </div>
                </div>

            </div>
        </div>
        {{-- Akhir print-out --}}

    </div>

    <x-slot:script>
        <script>
            // Fungsi untuk menambahkan "Rp" dan titik pada setiap ribuan
            function formatRupiah(input) {
                let value = input.value;
        
                // Hapus semua karakter kecuali angka dan koma
                value = value.replace(/[^,\d]/g, '');
        
                // Pisahkan antara angka dan desimal (jika ada)
                let parts = value.split(',');
                let integerPart = parts[0];
                let decimalPart = parts[1] !== undefined ? ',' + parts[1] : '';
        
                // Tambahkan titik setiap tiga angka
                let sisa = integerPart.length % 3;
                let rupiah = integerPart.substr(0, sisa);
                let ribuan = integerPart.substr(sisa).match(/\d{3}/g);
        
                // Gabungkan angka yang sudah ditambahkan titik
                if (ribuan) {
                    let separator = sisa ? '.' : '';
                    rupiah += separator + ribuan.join('.');
                }
        
                // Gabungkan dengan bagian desimal jika ada
                input.value = 'Rp. ' + rupiah + decimalPart;
            }
        
            // Ambil semua input dengan class 'rupiah-input'
            const rupiahInputs = document.querySelectorAll('.rupiah-input');
        
            // Tambahkan event listener untuk setiap input
            rupiahInputs.forEach(input => {
                input.addEventListener('input', function () {
                    formatRupiah(this);
                });
            });
        </script>
    </x-slot:script>

</x-app-layout>