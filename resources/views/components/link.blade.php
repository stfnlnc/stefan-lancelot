 <a {{ $attributes->merge(['class' => 'button glitch ' . (request()->routeIs($route) ? 'text-dark bg-light cursor-default' : '')]) }}
     href="{{ route($route) }}">
     {{ '{' . $slot . '}' }}
 </a>
