@props([
    'url' => '/',
    'active' => false,
    'icon' => null,
    'mobile' => false
])

<a href="{{ $url }}"
   class="block px-4 py-2 hover:bg-gray-100 transition-all
          {{ $active ? 'font-bold' : 'text-black' }}">
    @if($icon)
        <i class="fa fa-{{ $icon }} mr-1"></i>
    @endif
    {{ $slot }}
</a>
