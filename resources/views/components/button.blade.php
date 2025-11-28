<button {{ $attributes->merge(['type' => 'submit', 'class' => 'px-5 py-2.5 relative rounded group font-medium text-white font-medium inline-block']) }}>
    <!-- Layer 1: blurred gradient background -->
    <span class="absolute top-0 left-0 w-full h-full rounded opacity-50 filter blur-sm bg-gradient-to-br from-teal-600 to-teal-500"></span>

    <!-- Layer 2: offset gradient for depth -->
    <span class="h-full w-full inset-0 absolute mt-0.5 ml-0.5 bg-gradient-to-br filter group-active:opacity-0 rounded opacity-50 from-teal-600 to-teal-500"></span>

    <!-- Layer 3: main hover blur effect -->
    <span class="absolute inset-0 w-full h-full transition-all duration-200 ease-out rounded shadow-xl bg-gradient-to-br filter group-active:opacity-0 group-hover:blur-sm from-teal-600 to-teal-500"></span>

    <!-- Layer 4: solid gradient background -->
    <span class="absolute inset-0 w-full h-full transition duration-200 ease-out rounded bg-gradient-to-br to-teal-600 from-teal-500"></span>

    <!-- Button text -->
    <span class="relative">{{ $slot }}</span>
</button>
