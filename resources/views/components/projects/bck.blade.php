<x-bookmark key="BCK" class="bg-gray-100" sound="faceid" style="background-image: url(https://assets-global.website-files.com/6501e6768d8f44041ebdd2b1/6501e6768d8f44041ebdd2ba_Gradient.png),url(https://assets-global.website-files.com/6501e6768d8f44041ebdd2b1/6501e6768d8f44041ebdd2bb_Gradient2.png),linear-gradient(rgba(255,255,255,0) 50%,#fff),url(https://assets-global.website-files.com/6501e6768d8f44041ebdd2b1/6501e6768d8f44041ebdd2bd_Lines.svg); background-position: 0 0,100% 100%,0 0,100% -55px; background-repeat: no-repeat,no-repeat,repeat,no-repeat">
    <x-slot:spineLogo class="ml-7 text-[#0b49f0]">
        <svg xmlns="http://www.w3.org/2000/svg" style="width:clamp(50px, 6vw, 6vw);" width="77" height="77" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-fingerprint"><path d="M2 12C2 6.5 6.5 2 12 2a10 10 0 0 1 8 4"/><path d="M5 19.5C5.5 18 6 15 6 12c0-.7.12-1.37.34-2"/><path d="M17.29 21.02c.12-.6.43-2.3.5-3.02"/><path d="M12 10a2 2 0 0 0-2 2c0 1.02-.1 2.51-.26 4"/><path d="M8.65 22c.21-.66.45-1.32.57-2"/><path d="M14 13.12c0 2.38 0 6.38-1 8.88"/><path d="M2 16h.01"/><path d="M21.8 16c.2-2 .131-5.354 0-6"/><path d="M9 6.8a6 6 0 0 1 9 5.2c0 .47 0 1.17-.02 2"/></svg>
    </x-slot:spineLogo>
    <x-slot:projectMainLogo>
        <img src="/images/bluecheck.svg"/>
    </x-slot:projectMainLogo>
    <div class="text-[#0b49f0]">BlueCheck</div>
    <x-slot:content>
        <div x-data="{inView: false, fullyInView: false}" x-intersect:enter.once.threshold.75="fullyInView = true" class="relative flex flex-col py-20 pt-16 text-white bg-left-bottom bg-no-repeat bg-commonwealth-navy bg-origin-padding lg:bg-bottom ">
            <div class="px-4 mx-auto lg:px-8">
                <div class="flex flex-col space-y-12 text-left lg:items-center lg:text-center">
                    <div class="space-y-4">
                        <div class="space-y-5">
                            <h1 class="font-bold italic text-3xl lg:text-[4.9vw] leading-none">Unmatched Verification</h1>
                            <h2 class="text-2xl font-medium lg:text-3xl">Ensuring Compliance Through the Power of Testing</h2>
                        </div>
                        <p class="max-w-screen-md leading-relaxed lg:mx-auto sm:text-lg md:text-xl">
                            Worked together with BlueCheck to help them implement a comprehensive test suite that gave them greater confidence in the reliability of their document and identity verification APIs, services, and integrations.
                        </p>
                    </div>
                    <div class="grid w-full h-full grid-cols-12 gap-4 text-left place-items-stretch">
                        <div class="w-full h-full col-span-12 lg:col-span-4">
                            <div class="px-5 py-4 space-y-2 bg-white rounded-2xl">
                                <div class="flex items-center pb-2 gap-x-3">
                                    <x-icon name="lucide-scan-face" class="text-bluehorse size-6"/>
                                    <div class="text-xl uppercase font-medium text-[#1d1e25]">Verifying</div>
                                </div>
                                <hr class="-mx-5 border-bluehorse"/>
                                <p class="text-[#7e8492] py-2">
                                    Implemented tests for BlueCheck's Person Data Search service responsible for verifying user's age via PII. These tests ensure ongoing compliance in the ever-changing landscape of the law across many jurisdictions.
                                </p>
                            </div>
                        </div>
                        <div class="w-full h-full col-span-12 lg:col-span-4">
                            <div class="h-full px-5 py-4 space-y-2 bg-white rounded-2xl">
                                <div class="flex items-center pb-2 gap-x-3">
                                    <x-icon name="lucide-copy-check" class="text-bluehorse size-6"/>
                                    <div class="text-xl uppercase font-medium text-[#1d1e25]">Processing</div>
                                </div>
                                <hr class="-mx-5 border-bluehorse"/>
                                <p class="text-[#7e8492] py-2">
                                    Implemented tests for BlueCheck's manual and batch verification process on their Merchant platform.
                                </p>
                            </div>
                        </div>
                        <div class="w-full h-full col-span-12 lg:col-span-4">
                            <div class="h-full px-5 py-4 space-y-2 bg-white rounded-2xl">
                                <div class="flex items-center pb-2 gap-x-3">
                                    <x-icon name="lucide-blocks" class="text-bluehorse size-6"/>
                                    <div class="text-xl uppercase font-medium text-[#1d1e25]">Integrating</div>
                                </div>
                                <hr class="-mx-5 border-bluehorse"/>
                                <p class="text-[#7e8492] py-2">
                                    Implemented tests for BlueCheck's APIs and embeds which enable the full power of their verification services on third-party platforms like Shopify, WooCommerce, BigCommerce and more.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </x-slot:content>
</x-bookmark>
