@extends('base')

@section('title', 'Works - Stefan Lancelot')

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

@section('content')
    <x-layouts.guest>
        <div class="relative w-full bg-dark h-full border border-stroke flex flex-col justify-between">
            <div class="flex flex-row overflow-hidden h-full">
                @foreach ($works as $index => $work)
                    <div
                        class="shrink-0 work w-full h-[90%] p-2 overflow-hidden bg-dark transition-all duration-500 flex flex-col">
                        <a target="_blank"
                            class="w-full h-[90%] bg-dark border border-stroke border-dashed inline-flex items-center justify-center overflow-hidden"
                            href="{{ $work->url }}">
                            @if ($work->image)
                                <img class="w-full h-auto lg:w-auto lg:h-[80%] object-cover object-center"
                                    src="{{ 'storage' . DIRECTORY_SEPARATOR . $work->image }}" alt="">
                            @else
                                <div class="w-full h-50 lg:w-[80%] lg:h-[80%] object-cover object-center bg-stroke">

                                </div>
                            @endif
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
            <div class="w-full flex flex-row justify-end gap-2 mt-auto pb-4 pr-4">
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
