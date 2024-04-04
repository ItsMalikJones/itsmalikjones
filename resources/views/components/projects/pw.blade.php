<x-bookmark key="PW" class="bg-[#CED6EB] md:bg-[url('/images/pinwheelpattern.svg')] bg-no-repeat bg-contain bg-center" sound="pinwheel" hoverSound="pinwheelEmote" publisher="fcps">
    <x-slot:spineLogo class="ml-7">
        <svg style="width:clamp(70px, 6vw, 6vw);" class="animate-spin-persist" viewBox="0 0 112 112" fill="none" xmlns="http://www.w3.org/2000/svg">
            <mask id="mask0_80_343" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="46" y="18" width="41" height="42">
            <circle cx="66.5382" cy="38.8071" r="20.3006" transform="rotate(30 66.5382 38.8071)" fill="#F2F631"/>
            </mask>
            <g mask="url(#mask0_80_343)">
            <rect x="79.6235" y="16.1426" width="31.5516" height="52.0968" transform="rotate(30 79.6235 16.1426)" fill="#63D6D7"/>
            </g>
            <mask id="mask1_80_343" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="18" y="25" width="42" height="42">
            <circle cx="38.8071" cy="46.2377" r="20.3006" transform="rotate(-60 38.8071 46.2377)" fill="#F2F631"/>
            </mask>
            <g mask="url(#mask1_80_343)">
            <rect x="16.1426" y="33.1523" width="31.5516" height="52.0968" transform="rotate(-60 16.1426 33.1523)" fill="#ED864F"/>
            </g>
            <mask id="mask2_80_343" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="25" y="53" width="42" height="42">
            <circle cx="46.2377" cy="73.9688" r="20.3006" transform="rotate(-150 46.2377 73.9688)" fill="#F2F631"/>
            </mask>
            <g mask="url(#mask2_80_343)">
            <rect x="33.1523" y="96.6333" width="31.5516" height="52.0968" transform="rotate(-150 33.1523 96.6333)" fill="#E8AC3B"/>
            </g>
            <mask id="mask3_80_343" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="53" y="46" width="42" height="41">
            <circle cx="73.9688" cy="66.5383" r="20.3006" transform="rotate(120 73.9688 66.5383)" fill="#F2F631"/>
            </mask>
            <g mask="url(#mask3_80_343)">
            <rect x="96.6333" y="79.6237" width="31.5516" height="52.0968" transform="rotate(120 96.6333 79.6237)" fill="#2256A2"/>
            </g>
        </svg>
    </x-slot:spineLogo>
    Pinwheel
    <x-slot:content>
        <div x-data="{inView: false, fullyInView: false}" x-intersect:enter.once.threshold.75="fullyInView = true" class="text-white pl-12 relative flex flex-col pt-16 bg-no-repeat min-h-[869px] bg-commonwealth-navy bg-origin-padding bg-left-bottom lg:bg-bottom bg-[length:150vw] lg:bg-[length:78vw] bg-[url('/images/pinwheelshot.svg')]">
            <div class="mx-auto max-w-7xl px-4 lg:px-8">
                <div class="space-y-4 flex flex-col lg:items-center text-left lg:text-center pr-12">
                    <div class="space-y-5">
                        <h1 class="font-bold italic text-3xl lg:text-[4.9vw] leading-none">Approve & Progress</h1>
                        <h2 class="font-medium text-2xl lg:text-3xl">Navigating the Landscape of Efficient Workflow Approvals</h2>
                    </div>
                    <p class="sm:text-lg md:text-xl leading-relaxed max-w-screen-md">
                        Pinwheel is an innovative Personnel and Budget Request application designed to streamline complex approval processes, enhancing efficiency and decision-making within organizations. It empowers department heads and chiefs with a dual designation system, enabling them to assign roles as either submitters or approvers, thus optimizing workflow and ensuring accountability.
                    </p>
                </div>
            </div>
            {{-- <div class="grid grid-cols-12 gap-4 place">
                <div class="col-span-3 relative">
                    <div class="bg-commonwealth-navy text-white p-3 rounded-lg">
                        <h1 class="font-bold text-5xl italic">Hello World</h1>
                        <p>
                            Lorem ipsum dolor set amed
                        </p>
                    </div>
                </div>
                <div class="col-span-3">Hi</div>
                <div class="col-span-3">Hi</div>
                <div class="col-span-3">Hi</div>
            </div> --}}
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
