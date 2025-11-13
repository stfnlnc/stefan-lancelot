@extends('base')

@section('title', 'Works - Front-End Developer - Stefan Lancelot')

@section('head')
    @vite(['resources/css/main.css', 'resources/js/main.js'])
@endsection
@section('content')
    <x-layouts.guest>
        <div
            class="fixed top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[85%] h-[85%] min-h-[700px] bg-dark border border-stroke">
            @foreach ($works as $work)
                <div
                    class="work absolute top-0 left-0 w-full h-full p-2 overflow-auto no-scrollbar bg-dark transition-all duration-500 opacity-0 pointer-events-none blur-xl first:opacity-100 first:blur-none first:pointer-events-auto">
                    <a href="{{ $work->url }}">
                        @if ($work->image)
                            <img class="w-full h-[90%] object-cover object-center"
                                src="{{ 'storage' . DIRECTORY_SEPARATOR . $work->image }}" alt="">
                        @else
                            <div class="w-full h-[90%] bg-stroke">

                            </div>
                        @endif
                    </a>
                    <div class="flex flex-col gap-0 mt-1">
                        <a class="link w-fit inline-flex items-center gap-1" href="{{ $work->url }}">
                            {{ $work->title }}
                            <svg class="w-5" width="100%" height="100%" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M6 18L18 6M18 6H10M18 6V14" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </a>
                        <p>
                            @foreach ($work->tags as $tag)
                                {{ '{' . $tag . '}' }}
                            @endforeach
                        </p>
                    </div>
                </div>
            @endforeach
            <svg id="prev-work" class="w-12 absolute right-full top-0 cursor-pointer" width="100%" height="100%"
                viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M15 18L9 12L15 6" stroke="currentColor" stroke-width="1" stroke-linecap="round"
                    stroke-linejoin="round" />
            </svg>
            <svg id="next-work" class="w-12 absolute left-full top-0 cursor-pointer" width="100%" height="100%"
                viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M9 18L15 12L9 6" stroke="currentColor" stroke-width="1" stroke-linecap="round"
                    stroke-linejoin="round" />
            </svg>
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
