@extends('Front.baseFront')

@section('content')
    <div class=" pt-24 lg:flex bg-e9ede7">

        <div class="">
            <section class=" ">
                <p class="  lg:mr-36 mr-10 lg:pt-12 -top-10 pl-5 font-Rasa text-2xl" style="font-weight: 600;">Destinasi
                </p>

                {{-- Start Search --}}

                <form class="flex items-center max-w-sm mx-auto lg:px-4 px-3">
                    <label for="simple-search" class="sr-only">Search</label>
                    <div class="relative w-full">
                        <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                            <i class="fa-solid fa-location-dot"></i>
                        </div>
                        <input type="text" name="search" id="input"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="Search destinasi lain ..." required />
                    </div>
                </form>

                {{-- End Search --}}

                <div class=" pt-2 pl-2 pb-3 lg:pb-0">



                    {{-- @foreach ($negara as $row) --}}
                    {{-- <a href="{{ route('front.desc.destinasi', $row->id) }}">
                        <p class=" lg:pl-11 pl-4 font-Poppins font-semibold m-1 hover:bg-537938 hover:text-white duration-300 rounded-lg p-1"
                            style="letter-spacing: 1px;">>
                            {{ $row->negara }}
                        </p>
                    </a> --}}

                    <div id="read">
                    </div>



                    {{-- @endforeach --}}

                </div>

            </section>
        </div>

        <div class=" bg-white  -mt-4">

            <div class=" pb-6 pt-2">

                <div class="">
                    <img class=" w-full pxs-8 py-6" width="100%" height="100%" src="{{ asset('storage/' . $desc->foto) }}"
                        alt="Logo UMT">
                </div>


                <div class=" text-end justify-end mr-8">
                    <a href="https://en.wikivoyage.org/wiki/Indonesia"><u class=" font-Poppins font-semibold hover:text-65894b">Artikel Lengkap
                            ></u></a>
                </div>

                <div class=" p-8 pl-10 pt-10">

                    <p class=" font-Rasa font-bold text-black text-3xl text-center">"{{ $desc->negara }}"</p>
                    <p class=" font-Poppins pt-4 px-5">{!! $desc->desc !!}</p>


                </div>

            </div>

        </div>
    </div>
@endsection
