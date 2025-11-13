@props([
    'disable' => false,
    'src' => null,
    'color' => 'dark'
    ])

@php
    $linkColor = [
        'dark' => 'text-brand-dark',
        'blue' => 'text-brand-blue',
        'light' => 'text-brand-light'
    ];

    $fillColor = [
        'dark' => 'fill-brand-dark',
        'blue' => 'fill-brand-blue',
        'light' => 'fill-brand-light'
    ];
@endphp

<a href="" class="w-fit uppercase text-body-md group {{ $disable ? "select-none cursor-default" : "" }}">
    <div class="flex flex-row items-center justify-between gap-2 w-full h-full">
        <div class="{{ $src ? "" : "w-full" }} flex flex-row items-center justify-between gap-2 {{ $linkColor[$color] }} {{ $disable ? "opacity-20" : "" }}">
            {{ $slot }}
            <svg class="w-4.5 h-4.5 {{ $disable ? "" : "group-hover:rotate-90 " }} {{ $fillColor[$color] }} transition-transform duration-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 18 18">
                <path d="M8.25 1.5H9.75V6.75H8.25V1.5ZM8.25 11.25H9.75V16.5H8.25V11.25ZM11.25 8.25H16.5V9.75H11.25V8.25ZM1.5 8.25H6.75V9.75H1.5V8.25Z"/>
            </svg>
        </div>
    </div>
</a>