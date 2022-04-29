<li class=""><a class="nav-link {{ request()->url() == $link ? 'active' : '' }}"
        href="{{ $link }}">{{ $slot }}</a>
</li>
