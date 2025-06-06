@extends('layouts.main')
@section('content')

@foreach($products as $product)
    <div class="relative flex flex-shrink-0 w-full sm:w-auto">
        <img src="{{asset('images/'. $product->image)}}" alt="{{$product->name}}" class="object-cover object-center w-full">
        <div class="absolute w-full h-full p-6 bg-grey-800 bg-opacity-30">
            <h2 class="text-base leading-4 text-white lg:text-xl lg:leading-5 dark:text-gray-900"></h2>
            @if ($product->sale_price != null)
                <h4 class="pb-3 pl-5 text-lg font-medium text-pink-800">{{$product->sale_price}}&euro;</h4>
                <h4 class="pb-3 pl-5 text-lg font-medium text-pink-800" style="text-decoration: line-through;">{{$product->price}}&euro;</h4>
            @else
                <h4 class="pb-3 pl-5 text-lg font-medium text-pink-800">{{$product->price}}&euro;</h4>
            @endif

            <div class="flex items-end h-full pb-6">
                <h3 class="text-xl font-semibold leading-5 text-white lg:text-2xl lg:leading-6 dark:text-grey-900">Order now!</h3>
            </div>
        </div>
    </div>
@endforeach
@endsection