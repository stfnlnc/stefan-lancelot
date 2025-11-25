<main class="flex flex-col justify-center items-center">
    <div id="cursor"
        class="hidden md:block opacity-0 m-2 fixed transition-transform duration-500 pointer-events-none z-9999">
        <svg class="w-6 fill-accent" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 41 41" fill="none">
            <path
                d="M22.2083 0H18.7917V3.41667H15.375V6.83333H11.9583V10.25H15.375V6.83333H18.7917V18.7917H6.83333V15.375H10.25V11.9583H6.83333V15.375H3.41667V18.7917H0V22.2083H3.41667V25.625H6.83333V29.0417H10.25V25.625H6.83333V22.2083H18.7917V34.1667H15.375V30.75H11.9583V34.1667H15.375V37.5833H18.7917V41H22.2083V37.5833H25.625V34.1667H29.0417V30.75H25.625V34.1667H22.2083V22.2083H34.1667V25.625H30.75V29.0417H34.1667V25.625H37.5833V22.2083H41V18.7917H37.5833V15.375H34.1667V11.9583H30.75V15.375H34.1667V18.7917H22.2083V6.83333H25.625V10.25H29.0417V6.83333H25.625V3.41667H22.2083V0Z" />
        </svg>
    </div>
    <section class="relative w-full max-w-screen-3xl md:h-lvh min-h-[800px] p-2.5 transition-opacity duration-500">
        <div id="main"
            class="relative overflow-hidden flex flex-col items-start justify-start w-full h-full min-h-[98lvh] md:min-h-[780px] max-w-screen-3xl p-2 bg-dark"
            style="clip-path: inset(0% 100% 0% 0%);">
            <div class="relative z-30 flex flex-col-reverse lg:flex-row items-start justify-between w-full gap-2">
                @if (request()->routeIs('home'))
                    <h2 class="select-none h1">Stefan <br> Lancelot</h2>
                @endif
                <div class="flex flex-row gap-2 ml-auto">
                    @if (request()->routeIs('home'))
                        <span class="button bg-light cursor-default" aria-current="page">{home}</span>
                    @else
                        <a class="button glitch" href="{{ route('home') }}">
                            {home}
                        </a>
                    @endif
                    @if (request()->routeIs('works'))
                        <span class="button bg-light cursor-default" aria-current="page">{works}</span>
                    @else
                        <a class="button glitch" href="{{ route('works') }}">
                            {works}
                        </a>
                    @endif
                    {{--        @if (request()->routeIs('services'))
                        <span class="button bg-light cursor-default" aria-current="page">{services}</span>
                    @else
                        <a class="button glitch" href="{{ route('services') }}">
                            {services}
                        </a>
                    @endif --}}
                    @if (request()->routeIs('home'))
                        <button id="resetBtn" class="button hidden md:block glitch">{Clear Cache}</button>
                    @endif
                </div>
            </div>
            <div class="w-full h-full z-40 py-6">
                {{ $slot }}
            </div>
            <div
                class="relative z-30 w-full mt-auto flex flex-col lg:flex-row items-start lg:items-end justify-between gap-2">
                @if (request()->routeIs('home'))
                    <h1 class="select-none h1">
                        Front end <br> Developper
                    </h1>
                @endif
                <div class="text-xs item ml-auto">
                    <span class="opacity-50">Designed by</span>
                    <a class="link" target="_blank" href="https://cynthiajego.com">Cynthia Jego</a>
                </div>
            </div>
        </div>
    </section>
</main>
