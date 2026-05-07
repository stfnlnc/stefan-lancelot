<button {{ $attributes->merge(['class' => 'button w-fit glitch ']) }}>
    {{ '{' . $slot . '}' }}
</button>
