@extends('base')

@section('title', 'Front-End Developer - Stefan Lancelot')

@section('head')
    @vite(['resources/css/main.css', 'resources/js/main.js'])
@endsection
@section('content')
    <x-layouts.guest>
        <div class="main-container w-full h-full relative">
            <div
                class="w-120 h-80 absolute top-40 left-120 p-2 border border-stroke draggable backdrop-blur-md pointer-events-auto">
                <div class="absolute top-0 left-0 w-full flex flex-row items-center justify-between">
                    <div class="w-2 aspect-square bg-light"></div>
                    <div class="w-2 aspect-square bg-light"></div>
                </div>
                <div class="absolute bottom-0 left-0 w-full flex flex-row items-center justify-between">
                    <div class="w-2 aspect-square bg-light"></div>
                    <div class="w-2 aspect-square bg-light"></div>
                </div>
                <div class="w-full h-full">
                    <div class="w-full flex flex-row items-center justify-between">
                        <p>{MAIL}</p>
                        <a class="link" href="mailto:hello@stefanlancelot.com">hello@stefanlancelot.com</a>
                    </div>
                    <div class="w-full flex flex-row items-center justify-between">
                        <p>{SOCIAL}</p>
                        <div class="flex flex-row gap-1 items-center">
                            <a class="link" target="_blank"
                                href="https://www.linkedin.com/in/stefan-lancelot/">LinkedIn</a>
                            /
                            <a class="link" target="_blank"
                                href="https://www.linkedin.com/in/stefan-lancelot/">Instagram</a>
                        </div>
                    </div>
                    <div class="w-full flex flex-row items-center justify-between">
                        <p>{REPO}</p>
                        <a class="link" target="_blank" href="https://github.com/stfnlnc">Github</a>
                    </div>
                </div>
            </div>
            <div
                class="w-80 h-120 absolute top-60 left-260 p-2 border border-stroke draggable backdrop-blur-md pointer-events-auto">
                <div class="absolute top-0 left-0 w-full flex flex-row items-center justify-between">
                    <div class="w-2 aspect-square bg-light"></div>
                    <div class="w-2 aspect-square bg-light"></div>
                </div>
                <div class="absolute bottom-0 left-0 w-full flex flex-row items-center justify-between">
                    <div class="w-2 aspect-square bg-light"></div>
                    <div class="w-2 aspect-square bg-light"></div>
                </div>
                <div class="w-full h-full flex flex-col items-start justify-between">
                    <p>{Framework & Libraries}</p>
                    <p class="text-right ml-auto">
                        {js} <br>
                        {react} <br>
                        {astro} <br>
                        {gsap} <br>
                        {php} <br>
                        {laravel} <br>
                        {wordpress} <br>
                        {tailwindcss} <br>
                    </p>
                </div>
            </div>
            <div
                class="w-80 h-80 absolute top-80 left-200 p-2 border border-stroke draggable backdrop-blur-md pointer-events-auto">
                <div class="absolute top-0 left-0 w-full flex flex-row items-center justify-between">
                    <div class="w-2 aspect-square bg-light"></div>
                    <div class="w-2 aspect-square bg-light"></div>
                </div>
                <div class="absolute bottom-0 left-0 w-full flex flex-row items-center justify-between">
                    <div class="w-2 aspect-square bg-light"></div>
                    <div class="w-2 aspect-square bg-light"></div>
                </div>
                <div class="w-full h-full">
                    <img class="w-full h-full object-center object-cover" src="{{ asset('images/stefan-lancelot.png') }}"
                        alt="">
                </div>
            </div>
            <div
                class="w-80 h-80 absolute top-100 left-80 p-2 border border-stroke draggable backdrop-blur-md pointer-events-auto">
                <div class="absolute top-0 left-0 w-full flex flex-row items-center justify-between">
                    <div class="w-2 aspect-square bg-light"></div>
                    <div class="w-2 aspect-square bg-light"></div>
                </div>
                <div class="absolute bottom-0 left-0 w-full flex flex-row items-center justify-between">
                    <div class="w-2 aspect-square bg-light"></div>
                    <div class="w-2 aspect-square bg-light"></div>
                </div>
                <div class="w-full h-full flex flex-col items-center justify-center">
                    <p>Paris GMT+1</p>
                    <p class="flex flex-row gap-0 text-5xl">
                        <span id="hours">05</span>
                        <span class="tick">:</span>
                        <span id="minutes">52</span>
                    </p>
                </div>
            </div>
        </div>
    </x-layouts.guest>
@endsection
