<section id="hero" class="bg-white w-full py-32">
    <div class="p-6 flex flex-col md:flex-row items-center justify-around container gap-12 mx-auto">
        <div>
            <h1 class="text-gray-800 text-3xl font-bold md:text-5xl lg:text-7xl">Hi, i’m Dasteen <br />
                Front end dev</h1>
            <p class="max-w-lg relative px-4 my-8 border-l-4 border-gray-800 text-gray-500 text-md">On this blog
                I share
                tips and tricks,
                frameworks,
                projects,
                tutorials, etc
                Make sure you subscribe to get the latest updates</p>
            <div data-element="fields" data-stacked="false"
                class="flex items-center w-full max-w-md mb-3 seva-fields formkit-fields">
                <div class="relative w-full mr-3 formkit-field">
                    <label for="member_email"
                        class="hidden block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Email
                        address</label>
                    <div class="absolute inset-y-0 left-0 flex items-center pl-3.5 pointer-events-none">
                        <svg class="w-3.5 h-3.5 text-gray-500 dark:text-gray-400" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 16">
                            <path
                                d="m10.036 8.278 9.258-7.79A1.979 1.979 0 0 0 18 0H2A1.987 1.987 0 0 0 .641.541l9.395 7.737Z">
                            </path>
                            <path
                                d="M11.241 9.817c-.36.275-.801.425-1.255.427-.428 0-.845-.138-1.187-.395L0 2.6V14a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V2.5l-8.759 7.317Z">
                            </path>
                        </svg>
                    </div>
                    <input id="member_email"
                        class="formkit-input bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full pl-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                        name="email_address" aria-label="Email Address" placeholder="Your email address..."
                        required="" type="email">
                </div>
                <button data-element="submit" class="formkit-submit">
                    <div class="formkit-spinner">
                        <div></div>
                        <div></div>
                        <div></div>
                    </div>
                    <span
                        class="px-5 py-3 text-sm font-medium text-center text-white bg-primary-700 rounded-lg cursor-pointer hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">Subscribe</span>
                </button>
            </div>
        </div>
        <div>
            <img src="{{ asset('images/home/hero-image.png') }}" alt="Hero Image" />
        </div>
    </div>
</section>
