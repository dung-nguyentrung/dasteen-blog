<section id="category" class="bg-gray-200 py-20 md:py-36">
    <div class="container mx-auto">
        <div class="flex items-center justify-between py-4">
            <p class="capitalize font-medium text-md mx-2 md:mx-0 md:text-lg flex items-center gap-2">
                Browse the category
                <svg width="35" height="3" viewBox="0 0 35 3" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <line y1="1.5" x2="35" y2="1.5" stroke="#2B2C34" stroke-width="2" />
                </svg>

            </p>
            <a href="#" class="capitalize font-medium text-md mx-2 md:mx-0 md:text-lg flex items-center gap-2">
                see all category
                <svg width="8" height="16" viewBox="0 0 8 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M1.20286 14.8762L1.20289 14.8762C1.38024 15.0487 1.60745 15.1472 1.84632 15.1482C2.00583 15.1585 2.16435 15.1248 2.30882 15.0513C2.45467 14.977 2.58112 14.8647 2.67935 14.7256C2.67938 14.7256 2.67941 14.7256 2.67943 14.7255L6.92897 8.7391L6.92952 8.7383C7.07328 8.53299 7.15 8.2786 7.15 8.01867C7.15 7.759 7.07343 7.50486 6.92994 7.29965C6.9298 7.29945 6.92966 7.29924 6.92952 7.29904L2.8264 1.31541C2.74574 1.19001 2.64284 1.08361 2.523 1.00411C2.40239 0.924097 2.26749 0.873279 2.12675 0.856304C1.98594 0.839321 1.84397 0.856788 1.71023 0.907014C1.57765 0.956802 1.457 1.0373 1.35508 1.1419C1.25423 1.23763 1.17161 1.35441 1.11088 1.4849C1.04965 1.61647 1.01156 1.76006 0.998201 1.90747C0.984842 2.0549 0.9964 2.20409 1.0324 2.34672C1.06836 2.48922 1.12823 2.62317 1.20942 2.74062C1.20949 2.74071 1.20955 2.74081 1.20962 2.7409L4.82179 8.01204L1.07479 13.2748L1.07467 13.275C0.992198 13.3912 0.930867 13.5241 0.893308 13.666C0.855747 13.8078 0.842478 13.9566 0.85405 14.1039C0.865622 14.2513 0.901876 14.3952 0.961295 14.5274C1.02071 14.6597 1.10246 14.7785 1.20286 14.8762Z"
                        fill="#2B2C34" stroke="#2B2C34" stroke-width="0.3" />
                </svg>

            </a>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-5 gap-8 md:gap-16">
            @for ($i = 0; $i < 5; $i++)
                <div
                    class="{{ $i == 2 ? 'bg-primary-700' : 'bg-white' }} max-w-sm flex flex-col justify-center p-6 min-h-[280px]  border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 mx-8 md:mx-0">
                    <svg width="60" height="60" viewBox="0 0 60 60" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <rect width="60" height="60" rx="7.45763" fill="#FFFFFE" />
                        <path d="M29.4798 49L16.0033 45.3013L13 12H46L42.9936 45.2962L29.4798 49Z" fill="#264DE4" />
                        <path d="M40.4198 43.1759L42.9889 14.7228H29.5V46.1688L40.4198 43.1759Z" fill="#2965F1" />
                        <path
                            d="M19.8849 27.0739L20.2551 31.1581H29.5001V27.0739H19.8849ZM19.1409 18.8073L19.5164 22.8915H29.5001V18.8073H19.1409ZM29.5001 37.6812L29.482 37.6859L24.881 36.4577L24.5869 33.2003H20.4397L21.0185 39.6133L29.4811 41.9357L29.5001 41.9306V37.6812Z"
                            fill="#EBEBEB" />
                        <path
                            d="M39.0887 27.0739L39.8345 18.8073H29.4857V22.8915H35.307L34.9311 27.0739H29.4857V31.1581H34.5729L34.0933 36.4552L29.4856 37.6846V41.9338L37.9549 39.6133L38.017 38.9232L38.988 28.1706L39.0887 27.0739Z"
                            fill="white" />
                    </svg>

                    <a href="#"
                        class="inline-flex items-center px-3 py-2 text-md text-center {{ $i == 2 ? 'text-white' : 'text-gray-800' }} font-bold">
                        CSS
                    </a>
                </div>
            @endfor
        </div>
    </div>
</section>
