@extends('Front.baseFront')

@section('content')
    <div class=" lg:pt-24 pt-16 lg:flex bg-slate-50">

        <div class="">
            <section class="">
                <p class="  lg:mr-36 mr-10 lg:pt-12 lg:pl-8 pl-4 font-Rasa text-2xl" style="font-weight: 600;">PRODUCT
                </p>

                <div class=" pt-2 pl-4 pb-8 lg:pb-0 p-8">


                    <a href="{{ route('front.tailor.made') }}">
                        <p class="lg:mx-10 py-1 mr-28 font-Poppins font-semibold m-1 hover:bg-537938 hover:text-white duration-300 rounded-lg px-2"
                            style="letter-spacing: 1px;">>
                            Tailor Made
                        </p>
                    </a>
                    <a href="{{ route('front.ready.package') }}">
                        <p class="lg:mx-10 py-1 mr-28 font-Poppins font-semibold m-1 hover:bg-537938 hover:text-white duration-300 rounded-lg px-2"
                            style="letter-spacing: 1px;">>
                            Ready Package
                        </p>
                    </a>
                    <a href="{{ route('front.open.trip') }}">
                        <p class="lg:mx-10 py-1 mr-28 font-Poppins font-semibold m-1 hover:bg-537938 hover:text-white duration-300 rounded-lg px-2"
                            style="letter-spacing: 1px;">>
                            Series
                        </p>
                    </a>

                </div>

            </section>
        </div>

        <div class="">

            <div class=" bg-white -mt-4">

                <div class=" relative">
                    <img class=" w-full" width="100%" height="100%" src={{ asset('img1/bgtailor.png') }} alt="Logo UMT">
                    <h1 class="absolute top-0 left-0  text-white text-4xl font-bold p-10 font-Rasa"
                        style="letter-spacing: 1px;">TAILOR MADE</h1>
                </div>


                <div class=" p-3 pl-6 text-center justify-center pt-10">
                    <p class=" font-Rasa font-bold text-black text-2xl pt-4">"Jelajahi Dunia Sesuai Keinginanmu!"</p>
                    <p class=" font-Poppins pt-4 p-3">Jika Anda mencari rencana perjalanan yang unik dan fleksibel, tur
                        yang dibuat khusus memberi Anda kebebasan untuk melakukan, pergi, melihat, dan mengalami apa pun
                        yang Anda inginkan tanpa perlu repot mengaturnya sendiri. United Muslim Tour memberi Anda
                        kesempatan untuk menciptakan perjalanan paling berkesan yang Anda butuhkan.</p>

                    <p class=" font-Rasa font-semibold text-black text-2xl py-6">Mengapa Anda akan menyukai Tour
                        Tailor-Made?</p>
                    <p class=" font-Poppins p-3">Merancang rencana perjalanan ideal Anda adalah perpaduan yang
                        harmonis antara ide dan keinginan Anda dan dengan keahlian kami, kami membuatnya sangat mudah.
                        Pakar perjalanan kami yang disesuaikan dengan kebutuhan Anda akan membantu Anda memaksimalkan
                        waktu dan anggaran Anda. Anda yang merancang rencana perjalanan, kami yang membuat rencana
                        perjalanannya. Terdengar bagus bukan?
                    </p>
                </div>

                <div
                    class=" grid lg:grid-cols-3 grid-cols-1 rounded-lg pt-8 px-2 pb-8 justify-center items-center gap-24 mx-12">



                    <div class=" relative  text-center justify-center items-center">
                        <div>
                            <img class="  rounded-lg h-full mx-auto object-cover hover:opacity-50 transition-opacity duration-300"
                                width="70%" height="50%" src={{ asset('img1/tailor1.png') }} alt="Logo UMT">

                        </div>

                        <div>
                            <h1 class=" font-Rasa font-semibold text-lg pt-2">Rencana perjalanan yang sepenuhnya
                                disesuaikan atau siap pakai</h1>

                            <p class=" pt-2">Mendesain perjalanan Anda sendiri sesuai keinginan Anda.</p>
                        </div>

                    </div>

                    <div class="  relative  text-center justify-center items-center -mt-10">
                        <div>
                            <img class=" mx-auto rounded-lg h-full object-cover hover:opacity-50 transition-opacity duration-300"
                                width="80%" height="50%" src={{ asset('img1/tailor2.png') }} alt="Logo UMT">

                        </div>

                        <div>
                            <h1 class=" font-Rasa font-semibold text-lg pt-2">Spesialis Destinasi</h1>

                            <p class=" pt-2">Akses pengetahuan tujuan Anda ahli dari pakar perjalanan kami, dengan
                                dukungan hingga akhir perjalanan Anda.</p>
                        </div>

                    </div>

                    <div class="  relative  text-center justify-center items-center -mt-10">
                        <div>
                            <img class=" mx-auto rounded-lg h-full object-cover hover:opacity-50 transition-opacity duration-300"
                                width="80%" height="50%" src={{ asset('img1/tailor3.png') }} alt="Logo UMT">

                        </div>

                        <div>
                            <h1 class=" font-Rasa font-semibold text-lg pt-2">Pemesanan & Keberangkatan Fleksibel</h1>

                            <p class=" pt-2">Anda dapat memilih kapan dan di mana Anda ingin memulai perjalanan.</p>
                        </div>

                    </div>

                    <div class="  relative  text-center justify-center items-center -mt-10">
                        <div>
                            <img class=" mx-auto rounded-lg h-full object-cover hover:opacity-50 transition-opacity duration-300"
                                width="80%" height="50%" src={{ asset('img1/tailor4.png') }} alt="Logo UMT">

                        </div>

                        <div>
                            <h1 class=" font-Rasa font-semibold text-lg pt-2">Pilihan Inklusi</h1>

                            <p class=" pt-2">Pilih Maskapai, Hotel, Restoran, Menu makanan, dan Tempat Wisata
                                sesukamu!
                            </p>
                        </div>

                    </div>

                    <div class=" relative  text-center justify-center items-center -mt-10">
                        <div>
                            <img class=" mx-auto rounded-lg h-full object-cover hover:opacity-50 transition-opacity duration-300"
                                width="80%" height="50%" src={{ asset('img1/tailor5.png') }} alt="Logo UMT">

                        </div>

                        <div>
                            <h1 class=" font-Rasa font-semibold text-lg pt-2">Perjalanan Sesuai Syariat</h1>

                            <p class=" pt-2">Tidak perlu takut kesulitan mencari makanan halal, Lingkungan yang aman,
                                dan tempat sholat yang baik.</p>
                        </div>

                    </div>


                </div>

                {{-- cara kerja --}}
                <div class=" p-4 pl-6 text-center justify-center pt-10">
                    <p class=" font-Rasa font-bold text-black text-2xl">Bagaimana Cara Kerjanya ?</p>
                    <p class=" font-Poppins pt-4 p-3">Keunggulan utama dari travel tailor-made adalah fleksibilitas dan
                        personalisasi yang tinggi, memungkinkan pelanggan untuk mengatur perjalanan mereka sesuai dengan
                        selera dan keinginan mereka.

                        Cara kerja travel tailor-made dimulai dengan konsultasi antara pelanggan dan agen perjalanan.
                        Selama pertemuan ini, pelanggan dapat menyampaikan preferensi mereka, seperti destinasi yang
                        diinginkan, aktivitas yang diinginkan, tingkat akomodasi, dan anggaran yang tersedia.
                        Berdasarkan informasi ini, agen perjalanan akan merancang rencana perjalanan yang disesuaikan
                        sepenuhnya dengan keinginan pelanggan.

                        Proses ini melibatkan pemilihan destinasi, pengaturan transportasi, akomodasi, dan aktivitas
                        wisata sesuai dengan preferensi pelanggan. Selama proses perencanaan, pelanggan memiliki kontrol
                        penuh untuk mengajukan perubahan atau penyesuaian sesuai keinginan mereka.</p>

                    <p class=" font-Rasa font-semibold text-black text-2xl py-6">Temukan jenis perjalanan Tailor-Mande
                        Anda</p>
                    <p class=" font-Poppins p-3">Tailor-Made adalah untuk siapa saja yang ingin membawa tingkat
                        kebiasaan apa pun ke petualangan mereka selama empat tahun atau lebih – tetapi cari tahu lebih
                        lanjut tentang jenis perjalanan populer kami di bawah ini.
                    </p>
                </div>
                {{-- end cara kerja --}}

                <div
                    class=" grid lg:grid-cols-3 grid-cols-1 rounded-lg pt-8 px-2 pb-14 justify-center items-center gap-24 mx-12">



                    <div class=" relative  text-center justify-center items-center -mt-10">
                        <div>
                            <img class=" mx-auto h-full object-cover hover:opacity-50 transition-opacity duration-300"
                                width="80%" height="50%" src={{ asset('img1/mande1.png') }} alt="Logo UMT">

                        </div>

                        <div>
                            <h1 class=" font-Rasa font-semibold text-lg pt-2">Teman & Keluarga</h1>

                            <p class=" pt-2">Baik Anda merayakan acara khusus bersama keluarga atau memulai
                                petualangan khusus untuk sekelompok teman, kami dapat membantu merencanakan perjalanan
                                Anda berikutnya.</p>
                        </div>

                    </div>

                    <div class="  relative  text-center justify-center items-center -mt-10">
                        <div>
                            <img class=" mx-auto h-full object-cover hover:opacity-50 transition-opacity duration-300"
                                width="80%" height="50%" src={{ asset('img1/mande2.png') }} alt="Logo UMT">

                        </div>

                        <div>
                            <h1 class=" font-Rasa font-semibold text-lg pt-2">Kelompok Pendidikan & Sekolah</h1>

                            <p class=" pt-2">Baik Anda merayakan acara khusus bersama keluarga atau memulai
                                petualangan khusus untuk sekelompok teman, kami dapat membantu merencanakan perjalanan
                                Anda berikutnya.</p>
                        </div>

                    </div>

                    <div class="  relative  text-center justify-center items-center -mt-10">
                        <div>
                            <img class=" mx-auto h-full object-cover hover:opacity-50 transition-opacity duration-300"
                                width="80%" height="50%" src={{ asset('img1/mande3.png') }} alt="Logo UMT">

                        </div>

                        <div>
                            <h1 class=" font-Rasa font-semibold text-lg pt-2">Bekerja</h1>

                            <p class=" pt-2">Baik Anda merayakan acara khusus bersama keluarga atau memulai
                                petualangan khusus untuk sekelompok teman, kami dapat membantu merencanakan perjalanan
                                Anda berikutnya.</p>
                        </div>

                    </div>


                </div>








            </div>



        </div>

    </div>
@endsection
