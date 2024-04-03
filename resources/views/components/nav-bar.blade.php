<div :class="colors.bgColor" class="grid grid-cols-12 p-12">
    <div class="col-span-4 hidden md:block items-center h-full">
        <div class="flex gap-5 items-center">
            <x-nav-link :href="route('home')" :active="true">Home</x-nav-link>
            <x-nav-link href="#">About</x-nav-link>
            <x-nav-link href="#">Projects</x-nav-link>
            <x-nav-link href="#">Talks</x-nav-link>
            <x-nav-link href="#">Uses</x-nav-link>
            <x-nav-link href="#">Now</x-nav-link>
            <x-nav-link href="#">Contact</x-nav-link>
        </div>
    </div>
    <a href="{{route('home')}}" class="text-aqua text-3xl col-span-4 content-center font-semibold text-center tracking-[-0.14rem]">
        @ItsMalikJones
    </a>
    <div class="col-span-4 hidden md:block justify-self-end items-center h-full">
        <div class="flex gap-5 items-center text-white ">
            <x-nav-link href="https://github.com/ItsMalikJones/itsmalikjones" icon="github"/>
            <x-nav-link href="https://twitter.com/ItsMalikJones" icon="twitter"/>
            <x-nav-link href="https://instagram.com/ItsMalikJones" icon="instagram"/>
            <x-nav-link href="https://www.linkedin.com/in/itsmalikjones" icon="linkedin"/>
        </div>
    </div>
</div>
