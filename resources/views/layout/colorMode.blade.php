<div class="dropdown position-fixed bottom-0 end-0 mb-3 me-3 bd-mode-toggle">
    <button class="btn btn-bd-primary py-2 dropdown-toggle d-flex align-items-center" type="button" aria-expanded="false"
        data-bs-toggle="dropdown" aria-label="Toggle theme (auto)">
        @include('inc.icons.moon-stars', ['class' => 'my-1 theme-icon-active'])
        <span class="visually-hidden">Toggle theme</span>
    </button>
    <ul class="dropdown-menu dropdown-menu-end shadow">
        <li>
            <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="light"
                aria-pressed="false">
                @include('inc.icons.brightness')
                Light
                @include('inc.icons.check')
            </button>
        </li>
        <li>
            <button type="button" class="dropdown-item d-flex align-items-center " data-bs-theme-value="dark"
                aria-pressed="false">
                @include('inc.icons.moon-stars', ['class' => 'me-2 opacity-50'])
                Dark
                @include('inc.icons.check')
            </button>
        </li>
        <li>
            <button type="button" class="dropdown-item d-flex align-items-center active" data-bs-theme-value="auto"
                aria-pressed="true">
                @include('inc.icons.circle-half')
                Auto
                @include('inc.icons.check')
            </button>
        </li>
    </ul>
</div>
