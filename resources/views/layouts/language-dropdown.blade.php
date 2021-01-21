<li class="nav-item dropdown">
    <a class="nav-link" data-toggle="dropdown" href="#">
        <i class="fas fa-language"></i>
    </a>
    <div class="dropdown-menu dropdown-menu-md dropdown-menu-right">
        @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
            <a
                rel="alternate" hreflang="{{ $localeCode }}"
                href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}"
                class="dropdown-item dropdown-footer">
                {{ $properties['native'] }}
            </a>
            {!! ($loop->last ? '' : '<div class="dropdown-divider"></div>') !!}
        @endforeach
    </div>
</li>
