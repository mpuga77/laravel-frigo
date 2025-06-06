@extends('layouts.main')

@section('content')
    <div class="container mx-auto mt-10">
        <div class="text-center">
            <div class="w-32 h-1 mx-auto mb-6 bg-pink-500"></div>
            <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Shopping Cart.</h2>
            <p class="max-w-2xl mx-auto my-3 text-xl text-gray-500 sm:mt-4">
                This is your life and it's ending one minute @ a time...</p>
        </div>
        <div class="mx-auto my-10">
            <div class="px-10 py-10 mx-auto bg-white rounded-lg shadow-lg sm:w-3/4">

                @if (Session::has('cart'))
                    @foreach (Session::get('cart') as $product)
                        <div class="flex items-center py-0.5">
                            <form method="POST" action="{{ route('remove_from_cart') }}">
                                @csrf
                            <div class="flex-none w-1/6 pl-2">
                                <img src="{{ asset('images/' . $product['image']) }}" alt="ice cream"
                                    class="object-cover object-center w-full rounded-s-full" />
                            </div>
                            <div class="flex-auto w-3/6">
                                <p class="pl-4 text-lg font-semibold leading-none text-pink-800">{{ $product['name'] }}</p>
                            </div>                        
                            
                           
                                <input type="hidden" name="id" value="{{ $product['id'] }}">
                                <input type="submit" name="remove_btn" class="remove-btn" value="remove">
                            </form>

                            <form method="POST" action="{{ route('edit_product_quantity') }}">
                                @csrf
                                <input type="submit" name="decrease_product_quantity_btn" class="edit-btn" value="-">

                                <input type="hidden" name="id" value="{{ $product['id'] }}">
                                <input type="number" name="quantity" value="{{ $product['quantity'] }}" readonly>

                                <input type="submit" name="increase_product_quantity_btn" class="edit-btn" value="+">
                            </form>
                            <!--
                            <div class="flex-auto w-1/6">
                                <p class="text-base font-black leading-none text-right text-gray-800">
                                    {{ $product['quantity'] }}</p>
                            </div>-->
                            <div class="flex-auto w-1/6">
                                <p class="pr-2 text-base font-black leading-none text-right text-gray-800">
                                    {{ $product['price'] * $product['quantity'] }}&euro;</p>
                            </div>
                        
                        </div>

                    @endforeach
                @endif

                <hr class="my-2">

                @if (Session::has('cart'))
                    <div class="flex flex-row-reverse my-5">
                        <h4 class="w-2/6 pr-1 text-lg font-semibold text-right text-slate-400">Total
                            @if (Session::has('total'))
                                <span class="ml-2 text-pink-800">{{ Session::get('total') }}&euro;</span>                                
                            @endif
                        </h4>
                    </div>
                @endif

                <!--<div class="text-center"><button
                        class="w-1/5 py-3 m-auto text-sm font-semibold text-pink-100 uppercase bg-pink-500 rounded-full hover:bg-pink-700">
                        Checkout
                    </button></div>-->
                <div class="checkout-container">
                    @if(Session::has('total'))
                        @if(Session::get('total') != null)
                            <form method = "GET" action="{{ route('checkout') }}">
                                <input type="submit" class="btn checkout-btn flex flex-row-reverse w-1/3 px-4 py-2 mx-auto mt-10 text-lg font-semibold text-pink-100 bg-pink-400 rounded-full hover:bg-pink-300 hover:text-pink-700" value="Checkout" name="">
                            </form>
                        @endif
                    @endif
                </div>

                <a href="/products"
                    class="flex flex-row-reverse w-1/3 px-4 py-2 mx-auto mt-10 text-lg font-semibold text-pink-100 bg-pink-400 rounded-full hover:bg-pink-300 hover:text-pink-700">

                    Continue Shopping <svg class="w-4 mr-2 text-pink-100 fill-current" viewBox="0 0 448 512">
                        <path
                            d="M134.059 296H436c6.627 0 12-5.373 12-12v-56c0-6.627-5.373-12-12-12H134.059v-46.059c0-21.382-25.851-32.09-40.971-16.971L7.029 239.029c-9.373 9.373-9.373 24.569 0 33.941l86.059 86.059c15.119 15.119 40.971 4.411 40.971-16.971V296z" />
                    </svg>
                </a>
            </div>
        </div>
    </div>
 

@endsection
