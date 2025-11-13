@extends('base')

@section('title', 'Front-End Developer - Stefan Lancelot')

@section('head')
    @vite(['resources/css/main.css', 'resources/js/main.js'])
@endsection
@section('content')
    <x-layouts.guest>
        <div
            class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 flex flex-row flex-wrap items-start justify-center w-2/3">
            <div
                class="flex flex-col items-start justify-start h-64 gap-0 p-2 bg-transparent border item draggable w-128 aspect-square backdrop-blur-xl border-stroke">
                <span class="absolute top-0 left-0 w-full square-corner"></span>
                <span class="absolute bottom-0 left-0 w-full h-2 square-corner"></span>
                <div class="flex flex-row items-center justify-between w-full">
                    <span>{mail}</span><a class="link" href="mailto:hello@stefanlancelot.com">hello@stefanlancelot.com</a>
                </div>
                <div class="flex flex-row items-center justify-between w-full">
                    <span>{social}</span><a class="link" target="_blank"
                        href="https://www.linkedin.com/in/stefan-lancelot/">linkedin</a>
                </div>
                <div class="flex flex-row items-center justify-between w-full">
                    <span>{repo}</span><a class="link" target="_blank" href="https://github.com/stfnlnc">github</a>
                </div>
            </div>
            <div
                class="flex flex-col items-center justify-center w-64 h-64 gap-1 p-2 bg-transparent border item draggable aspect-square backdrop-blur-xl border-stroke">
                <span class="absolute top-0 left-0 w-full square-corner"></span>
                <span class="absolute bottom-0 left-0 w-full h-2 square-corner"></span>
                <div>Paris GMT+1</div>
                <div class="flex flex-row gap-0 text-5xl">
                    <span id="hours">05</span>
                    <span class="tick">:</span>
                    <span id="minutes">52</span>
                </div>
            </div>
            <div
                class="flex flex-col items-start justify-start gap-0 p-2 bg-transparent border item draggable w-96 h-96 aspect-square backdrop-blur-xl border-stroke">
                <span class="absolute top-0 left-0 w-full square-corner"></span>
                <span class="absolute bottom-0 left-0 w-full h-2 square-corner"></span>
                <p class="w-full">
                    I'm a front-end developer passionate about creating immersive and high-performance websites.
                    <br><br>
                    I use the latest technologies to help you stand out and make an impact online.
                </p>
                <p class="mt-auto">
                    {available for freelancing}
                </p>
            </div>
            <div
                class="flex flex-col items-start justify-start w-64 gap-0 p-2 bg-transparent border item draggable h-96 aspect-square backdrop-blur-xl border-stroke">
                <span class="absolute top-0 left-0 w-full square-corner"></span>
                <span class="absolute bottom-0 left-0 w-full h-2 square-corner"></span>
                <p class="w-full">
                    I use various technologies to create websites tailored to your needs.
                </p>
                <p class="mt-auto ml-auto text-right">
                    {js} <br>
                    {react} <br>
                    {gsap} <br>
                    {php} <br>
                    {laravel} <br>
                    {tailwindcss} <br>
                    {and more} <br>
                </p>
            </div>
            <div
                class="flex flex-col items-center justify-center w-64 h-64 gap-1 p-2 bg-transparent border item draggable aspect-square backdrop-blur-xl border-stroke">
                <span class="absolute top-0 left-0 w-full square-corner"></span>
                <span class="absolute bottom-0 left-0 w-full h-2 square-corner"></span>
                <img class="w-full h-full object-cover object-[0%_25%]" src="/images/stefan-lancelot.png" alt="">
            </div>
        </div>

    </x-layouts.guest>
@endsection
