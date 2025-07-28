@extends('Front.baseFront')

@section('content')
    <div class=" justify-center text-center bg-white">
        <h1 class=" font-Poppins text-3xl lg:pt-36 pt-20" style="font-weight: 900;"><strong>DETAIL</strong></h1>
        <p class=" font-Poppins font-bold p-6 lg:p-0">Berikut file itinerary terlengkap yang bisa di download:</p>




        <a href="{{ route('download', $itinerary->link) }}">
            <p class=" font-Poppins font-semibold text-white bg-395723 lg:mx-96 lg:m-4 mx-10 p-2 rounded-xl hover:bg-537938 "
                title="Download File Itinerary Pdf">
                Download File Itenary</p>
        </a>

        <p class=" font-Poppins font-bold pt-4">{{ $itinerary->negara }}</p>
        <p class=" font-Poppins font-bold">Keberangkatan : {{ $itinerary->tgl_berangkat }} </p>


    </div>

    <div>
        <div class=" font-Poppins p-10">
            <h1 class=" font-bold">ITINERARY</h1>
            <p class=" font-normal mt-2">{!! $itinerary->itinerary !!}</p>
        </div>



        {{-- <section class=" px-6">
            <div class=" grid lg:grid-cols-2 grid-cols-1 lg:p-3 my-1 justify-between" style="">
                <a href="{{ route('front.open.trip') }}" class=" items-center">
                    <p class=" font-Poppins text-white bg-537938 hover:bg-395723 rounded-xl px-4 py-3 lg:m-4 lg:text-center"><i
                            class="fa-solid fa-arrow-left"></i> Kembali</p>
                </a>

                <div class=" font-Poppins text-white bg-395723 hover:bg-537938 rounded-xl lg:px-10 pl-6 py-2 flex gap-4 m-2 lg:m-10 text-center">
                    <div class=" flex">
                        <a href="">
                            <i class="fa-brands fa-whatsapp fa-2x lg:ml-40"></i>
                        </a>
                        <a href="">
                            <p class=" pl-1 pt-1">Booking</p>
                        </a>
                    </div>
                </div>



            </div>

        </section> --}}
    </div>
@endsection
