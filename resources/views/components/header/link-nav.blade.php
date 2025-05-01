<a {{ $attributes }}
    class="{{ request()->fullUrlIs(url($href)) ? 'bg-primary text-white' : 'text-gray' }} waves-effect">
    {{ $slot }}
</a>