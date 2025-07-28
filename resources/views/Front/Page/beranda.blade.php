@extends('Front.baseFront')

@section('content')
    {{-- HERO SECTION --}}
    @guest
        <section class="hero-section">
            <div class="container d-flex align-items-center justify-content-center fs-1 text-white flex-column">
                <h1>UNITED MUSLIM TOUR HERE !</h1>
                <p class="">Your trusted partner for your muslim clients</p>
                <p class="subtitle">Bergabung Sekarang !</p>

                <div class="button">
                    <a href="{{ route('login') }}" class="signup">Sign In</a>
                    <a href="{{ route('register') }}" class="signup">Sign Up</a>
                </div>

            </div>
        </section>
    @else
        <section class="hero-section">
            <div class="container d-flex align-items-center text-white flex-column">
                <h1 class=" lg:mt-20">UNITED MUSLIM TOUR HERE !</h1>
                <p class=" font-poppins lg:p-16" style="font-size: 18px; font-weight: 400;"><span><b>United Muslim Tours</b></span> hadir sebagai solusi bagi Anda pecinta traveling dan dirancang khusus
                    untuk memenuhi kebutuhan perjalanan para wisatawan muslim. Menyediakan paket perjalanan yang memperhatikan
                    aspek-aspek keagamaan, seperti waktu shalat, makanan halal, serta di dampingi oleh tour guide profesional
                    selama 12 jam nonstop.</p>
            </div>
        </section>
    @endguest

    {{-- END HERO SECTION --}}

    {{-- SECTION DESTINASI --}}
    <div class="">
        <section id="destinasi" class="  md:-mt-20 lg:mt-0">
            <div class="a flex relative">

                <img class="a lg:-mt-40 -mt-28 w-32 lg:w-40" src="{{ asset('img1/hiasan.png') }}" width="13%"
                    alt="">
                <p data-aos="fade-right" data-aos-duration="3000"
                    class="font-Rasa lg:text-42 text-2xl absolute inset-0 text-395723 lg:mt-12 mt-14 lg:ml-28 ml-16 font-bold"
                    style="letter-spacing: 5px;">BEST
                    DESTINATION</p>

            </div>
            <div class="a flex justify-end relative">

                <img class="a align lg:-mt-60 -mt-44 lg:w-64 w-60 " src="{{ asset('img1/hiasan2.png') }}" alt="">
                <img class="a absolute indent-0 lg:-mt-28 -mt-14 lg:mr-5 mr-4 lg:w-10 w-10"
                    src="{{ asset('img1/hiasan3.png') }}" alt="">

            </div>

            {{-- destinasi --}}


            <section class="a relative p-10 lg:p-0 lg:-mt-0 -mt-11">
                <div class="wrapper lg:mx-auto lg:-mt-20 -mt-40 z-10" style="margin-top: -6rem">
                    <i id="left" class="fa-solid fa-angle-left z-20 bg-eaffd4 text-65894b"
                        style="box-shadow: 5px 5px 5px rgba(127, 125, 125, 0.75)"></i>

                    <div>

                    </div>
                    <ul data-aos="fade-up" data-aos-duration="3000" class="carousel lg:p-8 sm:py-4 pt-10">

                        @foreach ($destinasi as $row)
                        <a href="{{ route('front.detail.destinasi', $row->id) }}">
                            <li class="card relative">
                                <div class="a rounded-lg object-cover transform transition duration-500 hover:scale-110"
                                    style="box-shadow: 5px 5px 5px rgba(127, 125, 125, 0.75)">
                                    <img src="{{ asset('storage/' . $row->img) }}" alt="img" draggable="false"
                                        style="height: 355px; width: 320px;" class=" rounded-lg mr-8">
                                </div>

                                <h1 class="a absolute inset-0 pb-6 font-dmserif text-2xl font-bold text-white ml-16 lg:ml-3 mt-72"
                                    style="font-size: 1.4rem; margin-top: 16.5rem;">
                                    {{ $row->negara }}
                                </h1>

                            </li>
                        </a>
                        @endforeach
                       
                    </ul>
                    <i id="right" class="fa-solid fa-angle-right bg-eaffd4 text-65894b mr-3"
                        style="box-shadow: 5px 5px 5px rgba(127, 125, 125, 0.75)"></i>
                </div>
            </section>



            <div class="a flex relative">

                <img class="a lg:-mt-44 -mt-44 w-44 lg:w-64" src="{{ asset('img1/hiasan4.png') }}" width="13%"
                    alt="">
                <img class="a absolute indent-0 lg:-mt-2  -mt-11 ml-4 lg:w-14 w-10" src="{{ asset('img1/hiasan6.png') }}"
                    alt="">


            </div>


            <div class="a flex justify-end relative z-20 lg:-mt-44 -mt-20">

                <img class=" -mt-44 lg:w-56 w-44" src="{{ asset('img1/hiasan5.png') }}" alt="">


            </div>


        </section>
    </div>
    {{-- END SECTION DESTINASI --}}


    {{-- PROFILE --}}
    <section class=" bg-eaffd4 mt-6 lg:flex lg:pb-0 pb-32" id="profile">
        <div class=" pt-24 ml-12  ">
            <div data-aos="fade-right" data-aos-duration="2000"
                class=" font-Rasa lg:ml-28 mr-14 pb-6 text-2xl text-395723 text-center justify-center items-center"
                style="font-weight: 700">
                Assalamu’alaikum
            </div>
            <div data-aos="fade-right" data-aos-duration="2000"
                class=" font-Poppins text-sm absolute z-20 mr-45 pl-2 lg:pl-0 pt-10" style="letter-spacing: 1px;">
                United Muslim Tour Bertujuan untuk memberikan solusi perjalanan yang ramah Muslim, memastikan bahwa
                semua aspek perjalanan, mulai dari akomodasi hingga makanan, memenuhi kebutuhan dan prinsip-prinsip
                agama Islam. <br><br>

                United Muslim Tour hadir dengan harga yang aman di kantong teman-teman. United Muslim Tour juga memiliki
                komitmen untuk menjalankan bisnis sesuai dengan prinsip-prinsip Islam, termasuk integritas, kejujuran,
                dan keadilan dalam semua transaksi. <br><br>

                United Muslim Tour sudah berdiri sejak bla bla bla dan mempunyai Tour Guide dan Leader Tour yang
                Profesional dan berpengalaman.
                United Muslim Tour selalu menjadi pilihan tepat untuk menjadi teman Muslim Traveling. <br><br>
                <span class=" font-Poppins text-395723 text-lg font-bold"
                    style="font-weight: 900;">#YukTravelingHalalBarengUMT</span>


            </div>



        </div>

        <div class=" justify-end ml-auto grid-cols-2 relative z-10">

            <img src="{{ asset('img1/bg1.png') }}" alt=""
                class=" justify-end ml-auto z-10 mt-34 lg:mt-0 w-80 lg:w-11/12" width="85%">

            {{-- <img src="{{ asset('img1/foto2.png') }}" alt="" class=" justify-end ml-auto absolute inset-0" width="50%"> --}}
        </div>



        <div data-aos="fade-up-left" data-aos-duration="2000"
            class=" absolute z-20 bg-white m-28 px-4 ml-8 -mt-27 lg:mt-20 lg:m-56 lg:py-2 lg:px-6 lg:ml-43"
            style="border-radius: 10px; box-shadow: 5px 5px 5px rgba(127, 125, 125, 0.75)">

            <img src="{{ asset('img1/doc.png') }}" alt="" class=" absolute lg:-mt-6 hidden lg:block "
                style="border-radius: 10px;" width="50%"><br>
            <h1 class=" absolute lg:-mt-10 -mt-4 text-395723 ml-6  font-Rasa text-2xl" style="font-weight: 700;">
                Dokumentasi
            </h1>
            <img src="{{ asset('img1/foto6.jpg') }}" alt="" class=" mt-6 w-full" style="border-radius: 10px;"
                width="100%"><br>
            <img src="{{ asset('img1/foto5.jpg') }}" alt="" class=" w-full" style="border-radius: 10px;"
                width="100%"><br>
            <div class=" flex">
                <a href="#topOfPage" class="flex" onclick="scrollToTop()">
                    <p class=" font-Poppins text-395723 font-bold -mt-3 mb-2 hover:text-537938" style="font-weight: 900;"
                        title="Lihat Galeri UMT">Lihat Detail</p>
                    <svg class="hover:text-537938" style="margin-top: -11.5px;" xmlns="http://www.w3.org/2000/svg"
                        width="23" height="23" viewBox="0 0 23 23" fill="none">
                        <path
                            d="M7.29599 2.37249C7.04039 2.63248 6.89851 2.98336 6.90156 3.34794C6.9046 3.71253 7.05233 4.06098 7.31225 4.31667L14.1752 11.0658L7.42608 17.9287C7.17779 18.1901 7.0421 18.5386 7.04825 18.8991C7.0544 19.2595 7.20189 19.6032 7.45894 19.856C7.716 20.1088 8.06207 20.2505 8.4226 20.2506C8.78314 20.2507 9.12929 20.1092 9.38652 19.8566L17.0996 12.0135C17.3552 11.7535 17.4971 11.4026 17.494 11.038C17.491 10.6734 17.3432 10.325 17.0833 10.0693L9.24018 2.35623C8.98018 2.10062 8.62931 1.95874 8.26472 1.96179C7.90013 1.96484 7.55168 2.11257 7.29599 2.37249Z"
                            fill="#395723" />
                    </svg>
                </a>


            </div>

        </div>

        {{-- <p class=" bg-gradient-info">hello</p> --}}




    </section>
    {{-- END PROFILE --}}

    {{-- MENGAPA UMT --}}
    <section class=" pt-16 pb-16 mx-auto justify-center items-center">
        <h1 data-aos="fade-down" data-aos-duration="2000" class=" font-Rasa items-center text-center text-3xl"
            style="font-weight: 900;">Mengapa Memilih Layanan
            Travel United Muslim Tour?
        </h1>

        <div data-aos="fade-up" data-aos-duration="2000"
            class=" grid text-center lg:p-16 p-7 gap-6 lg:grid-cols-3 md:grid-cols-2 justify-items-center justify-center items-center">

            <div class=" py-8 h-full text-center items-center rounded-2xl border border-6f6e6e ">
                <svg class=" mx-auto justify-center items-center w-16" xmlns="http://www.w3.org/2000/svg" width="77"
                    height="61" viewBox="0 0 77 61" fill="none">
                    <g clip-path="url(#clip0_575_108)">
                        <path
                            d="M47.6853 0C48.2768 0 48.8446 0.28392 49.1995 0.75712C53.3045 6.23441 58.4387 9.61779 64.9925 13.9476C65.6077 14.3498 66.2347 14.7757 66.8853 15.2016C70.3042 17.4729 72.2917 21.3177 72.2917 25.3872C72.2917 28.7706 70.9549 31.8345 68.7663 34.0704H26.6042C24.4275 31.8227 23.0788 28.7587 23.0788 25.3872C23.0788 21.3177 25.0545 17.4729 28.4852 15.2016C29.124 14.7757 29.7628 14.3616 30.378 13.9476C36.9318 9.61779 42.066 6.23441 46.171 0.75712C46.5259 0.28392 47.0938 0 47.6853 0ZM34.4356 60.5696V52.052C34.4356 50.4786 33.1698 49.2128 31.5964 49.2128C30.0231 49.2128 28.7572 50.4786 28.7572 52.052V60.5696H23.0788C20.9849 60.5696 19.2932 58.8779 19.2932 56.784V41.6416C19.2932 39.5477 20.9849 37.856 23.0788 37.856H72.2917C74.3856 37.856 76.0773 39.5477 76.0773 41.6416V56.784C76.0773 58.8779 74.3856 60.5696 72.2917 60.5696H66.6133V52.052C66.6133 50.4786 65.3475 49.2128 63.7741 49.2128C62.2007 49.2128 60.9349 50.4786 60.9349 52.052V60.5696H53.3637V53.7082C53.3637 51.4605 52.3699 49.3311 50.6428 47.8879L47.6853 45.4272L44.7277 47.8879C43.0006 49.3311 42.0069 51.4605 42.0069 53.7082V60.5696H34.4356ZM8.69356 0.61516C9.02041 0.367597 9.41921 0.233616 9.82924 0.233616C10.2393 0.233616 10.6381 0.367597 10.9649 0.61516L12.8577 2.03476C16.9036 5.07507 19.2932 9.84256 19.2932 14.9058V15.1424H0.365234V14.9058C0.365234 9.84256 2.7549 5.07507 6.80076 2.03476L8.69356 0.61516ZM0.365234 18.928H19.2932V35.0878C17.0337 36.4009 15.5076 38.8379 15.5076 41.6416V56.784C15.5076 57.9197 15.7561 58.9844 16.1938 59.9545C15.413 60.3567 14.5376 60.5696 13.6148 60.5696H6.04364C2.90869 60.5696 0.365234 58.0262 0.365234 54.8912V20.8208V18.928Z"
                            fill="#395723" />
                    </g>
                    <defs>
                        <clipPath id="clip0_575_108">
                            <rect width="75.712" height="60.5696" fill="white" transform="translate(0.365234)" />
                        </clipPath>
                    </defs>
                </svg>

                <h2 class=" mt-6 font-Rasa text-3xl font-semibold">Prayer Time Alocation Daily</h2>
                <p class=" pb-2 mx-4 text-base font-Poppins leading-relaxed">Kami memberikan alokasi waktu yang cukup
                    bagi wisatawan Muslim untuk menjalankan ibadah shalat harian sesuai dengan jadwal yang telah
                    ditentukan, sehingga Anda dapat memenuhi kewajiban agama dengan tenang.</p>
            </div>

            <div class="py-8 h-full text-center items-center rounded-2xl border border-6f6e6e ">
                <svg class=" mx-auto justify-center items-center w-16" xmlns="http://www.w3.org/2000/svg" width="76"
                    height="75" viewBox="0 0 76 75" fill="none">
                    <g clip-path="url(#clip0_575_114)">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M75.0373 24.1219C75.2556 24.3396 75.4288 24.5983 75.5469 24.883C75.6651 25.1677 75.7259 25.473 75.7259 25.7813C75.7259 26.0896 75.6651 26.3948 75.5469 26.6796C75.4288 26.9643 75.2556 27.2229 75.0373 27.4407L60.9748 41.5032C60.7571 41.7214 60.4985 41.8946 60.2137 42.0128C59.929 42.1309 59.6237 42.1917 59.3155 42.1917C59.0072 42.1917 58.7019 42.1309 58.4172 42.0128C58.1324 41.8946 57.8738 41.7214 57.6561 41.5032L50.6248 34.4719C50.1847 34.0318 49.9375 33.4349 49.9375 32.8125C49.9375 32.1902 50.1847 31.5933 50.6248 31.1532C51.0649 30.7131 51.6618 30.4658 52.2842 30.4658C52.9066 30.4658 53.5035 30.7131 53.9436 31.1532L59.3155 36.5297L71.7186 24.1219C71.9363 23.9036 72.1949 23.7305 72.4797 23.6123C72.7644 23.4942 73.0697 23.4333 73.378 23.4333C73.6862 23.4333 73.9915 23.4942 74.2762 23.6123C74.561 23.7305 74.8196 23.9036 75.0373 24.1219Z"
                            fill="#395723" />
                        <path
                            d="M5.40918 65.625C5.40918 65.625 0.72168 65.625 0.72168 60.9375C0.72168 56.25 5.40918 42.1875 28.8467 42.1875C52.2842 42.1875 56.9717 56.25 56.9717 60.9375C56.9717 65.625 52.2842 65.625 52.2842 65.625H5.40918ZM28.8467 37.5C32.5763 37.5 36.1531 36.0184 38.7904 33.3812C41.4276 30.744 42.9092 27.1671 42.9092 23.4375C42.9092 19.7079 41.4276 16.131 38.7904 13.4938C36.1531 10.8566 32.5763 9.375 28.8467 9.375C25.1171 9.375 21.5402 10.8566 18.903 13.4938C16.2658 16.131 14.7842 19.7079 14.7842 23.4375C14.7842 27.1671 16.2658 30.744 18.903 33.3812C21.5402 36.0184 25.1171 37.5 28.8467 37.5Z"
                            fill="#395723" />
                    </g>
                    <defs>
                        <clipPath id="clip0_575_114">
                            <rect width="75" height="75" fill="white" transform="translate(0.72168)" />
                        </clipPath>
                    </defs>
                </svg>

                <h2 class=" mt-3 font-Rasa text-3xl font-semibold">Local Moslem Guide</h2>
                <p class=" pb-2 mx-4 text-base font-Poppins leading-relaxed">Pemandu lokal yang beragama Islam untuk
                    membantu wisatawan Muslim dalam menjelajahi destinasi wisata dengan penuh keyakinan dan pemahaman
                    mendalam tentang budaya dan tradisi lokal.</p>
            </div>

            <div class="py-8 h-full text-center items-center rounded-2xl border border-6f6e6e ">
                <svg class=" mx-auto justify-center items-center w-16" xmlns="http://www.w3.org/2000/svg" width="76"
                    height="75" viewBox="0 0 76 75" fill="none">
                    <path
                        d="M60.0967 28.125C60.0981 24.3591 59.1272 20.6566 57.278 17.3759C55.4289 14.0952 52.7641 11.3475 49.5416 9.39865C46.3191 7.44985 42.6481 6.36598 38.8839 6.25197C35.1197 6.13796 31.3898 6.99767 28.0553 8.74789C24.7208 10.4981 21.8946 13.0795 19.8503 16.2423C17.806 19.405 16.6128 23.042 16.3863 26.8011C16.1598 30.5602 16.9076 34.3142 18.5573 37.6995C20.207 41.0849 22.7027 43.987 25.8029 46.125L16.3467 62.5L23.3967 62.7906L27.1717 68.75L38.0029 49.9875C38.0779 49.9875 38.1467 50 38.2217 50C38.2967 50 38.3654 49.9906 38.4404 49.9875L49.2717 68.75L53.1217 62.9188L60.0967 62.5L50.6404 46.125C53.558 44.1163 55.9432 41.4281 57.5906 38.2923C59.238 35.1566 60.098 31.6672 60.0967 28.125ZM22.5967 28.125C22.5967 25.0347 23.5131 22.0137 25.23 19.4442C26.9469 16.8747 29.3872 14.872 32.2423 13.6894C35.0974 12.5068 38.239 12.1973 41.27 12.8002C44.3009 13.4031 47.085 14.8913 49.2702 17.0765C51.4554 19.2617 52.9436 22.0458 53.5465 25.0767C54.1493 28.1077 53.8399 31.2493 52.6573 34.1044C51.4747 36.9595 49.472 39.3998 46.9025 41.1167C44.3329 42.8336 41.312 43.75 38.2217 43.75C34.0777 43.75 30.1034 42.1038 27.1731 39.1735C24.2429 36.2433 22.5967 32.269 22.5967 28.125Z"
                        fill="#395723" />
                    <path
                        d="M38.2217 37.5C43.3993 37.5 47.5967 33.3027 47.5967 28.125C47.5967 22.9473 43.3993 18.75 38.2217 18.75C33.044 18.75 28.8467 22.9473 28.8467 28.125C28.8467 33.3027 33.044 37.5 38.2217 37.5Z"
                        fill="#395723" />
                </svg>

                <h2 class=" mt-3 font-Rasa text-3xl font-semibold">Interesting Agent Comission</h2>
                <p class=" pb-2 mx-4 text-base font-Poppins leading-relaxed">Kami menawarkan komisi yang menarik bagi
                    agen wisata yang bekerja sama dengan kami, memberikan kesempatan untuk mendapatkan penghasilan
                    tambahan melalui kerja sama yang saling menguntungkan.</p>
            </div>





        </div>
        <div data-aos="fade-up" data-aos-duration="2000" class=" lg:grid-cols-2 grid lg:px-16 justify-center lg:mx-36">
            <div class=" mx-4 lg:mx-10 py-8 h-full text-center items-center rounded-2xl border border-6f6e6e">
                <img src={{ asset('img1/halal.png') }} alt="" class=" mx-auto">

                <h2 class=" mt-3 font-Rasa text-3xl font-semibold">Halal Meals</h2>
                <p class=" pb-2 mx-5 text-base font-Poppins leading-relaxed">Menawarkan makanan yang telah
                    disertifikasi halal, sehingga para wisatawan Muslim dapat menikmati hidangan lezat dengan tenang,
                    tanpa perlu khawatir tentang kepatuhan terhadap prinsip makanan halal.</p>
            </div>

            <div class=" py-8 h-full text-center items-center rounded-2xl border border-6f6e6e m-6 lg:m-0">
                <img src={{ asset('img1/hours.png') }} alt="" class=" mx-auto">

                <h2 class=" mt-3 font-Rasa text-3xl font-semibold p-2">Escorting Guide 10 Hours Daily</h2>
                <p class=" pb-2 mx-5 text-base font-Poppins leading-relaxed">Pemandu kami akan mendampingi wisatawan
                    selama 10 jam setiap hari, memberikan panduan yang informatif dan membantu dalam menjelajahi
                    destinasi yang mereka kunjungi dengan nyaman dan aman.</p>
            </div>
        </div>
    </section>
    {{-- END MENGAPA UMT --}}

    {{-- TESTIMONI  --}}
    <section class="testimoni">
        <div class="container">
            <div class="section-title">
                <h2>Apa Kata Mereka?</h2>
                <span class="section-separator"></span>
                <p>Testimoni mereka untuk United Muslim Tour</p>
            </div>
        </div>
        <div class="testimonials-carousel-wrap">
            <div class="listing-carousel-button listing-carousel-button-next"><i class="fa fa-caret-right"
                    style="color: #fff"></i></div>
            <div class="listing-carousel-button listing-carousel-button-prev"><i class="fa fa-caret-left"
                    style="color: #fff"></i></div>
            <div class="testimonials-carousel">
                <div class="swiper-container">
                    <div class="swiper-wrapper">

                        @foreach ($testimoni as $row)
                        <div class="swiper-slide flex items-stretch">
                            <div class="testi-item flex flex-col justify-between">
                                <div class="testi-avatar"><img src={{ asset('img1/person2.png') }}></div>
                                <div class="testimonials-text-before"><i class="fa fa-quote-right"></i></div>
                                <div class="testimonials-text">
                                    <div class="listing-rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <p>{!! $row->desc !!}
                                    </p>
                                    <a href="#" class="text-link"></a>
                                    <div class="testimonials-avatar">
                                        <h3>{{ $row->nama }}</h3>
                                        <h4>{{ $row->pekerja }}</h4>
                                    </div>
                                </div>
                                <div class="testimonials-text-after"><i class="fa fa-quote-left"></i></div>
                            </div>
                        </div>
                        @endforeach

                        <!--testi end-->
                    </div>
                </div>
            </div>

            <div class="tc-pagination"></div>
        </div>

        <section class=" p-12">
            <div class="owl-carousel owl-theme">
                @foreach ($testimoniVideo as $row)
                <div class="item">
                    <iframe width="560" height="315" class=" w-full h-full lg:w-80 lg:h-72"
                        src="{{ $row->link }}" title="YouTube video player"
                        frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
                @endforeach
            </div>
        </section>



    </section>
    {{-- END TESTIMONI --}}

    {{-- HUBUNGI KAMI --}}
    <section class=" pb-20 container mx-auto bg-395723" id="contact">
        <p class=" text-395723">____</p>
        <h1 class=" font-Poppins text-center justify-center text-white font-bold text-2xl" style="letter-spacing: 3px;">
            HUBUNGI KAMI</h1>

        <div class=" grid lg:grid-cols-2 grid-cols-1 lg:mt-16 mt-10 lg:px-14">
            <div>
                <div class=" flex mx-4 ml-10">
                    <svg xmlns="http://www.w3.org/2000/svg" class=" items-center w-72 lg:w-40" width="100" height="50"
                        viewBox="0 0 50 50" fill="none">
                        <g clip-path="url(#clip0_575_55)">
                            <path
                                d="M48.4176 45.255L45.0001 35H41.2501L43.3326 45H6.66759L8.75009 35H5.00009L1.58009 45.255C0.712587 47.865 2.25009 50 5.00009 50H45.0001C47.7501 50 49.2876 47.865 48.4176 45.255ZM37.5001 12.5C37.5001 9.18479 36.1831 6.00537 33.8389 3.66117C31.4947 1.31696 28.3153 0 25.0001 0C21.6849 0 18.5055 1.31696 16.1613 3.66117C13.817 6.00537 12.5001 9.18479 12.5001 12.5C12.5001 24.4375 25.0001 37.5 25.0001 37.5C25.0001 37.5 37.5001 24.4375 37.5001 12.5ZM18.2501 12.65C18.2501 11.7637 18.4247 10.8861 18.764 10.0673C19.1032 9.24846 19.6004 8.50451 20.2273 7.87791C20.8541 7.25132 21.5982 6.75435 22.4172 6.41541C23.2361 6.07646 24.1138 5.90217 25.0001 5.9025C26.79 5.9025 28.5065 6.61353 29.7722 7.87916C31.0378 9.1448 31.7488 10.8614 31.7488 12.6513C31.7488 14.4411 31.0378 16.1577 29.7722 17.4233C28.5065 18.689 26.79 19.4 25.0001 19.4C23.2099 19.4 21.493 18.6888 20.2271 17.423C18.9612 16.1571 18.2501 14.4402 18.2501 12.65Z"
                                fill="white" />
                        </g>
                        <defs>
                            <clipPath id="clip0_575_55">
                                <rect width="50" height="50" fill="white" />
                            </clipPath>
                        </defs>
                    </svg>

                    <p class=" font-Poppins text-white font-bold px-7 text-base" style="letter-spacing: 2px;">Ruko
                        Cibubur
                        Indah Blok F3 Lt 3, Jl. Raya Lap. Tembak – Cibubur
                        RT.2/RW.11, Cibubur, Kec. Ciracas, Kota Jakarta Timur, Daerah Khusus Ibukota Jakarta 13720
                        INDONESIA.</p>
                </div>


                <div class=" flex mx-4 ml-12 mt-4">
                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="50" viewBox="0 0 50 50"
                        fill="none">
                        <path
                            d="M33.4419 3.7229L35.4544 4.26665C37.9155 4.93265 40.1591 6.23227 41.9612 8.03589C43.7634 9.83952 45.0612 12.0841 45.7252 14.5458L46.2669 16.5562L42.246 17.6417L41.7023 15.6312C41.2278 13.8728 40.3006 12.2696 39.0131 10.9814C37.7256 9.69318 36.1229 8.76505 34.3648 8.28957L32.3544 7.74373L33.4419 3.7229ZM2.08355 4.16665H19.9585L23.0565 18.1041L19.1815 21.9792C21.4588 25.5259 24.4738 28.5401 28.021 30.8167L31.896 26.9437L45.8335 30.0417V47.9166H43.7502C35.7302 47.9291 27.8786 45.6163 21.146 41.2583C16.182 38.0456 11.9546 33.8182 8.74188 28.8542C4.38396 22.1215 2.07118 14.2699 2.08355 6.24998V4.16665ZM6.30646 8.33332C6.65695 14.8332 8.70328 21.1281 12.2419 26.5917C15.1343 31.0602 18.94 34.8659 23.4085 37.7583C28.872 41.2971 35.1669 43.3434 41.6669 43.6937V33.3833L33.2231 31.5083L28.694 36.0396L27.3127 35.2542C22.0684 32.2736 17.7266 27.9318 14.746 22.6875L13.9606 21.3062L18.4919 16.7771L16.6169 8.33332H6.30646ZM31.5377 10.7604L33.5502 11.3042C34.7808 11.6371 35.9026 12.287 36.8036 13.1888C37.7047 14.0906 38.3536 15.2129 38.6856 16.4437L39.2273 18.4542L35.2065 19.5396L34.6627 17.5292C34.5202 17.0016 34.2419 16.5207 33.8555 16.1343C33.4691 15.7479 32.9882 15.4695 32.4606 15.3271L30.4502 14.7833L31.5377 10.7604Z"
                            fill="white" />
                    </svg>

                    <p class=" font-Poppins text-white font-bold px-6 text-base" style="letter-spacing: 2px;">(021)
                        22821628 (Office) <br>
                        +62 877-8629-4612(Admin)</p>

                </div>

                <div class="mx-auto ml-10 mt-4 pl-14">


                    <p class=" text-white ml-8 font-bold text-base font-Inter" style="letter-spacing: 2px;">Media Sosial
                    </p>

                    <div class=" flex ml-8">

                        <a href="https://wa.me/6287786294612" target="_blank"><svg xmlns="http://www.w3.org/2000/svg"
                                class=" m-2" width="40" height="45" viewBox="0 0 45 45" fill="none">
                                <g clip-path="url(#clip0_575_63)">
                                    <path
                                        d="M0.961321 22.2308C0.960267 26.0117 1.95585 29.7034 3.84895 32.9574L0.780273 44.0752L12.2464 41.0919C15.4178 42.8051 18.9711 43.7027 22.5819 43.703H22.5914C34.5116 43.703 44.2149 34.078 44.22 22.2477C44.2223 16.5151 41.9745 11.1245 37.8905 7.06894C33.8073 3.0137 28.3767 0.779228 22.5906 0.776611C10.669 0.776611 0.966419 10.401 0.961497 22.2308"
                                        fill="url(#paint0_linear_575_63)" />
                                    <path
                                        d="M0.189055 22.2237C0.187825 26.1406 1.21909 29.9644 3.17968 33.3349L0.000976562 44.8512L11.8782 41.7611C15.1508 43.5316 18.8354 44.4651 22.5847 44.4665H22.5943C34.9422 44.4665 44.994 34.4953 44.9993 22.2415C45.0014 16.3029 42.6727 10.7185 38.4429 6.51768C34.2125 2.31733 28.5877 0.00244186 22.5943 0C10.2444 0 0.193977 9.96977 0.189055 22.2237ZM7.26223 32.7544L6.81875 32.0559C4.95448 29.1145 3.97049 25.7154 3.9719 22.2251C3.97594 12.0399 12.3295 3.75349 22.6014 3.75349C27.5758 3.75558 32.2507 5.67977 35.7669 9.17093C39.2829 12.6624 41.2177 17.3037 41.2164 22.2401C41.2119 32.4253 32.8582 40.7128 22.5943 40.7128H22.587C19.245 40.7111 15.9673 39.8205 13.1088 38.1375L12.4286 37.7372L5.38038 39.5709L7.26223 32.7542V32.7544Z"
                                        fill="url(#paint1_linear_575_63)" />
                                    <path
                                        d="M16.9942 12.9327C16.5748 12.0078 16.1334 11.9891 15.7346 11.9729C15.408 11.9589 15.0347 11.96 14.6617 11.96C14.2883 11.96 13.6817 12.0993 13.169 12.6549C12.6557 13.2109 11.2095 14.5546 11.2095 17.2876C11.2095 20.0207 13.2156 22.662 13.4952 23.0329C13.7753 23.4032 17.3681 29.1911 23.0583 31.4178C27.7873 33.2682 28.7497 32.9002 29.776 32.8074C30.8025 32.7149 33.0883 31.464 33.5546 30.1668C34.0213 28.8699 34.0213 27.7581 33.8814 27.5258C33.7415 27.2943 33.3681 27.1553 32.8083 26.8777C32.2483 26.5998 29.496 25.2559 28.9829 25.0705C28.4697 24.8853 28.0965 24.7928 27.7231 25.349C27.3498 25.9044 26.2777 27.1553 25.951 27.5258C25.6246 27.8971 25.2978 27.9434 24.7381 27.6655C24.1779 27.3868 22.375 26.8009 20.236 24.9086C18.5718 23.4362 17.4482 21.6179 17.1217 21.0617C16.7951 20.5063 17.0867 20.2053 17.3674 19.9285C17.6189 19.6796 17.9274 19.2798 18.2076 18.9556C18.4867 18.6311 18.5799 18.3997 18.7665 18.0292C18.9534 17.6584 18.8599 17.334 18.7201 17.0561C18.5799 16.7783 17.492 14.031 16.9942 12.9327Z"
                                        fill="white" />
                                </g>
                                <defs>
                                    <linearGradient id="paint0_linear_575_63" x1="2172.77" y1="4330.63" x2="2172.77"
                                        y2="0.776611" gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#1FAF38" />
                                        <stop offset="1" stop-color="#60D669" />
                                    </linearGradient>
                                    <linearGradient id="paint1_linear_575_63" x1="2249.92" y1="4485.12" x2="2249.92"
                                        y2="0" gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#F9F9F9" />
                                        <stop offset="1" stop-color="white" />
                                    </linearGradient>
                                    <clipPath id="clip0_575_63">
                                        <rect width="45" height="45" fill="white" />
                                    </clipPath>
                                </defs>
                            </svg></a>


                        <a href="https://www.instagram.com/unitedmuslimtours_id?igsh=MTU4Y3gzbXpyY3J2MA=="
                            target="_blank"><svg xmlns="http://www.w3.org/2000/svg" class=" m-2" width="40"
                                height="45" viewBox="0 0 45 45" fill="none">
                                <g clip-path="url(#clip0_575_67)">
                                    <path
                                        d="M34.4531 0H10.5469C4.722 0 0 4.722 0 10.5469V34.4531C0 40.278 4.722 45 10.5469 45H34.4531C40.278 45 45 40.278 45 34.4531V10.5469C45 4.722 40.278 0 34.4531 0Z"
                                        fill="url(#paint0_radial_575_67)" />
                                    <path
                                        d="M34.4531 0H10.5469C4.722 0 0 4.722 0 10.5469V34.4531C0 40.278 4.722 45 10.5469 45H34.4531C40.278 45 45 40.278 45 34.4531V10.5469C45 4.722 40.278 0 34.4531 0Z"
                                        fill="url(#paint1_radial_575_67)" />
                                    <path
                                        d="M22.5016 4.92188C17.7277 4.92188 17.1285 4.94279 15.2536 5.02805C13.3822 5.11383 12.1048 5.41002 10.9872 5.84473C9.83092 6.29367 8.85023 6.89432 7.87324 7.87166C6.89537 8.84883 6.29473 9.82951 5.84438 10.9853C5.40844 12.1032 5.11189 13.3812 5.0277 15.2517C4.94385 17.1267 4.92188 17.7261 4.92188 22.5002C4.92188 27.2742 4.94297 27.8715 5.02805 29.7464C5.11418 31.6178 5.41037 32.8952 5.84473 34.0128C6.29402 35.1691 6.89467 36.1498 7.87201 37.1268C8.84883 38.1046 9.82951 38.7067 10.9849 39.1556C12.1034 39.5903 13.381 39.8865 15.252 39.9723C17.1271 40.0576 17.7258 40.0785 22.4995 40.0785C27.2739 40.0785 27.8712 40.0576 29.7461 39.9723C31.6174 39.8865 32.8962 39.5903 34.0147 39.1556C35.1705 38.7067 36.1498 38.1046 37.1264 37.1268C38.1043 36.1498 38.7047 35.1691 39.1553 34.0133C39.5873 32.8952 39.8841 31.6174 39.972 29.7468C40.0562 27.8719 40.0781 27.2742 40.0781 22.5002C40.0781 17.7261 40.0562 17.1271 39.972 15.252C39.8841 13.3806 39.5873 12.1034 39.1553 10.9858C38.7047 9.82951 38.1043 8.84883 37.1264 7.87166C36.1487 6.89396 35.1708 6.29332 34.0137 5.8449C32.8931 5.41002 31.615 5.11365 29.7436 5.02805C27.8685 4.94279 27.2716 4.92188 22.4961 4.92188H22.5016ZM20.9246 8.08963C21.3928 8.08893 21.915 8.08963 22.5016 8.08963C27.1951 8.08963 27.7513 8.1065 29.6047 8.1907C31.3186 8.2691 32.2488 8.55545 32.8685 8.79609C33.6888 9.11461 34.2737 9.49553 34.8885 10.1109C35.5038 10.7262 35.8845 11.3121 36.2039 12.1324C36.4446 12.7512 36.7313 13.6814 36.8093 15.3953C36.8935 17.2484 36.9118 17.8049 36.9118 22.4961C36.9118 27.1874 36.8935 27.7441 36.8093 29.597C36.7309 31.3109 36.4446 32.2411 36.2039 32.86C35.8854 33.6804 35.5038 34.2645 34.8885 34.8794C34.2733 35.4946 33.6892 35.8754 32.8685 36.1941C32.2495 36.4358 31.3186 36.7214 29.6047 36.7998C27.7516 36.884 27.1951 36.9023 22.5016 36.9023C17.8079 36.9023 17.2515 36.884 15.3986 36.7998C13.6847 36.7207 12.7545 36.4344 12.1344 36.1937C11.3142 35.875 10.7281 35.4943 10.1129 34.879C9.49764 34.2638 9.11689 33.6793 8.7975 32.8586C8.55686 32.2397 8.27016 31.3095 8.19211 29.5956C8.10791 27.7425 8.09104 27.186 8.09104 22.4917C8.09104 17.7977 8.10791 17.244 8.19211 15.3909C8.27051 13.677 8.55686 12.7468 8.7975 12.1271C9.11619 11.3068 9.49764 10.7209 10.113 10.1057C10.7283 9.49043 11.3142 9.10951 12.1345 8.79029C12.7542 8.54859 13.6847 8.26295 15.3986 8.1842C17.0202 8.1109 17.6486 8.08893 20.9246 8.08523V8.08963ZM31.8848 11.0083C30.7202 11.0083 29.7754 11.9522 29.7754 13.117C29.7754 14.2815 30.7202 15.2263 31.8848 15.2263C33.0493 15.2263 33.9942 14.2815 33.9942 13.117C33.9942 11.9524 33.0493 11.0076 31.8848 11.0076V11.0083ZM22.5016 13.4729C17.5164 13.4729 13.4745 17.5148 13.4745 22.5002C13.4745 27.4855 17.5164 31.5255 22.5016 31.5255C27.4869 31.5255 31.5274 27.4855 31.5274 22.5002C31.5274 17.515 27.4866 13.4729 22.5012 13.4729H22.5016ZM22.5016 16.6407C25.7375 16.6407 28.3611 19.2639 28.3611 22.5002C28.3611 25.7361 25.7375 28.3597 22.5016 28.3597C19.2654 28.3597 16.6423 25.7361 16.6423 22.5002C16.6423 19.2639 19.2654 16.6407 22.5016 16.6407Z"
                                        fill="white" />
                                </g>
                                <defs>
                                    <radialGradient id="paint0_radial_575_67" cx="0" cy="0" r="1"
                                        gradientUnits="userSpaceOnUse"
                                        gradientTransform="translate(11.9531 48.4659) rotate(-90) scale(44.5983 41.48)">
                                        <stop stop-color="#FFDD55" />
                                        <stop offset="0.1" stop-color="#FFDD55" />
                                        <stop offset="0.5" stop-color="#FF543E" />
                                        <stop offset="1" stop-color="#C837AB" />
                                    </radialGradient>
                                    <radialGradient id="paint1_radial_575_67" cx="0" cy="0" r="1"
                                        gradientUnits="userSpaceOnUse"
                                        gradientTransform="translate(-7.53768 3.24158) rotate(78.681) scale(19.9357 82.1756)">
                                        <stop stop-color="#3771C8" />
                                        <stop offset="0.128" stop-color="#3771C8" />
                                        <stop offset="1" stop-color="#6600FF" stop-opacity="0" />
                                    </radialGradient>
                                    <clipPath id="clip0_575_67">
                                        <rect width="45" height="45" fill="white" />
                                    </clipPath>
                                </defs>
                            </svg></a>


                    </div>

                </div>



            </div>

            <div class=" lg:w-44">
                <iframe class="lg:w-30 h-20 p-6 lg:p-0 lg:pl-16 pl-8"
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.3274498717565!2d106.87854107364049!3d-6.351635762137065!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69ed57ac777673%3A0x1f8a1c3d5b2d2f13!2sRUKO%20CIBUBUR%20INDAH%20BLOK%20F%2F4!5e0!3m2!1sid!2sid!4v1706068161045!5m2!1sid!2sid"
                    style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>


        </div>
    </section>
    {{-- END HUBUNGI KAMI --}}
@endsection
