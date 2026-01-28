@props(['active' => false])

@php
$classes = ($active ?? false)
            ? 'flex items-center text-sm font-medium text-secondary transition-colors duration-150 ease-in-out'
            : 'flex items-center text-sm font-medium text-primary-text dark:text-primary-text-dark hover:text-secondary transition-colors duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
