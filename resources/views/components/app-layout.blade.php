<!DOCTYPE html>
<html lang="en">

<head>

    {{-- link nav --}}
    <x-header.links>
        <x-slot:title>
            {{ $title }}
        </x-slot:title>
    </x-header.links>

    {{ $style ?? '' }}

</head>

<body class="left-side-menu-light topbar-light">

    <div id="wrapper">

        {{-- Navbar --}}
        <x-header.navbar />

        {{-- Sidebar --}}
        <x-header.sidebar />


        {{-- Content --}}
        <div class="content-page">
            <div class="content">

                <div class="container-fluid">

                    <!-- start page title -->
                    <x-header.header>
                        {{ $title }}
                    </x-header.header>
                    <!-- end page title -->

                    {{-- Konten --}}
                    {{ $slot }}
                    {{-- akhir konten --}}

                </div>
            </div>



            <!-- Footer Start -->
            <x-footer.footer />
            <!-- end Footer -->

        </div>

    </div>


    {{-- link footer --}}
    <x-footer.link-footer />

    {{ $script ?? '' }}

</body>

</html>