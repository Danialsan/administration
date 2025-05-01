<x-app-layout title="Beranda">

    <x-slot:style>
        <!-- Plugin css -->
        <link href=" {{ asset('assets\libs\fullcalendar\fullcalendar.min.css') }}" rel="stylesheet" type="text/css" />
        <link href=" {{ asset('assets\css\app.min.css') }}" rel="stylesheet" type="text/css" />
    </x-slot:style>

    <div class="row">
        <div class="card-box border-0 col-12">
            <h2>Selamat datang di Dashboard!</h2>
            <p class="text-muted">
                Selamat Datang di aplikasi administrasi Raudhlatul Ulum Ar Rahmaniyah. sebuah aplikasi yang
                memungkinkan
                petugas untuk
                memonitoring santrinya secara langsung. aplikasi ini diharapkan dapat memberikan kemudahan untuk
                administrasi
                santri
            </p>
        </div>

    </div>

    <div class="row">
        <div class="card-box col-lg-9">
            <div id="calendar"></div>
        </div>
    </div>


    <x-slot:script>

        <!-- plugin js -->
        <script src=" {{ asset('assets\libs\moment\moment.min.js') }}"></script>
        <script src=" {{ asset('assets\libs\jquery-ui\jquery-ui.min.js') }}"></script>
        <script src=" {{ asset('assets\libs\fullcalendar\fullcalendar.min.js') }}"></script>

        <!-- Calendar init -->
        <script src=" {{ asset('assets\js\pages\calendar.init.js') }}"></script>

    </x-slot:script>


</x-app-layout>