@extends('base')

@section('title', 'New Collective')

@section('head')
    @vite(['resources/css/new-collective.css', 'resources/js/new-collective.js'])
@endsection

@section('content')
    <div class="w-full bg-neutral-300 flex flex-col">
        <div class="fixed top-1/2 left-0 w-full -translate-y-1/2 flex flex-row items-center justify-between p-5">
            <div></div>
            <x-new-collective.button id="explore" src="test">Explore</x-new-collective.button>
        </div>
        <video class="w-full min-h-[800px] h-[100lvh] object-cover object-center" data-src="{{ asset('videos/video.png') }}" src="{{ asset('videos/video.mp4') }}" loop muted playsinline></video>
        <video class="w-full min-h-[800px] h-[100lvh] object-cover object-center" data-src="{{ asset('videos/video2.png') }}" src="{{ asset('videos/video2.mp4') }}" loop muted playsinline></video>
    </div>
@endsection