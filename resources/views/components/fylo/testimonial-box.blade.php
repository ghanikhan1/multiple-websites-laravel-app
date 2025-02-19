<div
    class="flex flex-col p-10 space-y-6 rounded-lg bg-gray-100 dark:bg-darkBlue3 md:w-1/3"
>
    <p class="text-sm leading-5 md:text-lg">
        {{ $description }}
    </p>
    <!-- Customer Info -->
    <div class="flex space-x-4">
        <img
            src="{{ asset($imagePath) }}"
            alt=""
            class="w-10 h-10 rounded-full"
        />
        <div>
            <h5 class="text-sm font-semibold">{{ $name }}</h5>
            <p class="text-xs font-extralight">{{ $role }}</p>
        </div>
    </div>
</div>
