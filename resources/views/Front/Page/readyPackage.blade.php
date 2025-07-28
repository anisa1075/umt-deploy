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
                    <img class=" w-full" width="100%" height="100%" src={{ asset('img1/ready.png') }} alt="Logo UMT">
                    <h1 class="absolute top-0 left-0 text-white text-4xl font-bold p-10 font-Rasa"
                        style="letter-spacing: 1px;">READY PACKAGE</h1>
                </div>


                <div class=" p-4 pl-8 text-center justify-center pt-10">
                    <p class=" font-Rasa font-bold text-black text-2xl">"Perjalanan Tambahan Kata Siapa Gak Bisa"</p>
                    <p class=" font-Poppins pt-4 p-3">Paket wisata siap pakai atau ready package adalah opsi perjalanan
                        yang telah dirancang sebelumnya oleh <span class=" font-bold">UNITED MUSLIM TOUR</span> yang
                        bisa dipesan atas nama Travel Lain.
                        Paket ini mencakup berbagai aspek perjalanan, seperti transportasi, akomodasi, makanan, dan
                        aktivitas wisata ditemani dengan Tour guide UMT yang berpengalaman pastinya . Pelanggan tidak
                        perlu repot-repot merencanakan setiap detail perjalanan secara terpisah.</p>

                    <p class=" font-Rasa font-bold text-black text-2xl lg:py-6 py-2">Daftar Ready Package</p>
                </div>

                <div class=" grid lg:grid-cols-4 grid-cols-1 rounded-lg lg:pt-2 px-2 pb-8">


                    @foreach ($ready as $row)
                        <div class=" p-2 relative  text-center justify-center">

                            <div class=" bg-eaffd4 rounded-lg pb-4"
                                style="box-shadow: 5px 5px 5px rgba(127, 125, 125, 0.75) w-fit h-fit">
                                <img class="p-4 inline-flex lg:w-64 w-96 h-64 object-cover"
                                    src="{{ asset('storage/' . $row->img) }}" draggable="false" alt="Logo UMT">

                                <div class="block px-4">

                                    <p class=" -mt-6 z-10 px-2 rounded-lg text-black font-Poppins text-sm py-2 text-center"
                                        style="letter-spacing: 1px; font-weight: 800;">{{ $row->negara }}</p>

                                    <a href="{{ route('front.detail.itinerary.ready.package', $row->id) }}">
                                        <p class=" z-10 px-2  bg-395723 rounded-lg text-white font-Poppins text-sm py-2 hover:bg-537938 text-center"
                                            title="Detail Product" style="letter-spacing: 1px; font-weight: 800;">Lihat
                                            Detail</p>
                                    </a>

                                </div>

                            </div>


                        </div>
                    @endforeach



                </div>


            </div>

        </div>
    </div>
@endsection
