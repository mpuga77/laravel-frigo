@extends('layouts.main')

@section('content')
    <section class="container relative mx-auto -mt-14 carousel" style="max-width:1920px;">
        <div class="relative w-full overflow-hidden carousel-inner">
            <!--Slide 1-->
            <input class="carousel-open" type="radio" id="carousel-1" name="carousel" aria-hidden="true" hidden=""
                checked="checked">

            <div class="absolute opacity-0 carousel-item" style="height:70vh;">
                <div class="flex items-center w-full h-full pt-6 mx-auto bg-right bg-cover"
                    style="background-image: url('{{ asset('images/p1.jpg') }}');">
                    <div class="w-full">
                        <div class="px-6 mx-auto tracking-wide text-center text-white sm:w-1/2">
                            <h4 class="mb-2 text-lg font-semibold text-white uppercase">Traditional & Delicious</h4>
                            <p class="mb-8 text-5xl font-extrabold text-white">Stripy Zig Zag Jigsaw Pillow and Duvet Set
                            </p>
                            <a href="#"
                                class="px-4 py-2 font-bold bg-pink-400 rounded-full shadow-lg text-gray-50 hover:text-pink-200 hover:bg-pink-600">Read
                                more</a>
                        </div>
                    </div>
                </div>
            </div>

            <label for="carousel-3"
                class="absolute inset-y-0 left-0 z-10 hidden w-8 h-8 my-auto ml-2 leading-tight text-center rounded-full cursor-pointer prev control-1 md:ml-8 hover:text-white bg-gray-50 hover:bg-pink-900">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-6 h-6 m-1">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5 8.25 12l7.5-7.5" />
                </svg>
            </label>
            <label for="carousel-2"
                class="absolute inset-y-0 right-0 z-10 hidden w-8 h-8 my-auto mr-2 leading-tight text-center rounded-full cursor-pointer next control-1 md:mr-8 hover:text-white bg-gray-50 hover:bg-pink-900">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-6 h-6 m-1">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                </svg>
            </label>

            <!--Slide 2-->
            <input class="carousel-open" type="radio" id="carousel-2" name="carousel" aria-hidden="true" hidden="">
            <div class="absolute bg-right bg-cover opacity-0 carousel-item" style="height:70vh;">
                <div class="flex w-full h-full pt-6 mx-auto bg-right bg-cover md:pt-0 md:items-center"
                    style="background-image: url('{{ asset('images/s1.jpg') }}');">
                    <div class="w-full">
                        <div class="px-6 mx-auto tracking-wide text-center text-white md:w-1/2">
                            <h4 class="mb-2 text-lg font-semibold text-white uppercase">Traditional & Delicious</h4>
                            <p class="mb-8 text-5xl font-extrabold text-white">Real Bamboo Wall Clock</p>
                            <a href="#"
                                class="px-4 py-2 font-bold bg-pink-400 rounded-full text-gray-50 hover:text-pink-200 hover:bg-pink-600">Read
                                more</a>
                        </div>
                    </div>
                </div>
            </div>

            <label for="carousel-1"
                class="absolute inset-y-0 left-0 z-10 hidden w-8 h-8 my-auto ml-2 leading-tight text-center rounded-full cursor-pointer prev control-2 md:ml-8 hover:text-white bg-gray-50 hover:bg-pink-900">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-6 h-6 m-1">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5 8.25 12l7.5-7.5" />
                </svg>
            </label>
            <label for="carousel-3"
                class="absolute inset-y-0 right-0 z-10 hidden w-8 h-8 my-auto mr-2 leading-tight text-center rounded-full cursor-pointer next control-2 md:mr-8 hover:text-white bg-gray-50 hover:bg-pink-900">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-6 h-6 m-1">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                </svg>
            </label>

            <!--Slide 3-->
            <input class="carousel-open" type="radio" id="carousel-3" name="carousel" aria-hidden="true" hidden="">
            <div class="absolute opacity-0 carousel-item" style="height:70vh;">
                <div class="flex w-full h-full pt-6 mx-auto bg-bottom bg-cover md:pt-0 md:items-center"
                    style="background-image: url('{{ asset('images/b1.jpg') }}'); background-position: top;">
                    <div class="w-full">
                        <div class="px-6 mx-auto tracking-wide text-center text-white md:w-1/2">
                            <h4 class="mb-2 text-lg font-semibold text-white uppercase">Traditional & Delicious</h4>
                            <p class="mb-8 text-5xl font-extrabold text-white">Brown and blue hardbound book</p>
                            <a href="#"
                                class="px-4 py-2 font-bold bg-pink-400 rounded-full text-gray-50 hover:text-sky-200 hover:bg-pink-600">Read
                                more</a>
                        </div>
                    </div>
                </div>
            </div>

            <label for="carousel-2"
                class="absolute inset-y-0 left-0 z-10 hidden w-8 h-8 my-auto ml-2 leading-tight text-center rounded-full cursor-pointer prev control-3 md:ml-8 hover:text-white bg-gray-50 hover:bg-pink-900">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-6 h-6 m-1">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5 8.25 12l7.5-7.5" />
                </svg>

            </label>
            <label for="carousel-1"
                class="absolute inset-y-0 right-0 z-10 hidden w-8 h-8 my-auto mr-2 leading-tight text-center rounded-full cursor-pointer next control-3 md:mr-8 hover:text-white bg-gray-50 hover:bg-pink-900">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-6 h-6 m-1">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                </svg>
            </label>

            <!-- Add additional indicators for each slide-->
            <ol class="carousel-indicators">
                <li class="inline-block mr-3">
                    <label for="carousel-1"
                        class="block text-4xl text-gray-200 cursor-pointer carousel-bullet hover:text-pink-900">•</label>
                </li>
                <li class="inline-block mr-3">
                    <label for="carousel-2"
                        class="block text-4xl text-gray-200 cursor-pointer carousel-bullet hover:text-pink-900">•</label>
                </li>
                <li class="inline-block mr-3">
                    <label for="carousel-3"
                        class="block text-4xl text-gray-200 cursor-pointer carousel-bullet hover:text-pink-900">•</label>
                </li>
            </ol>

        </div>
    </section>



    <section class="bg-white my-28">
        <div class="max-w-screen-xl px-2 mx-auto lg:px-6">
            <div class="text-center">
                <div class="w-32 h-1 mx-auto mb-6 bg-pink-500"></div>
                <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Taditional Ice Cream</h2>
                <p class="max-w-2xl mx-auto text-xl text-gray-500 sm:my-6">
                    This is your life and it's ending one minute @ a time...</p>
            </div>
            <div class="grid grid-cols-1 gap-4 mt-12 sm:grid-cols-2 md:grid-cols-6">
                <div class="col-span-2 px-4 my-auto sm:col-span-1 md:col-span-2">

                    <h2 class="text-3xl font-bold text-gray-900">About Us</h2>
                    <h3 class="py-2 text-lg font-semibold text-gray-400">Lorem ipsum, dolor sit amet consectetur
                        adipisicing elit. Odit voluptates laborum nisi beatae. Illum fugiat accusamus...</h3>
                    <p class="mb-6">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Odit voluptates laborum
                        nisi beatae. Illum fugiat accusamus ipsum placeat autem veniam, ducimus error, dignissimos maxime
                        nulla eos sequi quibusdam inventore quis!</p>

                    <a href="#"
                        class="px-4 py-2 font-bold rounded-full shadow-lg bg-sky-400 text-gray-50 hover:text-sky-200 hover:bg-pink-400">Read
                        more</a>

                </div>
                <div class="col-span-2 sm:col-span-1 md:col-span-2">

                    <img src="{{ asset('images/ab3.jpg') }}" alt="imaxe" class="object-cover w-full h-full">

                </div>
                <div class="col-span-2 px-4 my-auto sm:col-span-1 md:col-span-2">
                    <h2 class="text-3xl font-bold text-gray-900">Our Products</h2>
                    <p class="py-2">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Odit voluptates laborum
                        nisi beatae. Illum fugiat accusamus ipsum placeat autem veniam, ducimus error, dignissimos maxime
                        nulla eos sequi quibusdam inventore quis!</p>
                    <ul class="flex flex-col mb-6 text-lg font-semibold text-gray-400">
                        <li class="inline-flex"><svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 24 24" stroke-width="1.5" stroke="green" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                            </svg> Odit voluptates laborum</li>
                        <li class="inline-flex"><svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 24 24" stroke-width="1.5" stroke="green" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                            </svg> Lorem ipsum, dolor</li>
                        <li class="inline-flex"><svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 24 24" stroke-width="1.5" stroke="green" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                            </svg> Illum fugiat accusamus</li>
                    </ul>
                    <a href="#"
                        class="px-4 py-2 font-bold bg-pink-400 rounded-full shadow-lg text-gray-50 hover:text-pink-200 hover:bg-sky-400">Read
                        more</a>
                </div>
            </div>
        </div>
    </section>


    <section class="sm:flex">
        <div class="w-full sm:w-1/2">
            <video autoplay muted loop playsinline poster="{{ asset('images/blg2.jpg') }}"
                class="object-cover w-full h-full">
                <source src="{{ asset('video/eff0a8d5.webm') }}" type="video/webm">
                <source src="{{ asset('video/eff0a8d5.mp4') }}" type="video/mp4">
            </video>
            {{-- <img src="{{ asset('images/blg2.jpg') }}" alt="imaxe" class="object-cover w-full h-full"> --}}
        </div>

        <div class="flex flex-col w-full bg-pink-400 sm:w-1/2 px-14">
            <div class="py-12">
                <div class="my-auto text-center">
                    <div
                        class="w-24 px-3 mx-auto text-4xl font-extrabold tracking-tighter rounded-full shadow-lg py-7 bg-yellow-50 text-sky-600">
                        9.5&euro;</div>
                    <h3 class="py-3 text-2xl font-bold tracking-tighter text-gray-50">Chocolate Ice Cream</h3>
                    <p class="mb-8 text-lg text-white">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Deserunt,
                        enim
                        fuga earum error, assumenda
                        dignissimos!</p>
                    <a
                        class="px-6 py-3 mx-auto mt-4 text-lg font-semibold text-white rounded-full shadow-lg bg-sky-400 hover:text-pink-200 hover:bg-pink-600">Buy
                        Now!</a>
                </div>
            </div>
        </div>
    </section>

    <main class="mt-0">
        <!-- cards -->
        <div class="relative px-6 pt-10 pb-20 bg-gray-50 lg:px-8 lg:pt-24 lg:pb-28">

            <div class="relative mx-auto max-w-7xl">
                <div class="text-left">
                    <div class="w-32 h-1 mb-3 bg-pink-500"></div>
                    <h2 class="text-2xl font-bold tracking-tight text-gray-900 sm:text-4xl">Best Services We Provide<br>For
                        Our Clients
                    </h2>
                    <p class="max-w-2xl mt-3 text-xl text-gray-500 sm:mt-4">
                        This is your life and it's ending one minute @ a time...</p>
                </div>
                <div class="grid max-w-lg gap-5 mx-auto mt-12 lg:max-w-none lg:grid-cols-3">

                    <div class="flex flex-col overflow-hidden rounded-lg shadow-lg">
                        <div class="flex-shrink-0">
                            <img class="object-cover w-full h-48"
                                src="https://images.unsplash.com/photo-1496128858413-b36217c2ce36?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=1679&amp;q=80"
                                alt="">
                        </div>
                        <div class="flex flex-col justify-between flex-1 p-6 bg-white">
                            <div class="flex-1">
                                <p class="text-sm font-medium text-indigo-600">
                                    <a href="#" class="hover:underline">Article</a>
                                </p>
                                <a href="#" class="block mt-2">
                                    <p class="text-xl font-semibold text-gray-900">Boost your conversion rate</p>
                                    <p class="mt-3 text-base text-gray-500">Lorem ipsum dolor sit amet consectetur
                                        adipisicing elit.
                                        Architecto accusantium praesentium eius, ut atque fuga culpa, similique sequi cum
                                        eos quis dolorum.</p>
                                </a>
                            </div>
                            <div class="flex items-center mt-6">
                                <div class="flex-shrink-0">
                                    <a href="#">
                                        <span class="sr-only">Roel Aufderehar</span>
                                        <img class="w-10 h-10 rounded-full"
                                            src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=2&amp;w=256&amp;h=256&amp;q=80"
                                            alt="">
                                    </a>
                                </div>
                                <div class="ml-3">
                                    <p class="text-sm font-medium text-gray-900">
                                        <a href="#" class="hover:underline">Roel Aufderehar</a>
                                    </p>
                                    <div class="flex space-x-1 text-sm text-gray-500">
                                        <time datetime="2020-03-16">Mar 16, 2020</time>
                                        <span aria-hidden="true">·</span>
                                        <span>6 min read</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="flex flex-col overflow-hidden rounded-lg shadow-lg">
                        <div class="flex-shrink-0">
                            <img class="object-cover w-full h-48"
                                src="https://images.unsplash.com/photo-1547586696-ea22b4d4235d?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=1679&amp;q=80"
                                alt="">
                        </div>
                        <div class="flex flex-col justify-between flex-1 p-6 bg-white">
                            <div class="flex-1">
                                <p class="text-sm font-medium text-indigo-600">
                                    <a href="#" class="hover:underline">Video</a>
                                </p>
                                <a href="#" class="block mt-2">
                                    <p class="text-xl font-semibold text-gray-900">How to use search engine optimization to
                                        drive sales</p>
                                    <p class="mt-3 text-base text-gray-500">Lorem ipsum dolor sit amet consectetur
                                        adipisicing elit. Velit
                                        facilis asperiores porro quaerat doloribus, eveniet dolore. Adipisci tempora aut
                                        inventore optio animi.,
                                        tempore temporibus quo laudantium.</p>
                                </a>
                            </div>
                            <div class="flex items-center mt-6">
                                <div class="flex-shrink-0">
                                    <a href="#">
                                        <span class="sr-only">Brenna Goyette</span>
                                        <img class="w-10 h-10 rounded-full"
                                            src="https://images.unsplash.com/photo-1550525811-e5869dd03032?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=2&amp;w=256&amp;h=256&amp;q=80"
                                            alt="">
                                    </a>
                                </div>
                                <div class="ml-3">
                                    <p class="text-sm font-medium text-gray-900">
                                        <a href="#" class="hover:underline">Brenna Goyette</a>
                                    </p>
                                    <div class="flex space-x-1 text-sm text-gray-500">
                                        <time datetime="2020-03-10">Mar 10, 2020</time>
                                        <span aria-hidden="true">·</span>
                                        <span>4 min read</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="flex flex-col overflow-hidden rounded-lg shadow-lg">
                        <div class="flex-shrink-0">
                            <img class="object-cover w-full h-48"
                                src="https://images.unsplash.com/photo-1492724441997-5dc865305da7?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=1679&amp;q=80"
                                alt="">
                        </div>
                        <div class="flex flex-col justify-between flex-1 p-6 bg-white">
                            <div class="flex-1">
                                <p class="text-sm font-medium text-indigo-600">
                                    <a href="#" class="hover:underline">Case Study</a>
                                </p>
                                <a href="#" class="block mt-2">
                                    <p class="text-xl font-semibold text-gray-900">Improve your customer experience</p>
                                    <p class="mt-3 text-base text-gray-500">Lorem ipsum dolor sit amet consectetur
                                        adipisicing elit. Sint
                                        harum rerum voluptatem quo recusandae magni placeat saepe molestiae, sed excepturi
                                        cumque corporis
                                        perferendis hic.</p>
                                </a>
                            </div>
                            <div class="flex items-center mt-6">
                                <div class="flex-shrink-0">
                                    <a href="#">
                                        <span class="sr-only">Daniela Metz</span>
                                        <img class="w-10 h-10 rounded-full"
                                            src="https://images.unsplash.com/photo-1487412720507-e7ab37603c6f?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=2&amp;w=256&amp;h=256&amp;q=80"
                                            alt="">
                                    </a>
                                </div>
                                <div class="ml-3">
                                    <p class="text-sm font-medium text-gray-900">
                                        <a href="#" class="hover:underline">Daniela Metz</a>
                                    </p>
                                    <div class="flex space-x-1 text-sm text-gray-500">
                                        <time datetime="2020-02-12">Feb 12, 2020</time>
                                        <span aria-hidden="true">·</span>
                                        <span>11 min read</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
       







    </main>

    <section class="my-12 bg-white">
        <div class="max-w-screen-xl mx-auto">
            <div class="text-left">
                <div class="w-32 h-1 mb-3 bg-pink-500"></div>
                <h2 class="text-2xl font-bold tracking-tight text-gray-900 sm:text-4xl">For Our
                    Clients
                </h2>
                <p class="max-w-2xl mt-3 text-xl text-gray-500 sm:mt-4">
                    This is your life and it's ending one minute @ a time...</p>
            </div>

            <div class="flex items-center justify-end w-full h-full px-0 py-1">
                <button aria-label="slide backward"
                    class="px-3 py-2 text-pink-500 rounded-full focus:outline-none hover:bg-pink-50" id="prev">
                    <svg class="dark:text-gray-900" width="8" height="14" viewBox="0 0 8 14" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path d="M7 1L1 7L7 13" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" />
                    </svg>
                </button>
                <button aria-label="slide forward"
                    class="px-3 py-2 text-pink-500 rounded-full focus:outline-none hover:bg-pink-50" id="next">
                    <svg class="dark:text-gray-900" width="8" height="14" viewBox="0 0 8 14" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path d="M1 1L7 7L1 13" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" />
                    </svg>
                </button>
            </div>
            <div class="flex items-center justify-center w-full h-full px-0 py-2 mt-3">
                <div class="relative flex items-center justify-center w-full">
                    <div class="w-full h-full mx-auto overflow-x-hidden overflow-y-hidden">
                        <div id="slider"
                            class="flex items-center justify-start h-full transition duration-700 ease-out lg:gap-8 md:gap-6 gap-14">

                            @foreach ($products as $product)
                                <div class="relative flex flex-shrink-0 w-full sm:w-auto">
                                    <img src="{{ asset('images/' . $product->image) }}" alt="ice cream"
                                        class="object-cover object-center w-full" />
                                    <div class="absolute w-full h-full p-6">
                                        <h2 class="py-4 text-xl font-semibold leading-4 text-white">
                                            <a class="text-2xl tracking-tighter text-pink-100 uppercase hover:text-pink-600"
                                                href="{{ route('single_product', ['id' => $product->id]) }}">
                                                {{ $product->name }}
                                            </a>
                                        </h2>
                                        @if ($product->sale_price != null)
                                            <h4
                                                class="inline text-2xl font-bold leading-4 text-pink-400 hover:text-pink-600">
                                                {{ $product->sale_price }}&euro;</h4>
                                            <h4 class="inline text-2xl leading-4 text-slate-500"
                                                style="text-decoration:line-through;">{{ $product->price }}&euro;</h4>
                                        @else
                                            <h4
                                                class="inline text-2xl font-bold leading-4 text-pink-400 hover:text-pink-600">
                                                {{ $product->price }}&euro;
                                            </h4>
                                        @endif
                                        <div class="flex items-end h-5/6">
                                           
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        </div>
    </section>
    <script>
        /** Slider configuration */
        const slideWidth = 309;
        const transitionDuration = 0.7; // in seconds
        const slider = document.getElementById("slider");
        const slides = document.querySelectorAll("#slider > div");
        const totalSlides = slides.length;
        const clonedSlides = [];

        // Clone slides and append them to the slider
        slides.forEach(slide => {
            const clone = slide.cloneNode(true);
            clonedSlides.push(clone);
            slider.appendChild(clone);
        });

        // Set the initial position of the slider to the middle to avoid initial jump
        const initialTransform = -(slideWidth * totalSlides / 2);
        slider.style.transform = `translateX(${initialTransform}px)`;

        /** Function to move the slider */
        function moveSlider(direction) {
            let defaultTransform = parseInt(slider.style.transform.replace("translateX(", "").replace("px)", "")) ||
                initialTransform;
            if (direction === "next") {
                defaultTransform -= slideWidth;
            } else if (direction === "prev") {
                defaultTransform += slideWidth;
            }
            // Check if reaching the end or beginning
            if (defaultTransform <= -(slideWidth * (totalSlides * 2 - 1))) {
                defaultTransform += slideWidth * totalSlides;
            } else if (defaultTransform >= 0) {
                defaultTransform -= slideWidth * totalSlides;
            }
            slider.style.transition = `transform ${transitionDuration}s ease-in-out`;
            slider.style.transform = `translateX(${defaultTransform}px)`;
        }

        /** Event listeners for buttons */
        next.addEventListener("click", () => moveSlider("next"));
        prev.addEventListener("click", () => moveSlider("prev"));
    </script>
@endsection
