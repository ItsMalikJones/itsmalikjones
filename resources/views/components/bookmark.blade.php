@props([
    'key',
    'bgColor',
    'projectMainLogo' => null,
    'publisher' => 'birdboar',
    'publisherColor' => null,
    'spineLogo' => null,
    'borderColor' => null,
    'spineFlareBottom' => null,
    'hoverSound' => null,
    'sound' => null,
    'content' => null
])
<div>
    <div :class="selectedProject == @js($key) ? 'h-[869px]' : 'hover:h-[200px] h-[166px]' " x-on:mouseover="@if($hoverSound)sounds.{{$hoverSound}}.played.length <= 0 ? sounds.{{$hoverSound}}?.play() : '' @endif" x-on:click="selectedProject = @js($key); @if($sound)sounds.{{$sound}}.played.length <= 0 ? sounds.{{$sound}}?.play() : '' @endif" class="bg-{{$bgColor}} text-white group flex justify-between items-center cursor-pointer select-none transition-all duration-500 transform-gpu overflow-hidden relative {{ $borderColor ? 'border-x-8 border-'.$borderColor : ''}}" style="{{$attributes->get('style')}}">
        <div :class="selectedProject == @js($key) ? 'opacity-0' : 'opacity-100' " class="w-[189px] flex justify-center items-center duration-300">
            <div class="-rotate-90 {{$spineLogo->attributes->get('class')}}">
                {{$spineLogo}}
            </div>
        </div>
        <div class="text-2xl sm:text-4xl md:text-5xl lg:text-6xl xl:text-8xl uppercase font-bold italic flex flex-col justify-center">
            <div x-show="selectedProject == @js($key)" x-transition.enter.delay.300ms class="mx-auto h-full">
                <div class="-translate-y-20">
                    {{$projectMainLogo}}
                </div>
            </div>
            <div class="relative">
                {{$slot}}
            </div>
        </div>
        <div :class="selectedProject == @js($key) ? 'opacity-0' : 'opacity-100' " class="duration-300 {{$publisherColor}}">
            @if($publisher == 'birdboar')
                <div class="flex items-center justify-center">
                    <div class="h-[62px] w-[86px] flex items-center justify-center pr-10">
                        <svg width="48" height="63" viewBox="0 0 48 63" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M7.11295 26.5707C7.08866 26.4249 7.04493 26.279 6.99149 26.1332C6.93804 25.2101 6.90893 24.5293 7.03039 23.8491C7.16643 23.0231 7.44816 22.3431 7.80283 21.6143C8.07492 21.0313 8.88615 19.7193 8.86186 19.7193C8.857 19.7193 8.6774 19.8658 8.55108 20.0116C8.52679 20.0116 8.76471 19.6225 8.75985 19.6225C8.7307 19.5253 7.78338 20.7889 7.41899 21.4692C7.00115 22.2465 6.3258 23.6555 6.3258 23.6555C6.27235 23.7527 5.97588 24.335 5.74267 24.5779C5.10619 25.1609 4.61544 25.8897 4.00325 26.7643C3.51739 27.4931 3.02709 28.2224 2.36632 28.5625C1.63267 28.9512 1.03018 29.0968 0.76782 29.0968C0.34998 29.1454 0.0583305 29.0966 0.0243203 29.1452C-0.0242658 29.1938 -0.00485035 29.5341 0.126332 29.8256C0.354686 30.36 0.622024 30.8455 0.971843 31.137C1.10788 31.2342 1.45267 31.4289 1.52555 31.5261C1.61301 31.6233 1.69082 31.9144 1.72483 32.1087C1.79285 32.4974 1.86063 32.6921 1.9578 32.7407C2.03554 32.595 2.10361 32.4004 2.13762 32.0603C2.17163 31.7688 2.15239 31.575 2.21069 31.4293C2.2447 31.3321 2.44875 31.1856 2.55563 31.137C2.9006 30.8941 3.16304 30.9432 3.60517 30.9918C4.63034 31.0404 5.37828 30.5056 5.9856 29.874C6.44231 29.3881 6.67583 28.6597 6.90418 28.0767C6.96734 27.8823 7.02047 27.7366 7.05933 27.5908C7.3217 27.7851 7.96324 28.5134 8.36651 28.9506C8.41509 29.7766 8.51711 30.506 8.58999 31.2348C9.01268 34.6358 10.0376 36.9673 11.1308 38.9108C11.6264 39.7853 12.4235 40.5631 12.6956 41.2433C14.158 44.7901 14.6388 48.2883 14.7116 51.6893C14.7602 53.7785 15.8243 54.7984 16.8544 55.1871C18.5743 55.9159 19.7743 57.7138 20.4205 59.2685C21.0181 60.6775 21.4509 60.8724 22.3692 61.3097C23.9385 62.0871 26.2315 62.1351 27.7037 61.9407C28.379 61.8436 29.5599 61.5033 30.5073 61.2604C31.1584 61.066 32.1009 61.2121 32.13 61.1636C32.1689 61.0664 31.5225 61.0176 31.3087 60.969C31.7314 60.9204 32.5477 61.0176 32.5817 60.969C32.6254 60.9204 31.9208 60.7745 31.9208 60.7745C32.3289 60.6773 33.1452 60.8724 33.1938 60.8238C33.2521 60.8238 32.6303 60.6295 32.3193 60.5809C32.6886 60.4837 33.709 60.5802 33.7333 60.5316C33.7576 60.4344 32.8099 60.3376 32.3046 60.4348C32.6642 60.289 33.4027 60.2404 33.3978 60.1918C33.393 60.0947 32.2758 60.2404 32.028 60.4348C32.1057 60.289 32.6933 60.0459 32.669 59.9973C32.6253 59.9487 31.6297 60.4835 31.2556 60.6293C30.4782 60.8237 29.0301 61.2125 28.005 61.3097C27.4073 61.3583 25.6876 61.2611 27.6942 61.0668C30.2838 60.8238 33.7914 58.7341 35.5842 58.0539C36.2838 57.8109 37.1487 57.6172 37.892 57.6657C38.6937 57.6657 39.1796 58.4913 39.4905 58.4913C39.7869 58.4913 40.302 58.1508 40.9628 57.8593C41.9685 57.5192 43.5088 57.5196 43.5088 57.5196L44.8544 57.5196C45.4035 57.5682 45.5591 57.6172 46.0207 57.4228C45.9041 57.2771 45.7682 57.4221 45.4281 57.1305C46.016 57.1305 46.7349 56.6933 46.973 56.1588C47.041 55.8673 46.9877 55.2364 46.9877 55.2364C46.9877 55.2364 46.9145 55.2848 46.8999 55.2848C46.9679 55.1391 47.0312 54.9447 47.0361 54.799C46.3219 55.0905 46.0354 55.3816 45.2872 55.6246C44.7479 55.7703 43.9995 55.8195 43.674 55.7223C42.4787 55.528 41.3322 55.2364 40.4917 54.7506C39.9864 54.4105 39.3594 53.7783 38.6986 53.1953C38.6986 53.1953 39.9038 53.4872 40.5306 54.0702C40.8027 54.2645 41.4876 53.7781 42.2358 53.4866C42.8772 53.1951 43.7518 53.0501 43.7518 53.0501L45.0537 52.7094C45.593 52.5636 45.7582 52.612 46.1469 52.2719C45.9817 52.1262 45.8945 52.3211 45.4912 52.1268C46.0548 51.981 46.6136 51.349 46.7011 50.766C46.6817 50.4744 46.4582 49.892 46.4582 49.892C46.4582 49.892 46.3994 49.989 46.3751 49.9404C46.3946 49.7946 46.3997 49.5517 46.3656 49.4545C45.768 49.9404 45.5787 50.3289 44.9228 50.7176C44.4418 51.0577 43.4405 51.3002 43.4405 51.3002C42.8575 51.446 41.2544 51.155 40.6373 50.6692C39.7336 49.8432 39.0291 49.2112 37.8631 48.5796C37.1003 48.1423 35.5698 47.7056 34.2386 47.4627C34.3552 46.5881 34.5351 46.0533 34.7197 45.1302C35.4048 41.6806 35.6476 38.6679 36.5464 36.7244C36.4881 34.6838 36.1431 31.5745 36.1431 31.5745C38.2663 31.5745 39.6998 31.2349 41.6238 30.7005C41.9979 30.2632 42.8381 29.8252 43.4989 29.6794C44.2082 29.4851 45.4717 29.3397 45.4717 29.3397C46.3803 29.1454 46.8905 28.8535 47.1722 28.4648C47.1382 28.4648 46.6814 28.465 46.5113 28.4164C46.8563 28.1735 47.2158 27.9309 47.4005 27.3479C47.4296 26.9592 47.3763 26.2784 47.3763 26.2784C47.3763 26.2784 47.1817 26.5699 47.1623 26.5213C47.2157 26.327 47.3084 25.9877 47.289 25.8419C46.5456 26.2792 46.2685 26.7164 45.4717 27.0565C44.8838 27.3481 43.5914 27.4931 43.5914 27.4931L41.8325 27.3963C41.5604 27.3477 41.2788 27.2505 40.9775 27.1533C41.201 26.8132 41.5214 26.3756 41.9004 26.2784C42.0218 26.1812 43.0957 25.8905 43.2123 25.8419L44.704 25.3067C45.53 25.0152 45.8263 24.6751 46.1227 24.335C46.0887 24.335 45.8506 24.3836 45.6805 24.335C46.006 24.092 46.3462 23.8011 46.4871 23.2181C46.4871 22.8294 46.3898 22.1486 46.3898 22.1486C46.3898 22.1486 46.2104 22.4401 46.1958 22.3915C46.2298 22.2458 46.2975 21.8578 46.2684 21.7121C45.559 22.2465 45.3113 22.6347 44.5437 23.0719C43.9752 23.3634 43.6544 23.7037 43.0714 23.7523L41.3514 23.9469C40.3894 23.9954 39.233 23.7527 37.688 22.9267C36.726 22.6838 35.356 22.5375 34.3406 22.5861C33.9568 21.9059 33.5682 21.3234 33.1796 20.7404L32.3777 19.5257L28.9378 13.9867C28.379 13.0636 28.2526 12.0921 28.4372 11.0232C28.9085 10.1972 29.2585 9.41906 28.8941 8.78744C28.3159 8.10724 27.8445 7.37864 27.5433 6.55267C27.1886 5.33802 27.0819 4.2697 27.1305 3.24939C27.2908 2.42343 27.529 1.83983 27.5096 1.45114C27.4999 1.2568 27.1642 1.2084 27.0622 1.15981C26.0516 0.819711 25.2355 0.430643 24.5845 0.0419547C24.1035 -0.103803 24.0597 0.139696 24.2443 0.625556C24.3463 0.965659 24.0889 1.30557 23.7148 1.64567C23.7148 1.64567 20.0805 5.53218 19.1427 6.60107C18.8512 6.89259 18.8563 7.23345 17.9381 8.35093C17.2141 9.07972 16.5242 9.61359 15.8732 9.95369C15.1784 10.2938 14.0852 9.4684 13.2398 10.2944C12.3021 11.0717 11.777 11.606 11.4321 12.0433C11.2912 12.2862 11.2232 12.4807 11.1892 12.7237C10.5575 12.9666 9.89672 13.4523 9.81413 13.9867C9.74125 14.4726 10.0182 15.0068 10.4798 15.4927C10.198 16.8531 10.1692 18.2619 10.3441 19.6709C10.4024 21.1285 10.2178 21.8089 9.89716 23.0235C9.62022 23.8009 9.04195 24.1892 8.70671 25.3067C8.47835 26.0841 8.37621 26.8136 8.34706 27.5424C8.02639 27.2995 7.73011 27.0074 7.4726 26.7159C7.46774 26.7159 7.46275 26.7159 7.45789 26.7159C7.36558 26.6187 7.25871 26.5707 7.11295 26.5707ZM7.12244 27.2995C7.13216 27.2023 7.13703 27.1535 7.14189 27.1049C7.26822 27.1049 7.36068 27.0558 7.41899 27.0072C7.67163 27.2015 7.99213 27.4936 8.33709 27.8337C8.33223 28.0767 8.33734 28.3196 8.34706 28.5625C7.92436 28.1738 7.37995 27.591 7.12244 27.2995Z" fill="white"/>
                        </svg>
                    </div>
                    <div>{{$spineFlareBottom}}</div>
                </div>
            @else
                <div class="pr-6">
                    <svg width="86" height="62" viewBox="0 0 86 62" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M40.2839 30.903C37.6478 35.3041 38.5224 41.4321 40.5519 43.2022L40.6971 43.3284L56.0144 43.3284L55.6462 42.5868C53.9487 39.1607 53.9539 35.2954 55.6618 31.0966L55.7447 30.8909L55.6514 30.6887C53.8744 26.8165 53.8744 23.0602 55.6514 19.2054L55.9868 18.4759L40.5709 18.4759L40.4291 18.7594C38.2562 23.0862 38.2078 27.4907 40.2822 30.9047L40.2839 30.903ZM53.3471 37.152C53.3471 38.9446 53.6929 40.6646 54.3861 42.2998L41.0981 42.2998C39.6737 40.7907 38.7835 35.394 41.1793 31.4147L54.4414 31.4147C53.7153 33.3974 53.3471 35.3127 53.3471 37.1503L53.3471 37.152ZM54.4033 19.5027C52.9167 23.1501 52.9202 26.7249 54.4085 30.3879L41.1776 30.3879C38.6832 26.3221 40.0454 21.9418 41.2122 19.5027L54.4051 19.5027L54.4033 19.5027Z" fill="white"/>
                        <path d="M43.985 34.0682L43.0135 33.7328C42.3393 35.6879 42.3618 38.2203 43.0723 40.1443L44.0368 39.7882C43.4076 38.0838 43.3869 35.802 43.9867 34.0682L43.985 34.0682Z" fill="white"/>
                        <path d="M49.8865 40.1443L50.851 39.7882C50.2218 38.0838 50.2011 35.802 50.8009 34.0682L49.8294 33.7328C49.1552 35.6879 49.1777 38.2203 49.8882 40.1443L49.8865 40.1443Z" fill="white"/>
                        <path d="M43.9848 27.8104C43.3866 26.0749 43.4057 23.7948 44.0349 22.0904L43.0703 21.7343C42.3598 23.6582 42.3374 26.1907 43.0115 28.1458L43.983 27.8104L43.9848 27.8104Z" fill="white"/>
                        <path d="M49.8277 28.1458L50.7992 27.8104C50.2011 26.0749 50.2201 23.7948 50.8493 22.0904L49.8848 21.7343C49.1743 23.6582 49.1518 26.1907 49.826 28.1458L49.8277 28.1458Z" fill="white"/>
                        <path d="M46.4792 40.1443L47.4438 39.7882C46.8146 38.0838 46.7938 35.8037 47.3937 34.0682L46.4222 33.7328C45.748 35.6879 45.7705 38.2221 46.481 40.1443L46.4792 40.1443Z" fill="white"/>
                        <path d="M46.4205 28.1458L47.392 27.8104C46.7939 26.0749 46.8129 23.7948 47.4421 22.0904L46.4775 21.7343C45.7671 23.6582 45.7446 26.1907 46.4188 28.1458L46.4205 28.1458Z" fill="white"/>
                        <path d="M52.317 52.6007L55.1865 49.7312L52.317 46.8617L40.3428 46.8617L40.3428 52.599L52.317 52.599L52.317 52.6007ZM52.5901 50.8721L52.5901 48.5903L53.731 49.7312L52.5901 50.8721ZM51.5616 49.2178L43.8035 49.2178L43.8035 47.8919L51.5616 47.8919L51.5616 49.2178ZM51.5616 50.2463L51.5616 51.5722L43.8035 51.5722L43.8035 50.2463L51.5616 50.2463ZM41.3696 47.8919L42.775 47.8919L42.775 51.5722L41.3696 51.5722L41.3696 47.8919Z" fill="white"/>
                        <path d="M41.9797 9.03758C40.9374 9.03758 40.1526 10.2701 40.1526 11.9071C40.1526 13.5441 40.9391 14.7766 41.9797 14.7766L42.1215 14.7559C42.1405 14.7507 43.9625 14.239 46.7767 14.1975C47.0827 14.5623 47.4699 14.7766 47.9003 14.7766C48.2892 14.7766 48.6574 14.5865 48.9617 14.2528C50.8874 14.3687 52.6194 14.6228 53.2608 14.7248C53.3766 14.7576 53.4959 14.7766 53.6186 14.7766C54.661 14.7766 55.4457 13.5441 55.4457 11.9071C55.4457 10.2701 54.6592 9.03758 53.6186 9.03758C53.4976 9.03758 53.3818 9.05659 53.2677 9.0877C52.6298 9.18796 50.8874 9.44207 48.9703 9.55962C48.6661 9.22254 48.2927 9.03758 47.8986 9.03758C47.4664 9.03758 47.0809 9.25192 46.775 9.61666C43.9953 9.57345 42.1371 9.0635 42.1163 9.05832L41.9763 9.0393L41.9797 9.03758ZM47.1017 11.9071C47.1017 11.392 47.2071 10.9633 47.3506 10.6469C49.0861 10.6331 50.8562 10.4533 52.0905 10.296C51.9003 10.7489 51.7932 11.3003 51.7932 11.9071C51.7932 12.5138 51.9021 13.0635 52.0905 13.5164C50.8649 13.3591 49.1017 13.1794 47.3523 13.1673C47.2088 12.8509 47.1034 12.4222 47.1034 11.9071L47.1017 11.9071ZM54.4189 11.9071C54.4189 12.9944 53.9539 13.7187 53.6359 13.7429C53.6134 13.7394 53.5806 13.7342 53.546 13.7273C53.2314 13.6305 52.8182 12.9339 52.8182 11.9054C52.8182 10.8768 53.2331 10.1767 53.5477 10.0834C53.5788 10.0782 53.6117 10.073 53.6341 10.0696C53.9522 10.0938 54.4172 10.8181 54.4172 11.9054L54.4189 11.9071ZM46.0731 11.9071C46.0731 12.3704 46.1388 12.8008 46.2529 13.1811C43.9054 13.2623 42.3255 13.6392 41.9313 13.7429C41.615 13.6738 41.1811 12.9598 41.1811 11.9071C41.1811 10.8544 41.6167 10.1387 41.9331 10.0713C42.3272 10.1733 43.9279 10.5501 46.2546 10.6314C46.1406 11.0117 46.0749 11.4421 46.0749 11.9054L46.0731 11.9071Z" fill="white"/>
                        <path d="M62.0544 30.9998C62.0544 35.3162 65.5653 38.827 69.8817 38.827C74.198 38.827 77.7089 35.3162 77.7089 30.9998C77.7089 26.6834 74.198 23.1726 69.8817 23.1726C65.5653 23.1726 62.0544 26.6834 62.0544 30.9998ZM67.8402 24.5157C67.3077 25.3109 66.8894 26.4224 66.6284 27.7465C65.3043 28.0076 64.1928 28.4259 63.3976 28.9583C64.0631 26.8494 65.7312 25.1813 67.8402 24.5157ZM76.6803 30.9998C76.6803 31.8123 75.3891 32.6852 73.3061 33.164C73.389 32.4812 73.4357 31.7587 73.4357 30.9998C73.4357 30.2409 73.389 29.5201 73.3061 28.8356C75.3891 29.3127 76.6803 30.1874 76.6803 30.9998ZM72.4089 30.9998C72.4089 31.8468 72.3467 32.6351 72.2412 33.3594C71.5169 33.4648 70.7287 33.5271 69.8817 33.5271C69.0346 33.5271 68.2464 33.4648 67.5221 33.3594C67.4166 32.6351 67.3544 31.8468 67.3544 30.9998C67.3544 30.1528 67.4166 29.3645 67.5221 28.6402C68.2464 28.5348 69.0346 28.4726 69.8817 28.4726C70.7287 28.4726 71.5169 28.5348 72.2412 28.6402C72.3467 29.3645 72.4089 30.1528 72.4089 30.9998ZM72.0459 34.4242C71.5688 36.5072 70.6941 37.7985 69.8817 37.7985C69.0692 37.7985 68.1963 36.5072 67.7174 34.4242C68.4002 34.5072 69.1228 34.5539 69.8817 34.5539C70.6405 34.5539 71.3614 34.5072 72.0459 34.4242ZM63.083 30.9998C63.083 30.1874 64.3743 29.3144 66.4573 28.8356C66.3743 29.5184 66.3276 30.2409 66.3276 30.9998C66.3276 31.7587 66.3743 32.4795 66.4573 33.164C64.3743 32.6869 63.083 31.8123 63.083 30.9998ZM67.7174 27.5754C68.1945 25.4924 69.0692 24.2011 69.8817 24.2011C70.6941 24.2011 71.5671 25.4924 72.0459 27.5754C71.3631 27.4924 70.6405 27.4458 69.8817 27.4458C69.1228 27.4458 68.402 27.4924 67.7174 27.5754ZM63.3976 33.043C64.1928 33.5755 65.3043 33.9938 66.6284 34.2548C66.8894 35.5789 67.3077 36.6904 67.8402 37.4856C65.7312 36.8201 64.0631 35.152 63.3976 33.043ZM71.9232 37.4856C72.4556 36.6904 72.8739 35.5789 73.1349 34.2548C74.4591 33.9938 75.5706 33.5755 76.3657 33.043C75.7002 35.152 74.0321 36.8201 71.9232 37.4856ZM76.3657 28.96C75.5706 28.4276 74.4591 28.0093 73.1349 27.7483C72.8739 26.4241 72.4556 25.3126 71.9232 24.5175C74.0321 25.183 75.7002 26.8511 76.3657 28.96Z" fill="white"/>
                        <path d="M61.9851 16.6763L61.9851 17.7049C63.6826 17.7049 65.0655 19.086 65.0655 20.7853L66.0941 20.7853C66.0941 19.0878 67.4752 17.7049 69.1745 17.7049L69.1745 16.6763C67.477 16.6763 66.0941 15.2952 66.0941 13.5959L65.0655 13.5959C65.0655 15.2934 63.6843 16.6763 61.9851 16.6763ZM67.1865 17.1897C66.5107 17.5648 65.9523 18.1232 65.5789 18.7974C65.2038 18.1215 64.6455 17.5631 63.9713 17.1897C64.6472 16.8146 65.2055 16.2563 65.5789 15.5821C65.954 16.258 66.5124 16.8163 67.1865 17.1897Z" fill="white"/>
                        <path d="M61.9851 44.0959L61.9851 45.1244C63.6826 45.1244 65.0655 46.5056 65.0655 48.2048L66.0941 48.2048C66.0941 46.5073 67.4752 45.1244 69.1745 45.1244L69.1745 44.0959C67.477 44.0959 66.0941 42.7147 66.0941 41.0172L65.0655 41.0172C65.0655 42.7147 63.6843 44.0959 61.9851 44.0959ZM67.1865 44.6093C66.5107 44.9844 65.9523 45.5427 65.5789 46.2169C65.2038 45.541 64.6455 44.9827 63.9713 44.6093C64.6472 44.2342 65.2055 43.6758 65.5789 43.0017C65.954 43.6776 66.5124 44.2359 67.1865 44.6093Z" fill="white"/>
                        <path d="M23.3867 0.00896698C22.1473 0.0124242 20.9062 0.017608 19.6667 0.017608L19.4092 0.017608L19.4092 61.9819L19.6667 61.9819C20.9062 61.9819 22.1473 61.9871 23.3867 61.9906C35.845 62.0338 48.7267 62.0788 59.6568 58.2326C71.9197 53.9179 80.4383 45.0397 85.7003 31.0897L85.7348 30.9998L85.7003 30.9099C80.4383 16.9599 71.9197 8.08165 59.6568 3.767C48.7284 -0.0791944 35.845 -0.0342485 23.3867 0.00896698ZM59.4857 4.25102C71.7382 8.56221 79.9059 17.0619 85.1834 30.9998C79.9059 44.9377 71.7382 53.4373 59.4857 57.7485C48.6403 61.5653 35.8035 61.5204 23.3885 61.4772C22.2338 61.4737 21.079 61.4685 19.9243 61.4685L19.9243 0.532741C21.079 0.532741 22.2355 0.527557 23.3902 0.5241C35.8052 0.480884 48.642 0.435936 59.4874 4.25274L59.4857 4.25102Z" fill="white"/>
                        <path d="M22.5759 2.47916L22.0625 2.47916L22.0625 59.5204L22.5759 59.5204C23.7064 59.5204 24.8369 59.5256 25.9657 59.529C37.3453 59.5688 49.1138 59.6103 59.1208 56.0891C70.3811 52.127 78.2014 43.98 83.0294 31.1813L83.0986 30.9998L83.0294 30.8183C78.2031 18.0212 70.3811 9.87422 59.1208 5.91048C49.112 2.38927 37.3453 2.43076 25.9657 2.47052C24.8352 2.47398 23.7047 2.47916 22.5759 2.47916ZM23.091 58.4936L23.091 3.50769C24.0504 3.50769 25.0115 3.50251 25.9709 3.49905C26.4083 3.49905 26.8473 3.4956 27.2864 3.4956L27.2864 6.87852L25.1187 6.87852L25.1187 7.90705L27.2864 7.90705L27.2864 14.7144L25.1187 14.7144L25.1187 15.7429L27.2864 15.7429L27.2864 22.5502L25.1187 22.5502L25.1187 23.5788L27.2864 23.5788L27.2864 30.3861L25.1187 30.3861L25.1187 31.4146L27.2864 31.4146L27.2864 38.222L25.1187 38.222L25.1187 39.2505L27.2864 39.2505L27.2864 46.0578L25.1187 46.0578L25.1187 47.0864L27.2864 47.0864L27.2864 53.8937L25.1187 53.8937L25.1187 54.9222L27.2864 54.9222L27.2864 58.5039C26.8473 58.5039 26.4083 58.5022 25.9709 58.5005C25.0115 58.497 24.0504 58.4936 23.091 58.4918L23.091 58.4936ZM30.1404 15.7429L30.1404 22.5502L28.3149 22.5502L28.3149 15.7429L30.1404 15.7429ZM28.3149 14.7144L28.3149 7.90705L30.1404 7.90705L30.1404 14.7144L28.3149 14.7144ZM30.1404 23.5788L30.1404 30.3861L28.3149 30.3861L28.3149 23.5788L30.1404 23.5788ZM30.1404 31.4146L30.1404 38.222L28.3149 38.222L28.3149 31.4146L30.1404 31.4146ZM30.1404 39.2505L30.1404 46.0578L28.3149 46.0578L28.3149 39.2505L30.1404 39.2505ZM30.1404 47.0864L30.1404 53.8937L28.3149 53.8937L28.3149 47.0864L30.1404 47.0864ZM30.1404 54.9222L30.1404 58.5074C29.5319 58.5074 28.9234 58.5074 28.3149 58.5074L28.3149 54.924L30.1404 54.924L30.1404 54.9222ZM31.1689 54.9222L32.9943 54.9222L32.9943 58.4918C32.3859 58.497 31.7774 58.5022 31.1689 58.5039L31.1689 54.9222ZM31.1689 53.8937L31.1689 47.0864L32.9943 47.0864L32.9943 53.8937L31.1689 53.8937ZM31.1689 46.0578L31.1689 39.2505L32.9943 39.2505L32.9943 46.0578L31.1689 46.0578ZM31.1689 38.222L31.1689 31.4146L32.9943 31.4146L32.9943 38.222L31.1689 38.222ZM31.1689 30.3861L31.1689 23.5788L32.9943 23.5788L32.9943 30.3861L31.1689 30.3861ZM31.1689 22.5502L31.1689 15.7429L32.9943 15.7429L32.9943 22.5502L31.1689 22.5502ZM31.1689 14.7144L31.1689 7.90705L32.9943 7.90705L32.9943 14.7144L31.1689 14.7144ZM31.1689 6.87852L31.1689 3.4956C31.7774 3.49733 32.3859 3.50251 32.9943 3.50769L32.9943 6.87852L31.1689 6.87852ZM30.1404 6.87852L28.3149 6.87852L28.3149 3.49214C28.9234 3.49214 29.5319 3.49041 30.1404 3.49214L30.1404 6.88025L30.1404 6.87852ZM81.9992 30.9998C77.3163 43.3041 70.1356 50.9084 59.4544 54.8721L59.4544 7.12917C70.1356 11.0912 77.3163 18.6971 81.9992 31.0015L81.9992 30.9998ZM58.4259 6.76616L58.4259 55.2334C50.998 57.7727 42.5519 58.3622 34.0229 58.4797L34.0229 54.9222L36.1906 54.9222L36.1906 53.8937L34.0229 53.8937L34.0229 47.0864L36.1906 47.0864L36.1906 46.0578L34.0229 46.0578L34.0229 39.2505L36.1906 39.2505L36.1906 38.222L34.0229 38.222L34.0229 31.4146L36.1906 31.4146L36.1906 30.3861L34.0229 30.3861L34.0229 23.5788L36.1906 23.5788L36.1906 22.5502L34.0229 22.5502L34.0229 15.7429L36.1906 15.7429L36.1906 14.7144L34.0229 14.7144L34.0229 7.90705L36.1906 7.90705L36.1906 6.87852L34.0229 6.87852L34.0229 3.51807C42.5519 3.63561 50.9997 4.22507 58.4259 6.76443L58.4259 6.76616Z" fill="white"/>
                        <path d="M13.6493 55.0898L13.4159 57.0639C12.5378 57.0777 11.6406 57.0881 10.7193 57.095C9.79965 57.1019 8.81606 57.1054 7.76851 57.1054L7.76851 53.8141L9.97597 53.5168L9.97597 52.5401L4.75379 52.5401L4.75379 53.5168L6.7711 53.8141L6.7711 57.1054C5.89295 57.1054 5.00271 57.1019 4.09518 57.095C3.18938 57.0881 2.28358 57.0777 1.37778 57.0639L1.37778 52.0751L4.07444 51.6084L4.07444 50.3983L0.316406 50.547L0.316406 61.1193L1.18591 61.1193L1.41927 59.1659C2.32507 59.1383 3.23433 59.1227 4.14704 59.1227L10.6968 59.1227C11.6164 59.1227 12.5222 59.1365 13.4142 59.1659L13.6476 61.1193L14.5171 61.1193L14.5171 55.0898L13.6476 55.0898L13.6493 55.0898Z" fill="white"/>
                        <path d="M13.893 41.3023C14.5222 40.2202 14.8368 38.9635 14.8368 37.5339C14.8368 36.7837 14.7556 36.0439 14.5931 35.3161C14.4306 34.5866 14.173 33.8969 13.8186 33.2469L10.74 33.1622L10.74 34.4777L13.2015 34.903C13.4003 35.3144 13.5455 35.7344 13.6371 36.1666C13.7288 36.5987 13.7754 37.0205 13.7754 37.4302C13.7754 38.3931 13.5351 39.2522 13.0546 40.0093C12.574 40.7665 11.8584 41.3577 10.9111 41.7812C9.9638 42.2064 8.79525 42.419 7.40889 42.419C6.02253 42.419 4.85744 42.1891 3.91707 41.7293C2.97669 41.2695 2.2645 40.6506 1.78394 39.871C1.30338 39.0932 1.06311 38.2288 1.06311 37.2816C1.06311 36.941 1.10459 36.5918 1.19102 36.2305C1.27573 35.8693 1.42439 35.4976 1.63701 35.1156L4.09857 34.6903L4.09857 33.3749L1.01989 33.4596C0.610205 34.1666 0.337082 34.8822 0.202249 35.6031C0.0674165 36.3256 9.24935e-08 36.9756 8.55673e-08 37.5564C7.32404e-08 38.5901 0.184963 39.5409 0.551432 40.4121C0.919629 41.2816 1.43649 42.0405 2.10201 42.6835C2.76753 43.3283 3.54887 43.8296 4.44776 44.1909C5.34664 44.5522 6.33369 44.7319 7.40889 44.7319C8.86612 44.7319 10.154 44.4312 11.2724 43.8296C12.3908 43.228 13.2638 42.3862 13.8947 41.3023L13.893 41.3023Z" fill="white"/>
                        <path d="M13.6493 21.1259L13.4159 23.1C12.6519 23.1138 11.9017 23.1242 11.1653 23.1311C10.4289 23.138 9.67865 23.1414 8.91459 23.1414L8.91459 22.0368C8.91459 20.5796 8.71753 19.4145 8.31995 18.545C7.92409 17.6755 7.3934 17.0411 6.72788 16.6453C6.06236 16.2494 5.33461 16.0506 4.54117 16.0506C3.29656 16.0506 2.28013 16.5001 1.49533 17.3989C0.710533 18.2978 0.316406 19.6462 0.316406 21.4422L0.316406 27.1519L1.18591 27.1519L1.41927 25.1985C2.32507 25.1708 3.23433 25.1553 4.14704 25.1553L10.6968 25.1553C11.6164 25.1553 12.5222 25.1691 13.4142 25.1985L13.6476 27.1519L14.5171 27.1519L14.5171 21.1224L13.6476 21.1224L13.6493 21.1259ZM6.89902 23.1432C5.95173 23.1432 5.00617 23.1397 4.0658 23.1328C3.12542 23.1259 2.20061 23.1155 1.29654 23.1017L1.29654 21.8277C1.29654 20.5537 1.58003 19.6237 2.14529 19.036C2.71228 18.4482 3.51091 18.1544 4.54463 18.1544C5.57834 18.1544 6.34586 18.4309 6.97508 18.9824C7.60602 19.5338 7.91891 20.4552 7.91891 21.743L7.91891 23.1449L6.90074 23.1449L6.89902 23.1432Z" fill="white"/>
                        <path d="M14.8385 6.13873C14.8385 5.14822 14.676 4.27872 14.351 3.5285C14.0261 2.77828 13.5628 2.18709 12.9612 1.75666C12.3597 1.3245 11.6423 1.11015 10.8056 1.11015C9.80129 1.11015 8.96291 1.40748 8.29047 2.00212C7.61804 2.59677 7.01302 3.58727 6.47541 4.97363L6.15735 5.82239C5.86002 6.58644 5.49874 7.17763 5.07523 7.59423C4.65171 8.01083 4.11238 8.21999 3.46242 8.21999C2.67071 8.21999 2.0726 7.94341 1.6681 7.39198C1.26361 6.84055 1.06309 6.1612 1.06309 5.35393C1.06309 4.7178 1.20483 4.13698 1.48833 3.61321L3.88766 3.16722L3.88766 1.87248L1.1063 1.74456C0.767491 2.19746 0.497825 2.71432 0.299033 3.29514C0.101969 3.87596 0.00170905 4.519 0.00170904 5.22601C0.00170903 6.13181 0.160743 6.94599 0.47881 7.66683C0.796877 8.38767 1.24632 8.95812 1.82714 9.37644C2.40796 9.79304 3.10805 10.0022 3.92915 10.0022C5.00435 10.0022 5.87904 9.66685 6.55147 8.99442C7.22391 8.32198 7.77188 7.44038 8.19713 6.35135L8.53594 5.52334C8.89031 4.61753 9.25505 3.95547 9.62843 3.53888C10.0035 3.12228 10.5308 2.91311 11.2101 2.91311C12.0312 2.91311 12.6639 3.21043 13.1099 3.80508C13.5559 4.39973 13.7789 5.19835 13.7789 6.20441C13.7789 6.65731 13.7374 7.05663 13.6509 7.40408C13.5662 7.75154 13.4314 8.08689 13.2482 8.41187L10.7434 8.83711L10.7434 10.1526L13.7149 10.2805C14.0261 9.78613 14.2923 9.16901 14.5101 8.43434C14.7296 7.69967 14.8385 6.9339 14.8385 6.14219L14.8385 6.13873Z" fill="white"/>
                    </svg>
                </div>
            @endif
        </div>
    </div>
    <div :class="selectedProject == @js($key) ? 'h-[869px]' : 'h-0'" class="overflow-hidden transition-all delay-700">
        {{$content}}
    </div>
</div>
