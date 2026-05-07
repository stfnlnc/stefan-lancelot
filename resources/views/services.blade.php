@extends('base')

@section('title', 'Services - Front-End Developer - Stefan Lancelot')

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


@foreach ($works as $index => $work)
    <div
        class="shrink-0 work w-full h-[80%] p-2 overflow-auto no-scrollbar bg-dark transition-all duration-500 flex flex-col">
        <a class="w-full h-[90%] bg-dark border border-stroke border-dashed inline-flex items-center justify-center"
            href="{{ $work->url }}">
            @if ($work->image)
                <img class="w-auto h-[90%] object-cover object-center"
                    src="{{ 'storage' . DIRECTORY_SEPARATOR . $work->image }}" alt="">
            @else
                <div class="w-full h-[90%] bg-stroke">

                </div>
            @endif
        </a>
        <div class="flex flex-row w-full justify-between items-start mt-1 ">
            <div class="flex flex-col gap-0 mb-12">
                <a class="link w-fit inline-flex items-center gap-1" href="{{ $work->url }}">
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
            <p>{{ $index + 1 }} / {{ count($works) }}</p>
        </div>
    </div>
@endforeach
