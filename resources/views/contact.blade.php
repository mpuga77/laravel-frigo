@extends('layouts.main')

@section('content')

<main class="mt-0">
<!-- cards -->
        <div class="relative px-6 pt-16 pb-20 bg-gray-50 lg:px-8 lg:pt-24 lg:pb-28">
            <div class="absolute inset-0">
                <div class="bg-white h-1/3 sm:h-2/3"></div>
            </div>
            <div class="relative mx-auto max-w-7xl">
                <div class="text-center">
                    <div class="w-32 h-1 mx-auto mb-6 bg-pink-500"></div>
                    <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Contact us</h2>
                    <p class="max-w-2xl mx-auto mt-3 text-xl text-gray-500 sm:mt-4">
                        This is your life and it's ending one minute @ a time...</p>
                </div>
                
                <form>
                    <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4 flex flex-col">
                        <div class="-mx-3 md:flex mb-6">
                        <div class="md:w-1/2 px-3 mb-6 md:mb-0">
                            <label class="uppercase tracking-wide text-black text-xs font-bold mb-2" for="company">
                            Company Name*
                            </label>
                            <input class="w-full bg-gray-200 text-black border border-gray-200 rounded py-3 px-4 mb-3" id="company" type="text" placeholder="Tutsplus">
                            <div>
                            <span class="text-red-500 text-xs italic">
                                Please fill out this field.
                            </span>
                            </div>
                        </div>
                        <div class="md:w-1/2 px-3">
                            <label class="uppercase tracking-wide text-black text-xs font-bold mb-2" for="title">
                            Title*
                            </label>
                            <input class="w-full bg-gray-200 text-black border border-gray-200 rounded py-3 px-4 mb-3" id="title" type="text" placeholder="Software Engineer">
                        </div>
                        </div>
                        <div class="-mx-3 md:flex mb-6">
                        <div class="md:w-full px-3">
                            <label class="uppercase tracking-wide text-black text-xs font-bold mb-2" for="application-link">
                            Application Link*
                            </label>
                            <input class="w-full bg-gray-200 text-black border border-gray-200 rounded py-3 px-4 mb-3" id="application-link" type="text" placeholder="http://....">
                        </div>
                        </div>
                        <div class="-mx-3 md:flex mb-2">
                        <div class="md:w-1/2 px-3 mb-6 md:mb-0">
                            <label class="uppercase tracking-wide text-black text-xs font-bold mb-2" for="location">
                            Location*
                            </label>
                            <div>
                            <select class="w-full bg-gray-200 border border-gray-200 text-black text-xs py-3 px-4 pr-8 mb-3 rounded" id="location">
                                <option>Abuja</option>
                                <option>Enugu</option>
                                <option>Lagos</option>
                            </select>
                            </div>
                        </div>
                        <div class="md:w-1/2 px-3">
                            <label class="uppercase tracking-wide text-black text-xs font-bold mb-2" for="job-type">
                            Job Type*
                            </label>
                            <div>
                            <select class="w-full bg-gray-200 border border-gray-200 text-black text-xs py-3 px-4 pr-8 mb-3 rounded" id="job-type">
                                <option>Full-Time</option>
                                <option>Part-Time</option>
                                <option>Internship</option>
                            </select>
                            </div>
                        </div>
                        <div class="md:w-1/2 px-3">
                            <label class="uppercase tracking-wide text-black text-xs font-bold mb-2" for="department">
                            Department*
                            </label>
                            <div>
                            <select class="w-full bg-gray-200 border border-gray-200 text-black text-xs py-3 px-4 pr-8 mb-3 rounded" id="department">
                                <option>Engineering</option>
                                <option>Design</option>
                                <option>Customer Support</option>
                            </select>
                            </div>
                        </div>
                        </div>
                        <div class="-mx-3 md:flex mt-2">
                        <div class="md:w-full px-3">
                            <button class="md:w-full bg-gray-900 text-white font-bold py-2 px-4 border-b-4 hover:border-b-2 border-gray-500 hover:border-gray-100 rounded-full">
                            Button
                            </button>
                        </div>
                        </div>
                    </div>
                </form>           
            </div>
        </div>
</main>

@endsection
