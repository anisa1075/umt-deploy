@extends('Front.baseFront')

@section('content')
    <div class=" lg:pt-24 pt-16 lg:flex bg-slate-50">

        <div class="">
            <section class="">
                <p class="  lg:mr-36 mr-10 lg:pt-12 lg:pl-8 pl-4 font-Rasa text-2xl" style="font-weight: 600;">PRODUCT
                </p>

                <div class=" pt-2 pl-4 pb-8 lg:pb-0 p-8 ">


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
                    <img class=" w-full" width="100%" height="100%" src={{ asset('img1/ready.png') }} alt="Logo UMT">
                    <h1 class="absolute top-0 left-0 text-white text-4xl font-bold p-10 font-Rasa"
                        style="letter-spacing: 1px;">SERIES</h1>
                </div>


                <div class=" p-4 pl-6 text-center justify-center pt-10">
                    <p class=" font-Rasa font-bold text-black text-2xl">"Liburan Aman dan Islami No Ribet Ribet"</p>
                    <p class=" font-Poppins pt-4 p-3">Dalam OpenTrip, perjalanan/tur ini diatur dan dipersiapkan oleh
                        <span class=" font-bold">United Muslim Tours</span>, dan orang-orang yang berminat dapat
                        bergabung tanpa perlu membentuk
                        kelompok sendiri. Platform ini menyediakan berbagai paket perjalanan yang telah dirancang,
                        termasuk destinasi, transportasi, akomodasi, dan kegiatan wisata, sehingga peserta tidak perlu
                        repot-repot merencanakan setiap detail perjalanan.
                        <span class=" font-bold">United Muslim Tours</span> akan menyajikan pengalaman yang luar biasa
                        dan tak terlupakan bersama kawan
                        kawan baru yang asyik pastinya.
                    </p>

                    <p class=" font-Rasa font-bold text-black text-2xl py-6">Daftar Series UMT</p>


                </div>

                <div class=" lg:mx-11 mx-8 ">
                    <p class=" font-Poppins font-bold bg-395723 rounded-b-lg text-white lg:mr-41 ml-3 mb-2 px-2 py-2 text-center"
                        style="box-shadow: 5px 5px 5px rgba(127, 125, 125, 0.75)">
                        Akan Datang</p>
                    <div class=" grid lg:grid-cols-3 grid-cols-1 rounded-lg pt-2 pb-8 gap-8">


                        @foreach ($come as $row)
                            <div class=" p-2 relative  text-center justify-center">

                                <div class=" bg-eaffd4 rounded-lg pb-4"
                                    style="box-shadow: 5px 5px 5px rgba(127, 125, 125, 0.75)">
                                    <img class=" p-4 object-cover lg:w-96 lg:h-96 w-full h-full"
                                        src={{ asset('storage/' . $row->img) }} draggable="false" alt="Logo UMT">

                                    <div class=" px-9">
                                        <a href="{{ route('front.detail.itinerary.ready.package', $row->id) }}">
                                            <p class=" -mt-2 bg-395723 rounded-lg text-white font-Poppins lg:text-sm text-base lg:py-1 py-2 hover:bg-537938"
                                                style="letter-spacing: 1px; font-weight: 800;">LIHAT DETAIL</p>
                                        </a>

                                    </div>

                                </div>


                            </div>
                        @endforeach

                    </div>

                </div>

                {{-- start selesai --}}
                <div class=" lg:mx-12 mx-8 ">
                    <p class=" font-Poppins font-bold bg-395723 rounded-b-lg text-white lg:mr-41 ml-3 mb-2 px-2 py-2 text-center"
                        style="box-shadow: 5px 5px 5px rgba(127, 125, 125, 0.75)">
                        Selesai</p>
                    <div class=" grid lg:grid-cols-3 grid-cols-1 rounded-lg pt-2 pb-8 gap-8">


                        @foreach ($selesai as $row)
                            <div class=" p-2 relative  text-center justify-center">

                                <div class="rounded-lg pb-4 bg-bbbcba"
                                    style="box-shadow: 5px 5px 5px rgba(127, 125, 125, 0.75)">
                                    <img class=" p-4 relative   w-full h-full object-cover" width="100%" height="50%"
                                        src={{ asset('storage/' . $row->img) }} draggable="false" alt="Logo UMT">

                                    <img class="absolute top-20 justify-center items-center left-0 z-10 w-full"
                                        src="{{ asset('img1/finished.png') }}" alt="">

                                </div>


                            </div>
                        @endforeach

                        {{-- <div class=" p-2 relative  text-center justify-center">

                        <div class="rounded-lg pb-4 bg-bbbcba"
                            style="box-shadow: 5px 5px 5px rgba(127, 125, 125, 0.75)">
                            <img class=" p-4 relative   w-full h-full object-cover" width="100%" height="50%"
                                src="{{ asset('img1/trip1.png') }}" alt="Logo UMT">

                            <img class="absolute top-20 justify-center items-center left-0 z-10"
                                src="{{ asset('img1/finished.png') }}" alt="">

                            <div class=" px-9">
                                <a href="">
                                    <p class=" -mt-2 bg-395723 rounded-lg text-white font-Poppins text-sm py-1 hover:bg-537938"
                                        style="letter-spacing: 1px; font-weight: 800;">LIHAT DETAIL</p>
                                </a>
                            </div>

                        </div>


                    </div>

                    <div class=" p-2 relative  text-center justify-center">

                        <div class="rounded-lg pb-4 bg-bbbcba"
                            style="box-shadow: 5px 5px 5px rgba(127, 125, 125, 0.75)">
                            <img class=" p-4 relative   w-full h-full object-cover" width="100%" height="50%"
                                src="{{ asset('img1/trip1.png') }}" alt="Logo UMT">

                            <img class="absolute top-20 justify-center items-center left-0 z-10"
                                src="{{ asset('img1/finished.png') }}" alt="">

                            <div class=" px-9">
                                <a href="">
                                    <p class=" -mt-2 bg-395723 rounded-lg text-white font-Poppins text-sm py-1 hover:bg-537938"
                                        style="letter-spacing: 1px; font-weight: 800;">LIHAT DETAIL</p>
                                </a>
                            </div>

                        </div>


                    </div> --}}


                    </div>

                </div>
                {{-- end selesai --}}



            </div>





        </div>
    </div>
@endsection
