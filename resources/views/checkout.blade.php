@extends('layouts.main')

@section('content')

    <!-- Checkout -->
    <section class="my-2 py-3 checkout">
        <div class="container text-center mt-1 pt-5">
            <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Check Out</h2>
            <hr class="mx-auto">
        </div>

        <div class="mx-auto container">
            <form id="checkout-form" method="POST" action="{{ route('place_order') }}">
                @csrf
                <div class="form-group checkout-small-element mt-5">
                    <label for="" class="w-2/6 pr-1 text-lg font-semibold text-right text-slate-400">Name</label>
                    <input type="text" class="form-control border" id="checkout-name" name="name" placeholder="name" required>                
                </div>
                <div class="form-group checkout-small-element mt-2">
                    <label for="" class="w-2/6 pr-1 text-lg font-semibold text-right text-slate-400">Email</label>
                    <input type="email" class="form-control border" id="checkout-email" name="email" placeholder="email address" required> 
                </div>
                <div class="form-group checkout-small-element mt-2">
                    <label for="" class="w-2/6 pr-1 text-lg font-semibold text-right text-slate-400">Phone</label>
                    <input type="tel" class="form-control border" id="checkout-phone" name="phone" placeholder="phone number" required>
                </div>
                <div class="form-group checkout-small-element mt-2">
                    <label for="" class="w-2/6 pr-1 text-lg font-semibold text-right text-slate-400">City</label>
                    <input type="text" class="form-control border" id="checkout-city" name="city" placeholder="city" required>
                </div>
                <div class="form-group checkout-small-element mt-2 mb-5">
                    <label for="" class="w-2/6 pr-1 text-lg font-semibold text-right text-slate-400">Address</label>
                    <input type="text" class="form-control border" id="checkout-address" name="address" placeholder="address" required>
                </div>

                @if(Session::has('total'))
                    @if(Session::get('total') != null)

                <div class="form-group checkout-btn-container flex flex-row-reverse my-5">
                    <p class="w-2/6 pr-1 text-lg font-semibold text-right text-slate-400">Total amount: <span class="ml-2 text-pink-800">${{Session::get('total')}}</span></p>
                    <input type="submit" class="btn flex flex-row-reverse w-1/3 px-4 py-2 mx-auto mt-10 text-lg font-semibold text-pink-100 bg-pink-400 rounded-full hover:bg-pink-300 hover:text-pink-700" id="checkout-btn" name="checkout-btn" value="Checkout">
                </div>

                @endif
                @endif
            </form>
        </div>
    </section>

@endsection