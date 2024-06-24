@props(['active' => false])
<a class="nav-link
    {{ $active ? 'active fw-bold ' : '' }}" aria-current="{{ request()->is ? 'page' : false }} "
    {{ $attributes }}>{{ $slot }}</a>
