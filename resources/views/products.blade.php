@extends('layouts.main')

@section('content')
    <section class="py-8 bg-white">

        <div class="relative pt-12 mx-auto max-w-7xl">
            <div class="text-center">
                <div class="w-32 h-1 mx-auto mb-6 bg-pink-500">{{--liña rosa de separador--}}</div>
                <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Delicious Ice Cream</h2>
                <p class="max-w-2xl mx-auto mt-3 text-xl text-gray-500 sm:mt-4">
                    This is your life and it's ending one minute @ a time...</p>
            </div>
        </div>

        <div class="container flex flex-wrap mx-auto">

           
            <nav id="store" class="top-0 z-30 w-full px-6 py-1">
                <div class="container flex flex-wrap items-center justify-between w-full px-2 py-3 mx-auto mt-0">                   

                    <div class="flex items-center" id="store-nav-content">

                        <a class="inline-block pl-3 no-underline hover:text-black" href="#">
                            <svg class="fill-current hover:text-black" xmlns="http://www.w3.org/2000/svg" width="24"
                                height="24" viewBox="0 0 24 24">
                                <path d="M7 11H17V13H7zM4 7H20V9H4zM10 15H14V17H10z" />
                            </svg>
                        </a>

                        <a class="inline-block pl-3 no-underline hover:text-black" href="#">
                            <svg class="fill-current hover:text-black" xmlns="http://www.w3.org/2000/svg" width="24"
                                height="24" viewBox="0 0 24 24">
                                <path
                                    d="M10,18c1.846,0,3.543-0.635,4.897-1.688l4.396,4.396l1.414-1.414l-4.396-4.396C17.365,13.543,18,11.846,18,10 c0-4.411-3.589-8-8-8s-8,3.589-8,8S5.589,18,10,18z M10,4c3.309,0,6,2.691,6,6s-2.691,6-6,6s-6-2.691-6-6S6.691,4,10,4z" />
                            </svg>
                        </a>

                    </div>
                </div>
            </nav>
            <!-- Products-->
            <div class="relative px-6 pt-1 pb-20 lg:px-8 lg:pt-24 lg:pb-28 mx-auto">
                <div class="grid max-w-lg gap-5 mx-auto lg:max-w-none lg:grid-cols-4 md:grid-cols-3">
                    @foreach ($products as $product)
                        <div class="w-full p-0 hover:bg-pink-100 shadow-lg rounded-lg">
                            <a href="{{ route('single_product', ['id' => $product->id]) }}"
                                class="flex flex-col overflow-hidden rounded-lg shadow-lg hover:text-pink-700">
                                <img class="transform transition duration-500 hover:scale-125 justify-center items-center hover:shadow-lg" src="{{ asset('images/' . $product->image) }}">
                                <div class="flex items-center justify-between px-3 py-2">
                                    <p class="w-3/4 pl-2 text-xl font-bold">
                                        <a class="text-pink-800 hover:text-pink-600 tracking-tighter uppercase"
                                            href="{{ route('single_product', ['id' => $product->id]) }}">
                                            {{ $product->name }}
                                        </a>
                                    <p class="flex justify-end w-1/4"><svg
                                            class="w-6 h-6 text-gray-500 fill-current hover:text-pink-500"
                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                            <path
                                                d="M12,4.595c-1.104-1.006-2.512-1.558-3.996-1.558c-1.578,0-3.072,0.623-4.213,1.758c-2.353,2.363-2.352,6.059,0.002,8.412 l7.332,7.332c0.17,0.299,0.498,0.492,0.875,0.492c0.322,0,0.609-0.163,0.792-0.409l7.415-7.415 c2.354-2.354,2.354-6.049-0.002-8.416c-1.137-1.131-2.631-1.754-4.209-1.754C14.513,3.037,13.104,3.589,12,4.595z M18.791,6.205 c1.563,1.571,1.564,4.025,0.002,5.588L12,18.586l-6.793-6.793C3.645,10.23,3.646,7.776,5.205,6.209 c0.76-0.756,1.754-1.172,2.799-1.172s2.035,0.416,2.789,1.17l0.5,0.5c0.391,0.391,1.023,0.391,1.414,0l0.5-0.5 C14.719,4.698,17.281,4.702,18.791,6.205z" />
                                        </svg></p>
                                </div>
                                @if ($product->sale_price != null)
                                    <h4 class="pl-5 text-2xl font-bold leading-4 text-pink-400 hover:text-pink-600">
                                        {{ $product->sale_price }}&euro;<em class="pl-2 text-2xl font-medium text-gray-200 line-through">
                                            {{ $product->price }}&euro;</em></h4>
                                @else
                                    <h4 class="pl-5 text-2xl font-bold leading-4 text-pink-400 hover:text-pink-600">
                                        {{ $product->price }}&euro;</h4>
                                @endif
                            </a>

                            <div>
                                <form method="POST" action="{{ route('add_to_cart') }}" class="flex items-center justify-center">
                                    @csrf <!-- identifica el form como unico, de origen fiable, marca el tiempo en que se envia. Es una medida de seguridad -->
                                    <!-- con @csrf aseguramos la verfivicacion en cliente y en servidor -->
                                    <input type="hidden" name="id" value="{{ $product->id }}">
                                    <input type="hidden" name="name" value="{{ $product->name }}">
                                    <input type="hidden" name="price" value="{{ $product->price }}">
                                    <input type="hidden" name="sale_price" value="{{ $product->sale_price }}">

                                    <input type="hidden" name="quantity" value="1">
                                    <input type="hidden" name="image" value="{{ $product->image }}">
                                    <input type="submit" value="add to cart"
                                        class="relative text-base font-medium leading-3 text-white pt-2 pb-3 px-4 mt-4 mb-5 bg-pink-500 rounded-full hover:bg-pink-800 hover:text-pink-200 shadow-lg">
                                </form>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            {{--             <div class="w-full p-2 sm:w-1/2 md:w-1/3 lg:w-1/4 xl:w-1/4">
                <a href="#"
                    class="flex flex-col overflow-hidden rounded-lg shadow-lg hover:bg-pink-300 hover:text-pink-700">
                    <img class="hover:grow hover:shadow-lg" src="{{ asset('images/ab2.jpg') }}">
                    <div class="flex items-center justify-between px-3 py-2">
                        <p class="w-1/2 pl-2 text-lg font-medium">Product Name</p>
                        <p class="flex justify-end w-1/2"><svg class="w-6 h-6 text-gray-500 fill-current hover:text-black"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                <path
                                    d="M12,4.595c-1.104-1.006-2.512-1.558-3.996-1.558c-1.578,0-3.072,0.623-4.213,1.758c-2.353,2.363-2.352,6.059,0.002,8.412 l7.332,7.332c0.17,0.299,0.498,0.492,0.875,0.492c0.322,0,0.609-0.163,0.792-0.409l7.415-7.415 c2.354-2.354,2.354-6.049-0.002-8.416c-1.137-1.131-2.631-1.754-4.209-1.754C14.513,3.037,13.104,3.589,12,4.595z M18.791,6.205 c1.563,1.571,1.564,4.025,0.002,5.588L12,18.586l-6.793-6.793C3.645,10.23,3.646,7.776,5.205,6.209 c0.76-0.756,1.754-1.172,2.799-1.172s2.035,0.416,2.789,1.17l0.5,0.5c0.391,0.391,1.023,0.391,1.414,0l0.5-0.5 C14.719,4.698,17.281,4.702,18.791,6.205z" />
                            </svg></p>
                    </div>
                    <p class="pb-3 pl-5 text-lg font-medium text-pink-800">£9.99</p>
                </a>
            </div>

            <div class="w-full p-2 sm:w-1/2 md:w-1/3 lg:w-1/4 xl:w-1/4">
                <a href="#"
                    class="flex flex-col overflow-hidden rounded-lg shadow-lg hover:bg-pink-300 hover:text-pink-700">
                    <img class="hover:grow hover:shadow-lg" src="{{ asset('images/ab3.jpg') }}">
                    <div class="flex items-center justify-between px-3 py-2">
                        <p class="w-1/2 pl-2 text-lg font-medium">Product Name</p>
                        <p class="flex justify-end w-1/2"><svg class="w-6 h-6 text-gray-500 fill-current hover:text-black"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                <path
                                    d="M12,4.595c-1.104-1.006-2.512-1.558-3.996-1.558c-1.578,0-3.072,0.623-4.213,1.758c-2.353,2.363-2.352,6.059,0.002,8.412 l7.332,7.332c0.17,0.299,0.498,0.492,0.875,0.492c0.322,0,0.609-0.163,0.792-0.409l7.415-7.415 c2.354-2.354,2.354-6.049-0.002-8.416c-1.137-1.131-2.631-1.754-4.209-1.754C14.513,3.037,13.104,3.589,12,4.595z M18.791,6.205 c1.563,1.571,1.564,4.025,0.002,5.588L12,18.586l-6.793-6.793C3.645,10.23,3.646,7.776,5.205,6.209 c0.76-0.756,1.754-1.172,2.799-1.172s2.035,0.416,2.789,1.17l0.5,0.5c0.391,0.391,1.023,0.391,1.414,0l0.5-0.5 C14.719,4.698,17.281,4.702,18.791,6.205z" />
                            </svg></p>
                    </div>
                    <p class="pb-3 pl-5 text-lg font-medium text-pink-800">£9.99</p>
                </a>
            </div>

            <div class="w-full p-2 sm:w-1/2 md:w-1/3 lg:w-1/4 xl:w-1/4">
                <a href="#"
                    class="flex flex-col overflow-hidden rounded-lg shadow-lg hover:bg-pink-300 hover:text-pink-700">
                    <img class="hover:grow hover:shadow-lg" src="{{ asset('images/ab4.jpg') }}">
                    <div class="flex items-center justify-between px-3 py-2">
                        <p class="w-1/2 pl-2 text-lg font-medium">Product Name</p>
                        <p class="flex justify-end w-1/2"><svg class="w-6 h-6 text-gray-500 fill-current hover:text-black"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                <path
                                    d="M12,4.595c-1.104-1.006-2.512-1.558-3.996-1.558c-1.578,0-3.072,0.623-4.213,1.758c-2.353,2.363-2.352,6.059,0.002,8.412 l7.332,7.332c0.17,0.299,0.498,0.492,0.875,0.492c0.322,0,0.609-0.163,0.792-0.409l7.415-7.415 c2.354-2.354,2.354-6.049-0.002-8.416c-1.137-1.131-2.631-1.754-4.209-1.754C14.513,3.037,13.104,3.589,12,4.595z M18.791,6.205 c1.563,1.571,1.564,4.025,0.002,5.588L12,18.586l-6.793-6.793C3.645,10.23,3.646,7.776,5.205,6.209 c0.76-0.756,1.754-1.172,2.799-1.172s2.035,0.416,2.789,1.17l0.5,0.5c0.391,0.391,1.023,0.391,1.414,0l0.5-0.5 C14.719,4.698,17.281,4.702,18.791,6.205z" />
                            </svg></p>
                    </div>
                    <p class="pb-3 pl-5 text-lg font-medium text-pink-800">£9.99</p>
                </a>
            </div>

            <div class="w-full p-2 sm:w-1/2 md:w-1/3 lg:w-1/4 xl:w-1/4">
                <a href="#"
                    class="flex flex-col overflow-hidden rounded-lg shadow-lg hover:bg-pink-300 hover:text-pink-700">
                    <img class="hover:grow hover:shadow-lg" src="{{ asset('images/ab5.jpg') }}">
                    <div class="flex items-center justify-between px-3 py-2">
                        <p class="w-1/2 pl-2 text-lg font-medium">Product Name</p>
                        <p class="flex justify-end w-1/2"><svg class="w-6 h-6 text-gray-500 fill-current hover:text-black"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                <path
                                    d="M12,4.595c-1.104-1.006-2.512-1.558-3.996-1.558c-1.578,0-3.072,0.623-4.213,1.758c-2.353,2.363-2.352,6.059,0.002,8.412 l7.332,7.332c0.17,0.299,0.498,0.492,0.875,0.492c0.322,0,0.609-0.163,0.792-0.409l7.415-7.415 c2.354-2.354,2.354-6.049-0.002-8.416c-1.137-1.131-2.631-1.754-4.209-1.754C14.513,3.037,13.104,3.589,12,4.595z M18.791,6.205 c1.563,1.571,1.564,4.025,0.002,5.588L12,18.586l-6.793-6.793C3.645,10.23,3.646,7.776,5.205,6.209 c0.76-0.756,1.754-1.172,2.799-1.172s2.035,0.416,2.789,1.17l0.5,0.5c0.391,0.391,1.023,0.391,1.414,0l0.5-0.5 C14.719,4.698,17.281,4.702,18.791,6.205z" />
                            </svg></p>
                    </div>
                    <p class="pb-3 pl-5 text-lg font-medium text-pink-800">£9.99</p>
                </a>
            </div>

            <div class="w-full p-2 sm:w-1/2 md:w-1/3 lg:w-1/4 xl:w-1/4">
                <a href="#"
                    class="flex flex-col overflow-hidden rounded-lg shadow-lg hover:bg-pink-300 hover:text-pink-700">
                    <img class="hover:grow hover:shadow-lg" src="{{ asset('images/ab6.jpg') }}">
                    <div class="flex items-center justify-between px-3 py-2">
                        <p class="w-1/2 pl-2 text-lg font-medium">Product Name</p>
                        <p class="flex justify-end w-1/2"><svg class="w-6 h-6 text-gray-500 fill-current hover:text-black"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                <path
                                    d="M12,4.595c-1.104-1.006-2.512-1.558-3.996-1.558c-1.578,0-3.072,0.623-4.213,1.758c-2.353,2.363-2.352,6.059,0.002,8.412 l7.332,7.332c0.17,0.299,0.498,0.492,0.875,0.492c0.322,0,0.609-0.163,0.792-0.409l7.415-7.415 c2.354-2.354,2.354-6.049-0.002-8.416c-1.137-1.131-2.631-1.754-4.209-1.754C14.513,3.037,13.104,3.589,12,4.595z M18.791,6.205 c1.563,1.571,1.564,4.025,0.002,5.588L12,18.586l-6.793-6.793C3.645,10.23,3.646,7.776,5.205,6.209 c0.76-0.756,1.754-1.172,2.799-1.172s2.035,0.416,2.789,1.17l0.5,0.5c0.391,0.391,1.023,0.391,1.414,0l0.5-0.5 C14.719,4.698,17.281,4.702,18.791,6.205z" />
                            </svg></p>
                    </div>
                    <p class="pb-3 pl-5 text-lg font-medium text-pink-800">£9.99</p>
                </a>
            </div>

            <div class="w-full p-2 sm:w-1/2 md:w-1/4 lg:w-1/4 xl:w-1/4">
                <a href="#"
                    class="flex flex-col overflow-hidden rounded-lg shadow-lg hover:bg-pink-300 hover:text-pink-700">
                    <img class="hover:grow hover:shadow-lg" src="{{ asset('images/ab7.jpg') }}">
                    <div class="flex items-center justify-between px-3 py-2">
                        <p class="w-1/2 pl-2 text-lg font-medium">Product Name</p>
                        <p class="flex justify-end w-1/2"><svg class="w-6 h-6 text-gray-500 fill-current hover:text-black"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                <path
                                    d="M12,4.595c-1.104-1.006-2.512-1.558-3.996-1.558c-1.578,0-3.072,0.623-4.213,1.758c-2.353,2.363-2.352,6.059,0.002,8.412 l7.332,7.332c0.17,0.299,0.498,0.492,0.875,0.492c0.322,0,0.609-0.163,0.792-0.409l7.415-7.415 c2.354-2.354,2.354-6.049-0.002-8.416c-1.137-1.131-2.631-1.754-4.209-1.754C14.513,3.037,13.104,3.589,12,4.595z M18.791,6.205 c1.563,1.571,1.564,4.025,0.002,5.588L12,18.586l-6.793-6.793C3.645,10.23,3.646,7.776,5.205,6.209 c0.76-0.756,1.754-1.172,2.799-1.172s2.035,0.416,2.789,1.17l0.5,0.5c0.391,0.391,1.023,0.391,1.414,0l0.5-0.5 C14.719,4.698,17.281,4.702,18.791,6.205z" />
                            </svg></p>
                    </div>
                    <p class="pb-3 pl-5 text-lg font-medium text-pink-800">£9.99</p>
                </a>
            </div>

            <div class="w-full p-2 sm:w-1/2 md:w-1/3 lg:w-1/4 xl:w-1/4">
                <a href="#"
                    class="flex flex-col overflow-hidden rounded-lg shadow-lg hover:bg-pink-300 hover:text-pink-700">
                    <img class="hover:grow hover:shadow-lg" src="{{ asset('images/ab8.jpg') }}">
                    <div class="flex items-center justify-between px-3 py-2">
                        <p class="w-1/2 pl-2 text-lg font-medium">Product Name</p>
                        <p class="flex justify-end w-1/2"><svg
                                class="justify-end w-6 h-6 text-gray-500 fill-current hover:text-black"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                <path
                                    d="M12,4.595c-1.104-1.006-2.512-1.558-3.996-1.558c-1.578,0-3.072,0.623-4.213,1.758c-2.353,2.363-2.352,6.059,0.002,8.412 l7.332,7.332c0.17,0.299,0.498,0.492,0.875,0.492c0.322,0,0.609-0.163,0.792-0.409l7.415-7.415 c2.354-2.354,2.354-6.049-0.002-8.416c-1.137-1.131-2.631-1.754-4.209-1.754C14.513,3.037,13.104,3.589,12,4.595z M18.791,6.205 c1.563,1.571,1.564,4.025,0.002,5.588L12,18.586l-6.793-6.793C3.645,10.23,3.646,7.776,5.205,6.209 c0.76-0.756,1.754-1.172,2.799-1.172s2.035,0.416,2.789,1.17l0.5,0.5c0.391,0.391,1.023,0.391,1.414,0l0.5-0.5 C14.719,4.698,17.281,4.702,18.791,6.205z" />
                            </svg></p>
                    </div>
                    <p class="pb-3 pl-5 text-lg font-medium text-pink-800">£9.99</p>
                </a>
            </div> --}}
        </div>
    </section>

    <section>
        <!-- cards -->
        <div class="relative px-6 pt-16 pb-20 lg:px-8 lg:pt-24 lg:pb-28">
            <div class="relative mx-auto max-w-7xl">
                <div class="text-left">
                    <div class="w-32 h-1 mb-3 bg-pink-500"></div>
                    <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Chocolate is our speciality.
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
    </section>
@endsection
