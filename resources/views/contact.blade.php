@extends('base')

@section('title', 'Let\'s talk')

@section('head')
    <meta name="robots" content="index, follow">
    <meta property="og:title" content="Contact - Front-End Developer - Stefan Lancelot" />
    <meta property="og:type" content="website" />
    <meta name="theme-color" content="#262626">
    <meta property="og:url" content="{{ url()->current() }}" />
    <meta property="og:image" content="{{ asset('images/stefan-lancelot.png') }}" />
    <meta property="og:description"
        content="Creating websites that grow your business. Focus on building high-performing websites that deliver a unique user experience." />
    <meta name="description"
        content="Creating websites that grow your business. Focus on building high-performing websites that deliver a unique user experience." />
    @vite(['resources/css/main.css', 'resources/js/main.js'])
@endsection
@section('content')
    <x-layouts.guest>
        <div class="blur-effect relative w-full bg-dark h-full border border-stroke flex flex-col justify-between">
            <div class="grid grid-cols-2 w-full h-full">
                <canvas id="canvas" class="h-full aspect-square mx-auto">

                </canvas>
                <div class="w-full h-full flex flex-row items-center justify-center">
                    <form class="p-4 flex flex-col gap-4 relative overflow-hidden w-1/2 h-96 border border-stroke"
                        action="">
                        <svg class="w-8 h-8 fill-stroke absolute bottom-0 left-0 -translate-x-1/2 translate-y-1/2"
                            width="100%" height="100%" viewBox="0 0 24 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M12 5V19M5 12H19" stroke="currentColor" stroke-width="1" stroke-linecap=""
                                stroke-linejoin="" />
                        </svg>
                        <svg class="w-8 h-8 fill-stroke absolute top-0 left-0 -translate-x-1/2 -translate-y-1/2"
                            width="100%" height="100%" viewBox="0 0 24 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M12 5V19M5 12H19" stroke="currentColor" stroke-width="1" stroke-linecap=""
                                stroke-linejoin="" />
                        </svg>
                        <svg class="w-8 h-8 fill-stroke absolute top-0 right-0 translate-x-1/2 -translate-y-1/2"
                            width="100%" height="100%" viewBox="0 0 24 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M12 5V19M5 12H19" stroke="currentColor" stroke-width="1" stroke-linecap=""
                                stroke-linejoin="" />
                        </svg>
                        <svg class="w-8 h-8 fill-stroke absolute bottom-0 right-0 translate-x-1/2 translate-y-1/2"
                            width="100%" height="100%" viewBox="0 0 24 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M12 5V19M5 12H19" stroke="currentColor" stroke-width="1" stroke-linecap=""
                                stroke-linejoin="" />
                        </svg>
                        <x-input placeholder="Name"></x-input>
                        <x-input placeholder="Email"></x-input>
                        <x-input placeholder="Phone number"></x-input>
                        <x-textarea class="h-40" placeholder="Message"></x-textarea>
                        <x-button>Send</x-button>
                    </form>
                </div>
            </div>
        </div>
    </x-layouts.guest>
@endsection
