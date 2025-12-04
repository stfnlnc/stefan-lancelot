@extends('base')

@section('title', 'Works')

@section('head')
    <meta name="robots" content="index, follow">
    <meta property="og:title" content="Works - Front-End Developer - Stefan Lancelot" />
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
{{-- {{ 'storage' . DIRECTORY_SEPARATOR . $work->image }} --}}
@section('content')
    <x-layouts.guest>
        <div class="blur-effect relative w-full bg-dark h-full border border-stroke flex flex-col justify-between">
            <div class="flex flex-row overflow-hidden h-full works-container">
                @foreach ($works as $index => $work)
                    <div
                        class="shrink-0 work w-full h-full p-2 overflow-hidden bg-dark motion-safe:transition-all motion-safe:duration-500 flex flex-col">
                        <a target="_blank"
                            class="relative w-full h-full bg-dark border border-stroke inline-flex items-center justify-center overflow-hidden"
                            href="{{ $work->url }}">
                            @if ($work->image)
                                <img class="w-full h-auto md:w-auto md:h-100 object-contain object-center"
                                    src="{{ 'storage' . DIRECTORY_SEPARATOR . $work->image }}" alt="">
                            @else
                                <div class="w-full h-100 bg-stroke flex flex-row items-center justify-center">
                                    <svg class="w-6 fill-light opacity-30 rotate-45" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 41 41" fill="none">
                                        <path
                                            d="M22.2083 0H18.7917V3.41667H15.375V6.83333H11.9583V10.25H15.375V6.83333H18.7917V18.7917H6.83333V15.375H10.25V11.9583H6.83333V15.375H3.41667V18.7917H0V22.2083H3.41667V25.625H6.83333V29.0417H10.25V25.625H6.83333V22.2083H18.7917V34.1667H15.375V30.75H11.9583V34.1667H15.375V37.5833H18.7917V41H22.2083V37.5833H25.625V34.1667H29.0417V30.75H25.625V34.1667H22.2083V22.2083H34.1667V25.625H30.75V29.0417H34.1667V25.625H37.5833V22.2083H41V18.7917H37.5833V15.375H34.1667V11.9583H30.75V15.375H34.1667V18.7917H22.2083V6.83333H25.625V10.25H29.0417V6.83333H25.625V3.41667H22.2083V0Z" />
                                    </svg>
                                </div>
                            @endif
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
                        </a>
                        <div class="flex flex-col md:flex-row w-full justify-between items-start mt-1">
                            <div class="flex flex-col gap-0 mb-12">
                                <a target="_blank" class="link w-fit inline-flex items-center gap-1"
                                    href="{{ $work->url }}">
                                    {{ $work->title }}
                                    <svg class="w-5 mb-0.5" width="100%" height="100%" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path d="M7 17L17 7M17 7H7M17 7V17" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </a>
                                <p>
                                    @foreach ($work->tags as $tag)
                                        {{ '{' . $tag . '}' }}
                                    @endforeach
                                </p>
                            </div>
                            <p class="ml-auto">{{ $index + 1 }} / {{ count($works) }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="w-full flex flex-row justify-end gap-2 mt-auto pb-4">
                <svg id="prev-work" class="w-8 cursor-pointer" width="100%" height="100%" viewBox="0 0 24 24"
                    fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M15 18L9 12L15 6" stroke="currentColor" stroke-width="1" stroke-linecap="round"
                        stroke-linejoin="round" />
                </svg>
                <svg id="next-work" class="w-8 cursor-pointer" width="100%" height="100%" viewBox="0 0 24 24"
                    fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M9 18L15 12L9 6" stroke="currentColor" stroke-width="1" stroke-linecap="round"
                        stroke-linejoin="round" />
                </svg>
            </div>

            <div class="absolute top-0 left-0 w-full flex justify-between bg-dark">
                <div class="w-2 aspect-square bg-light"></div>
                <div class="w-2 aspect-square bg-light"></div>
            </div>
            <div class="absolute bottom-0 left-0 w-full flex justify-between bg-dark">
                <div class="w-2 aspect-square bg-light"></div>
                <div class="w-2 aspect-square bg-light"></div>
            </div>
        </div>
    </x-layouts.guest>
@endsection
