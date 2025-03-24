<header class="border-bottom lh-1 py-3">
    <div class="row flex-nowrap justify-content-between align-items-center">
        <div class="col-4 pt-1">
            <a class="link-secondary text-decoration-none" href="/">
                <img src="/logo.png" alt="logo" width="30" height="30" id="logo">
                <a class="blog-header-logo text-body-emphasis text-decoration-none ms-2" href="/">Writer</a>
            </a>
        </div>
        <div class="col-4 ">
            <div class="bd-search row justify-content-center align-items-center" id="docsearch"
                data-bd-docs-version="5.3" bis_skin_checked="1">
                <button type="button" class="DocSearch DocSearch-Button">
                    <span class="DocSearch-Button-Container">
                        @include('inc.icons.docSearch')
                        <span class="DocSearch-Button-Placeholder">Search</span>
                    </span>

                </button>
            </div>
        </div>

        <div class="col-4 d-flex justify-content-end align-items-center">
            <a class="btn btn-sm btn-outline-primary me-2" href="#">Login</a>
            <a class="btn btn-sm btn-outline-success" href="#">Sign up</a>
        </div>
    </div>
</header>

<div class="nav-scroller py-1 mb-3 border-bottom">
    <nav class="nav nav-underline justify-content-between">
        <a class="nav-item nav-link link-body-emphasis {{ $class == 'home' ? 'active' : '' }}" href="/">Home</a>
        <a class="nav-item nav-link link-body-emphasis {{ $class == 'posts' ? 'active' : '' }}"
            href="{{ Route('posts.index') }}">Posts</a>
        <a class="nav-item nav-link link-body-emphasis" href="#">Tags</a>
        <a class="nav-item nav-link link-body-emphasis" href="#">Users</a>
        <a class="nav-item nav-link link-body-emphasis" href="#">AJAX</a>
    </nav>
</div>
