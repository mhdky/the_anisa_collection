<button {{ $attributes->merge(['type' => 'submit', 'class' => 'bg-yellow-primary w-full mt-3 py-[6px] rounded-md text-white']) }}>
    {{ $slot }}
</button>
