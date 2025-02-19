<!-- Footer -->
<footer class="bg-darkBlue2 text-white">
    <div class="container mx-auto pt-12 px-5 pb-10">
        <!-- Flex Container For All Items -->
        <div
            class="flex flex-col justify-between space-y-24 md:flex-row md:space-y-0"
        >
            <!-- Email & Phone -->
            <div class="mt-10 space-y-6">
                <div class="flex items-center space-x-3 md:-mt-10">
                    <div class="w-6">
                        <img src="{{ asset('assets/fylo/images/icon-phone.svg') }}" alt="Fylo Logo" class="scale-10" />
                    </div>
                    <div>+1-543-123-4567</div>
                </div>
                <div class="flex items-center space-x-3">
                    <div class="w-6">
                        <img src="{{ asset('assets/fylo/images/icon-email.svg') }}" alt="" class="scale-10" />
                    </div>
                    <div>example@fylo.com</div>
                </div>
            </div>

            <!-- Menus -->
            <div
                class="flex flex-col space-y-10 text-xl md:text-base md:space-x-20 md:space-y-0 md:flex-row"
            >
                <div class="flex flex-col space-y-3">
                    <a href="#">About</a>
                    <a href="#">Jobs</a>
                    <a href="#">Press</a>
                    <a href="#">Blog</a>
                </div>
                <div class="flex flex-col space-y-3">
                    <a href="#">Contact Us</a>
                    <a href="#">Terms</a>
                    <a href="#">Privacy</a>
                </div>
            </div>

            <!-- Social -->
            <div class="flex justify-center pb-10 space-x-3">
                <div>
                    <a href="#">
                        <img
                            src="{{ asset('assets/fylo/images/facebook.svg') }}"
                            alt="Facebook Icon"
                            class="p-2 bg-darkBlue rounded-full ficon"
                        />
                    </a>
                </div>
                <div>
                    <a href="#">
                        <img
                            src="{{ asset('assets/fylo/images/twitter.svg') }}"
                            alt="Twitter Icon"
                            class="p-2 bg-darkBlue rounded-full ficon"
                        />
                    </a>
                </div>
                <div>
                    <a href="#">
                        <img
                            src="{{ asset('assets/fylo/images/instagram.svg') }}"
                            alt="Instagram Icon"
                            class="p-2 bg-darkBlue rounded-full ficon"
                        />
                    </a>
                </div>
            </div>
        </div>
    </div>
</footer>
</body>
</html>
