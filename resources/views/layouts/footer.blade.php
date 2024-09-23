<footer class="bg-white text-color-primary mt-4">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 px-4 py-4">
        <div class="flex justify-between items-center">
            <div class="text-sm">
                &copy; {{ date('Y') }}
                <a href="https://pratamatechsolution.co.id/" target="_blank" class="text-yellow-400 hover:text-yellow-300">pisanGGoreng <em class="icon ni ni-heart-fill"></em></a> All rights reserved.
            </div>
            <div>
                <ul class="flex space-x-4">
                    <li>
                        <svg height="40" viewBox="0 0 90 40" xmlns="http://www.w3.org/2000/svg">
                            <defs>
                                <linearGradient id="text-gradient" x1="0%" y1="0%" x2="100%" y2="100%">
                                    <stop offset="0%" style="stop-color:#f2bb18;stop-opacity:1" />
                                    <stop offset="50%" style="stop-color:#f2bb18;stop-opacity:1" />
                                    <stop offset="50%" style="stop-color:#263371;stop-opacity:1" />
                                    <stop offset="100%" style="stop-color:#263371;stop-opacity:1" />
                                </linearGradient>
                            </defs>
                            <text x="0" y="25" fill="url(#text-gradient)" font-size="12" font-family="Arial, sans-serif">
                                <tspan x="0" dy="0" height="100%" class="font-bold">{{ __('Portfolio') }}</tspan>
                            </text>
                        </svg>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</footer>
