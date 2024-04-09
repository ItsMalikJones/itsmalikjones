<x-bookmark key="BCK" class="bg-gray-100" sound="faceid" style="background-image: url(https://assets-global.website-files.com/6501e6768d8f44041ebdd2b1/6501e6768d8f44041ebdd2ba_Gradient.png),url(https://assets-global.website-files.com/6501e6768d8f44041ebdd2b1/6501e6768d8f44041ebdd2bb_Gradient2.png),linear-gradient(rgba(255,255,255,0) 50%,#fff),url(https://assets-global.website-files.com/6501e6768d8f44041ebdd2b1/6501e6768d8f44041ebdd2bd_Lines.svg); background-position: 0 0,100% 100%,0 0,100% -55px; background-repeat: no-repeat,no-repeat,repeat,no-repeat">
    <x-slot:spineLogo class="ml-7 text-[#0b49f0]">
        <svg xmlns="http://www.w3.org/2000/svg" style="width:clamp(50px, 6vw, 6vw);" width="77" height="77" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-fingerprint"><path d="M2 12C2 6.5 6.5 2 12 2a10 10 0 0 1 8 4"/><path d="M5 19.5C5.5 18 6 15 6 12c0-.7.12-1.37.34-2"/><path d="M17.29 21.02c.12-.6.43-2.3.5-3.02"/><path d="M12 10a2 2 0 0 0-2 2c0 1.02-.1 2.51-.26 4"/><path d="M8.65 22c.21-.66.45-1.32.57-2"/><path d="M14 13.12c0 2.38 0 6.38-1 8.88"/><path d="M2 16h.01"/><path d="M21.8 16c.2-2 .131-5.354 0-6"/><path d="M9 6.8a6 6 0 0 1 9 5.2c0 .47 0 1.17-.02 2"/></svg>
    </x-slot:spineLogo>
    <x-slot:projectMainLogo>
        <img src="/images/bluecheck.svg"/>
    </x-slot:projectMainLogo>
    <div class="text-[#0b49f0]">BlueCheck</div>
    <x-slot:content>
        <div x-data="{inView: false, fullyInView: false}" x-intersect:enter.once.threshold.75="fullyInView = true" class="text-white pl-12 relative flex flex-col pt-16 bg-no-repeat min-h-[869px] bg-commonwealth-navy bg-origin-padding bg-left-bottom lg:bg-bottom bg-[length:150vw] lg:bg-[length:78vw] bg-[url('/images/pinwheelshot.svg')]">
            <div class="px-4 mx-auto max-w-7xl lg:px-8">
                <div class="flex flex-col pr-12 space-y-4 text-left lg:items-center lg:text-center">
                    <div class="space-y-5">
                        <h1 class="font-bold italic text-3xl lg:text-[4.9vw] leading-none">Unmatched Verification</h1>
                        <h2 class="text-2xl font-medium lg:text-3xl">Ensuring Compliance Through the Power of Testing</h2>
                    </div>
                    <p class="max-w-screen-md leading-relaxed sm:text-lg md:text-xl">
                        Worked together with BlueCheck to help them implement a comprehensive test suite that gave them greater confidence in the reliability of their document and identity verification APIs, services, and integrations.
                    </p>
                </div>
            </div>
        </div>
    </x-slot:content>
</x-bookmark>
