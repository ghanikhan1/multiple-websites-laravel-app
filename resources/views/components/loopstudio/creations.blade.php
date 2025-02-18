<div class="item-container">

    @foreach ($creations as $creation)
        <div class="group item relative overflow-hidden">
            <!-- Desktop Image -->
            <img src="{{ asset($creation['desktopImage']) }}" alt="{{ $creation['title'] }}"
                 class="hidden w-full duration-200 md:block group-hover:scale-110"/>
            <!-- Mobile Image -->
            <img src="{{ asset($creation['mobileImage']) }}" alt="{{ $creation['title'] }}" class="w-full md:hidden"/>
            <!-- Gradient Overlay -->
            <div class="item-gradient"></div>
            <!-- Item Title -->
            <h5 class="absolute bottom-4 md:bottom-8 px-6 md:px-10 w-52 duration-200 group-hover:scale-110 group-hover:text-black">
                {{ $creation['title'] }}
            </h5>
        </div>
    @endforeach

</div>
