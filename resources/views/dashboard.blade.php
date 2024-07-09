@include('layouts.header');
  <!-- /.navbar -->
  <!-- Main Sidebar Container -->
 @include('layouts.sidebar');
<div class='content-wrapper'>
<x-app-layout>
    <x-slot name="header">
        <div id="app">
        <!-- Header -->
        <header class="bg-gray-600 text-white p-4">
            <h2 class="text-1xl">Service Mobile B-Quit</h2>
        </header>

        <!-- Main Content -->
        <main class="p-4">
            <section class="bg-white shadow-md rounded p-6">
                <h1 class="text-xl mb-4">Welcome to Service Mobile B-Quit</h1>
                <p>Bengkel B-QUIT menawarkan layanan perawatan dan perbaikan kendaraan dengan kualitas tinggi, mengutamakan kepuasan pelanggan melalui pelayanan yang cepat, ramah, dan profesional. Dilengkapi dengan teknologi terkini dan teknisi berpengalaman, B-QUIT memastikan bahwa setiap kendaraan yang ditangani mendapatkan perawatan terbaik.</p>
                     <div class="mb-4">
                    <img src="{{ asset('landing/img/bquit.jpg')}}" alt="Fasilitas Kesehatan" class="rounded-lg shadow-md w-full">
                </div>
                <!-- Example of a service card -->
                <div class="mt-6">
                    <h2 class="text-lg">Keahlian dari B-Quit</h2>
                    <div class="grid grid-cols-3 gap-4 mt-4">
                        <div class="bg-red-100 p-4 rounded shadow">
                            <h4 class="text-lg">Pelayanan Berkualitas</h4>
                            <p>Untuk menjamin kualitas servis, B-Quit berkomitmen untuk melakukan standardisasi terhadap setiap prosedur pengerjaan. Dengan begitu, proses servis menjadi lebih efektif dan efisien.</p>
                        </div>
                        <div class="bg-red-100 p-4 rounded shadow">
                            <h4 class="text-lg">Pekerjaan Ahli</h4>
                            <p>Mekanik dari B-Quit merupakan teknisi yang sudah handal berpengalaman, bahkan Anda bisa berkonsultasi mengenai kondisi kendaraan Anda dan memberikan saran untuk kendaraan Anda.</p>
                        </div>
                        <div class="bg-red-100 p-4 rounded shadow">
                            <h4 class="text-lg">Peralatan Modern</h4>
                            <p>Spare Part yang B-Quit sediakan bervariasi, tapi kualitas nya tetap terjamin dengan harga yang terjangkau sehingga anda dapat menyesuaikan spare part dengan kebutuhan kendaraan Anda.</p>
                        </div>
                    </div>
                </div>
            </section>
        </main>
    </div>
    </x-slot>
</x-app-layout>
</div>
{{-- footer --}}
@include('layouts.footer');
{{-- tutup footer --}}

           