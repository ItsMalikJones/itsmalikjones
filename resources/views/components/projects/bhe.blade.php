<x-bookmark key="BHE" class="bg-bluehorse">
    <x-slot:spineLogo class="ml-7">
        <svg style="width:clamp(50px, 6vw, 6vw);" width="75" height="77" viewBox="0 0 75 77" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M0 53.3402C0 53.3402 1.36111 50.8976 1.91516 47.164C2.46668 43.4303 4.62345 22.3942 18.328 11.4263C34.4272 -1.45789 50.3695 5.52082 50.6693 5.75876C51.4497 3.38569 61.491 -1.3984 59.5227 0.39247C57.5582 2.18334 60.5031 4.47794 57.3723 7.76352C57.2711 7.89008 60.4196 12.5021 62.5321 13.7917C64.6382 15.0801 66.8456 17.1292 66.8456 17.1292C66.8456 17.1292 66.6874 19.3061 66.9594 20.0047C67.2314 20.7021 67.5527 23.5865 67.1315 24.0573C66.7102 24.5192 69.2376 31.2676 69.4704 32.3864C69.7044 33.4989 70.5557 39.8043 71.5183 42.5406C72.4835 45.2794 74.7035 49.4408 74.9413 50.0509C75.1779 50.6609 74.6162 51.7873 74.7174 52.0468C74.8199 52.31 74.0811 56.6144 74.0811 56.6144C74.0811 56.6144 73.7295 59.5659 69.7322 60.9176C65.7425 62.2744 63.7414 61.2492 63.5706 60.8113C63.4024 60.3759 61.5719 60.0835 60.6991 59.1191C59.8212 58.156 59.0977 55.5235 59.6201 55.3197C60.1463 55.1147 56.0985 47.555 55.4382 46.902C54.7829 46.2514 46.8579 46.5286 43.6955 40.7244C40.5331 34.9265 40.6394 35.9884 40.6394 35.9884C40.6394 35.9884 36.6232 38.5602 37.1772 44.8782C37.7249 51.1899 46.2343 77 46.2343 77L24.2619 76.9899C22.4202 56.4638 0 53.3402 0 53.3402Z" fill="white"/>
        </svg>
    </x-slot:spineLogo>
    <x-slot:projectMainLogo>
        <img src="/images/bhehorse.svg"/>
    </x-slot:projectMainLogo>
    Blue Horse Entries
    <x-slot:spineFlareBottom>
        <svg width="11" height="169" viewBox="0 0 11 169" fill="none" xmlns="http://www.w3.org/2000/svg">
            <rect y="169" width="18.1209" height="10.6537" transform="rotate(-90 0 169)" fill="#2D5DB3"/>
            <rect y="149.149" width="18.1209" height="10.6537" transform="rotate(-90 0 149.149)" fill="white"/>
            <rect y="150.879" width="1.7258" height="10.6537" transform="rotate(-90 0 150.879)" fill="#264680"/>
            <rect y="131.031" width="1.7258" height="10.6537" transform="rotate(-90 0 131.031)" fill="#264680"/>
            <rect y="129.391" width="18.1209" height="10.6537" transform="rotate(-90 0 129.391)" fill="#2D5DB3"/>
            <rect y="109.54" width="18.1209" height="10.6537" transform="rotate(-90 0 109.54)" fill="white"/>
            <rect y="111.27" width="1.7258" height="10.6537" transform="rotate(-90 0 111.27)" fill="#264680"/>
            <rect y="91.4208" width="1.7258" height="10.6537" transform="rotate(-90 0 91.4208)" fill="#264680"/>
            <rect y="89.7812" width="18.1209" height="10.6537" transform="rotate(-90 0 89.7812)" fill="#2D5DB3"/>
            <rect y="69.9307" width="18.1209" height="10.6537" transform="rotate(-90 0 69.9307)" fill="white"/>
            <rect y="71.6602" width="1.7258" height="10.6537" transform="rotate(-90 0 71.6602)" fill="#264680"/>
            <rect y="51.8114" width="1.7258" height="10.6537" transform="rotate(-90 0 51.8114)" fill="#264680"/>
            <rect y="50.1719" width="18.1209" height="10.6537" transform="rotate(-90 0 50.1719)" fill="#2D5DB3"/>
            <rect y="30.3213" width="18.1209" height="10.6537" transform="rotate(-90 0 30.3213)" fill="white"/>
            <rect y="32.0508" width="1.7258" height="10.6537" transform="rotate(-90 0 32.0508)" fill="#264680"/>
            <rect y="12.2021" width="1.7258" height="10.6537" transform="rotate(-90 0 12.2021)" fill="#264680"/>
            <rect y="10.5625" width="10.5625" height="10.6537" transform="rotate(-90 0 10.5625)" fill="#2D5DB3"/>
        </svg>
    </x-slot:spineFlareBottom>
    <x-slot:content>
        <div x-data="{inView: false, fullyInView: false}" x-intersect:enter.once.threshold.75="fullyInView = true" class="pl-12 relative flex flex-col justify-center bg-no-repeat min-h-[869px] bg-right-top bg-[length:49vw] bg-[url('/images/bhemain.png')]">
            <div class="space-y-4">
                <div>
                    <h1 class="font-bold italic text-[6vw] text-bluehorse">Discover & Ride</h1>
                    <h2 class="font-medium text-[2vw] -mt-6">Uncovering the World of Equestrian Events</h2>
                </div>
                <p class="text-[1vw] leading-relaxed w-[35vw]">
                    A discovery and registration platform for equestrian shows. Event organizers create and publish their own events. Riders or parents easily fill out online entry forms and pay all fees with a guided experience.
                </p>
                <img src="{{url('/images/horseinfocard.png')}}"
                x-show="fullyInView"
                x-transition:enter="transition ease-out duration-700"
                x-transition:enter-start="opacity-0 scale-90 -translate-y-12 -translate-x-12"
                x-transition:enter-end="opacity-100 scale-100"
                class="absolute bottom-28 right-[26.5vw]"
                loading="lazy"
                alt="Horse info card"/>
                <img src="{{url('/images/bheselect.png')}}"
                x-show="fullyInView"
                x-transition:enter="transition ease-out duration-500 delay-500"
                x-transition:enter-start="opacity-0 scale-90 translate-x-16"
                x-transition:enter-end="opacity-100 scale-100"
                class="absolute right-0 md:bottom-0 lg:bottom-[16vh] xl:-bottom-[2vh]"
                loading="lazy"
                alt="Horse info card"/>
            </div>
        </div>
        {{-- <div class="min-h-[869px]">
            <div class="max-w-[90rem] bg-bluehorse mx-auto rounded-md">
                <div class="bg-[url('/images/riders-4.jpg')] bg-cover">
                    Hi
                </div>
            </div>
        </div> --}}
    </x-slot:content>
</x-bookmark>
