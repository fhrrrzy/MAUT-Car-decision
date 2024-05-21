<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    @vite('resources/css/app.css')
    <link href="https://coderthemes.com/ubold/layouts/assets/libs/sweetalert2/sweetalert2.min.css" rel="stylesheet"
        type="text/css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />


    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <title>CDA - Car Decision App</title>
</head>

<body>

    <div class="flex flex-col min-h-screen overflow-hidden supports-[overflow:clip]:overflow-clip">
        <header class="fixed w-full z-30 md:bg-white/80 transition duration-300 ease-in-out backdrop-blur-md">
            <div class="max-w-6xl mx-auto px-5 sm:px-6">
                <div class="flex items-center justify-between h-16 md:h-20">
                    <div class="shrink-0 mr-4">
                        <a class="block text-2xl font-bold" aria-label="CDA" href="/">
                            CDA
                        </a>
                    </div>
                    <nav class="md:flex md:grow">
                        <ul class="flex grow justify-end flex-wrap items-center">
                            <li><a
                                    class="font-medium text-gray-600 hover:text-gray-900 px-5 py-3 flex items-center transition duration-150 ease-in-out"href="#cari">Cari</a>
                            </li>
                            <li><a
                                    class="font-medium text-gray-600 hover:text-gray-900 px-5 py-3 flex items-center transition duration-150 ease-in-out"href="#about">Tentang</a>
                            </li>
                            <li><a
                                    class="font-medium text-gray-600 hover:text-gray-900 px-5 py-3 flex items-center transition duration-150 ease-in-out"href="/signin">Kontak</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </header>
        <main class="grow">
            <section class="relative min-h-screen">
                <div class="absolute left-1/2 transform -translate-x-1/2 bottom-0 pointer-events-none -z-1"
                    aria-hidden="true"><svg width="1360" height="578" viewBox="0 0 1360 578"
                        xmlns="http://www.w3.org/2000/svg">
                        <defs>
                            <linearGradient x1="50%" y1="0%" x2="50%" y2="100%"
                                id="illustration-01">
                                <stop stop-color="#FFF" offset="0%"></stop>
                                <stop stop-color="#EAEAEA" offset="77.402%"></stop>
                                <stop stop-color="#DFDFDF" offset="100%"></stop>
                            </linearGradient>
                        </defs>
                        <g fill="url(#illustration-01)" fill-rule="evenodd">
                            <circle cx="1232" cy="128" r="128"></circle>
                            <circle cx="155" cy="443" r="64"></circle>
                        </g>
                    </svg></div>
                <div class="max-w-6xl mx-auto px-4 sm:px-6">
                    <div class="pt-32 pb-12 md:pt-40 md:pb-20">
                        <div class="text-center pb-12 md:pb-16">
                            <h1 class="text-5xl md:text-6xl font-extrabold leading-tighter tracking-tighter mb-4"
                                data-aos="zoom-y-out">
                                Temukan Mobil Bekas Impian <span
                                    class="bg-clip-text text-transparent bg-gradient-to-r from-blue-500 to-teal-400">Kamu!</span>
                            </h1>
                            <div class="max-w-3xl mx-auto">
                                <p class="text-xl text-gray-600 mb-16" data-aos="zoom-y-out" data-aos-delay="150">
                                    Ayo, temukan mobil bekas yang pas banget buat kamu! Dengan aplikasi kami, kamu bisa
                                    dengan mudah mencari mobil sesuai preferensi kamu. Kami menggunakan algoritma super
                                    canggih yang memanfaatkan teori utilitas multiatribut untuk membantu kamu membuat
                                    keputusan terbaik.
                                </p>
                                <div class="max-w-xs mx-auto sm:max-w-none sm:flex sm:justify-center"
                                    data-aos="zoom-y-out" data-aos-delay="300">
                                    <div>
                                        <a class="btn text-white px-10 py-5 font-semibold rounded-md bg-blue-600 hover:bg-blue-700 w-full mb-4 sm:w-auto sm:mb-0"
                                            href="#cari">Cari Mobil Sekarang!</a>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div>
                            <div>
                                <div class="relative flex justify-center mb-8" data-aos="zoom-y-out"
                                    data-aos-delay="450">
                                    <div class="flex flex-col justify-center">
                                        <svg
                                            class="absolute inset-0 max-w-full mx-auto md:max-w-none h-auto"
                                            width="768" height="432" viewBox="0 0 768 432"
                                            xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink">
                                            <defs>
                                                <linearGradient x1="50%" y1="0%" x2="50%"
                                                    y2="100%" id="hero-ill-a">
                                                    <stop stop-color="#FFF" offset="0%"></stop>
                                                    <stop stop-color="#EAEAEA" offset="77.402%"></stop>
                                                    <stop stop-color="#DFDFDF" offset="100%"></stop>
                                                </linearGradient>
                                                <linearGradient x1="50%" y1="0%" x2="50%"
                                                    y2="99.24%" id="hero-ill-b">
                                                    <stop stop-color="#FFF" offset="0%"></stop>
                                                    <stop stop-color="#EAEAEA" offset="48.57%"></stop>
                                                    <stop stop-color="#DFDFDF" stop-opacity="0" offset="100%">
                                                    </stop>
                                                </linearGradient>
                                                <radialGradient cx="21.152%" cy="86.063%" fx="21.152%"
                                                    fy="86.063%" r="79.941%" id="hero-ill-e">
                                                    <stop stop-color="#4FD1C5" offset="0%"></stop>
                                                    <stop stop-color="#81E6D9" offset="25.871%"></stop>
                                                    <stop stop-color="#338CF5" offset="100%"></stop>
                                                </radialGradient>
                                                <circle id="hero-ill-d" cx="384" cy="216" r="64">
                                                </circle>
                                            </defs>
                                            <g fill="none" fill-rule="evenodd">
                                                <circle fill-opacity=".04" fill="url(#hero-ill-a)" cx="384"
                                                    cy="216" r="128"></circle>
                                                <circle fill-opacity=".16" fill="url(#hero-ill-b)" cx="384"
                                                    cy="216" r="96"></circle>
                                                <g fill-rule="nonzero">
                                                    <use fill="#000" xlink:href="#hero-ill-d"></use>
                                                    <use fill="url(#hero-ill-e)" xlink:href="#hero-ill-d"></use>
                                                </g>
                                            </g>
                                        </svg>
                                        <img src="{{ asset('assets/images/pixel-car.png') }}" alt="" class="w-full z-50">

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="relative min-h-screen py-10" id="cari">
                <div class="max-w-6xl mx-auto px-4 sm:px-6">
                    <div class="mb-5">
                        <h1 class="text-5xl md:text-6xl font-extrabold leading-tighter tracking-tighter mb-4"
                            data-aos="zoom-y-out">
                            Pilih Preferensi Kamu </h1>
                        <p data-aos="zoom-y-out" data-aos-delay="150">
                            Pilih preferensi kamu untuk menemukan mobil bekas yang sesuai dengan kebutuhan kamu.
                            Sebagai contoh jika kamu memilih semua preferensi ke tingkat yang sama (1-10), maka sistem
                            akan menganggap kamu mencari yang balance dalam segala aspek.
                        </p>
                    </div>

                    <form id="car-filter-form" class="mb-5" data-aos="zoom-y-out" data-aos-delay="300">
                        <div class="grid grid-cols-2 gap-5">
                            <div class="">
                                <label for="fuel-type" class="block mb-2 text-sm font-medium text-gray-900">Pilih Tipe
                                    Bensin</label>
                                <select id="fuel-type"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3">
                                    <option value="all">Semua Tipe</option>
                                    <option value="bensin">Bensin</option>
                                    <option value="diesel">Diesel</option>
                                    <option value="Elektrik">Elektrik</option>
                                </select>
                            </div>
                            <div class="">
                                <label for="type" class="block mb-2 text-sm font-medium text-gray-900">Pilih Tipe
                                    Transmisi</label>
                                <select id="type"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3">
                                    <option value="all">Semua Tipe</option>
                                    <option value="manual">Manual</option>
                                    <option value="auto">Auto</option>
                                    <option value="semiauto">Semiauto</option>
                                </select>
                            </div>
                        </div>
                    </form>

                    <div class="" data-aos="zoom-y-out" data-aos-delay="450">
                        <h5 class="text-3xl md:text-3xl font-semibold tracking-tighter mb-4 text-gray-800"><span
                                id="total-data">0</span> Data mobil tersedia !</h5>
                    </div>

                    <form id="weight-form" class="mb-5" data-aos="zoom-y-out" data-aos-delay="600">
                        <div class="grid cols-1 gap-5 mb-5">
                            <div class="">
                                <h3 class="mb-4 font-semibold text-gray-900">Harga</h3>
                                <ul
                                    class="items-center w-full text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg sm:flex">
                                    @for ($i = 1; $i <= 10; $i++)
                                        <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r">
                                            <div class="flex items-center ps-3">
                                                <input id="price-{{ $i }}" type="radio" required
                                                    value="{{ $i }}" name="price"
                                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2">
                                                <label for="price-{{ $i }}"
                                                    class="w-full py-3 ms-2 text-sm font-medium text-gray-900">{{ $i }}</label>
                                            </div>
                                        </li>
                                    @endfor
                                </ul>
                            </div>
                            <div class="">
                                <h3 class="mb-4 font-semibold text-gray-900">Umur Pemakaian</h3>
                                <ul
                                    class="items-center w-full text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg sm:flex">
                                    @for ($i = 1; $i <= 10; $i++)
                                        <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r">
                                            <div class="flex items-center ps-3">
                                                <input id="usage_age-{{ $i }}" type="radio" required
                                                    value="{{ $i }}" name="usage_age"
                                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2">
                                                <label for="usage_age-{{ $i }}"
                                                    class="w-full py-3 ms-2 text-sm font-medium text-gray-900">{{ $i }}</label>
                                            </div>
                                        </li>
                                    @endfor
                                </ul>
                            </div>
                            <div class="">
                                <h3 class="mb-4 font-semibold text-gray-900">Kilometer Digunakan</h3>
                                <ul
                                    class="items-center w-full text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg sm:flex">
                                    @for ($i = 1; $i <= 10; $i++)
                                        <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r">
                                            <div class="flex items-center ps-3">
                                                <input id="kilometer_used-{{ $i }}" type="radio" required
                                                    value="{{ $i }}" name="kilometer_used"
                                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2">
                                                <label for="kilometer_used-{{ $i }}"
                                                    class="w-full py-3 ms-2 text-sm font-medium text-gray-900">{{ $i }}</label>
                                            </div>
                                        </li>
                                    @endfor
                                </ul>
                            </div>
                            <div class="">
                                <h3 class="mb-4 font-semibold text-gray-900">Efisiensi Bensin</h3>
                                <ul
                                    class="items-center w-full text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg sm:flex">
                                    @for ($i = 1; $i <= 10; $i++)
                                        <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r">
                                            <div class="flex items-center ps-3">
                                                <input id="fuel_efficiency-{{ $i }}" type="radio"
                                                    required value="{{ $i }}" name="fuel_efficiency"
                                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2">
                                                <label for="fuel_efficiency-{{ $i }}"
                                                    class="w-full py-3 ms-2 text-sm font-medium text-gray-900">{{ $i }}</label>
                                            </div>
                                        </li>
                                    @endfor
                                </ul>
                            </div>
                            <div class="">
                                <h3 class="mb-4 font-semibold text-gray-900">Garansi Showroom</h3>
                                <ul
                                    class="items-center w-full text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg sm:flex">
                                    @for ($i = 1; $i <= 10; $i++)
                                        <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r">
                                            <div class="flex items-center ps-3">
                                                <input id="warranty_showroom-{{ $i }}" type="radio"
                                                    required value="{{ $i }}" name="warranty_showroom"
                                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2">
                                                <label for="warranty_showroom-{{ $i }}"
                                                    class="w-full py-3 ms-2 text-sm font-medium text-gray-900">{{ $i }}</label>
                                            </div>
                                        </li>
                                    @endfor
                                </ul>
                            </div>
                        </div>

                        <div class="w-full flex justify-center">
                            <button type="button" id="calculate-button"
                                class="btn text-white px-10 py-5 font-semibold rounded-md bg-blue-600 hover:bg-blue-700 w-full mb-4 sm:w-auto sm:mb-0">Cari
                                Mobil</button>
                        </div>
                    </form>

                    <div class="mb-5 hidden" id="top-car-section" data-aos="zoom-y-out" data-aos-delay="750">
                        <h5 class="text-3xl md:text-3xl font-semibold tracking-tighter mb-4 text-gray-800">Top 5 Mobil
                            Berdasarkan Preferensi Kamu</h5>
                        <ul class="text-sm font-medium text-gray-900 bg-white border-gray-200 rounded-lg grid grid-cols-1 gap-5 mb-5" id="top-car-container">
                        </ul>
                        <div class="w-full flex justify-end">
                            <button type="button" data-modal-target="default-modal" data-modal-toggle="default-modal" id="show-calculation-button" class="btn text-white px-10 py-5 font-semibold rounded-md bg-blue-600 hover:bg-blue-700 w-full mb-4 sm:w-auto sm:mb-0">Tampilkan perhitungan</button>
                        </div>

                    </div>
                </div>
            </section>

            <section class="relative min-h-screen py-10" id="about">
                <div class="max-w-6xl mx-auto px-4 sm:px-6">
                    <div class="mb-5">
                        <h1 class="text-5xl md:text-6xl font-extrabold leading-tighter tracking-tighter mb-4"
                            data-aos="zoom-y-out">
                            Tentang Kami </h1>
                        <p data-aos="zoom-y-out" data-aos-delay="150">
                            Kami adalah tim yang berdedikasi untuk membantu kamu menemukan mobil bekas yang sesuai dengan
                            kebutuhan kamu. Kami menggunakan algoritma super canggih yang memanfaatkan teori utilitas
                            multiatribut untuk membantu kamu membuat keputusan terbaik.
                        </p>
                    </div>
                </div>
            </section>

            <section class="relative min-h-screen py-10" id="contact">
                <div class="max-w-6xl mx-auto px-4 sm:px-6">
                    <div class="mb-5">
                        <h1 class="text-5xl md:text-6xl font-extrabold leading-tighter tracking-tighter mb-4"
                            data-aos="zoom-y-out">
                            Tentang Kami </h1>
                        <p data-aos="zoom-y-out" data-aos-delay="150">
                            Kami adalah tim yang berdedikasi untuk membantu kamu menemukan mobil bekas yang sesuai dengan
                            kebutuhan kamu. Kami menggunakan algoritma super canggih yang memanfaatkan teori utilitas
                            multiatribut untuk membantu kamu membuat keputusan terbaik.
                        </p>
                    </div>

                    <div class="mb-5" data
                </div>
            </section>
        </main>
    </div>

    <div id="default-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative p-4 w-full max-w-4xl max-h-full">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow">
                <!-- Modal header -->
                <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t ">
                    <h3 class="text-xl font-semibold text-gray-900 ">
                        Kalkulasi/ Perhitungan
                    </h3>
                    <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center " data-modal-hide="default-modal">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <!-- Modal body -->
                <div class="p-4 md:p-5 space-y-4">
                    <ul class="grid grid-cols-1 gap-5">
                        <li>
                            <div class="font-semibold text-xl">1 .Matrix Awal</div>
                            <table class="w-full text-sm text-left rtl:text-right text-gray-500">
                                <thead>
                                    <tr>
                                        <th>C\A</th>
                                        <th>Price</th>
                                        <th>Usage Age</th>
                                        <th>Kilometer Used</th>
                                        <th>Fuel Efficiency</th>
                                        <th>Warranty Showroom</th>
                                    </tr>
                                </thead>
                                <tbody id="minmax-step-matrix">
                                    
                                </tbody>
                            </table>
                            <table class="w-full text-sm text-left rtl:text-right text-gray-500">
                                <thead>
                                    <tr>
                                        <th>C\A</th>
                                        <th>Price</th>
                                        <th>Usage Age</th>
                                        <th>Kilometer Used</th>
                                        <th>Fuel Efficiency</th>
                                        <th>Warranty Showroom</th>
                                    </tr>
                                </thead>
                                <tbody id="first-step-matrix">
                                </tbody>
                            </table>
                        </li>
                        
                        <li>
                            <div class="font-semibold text-xl">2 .Normalisasi Matrix</div>
                            <table class="w-full text-sm text-left rtl:text-right text-gray-500">
                                <thead>
                                    <tr>
                                        <th>C\A</th>
                                        <th>Price</th>
                                        <th>Usage Age</th>
                                        <th>Kilometer Used</th>
                                        <th>Fuel Efficiency</th>
                                        <th>Warranty Showroom</th>
                                    </tr>
                                </thead>
                                <tbody id="second-step-matrix">
                                </tbody>
                            </table>
                        </li>

                        <li>
                            <div class="font-semibold text-xl">3 .Weighting (muliply by weight)</div>
                            <table class="w-full text-sm text-left rtl:text-right text-gray-500">
                                <thead>
                                    <tr>
                                        <th>C\A</th>
                                        <th>Price</th>
                                        <th>Usage Age</th>
                                        <th>Kilometer Used</th>
                                        <th>Fuel Efficiency</th>
                                        <th>Warranty Showroom</th>
                                    </tr>
                                </thead>
                                <tbody id="third-step-matrix">
                                </tbody>
                            </table>
                        </li>

                        <li>
                            <div class="font-semibold text-xl">4 .Summing up</div>
                            <table class="w-full text-sm text-left rtl:text-right text-gray-500">
                                <thead>
                                    <tr>
                                        <th>C\A</th>
                                        <th>Preference score</th>
                                </thead>
                                <tbody id="final-step-matrix">
                                </tbody>
                            </table>
                        </li>

                        <li>
                            <div class="font-semibold text-xl">5 .Sort</div>
                            <table class="w-full text-sm text-left rtl:text-right text-gray-500">
                                <thead>
                                    <tr>
                                        <th>C\A</th>
                                        <th>Preference score</th>
                                        <th>Rank</th>
                                </thead>
                                <tbody id="top-step-matrix">
                                </tbody>
                            </table>
                        </li>

                    </ul>
                </div>
                <!-- Modal footer -->
                <div class="flex items-center  justify-end p-4 md:p-5 border-t border-gray-200 rounded-b ">
                    <button data-modal-hide="default-modal" type="button" class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 ">Tutup</button>
                </div>
            </div>
        </div>
    </div>


    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script src="https://coderthemes.com/ubold/layouts/assets/libs/sweetalert2/sweetalert2.all.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>

    <script>
        const formatDateIndonesian = (dateString) => {
            const date = new Date(dateString);
            const options = { year: 'numeric', month: 'long', day: 'numeric' };
            return new Intl.DateTimeFormat('id-ID', options).format(date);
        }
    </script>

    <script>
        AOS.init();
        const Toast = Swal.mixin({
            toast: true,
            position: "top-end",
            showConfirmButton: false,
            timer: 3000,
            timerProgressBar: true,
            didOpen: (toast) => {
                toast.onmouseenter = Swal.stopTimer;
                toast.onmouseleave = Swal.resumeTimer;
            }
        });

        let cars = [];

        const fetchCars = async () => {
            const fuelType = document.getElementById('fuel-type').value;
            const type = document.getElementById('type').value;
            const totalData = document.getElementById('total-data');


            await fetch(`/api/car?fuel_type=${fuelType}&type=${type}`)
                .then(response => response.json())
                .then(data => {
                    totalData.innerHTML = data.length;
                    cars = data;
                    // cars = data.map(car => {
                    //     return {
                    //         uuid: car.uuid,
                    //         name: car.name,
                    //         price: car.price,
                    //         usage_age: car.usage_age,
                    //         kilometer_used: car.kilometer_used,
                    //         fuel_efficiency: car.fuel_efficiency,
                    //         warranty_showroom: car.warranty_remaining_days,
                    //     }
                    // });
                });
        }


        const calculateScore = () => {
            const formWeight = new FormData(document.getElementById('weight-form'));
            const weight = {
                price: parseInt(formWeight.get('price'), 10),
                usage_age: parseInt(formWeight.get('usage_age'), 10),
                kilometer_used: parseInt(formWeight.get('kilometer_used'), 10),
                fuel_efficiency: parseInt(formWeight.get('fuel_efficiency'), 10),
                warranty_showroom: parseInt(formWeight.get('warranty_showroom'), 10),
            }

            const totalWeight = weight.price + weight.usage_age + weight.kilometer_used + weight.fuel_efficiency +
                weight.warranty_showroom;
            const normalizedWeight = {
                price: (weight.price / totalWeight).toFixed(3),
                usage_age: (weight.usage_age / totalWeight).toFixed(3),
                kilometer_used: (weight.kilometer_used / totalWeight).toFixed(3),
                fuel_efficiency: (weight.fuel_efficiency / totalWeight).toFixed(3),
                warranty_showroom: (weight.warranty_showroom / totalWeight).toFixed(3),
            }


            //get max and min from each attribute
            const highestPrice = Math.max(...cars.map(car => car.price));
            const highestUsageAge = Math.max(...cars.map(car => car.usage_age));
            const highestKilometerUsed = Math.max(...cars.map(car => car.kilometer_used));
            const highestFuelEfficiency = Math.max(...cars.map(car => car.fuel_efficiency));
            const highestWarrantyShowroom = Math.max(...cars.map(car => car.warranty_remaining_days));

            const lowestPrice = Math.min(...cars.map(car => car.price));
            const lowestUsageAge = Math.min(...cars.map(car => car.usage_age));
            const lowestKilometerUsed = Math.min(...cars.map(car => car.kilometer_used));
            const lowestFuelEfficiency = Math.min(...cars.map(car => car.fuel_efficiency));
            const lowestWarrantyShowroom = Math.min(...cars.map(car => car.warranty_remaining_days));

            // console.log(highestWarrantyShowroom, lowestWarrantyShowroom)

            const carFirstStepScores = cars.map(car => {
                return [car.price, car.usage_age, car.kilometer_used, car.fuel_efficiency, car
                    .warranty_remaining_days];
            })


            const carSecondStepScores = carFirstStepScores.map(car => {
                return [
                    (highestPrice - car[0]) / (highestPrice - lowestPrice),
                    (highestUsageAge - car[1]) / (highestUsageAge - lowestUsageAge),
                    (highestKilometerUsed - car[2]) / (highestKilometerUsed - lowestKilometerUsed),
                    (car[3] - lowestFuelEfficiency) / (highestFuelEfficiency - lowestFuelEfficiency),
                    (car[4] - lowestWarrantyShowroom) / (highestWarrantyShowroom - lowestWarrantyShowroom),
                ]
            })

            const carThirdStepScores = carSecondStepScores.map(car => {
                return [
                    car[0] * normalizedWeight.price,
                    car[1] * normalizedWeight.usage_age,
                    car[2] * normalizedWeight.kilometer_used,
                    car[3] * normalizedWeight.fuel_efficiency,
                    car[4] * normalizedWeight.warranty_showroom,
                ]
            })

            console.log(carThirdStepScores)

            const carFinalScores = carThirdStepScores.map(car => {
                return car.reduce((acc, curr) => acc + curr, 0);
            })


            const rankCar = carFinalScores.map((score, index) => {
                return {
                    uuid: cars[index].uuid,
                    name: cars[index].name,
                    score: score,
                }
            }).sort((a, b) => b.score - a.score);

            console.log(rankCar);

            return {
                weight,
                normalizedWeight,
                highestPrice,
                highestUsageAge,
                highestKilometerUsed,
                highestFuelEfficiency,
                highestWarrantyShowroom,
                lowestPrice,
                lowestUsageAge,
                lowestKilometerUsed,
                lowestFuelEfficiency,
                lowestWarrantyShowroom,
                carFirstStepScores,
                carSecondStepScores,
                carThirdStepScores,
                carFinalScores,
                rankCar,
            }
        }

        const top5Cars = () => {
            const rankCar = calculateScore().rankCar;
            const top5 = rankCar.slice(0, 5);
            const top5Cars = top5.map((car, index) => {
                return {
                    uuid: car.uuid,
                    name: car.name,
                    score: car.score.toFixed(3),
                };
            });

            return top5Cars;
        }


        document.addEventListener('DOMContentLoaded', async function() {
            const carFilterForm = document.getElementById('car-filter-form');
            const fuelType = document.getElementById('fuel-type');
            const type = document.getElementById('type');

            await fetchCars();


            fuelType.addEventListener('change', async function() {
                await fetchCars();
            });

            type.addEventListener('change', async function() {
                await fetchCars();
            });
        });


        document.getElementById('calculate-button').addEventListener('click', () => {
            // Check if all radio button groups have at least one option selected
            const formWeight = new FormData(document.getElementById('weight-form'));
            const radioGroups = {
                price: formWeight.getAll('price'),
                usage_age: formWeight.getAll('usage_age'),
                kilometer_used: formWeight.getAll('kilometer_used'),
                fuel_efficiency: formWeight.getAll('fuel_efficiency'),
                warranty_showroom: formWeight.getAll('warranty_showroom'),
            };

            const emptyGroups = Object.keys(radioGroups).filter(group => radioGroups[group].length === 0);

            if (emptyGroups.length > 0) {
                Toast.fire({
                    icon: 'error',
                    title: 'Pilih semua preferensi yang disediakan.'
                });
                return;
            }

            renderTopCars();
            
        });

        const renderTopCars = () => {
            const topCarSection = document.getElementById('top-car-section');
            topCarSection.classList.remove('hidden');
            const topCarContainer = document.getElementById('top-car-container');
            const topCars = top5Cars();
            // console.log(topCars);
            topCarContainer.innerHTML = topCars.map((car, index) => carElement(car.uuid, index + 1, car.score)).join('');
            renderMatrix();
        }

        const renderMatrix = () => {
            const {
                carFirstStepScores,
                carSecondStepScores,
                carThirdStepScores,
                carFinalScores,
                highestPrice,
                highestUsageAge,
                highestKilometerUsed,
                highestFuelEfficiency,
                highestWarrantyShowroom,
                lowestPrice,
                lowestUsageAge,
                lowestKilometerUsed,
                lowestFuelEfficiency,
                lowestWarrantyShowroom,
                weight,
                normalizedWeight
            } = calculateScore();

            const firstStepMatrix = document.getElementById('first-step-matrix');
            firstStepMatrix.innerHTML = carFirstStepScores.map((car, index) => {
                const carFullData = cars[index];
                return `
                <tr class="border-b border-gray-200 p-5">
                    <td>${carFullData.name}</td>
                    <td>${car[0]}</td>
                    <td>${car[1]}</td>
                    <td>${car[2]}</td>
                    <td>${car[3]}</td>
                    <td>${car[4]}</td>
                </tr>
                `;
            }).join('');

            const minMaxMatrix = document.getElementById('minmax-step-matrix');
            const totalWeight = weight.price + weight.usage_age + weight.kilometer_used + weight.fuel_efficiency + weight.warranty_showroom;
            minMaxMatrix.innerHTML = `
            <tr class="border-b border-gray-200 p-5">
                <td>Type</td>
                <td>Cost</td>
                <td>Cost</td>
                <td>Cost</td>
                <td>Benefit</td>
                <td>Benefit</td>
            </tr>
            <tr class="border-b border-gray-200 p-5">
                <td>Weight</td>
                <td>${weight.price} / ${totalWeight} = ${normalizedWeight.price}</td>
                <td>${weight.usage_age} / ${totalWeight} = ${normalizedWeight.usage_age}</td>
                <td>${weight.kilometer_used} / ${totalWeight} = ${normalizedWeight.kilometer_used}</td>
                <td>${weight.fuel_efficiency} / ${totalWeight} = ${normalizedWeight.fuel_efficiency}</td>
                <td>${weight.warranty_showroom} / ${totalWeight} = ${normalizedWeight.warranty_showroom}</td>
            </tr>
            <tr class="border-b border-gray-200 p-5">
                <td>Min</td>
                <td>${lowestPrice}</td>
                <td>${lowestUsageAge}</td>
                <td>${lowestKilometerUsed}</td>
                <td>${lowestFuelEfficiency}</td>
                <td>${lowestWarrantyShowroom}</td>
            </tr>
            <tr class="border-b border-gray-200 p-5">
                <td>Max</td>
                <td>${highestPrice}</td>
                <td>${highestUsageAge}</td>
                <td>${highestKilometerUsed}</td>
                <td>${highestFuelEfficiency}</td>
                <td>${highestWarrantyShowroom}</td>
            </tr>
            `

            const secondStepMatrix = document.getElementById('second-step-matrix');
            secondStepMatrix.innerHTML = `
                ${carSecondStepScores.map((car, index) => {
                    const carFullData = cars[index];
                    return `
                        <tr class="border-b border-gray-200 p-5">
                            <td>${carFullData.name}</td>
                            <td>${car[0].toFixed(3)}</td>
                            <td>${car[1].toFixed(3)}</td>
                            <td>${car[2].toFixed(3)}</td>
                            <td>${car[3].toFixed(3)}</td>
                            <td>${car[4].toFixed(3)}</td>
                        </tr>
                    `;
                }).join('')}
            `;

            const thirdStepMatrix = document.getElementById('third-step-matrix');
            thirdStepMatrix.innerHTML = `
                ${carThirdStepScores.map((car, index) => {
                    const carFullData = cars[index];
                    return `
                        <tr class="border-b border-gray-200 p-5">
                            <td>${carFullData.name}</td>
                            <td>${car[0].toFixed(3)}</td>
                            <td>${car[1].toFixed(3)}</td>
                            <td>${car[2].toFixed(3)}</td>
                            <td>${car[3].toFixed(3)}</td>
                            <td>${car[4].toFixed(3)}</td>
                        </tr>
                    `;
                }).join('')}
            `;

            const finalStepMatrix = document.getElementById('final-step-matrix');
            finalStepMatrix.innerHTML = `
                ${carFinalScores.map((score, index) => {
                    const carFullData = cars[index];
                    return `
                        <tr class="border-b border-gray-200 p-5">
                            <td>${carFullData.name}</td>
                            <td>${score.toFixed(3)}</td>
                        </tr>
                    `;
                }).join('')}
            `;

            const topStepMatrix = document.getElementById('top-step-matrix');
            topStepMatrix.innerHTML = `
                ${
                    // get final step matrix and sort it 
                    carFinalScores.map((score, index) => {
                        const carFullData = cars[index];
                        return {
                            uuid: carFullData.uuid,
                            name: carFullData.name,
                            score: score.toFixed(3),
                        }
                    }).sort((a, b) => b.score - a.score).map((car, index) => {
                        return `
                            <tr class="border-b border-gray-200 p-5">
                                <td>${car.name}</td>
                                <td>${car.score}</td>
                                <td>${index + 1}</td>
                            </tr>
                        `;
                    }).join('')
                }
            `;

        }


        const carElement = (carUuid, rank, score) => {
            const car = cars.find(car => car.uuid === carUuid);
            console.log(car);
            const {
                image,
                name,
                price,
                usage_age,
                release_date,
                first_registration_date,
                fuel_type,
                type,
                kilometer_used,
                fuel_efficiency,
                warranty_showroom,
            } = car;
            
            return `
            <li class="w-full border shadow-sm border-gray-200 flex justify-start gap-0 md:gap-5">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-5">
                    <div class="w-full flex justify-center items-center relative overflow-hidden">
                        <div class="absolute top-1/4 left-5 text-[10rem] font-extrabold text-black/10">${rank}.</div>
                        <img src="${image}" alt="image" class="max-w-sm rounded">
                    </div>
                    <div class="w-full p-5">
                        <h3 class="text-2xl">${name} (score : ${score})</h3>
                        <h5 class="text-gray-500"/10h5>
                        <div class="grid grid-cols-2 lg:grid-cols-3 gap-5 mt-3">
                            <div>
                                <div class="bg-white rounded-lg p-3">
                                    <h5 class="mb-1 mt-2">Tanggal Rilis</h5>
                                    <p class="mb-2 text-gray-500">${formatDateIndonesian(release_date)}</p>
                                </div>
                            </div>
                            <div>
                                <div class="bg-white rounded-lg p-3">
                                    <h5 class="mb-1 mt-2">Mulai Dipakai</h5>
                                    <p class="mb-2 text-gray-500">${formatDateIndonesian(first_registration_date)}</p>
                                </div>
                            </div>
                            <div>
                                <div class="bg-white rounded-lg p-3">
                                    <h5 class="mb-1 mt-2">Tipe Bensin</h5>
                                    <p class="mb-2 text-gray-500">${fuel_type}</p>
                                </div>
                            </div>
                            <div>
                                <div class="bg-white rounded-lg p-3">
                                    <h5 class="mb-1 mt-2">Tipe Transmisi</h5>
                                    <p class="mb-2 text-gray-500">${type}</p>
                                </div>
                            </div>
                            <div>
                                <div class="bg-white rounded-lg p-3">
                                    <h5 class="mb-1 mt-2">Kilometer Digunakan</h5>
                                    <p class="mb-2 text-gray-500">${kilometer_used} Km</p>
                                </div>
                            </div>
                            <div>
                                <div class="bg-white rounded-lg p-3">
                                    <h5 class="mb-1 mt-2">Efisiensi Bensin</h5>
                                    <p class="mb-2 text-gray-500">${fuel_efficiency} Kilometer/liter</p>
                                </div>
                            </div>
                            <div>
                                <div class="bg-white rounded-lg p-3">
                                    <h5 class="mb-1 mt-2">Garansi Showroom</h5>
                                    <p class="mb-2 text-gray-500">${formatDateIndonesian(warranty_showroom)}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            `;
        }



    </script>
</body>

</html>
