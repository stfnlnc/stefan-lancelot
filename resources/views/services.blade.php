@extends('base')

@section('title', 'Services - Front-End Developer - Stefan Lancelot')

@section('head')
    @vite(['resources/css/main.css', 'resources/js/main.js'])
@endsection
@section('content')
    <x-layouts.guest>
        <div
            class="fixed top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-full md:w-[85%] h-[85%] min-h-[700px] bg-dark border border-stroke">
            <div
                class="absolute top-0 left-0 w-full h-full py-2 overflow-auto no-scrollbar bg-dark transition-all duration-500">
                <div class="flex flex-col gap-2 normal-case">
                    <div
                        class="py-2 border-b border-light font-light opacity-30 hover:opacity-100 transition-opacity duration-300 select-none flex flex-col gap-0">
                        <div class="flex flex-row">
                            <div class="px-2">Création de site vitrine</div>
                            <div class="px-2 text-right">à partir de 800 €</div>
                        </div>
                        <div class="px-2">Développement complet d’un site vitrine responsive avec CMS ou sur mesure.
                        </div>
                    </div>
                    <div
                        class="py-2 border-b border-light font-light opacity-30 hover:opacity-100 transition-opacity duration-300 select-none flex flex-col gap-1">
                        <div class="flex flex-row">
                            <div class="px-2">Création de site vitrine</div>
                            <div class="px-2 text-right">à partir de 800 €</div>
                        </div>
                        <div class="px-2">Développement complet d’un site vitrine responsive avec CMS ou sur mesure.
                        </div>
                    </div>
                </div>
            </div>
    </x-layouts.guest>
@endsection
