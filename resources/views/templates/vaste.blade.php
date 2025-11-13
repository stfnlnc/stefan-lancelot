@extends('base')

@section('title', 'Vaste Magazine')

@section('head')
    @vite(['resources/css/vaste.css', 'resources/js/vaste.js'])
@endsection

@section('content')
    <header class="z-50 bg-white fixed top-0 left-0 w-full">
        <nav class="grid grid-cols-6 divide-x divide-neutral-200 w-full border-b border-neutral-200">
            <div class="p-5">
                <x-vaste.menu-item>Articles</x-vaste.menu-item>
            </div>
            <div class="p-5">
                <x-vaste.menu-item>Magazines</x-vaste.menu-item>
            </div>
            <div class="p-5">
                <x-vaste.menu-item>Newsletter</x-vaste.menu-item>
            </div>
            <div class="p-5"></div>
            <div class="p-5"></div>
            <div class="p-5 flex justify-end">
                <x-vaste.menu-item :reverse="true">Menu</x-vaste.menu-item>
            </div>
        </nav>
    </header>
    <div class="relative">
        <section class="bg-white grid grid-cols-6 divide-x divide-neutral-200 border-b border-neutral-200 w-full sticky top-17 z-40">
            <div class="col-span-2 p-5">
                <x-vaste.title>Vaste</x-vaste.title>
            </div>
            <div class="col-span-4 flex justify-end p-5">
                <x-vaste.title>Magazine</x-vaste.title>
            </div>
        </section>
        <section class="h-[1200px] w-full bg-amber-100 mt-17">
            <div class="w-full h-[calc(100lvh - 100px)] bg-amber-200">

            </div>
        </section>
    </div>
    <div class="relative">
        <section class="bg-white grid grid-cols-6 divide-x divide-neutral-200 border-y border-neutral-200 w-full sticky top-17 z-40">
            <div class="p-5 relative z-10">
                <x-vaste.title>Articles</x-vaste.title>
            </div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </section>
        <section class="h-[1200px] w-full bg-blue-100">
            Hello
        </section>
    </div>
@endsection