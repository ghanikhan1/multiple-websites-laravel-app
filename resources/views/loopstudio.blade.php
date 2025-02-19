<x-layout.loopstudio title="Loopstudio Website" metaDescription="Welcome to the Loopstudio.">

    <!-- Feature Section -->
    <x-loopstudio.feature/>
    <!-- Creations Section -->
    <section id="creations">
        <div class="container max-w-6xl mx-auto my-32 px-6 text-gray-600 md:px-0">
            <div class="flex justify-center mb-20 md:justify-between">
                <h2 class="text-4xl text-center uppercase md:text-left md:text-5xl">
                    Our Creations
                </h2>

                <button class="hidden btn md:block">See All</button>
            </div>
            <x-loopstudio.creations :creations="$creations"/>
        </div>
    </section>

</x-layout.loopstudio>
