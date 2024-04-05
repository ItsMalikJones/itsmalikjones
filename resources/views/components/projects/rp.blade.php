<x-bookmark key="RP" class="bg-aqua">
    <x-slot:spineLogo class="ml-7">
        <svg width="111" height="215" viewBox="0 0 111 215" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M111 0L111 215L55.5 184.447L-9.39795e-06 215L0 -4.85196e-06L111 0Z" fill="white"/>
            <path d="M62.0626 116.946C56.7094 117.914 51.197 117.23 46.2221 114.978C41.2473 112.726 37.0333 109.009 34.1128 104.295C31.1924 99.5819 29.6965 94.0839 29.8143 88.4964C29.9321 82.9089 31.6583 77.4828 34.7747 72.9038C39.0046 66.8902 45.365 62.8285 52.4826 61.5956C59.6001 60.3627 66.9037 62.0577 72.8163 66.3144C78.7288 70.5712 82.7758 77.0482 84.0835 84.3468C85.3911 91.6454 83.8544 99.18 79.8052 105.324C77.7419 108.371 75.1114 110.967 72.0659 112.962C69.0204 114.956 65.6204 116.311 62.0626 116.946V116.946ZM55.1059 76.3749C52.0391 76.9351 49.2841 78.6468 47.3755 81.1777C45.4669 83.7086 44.5407 86.8783 44.7767 90.0718C45.0127 93.2652 46.3941 96.2546 48.6527 98.4599C50.9114 100.665 53.8863 101.929 57.0002 102.007C60.1141 102.084 63.1449 100.969 65.5045 98.8786C67.8641 96.788 69.3843 93.8706 69.77 90.6926C70.1557 87.5147 69.3795 84.3027 67.5919 81.6799C65.8044 79.0572 63.133 77.2107 60.0961 76.4988C58.4574 76.1156 56.7607 76.0735 55.1059 76.3749V76.3749Z" fill="#63D6D7"/>
            <path opacity="0.5" d="M60.8438 109.821C56.2757 110.646 51.5705 109.854 47.4971 107.574L47.3403 107.479L47.4609 106.579C51.3829 108.828 56.2623 109.775 60.6979 108.972C71.3488 107.041 78.4875 96.5604 76.6127 85.6079C76.1679 82.9981 75.227 80.5041 73.8437 78.2686C72.4604 76.0332 70.6619 74.1002 68.5511 72.5803C66.4404 71.0603 64.0588 69.9833 61.5428 69.4109C59.0268 68.8385 56.4256 68.7819 53.8883 69.2443C49.4117 70.0563 45.1918 72.5976 42.2464 76.148C42.2464 76.148 41.9498 75.2046 42.0559 75.0831C44.6151 72.1428 47.9275 70.0024 51.6141 68.9067C55.3008 67.811 59.2129 67.8041 62.9032 68.8869C66.5935 69.9698 69.9129 72.0986 72.4819 75.0299C75.0508 77.9612 76.7656 81.5766 77.4301 85.4629C79.3881 96.8802 71.9456 107.808 60.8438 109.821Z" fill="white"/>
            <path d="M41.3643 71.0862L26.6851 73.7476L37.0797 134.361L51.7589 131.7L41.3643 71.0862Z" fill="#2E378B"/>
            <path opacity="0.5" d="M35.1385 76.447L34.3169 76.5959L43.3033 128.998L44.125 128.849L35.1385 76.447Z" fill="white"/>
        </svg>
    </x-slot:spineLogo>
    <x-slot:projectMainLogo>
        <img class="w-[80%]" src="/images/rp.svg"/>
    </x-slot:projectMainLogo>
    <div class="relative">
        <div>Race Passport</div>
        <img x-show="selectedProject != 'RP'" class="absolute hidden -right-56 -top-3 xl:block" src="{{url('/images/epm.png')}}"/>
    </div>
    <x-slot:content>
        <div x-data="{inView: false, fullyInView: false}" x-intersect:enter.once.threshold.75="fullyInView = true" class="pl-12 relative flex flex-col justify-center bg-no-repeat min-h-[869px]">
            <div class="space-y-4">
                <div>
                    <h1 class="font-bold italic text-[6vw] text-bluehorse">Live. Venture. Explore.</h1>
                    <h2 class="font-medium text-[2vw] -mt-6">Navigating the Path to Foot Races Worldwide</h2>
                </div>
                <p class="text-[1vw] leading-relaxed w-[35vw]">
                    A dynamic discovery and registration platform tailored for foot races. Event organizers can effortlessly create and publicize their own events, while runners or their supporters navigate through an intuitive online entry process. This platform simplifies registration, fee payment, and participant management, offering a seamless experience from start to finish line.
                </p>
            </div>
        </div>
    </x-slot:content>
</x-bookmark>
