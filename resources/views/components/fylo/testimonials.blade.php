<section id="testimonials" class="bg-gray-50 dark:bg-darkBlue">
    <!-- Testimonials Container -->
    <div class="container mx-auto px-6 pt-12 pb-80 md:pb-96">
        <!-- Boxes Container -->
        <div
            class="relative flex flex-col w-full space-y-6 md:flex-row md:space-y-0 md:space-x-12"
        >
            <!-- Quotes Image -->
            <img
                src="{{ asset('assets/fylo/images/bg-quotes.png') }}"
                alt=""
                class="absolute left-1 -top-2 w-10 md:-top-16 md:w-20"
            />

            <!-- Box 1 -->

            <x-fylo.testimonial-box
                :description="'Fylo has improved our team productivity by an order of magnitude.
                    Since making the switch our team has become a well-oiled
                    collaboration machine.'"
                :imagePath="'assets/fylo/images/profile-1.jpg'"
                :name="'Satish Patel'"
                :role="'Founder & CEO. Huddle'"
            />

            <!-- Box 2 -->

            <x-fylo.testimonial-box
                :description="'Fylo has improved our team productivity by an order of magnitude.
                    Since making the switch our team has become a well-oiled
                    collaboration machine.'"
                :imagePath="'assets/fylo/images/profile-2.jpg'"
                :name="'Bruce McKenzie'"
                :role="'Founder & CEO. Huddle 2'"
            />

            <!-- Box 3 -->

            <x-fylo.testimonial-box
                :description="'Fylo has improved our team productivity by an order of magnitude.
                    Since making the switch our team has become a well-oiled
                    collaboration machine.'"
                :imagePath="'assets/fylo/images/profile-3.jpg'"
                :name="'Eva Boyd'"
                :role="'Founder & CEO. Huddle 3'"
            />
        </div>
    </div>
</section>
