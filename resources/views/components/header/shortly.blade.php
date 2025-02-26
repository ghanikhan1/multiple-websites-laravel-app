<!-- Nav Container -->
<nav class="relative container mx-auto p-6">
    <!-- Flex Container For All Items -->
    <div class="flex items-center justify-between">
        <!-- Flex Container For Logo/Menu -->
        <div class="flex items-center space-x-20">
            <!-- Logo -->
            <img src="{{ asset('assets/shortly/images/logo.svg') }}" alt="" />
            <!-- Left Menu -->
            <div class="hidden space-x-8 font-bold lg:flex">
                <a href="#" class="text-grayishViolet hover:text-veryDarkViolet"
                >Features</a
                >
                <a href="#" class="text-grayishViolet hover:text-veryDarkViolet"
                >Pricing</a
                >
                <a href="#" class="text-grayishViolet hover:text-veryDarkViolet"
                >Resources</a
                >
            </div>
        </div>

        <!-- Right Buttons Menu -->
        <div
            class="hidden items-center space-x-6 font-bold text-grayishViolet lg:flex"
        >
            <div class="hover:text-veryDarkViolet">Login</div>
            <a
                href="#"
                class="px-8 py-3 font-bold text-white bg-cyan rounded-full hover:opacity-70"
            >Sign Up</a
            >
        </div>

        <!-- Hamburger Button -->
        <button
            id="menu-btn"
            class="block hamburger lg:hidden focus:outline-none"
            type="button"
        >
            <span class="hamburger-top"></span>
            <span class="hamburger-middle"></span>
            <span class="hamburger-bottom"></span>
        </button>
    </div>

    <!-- Mobile Menu -->
    <div
        id="menu"
        class="absolute hidden p-6 rounded-lg bg-darkViolet left-6 right-6 top-20 z-100"
    >
        <div
            class="flex flex-col items-center justify-center w-full space-y-6 font-bold text-white rounded-sm"
        >
            <a href="#" class="w-full text-center">Features</a>
            <a href="#" class="w-full text-center">Pricing</a>
            <a href="#" class="w-full text-center">Resources</a>
            <a href="#" class="w-full pt-6 border-t border-gray-400 text-center"
            >Login</a
            >
            <a href="#" class="w-full py-3 text-center rounded-full bg-cyan"
            >Sign Up</a
            >
        </div>
    </div>
</nav>

<!-- Hero Section -->
<section id="hero">
    <!-- Hero Container -->
    <div class="container flex flex-col-reverse mx-auto p-6 lg:flex-row">
        <!-- Content Container -->
        <div class="flex flex-col space-y-10 mb-44 lg:mt-16 lg:w-1/2 xl:mb-52">
            <h1
                class="text-5xl font-bold text-center lg:text-6xl lg:max-w-md lg:text-left"
            >
                More than just shorter links
            </h1>
            <p
                class="text-2xl text-center text-gray-400 lg:max-w-md lg:text-left"
            >
                Build your brand's recognition and get detailed insights on how your
                links are performing.
            </p>
            <div class="mx-auto lg:mx-0">
                <a
                    href="#"
                    class="py-5 px-10 text-2xl font-bold text-white bg-cyan rounded-full lg:py-4 hover:opacity-70"
                >Get Started</a
                >
            </div>
        </div>

        <!-- Image -->
        <div class="mb-24 mx-auto md:w-180 lg:mb-0 lg:w-1/2">
            <img src="{{ asset('assets/shortly/images/illustration-working.svg') }}" alt="" />
        </div>
    </div>
</section>
