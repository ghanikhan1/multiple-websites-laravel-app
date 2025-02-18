<section id="features" class="pb-32 bg-gray-100">
    <div
        class="relative container flex flex-col items-start px-6 mx-auto md:flex-row md:space-x-7"
    >
        <!-- Horizontal Line -->
        <div
            class="hidden absolute top-24 w-10/12 left-16 h-3 bg-cyan md:block"
        ></div>
        <!-- Vertical Line -->
{{--        <div class="absolute w-2 left-1/2 h-full -ml-1 bg-cyan md:hidden"></div>--}}

        <x-shortly.box
            :image="'assets/shortly/images/icon-brand-recognition.svg'"
            :heading="'Brand Recognition'"
            :description="'Boost your brand recognition with each click. Generic links don\'t mean a thing. Branded links help instil confidence in your content.'"
            :mt="'0px'"
        />

        <x-shortly.box
            :image="'assets/shortly/images/icon-detailed-records.svg'"
            :heading="'Detailed records'"
            :description="'Gain insights into who is clicking your links. Knowing when and where people engage with your content helps inform better decisions.'"
            :mt="'20px'"
        />

        <x-shortly.box
            :image="'assets/shortly/images/icon-fully-customizable.svg'"
            :heading="'Fully customizable'"
            :description="'Improve brand awareness and content discoverability through
                customizable links, supercharging audience engagement.'"
            :mt="'34px'"
        />

    </div>
</section>
