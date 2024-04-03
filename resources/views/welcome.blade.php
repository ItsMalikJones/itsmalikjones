<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">

        <title>{{config('app.name')}}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

        <!-- Fathom - beautiful, simple website analytics -->
        <script src="https://cdn.usefathom.com/script.js" data-site="JKQESFDF" defer></script>
        <!-- / Fathom -->

        @vite('resources/css/app.css')
    </head>
    <body x-data="{selectedProject: null, colors: { bgColor: 'bg-commonwealth-navy', textColor: 'text-white', accentColor: 'aqua'}, sounds: {}}" x-init="() => {
        sounds['faceid'] = new Audio(@js(url('/audio/face_id_ding.mp3')));
        sounds['pinwheel'] = new Audio(@js(url('/audio/pinwheel.m4a')));
        sounds['pinwheelEmote'] = new Audio(@js(url('/audio/pinwheel_emote.mp3')));
    }" class="font-sans antialiased">
        <x-nav-bar/>
        <div x-show="!selectedProject" class="bg-amber-100 grid grid-cols-12">
            <div class="col-span-12 lg:col-span-5 bg-gray-200 overflow-hidden bg-cover bg-bottom bg-no-repeat min-h-[740px]" style="background-image: url('{{url('/images/me.jpeg')}}')"></div>
            <div class="col-span-12 lg:col-span-7 p-12 flex flex-col justify-between space-y-60">
                <div>
                    <h1 class="text-5xl md:text-[7vw] font-bold text-orange-600">
                        Malik
                        <br/>
                        Alleyne-Jones
                    </h1>
                </div>
                <div>
                    <h2 class="font-semibold text-blue-800 md:text-[2vw]">
                        Software Engineer residing in
                        <br/>
                        Lexington, Kentucky, United States
                    </h2>
                </div>
            </div>
        </div>
        <div class="flex flex-col">
            <x-projects.bhe/>
            <x-projects.rp/>
            <x-projects.pw/>
            <x-projects.bck/>
        </div>
    </body>
</html>
