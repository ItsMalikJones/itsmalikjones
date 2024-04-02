@props([
    'active' => false,
    'icon' => false,
    'href'
])
<a href="{{$href}}" @class([
    'font-semibold tracking-tight',
    'text-white' => !$active,
    'px-3.5 bg-aqua py-1.5 rounded-full text-commonwealth-navy' => $active
])>
    @if($icon)
        <x-icon name="lucide-{{$icon}}" class="size-6" />
    @else
        {{$slot}}
    @endif
</a>
