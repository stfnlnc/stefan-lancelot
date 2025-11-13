@props([
    'disable' => false,
    'src' => null
    ])

<a {{ $attributes }} href="" class="w-[13.5625rem] h-[3.75rem] rounded-lg backdrop-blur-md bg-brand-light p-2 uppercase text-body-md group {{ $disable ? "select-none cursor-default" : "" }}">
    <div class="flex flex-row items-center justify-between gap-2 w-full h-full">
        @if($src)
            <img class="w-[2.8125rem] aspect-square rounded-lg bg-neutral-100 object-cover object-center transition-opacity duration-500" src="{{ $src }}" alt=""/>
        @endif
        <div class="{{ $src ? "" : "w-full" }} flex flex-row items-center justify-between gap-2 {{ $disable ? "text-overlay-dark-20" : "text-brand-dark" }}">
            {{ $slot }}
            <svg class="w-4.5 h-4.5 {{ $disable ? "fill-overlay-dark-20" : "group-hover:rotate-90 fill-brand-dark" }} transition-transform duration-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 18 18">
                <path d="M8.25 1.5H9.75V6.75H8.25V1.5ZM8.25 11.25H9.75V16.5H8.25V11.25ZM11.25 8.25H16.5V9.75H11.25V8.25ZM1.5 8.25H6.75V9.75H1.5V8.25Z"/>
            </svg>
        </div>
    </div>
</a>