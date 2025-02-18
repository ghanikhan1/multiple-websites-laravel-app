@props(['image', 'heading', 'description', 'mt' => '0px']) <!-- Default value for $mt -->

<div class="relative flex flex-col p-6 space-y-6 bg-white rounded-lg md:w-1/3" style="margin-top: {{ $mt }};">
    <!-- Image Positioning -->
    <div class="absolute -ml-10 left-1/2 -top-10 md:left-16">
        <!-- Image Container For Background & Center -->
        <div class="flex items-center justify-center w-20 h-20 p-4 rounded-full bg-veryDarkViolet">
            <img src="{{ asset($image) }}" alt="{{ $heading }}" />
        </div>
    </div>
    <h5 class="pt-6 text-xl font-bold text-center capitalize md:text-left">
        {{ $heading }}
    </h5>
    <p class="text-center text-gray-400 md:text-left">
        {{ $description }}
    </p>
</div>
