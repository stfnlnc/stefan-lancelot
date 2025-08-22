@props(['reverse' => false])

<a href="" class="relative flex flex-row items-center {{ $reverse ? 'justify-end' : 'justify-start' }} group">
    <div class="px-0.5">[</div>
    @if(!$reverse)
        <div class="w-3 h-3 bg-black rounded-full mt-0.5"></div>
    @endif
    <div class="flex {{ $reverse ? 'flex-row-reverse' : '' }} w-fit max-w-0 group-hover:max-w-full overflow-hidden transition-all duration-1000 ease-in-out">
        <div class="px-1"></div>
        {{ $slot }}
    </div>
    @if($reverse)
        <div class="w-3 h-3 bg-black rounded-full mt-0.5"></div>
    @endif
    <div class="px-0.5">]</div>
</a>