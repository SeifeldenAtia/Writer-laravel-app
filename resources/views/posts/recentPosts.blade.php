<div>
    <h4 class="fst-italic">Recent posts</h4>
    <ul class="list-unstyled">
        @foreach ($latestPosts as $latestPost)
            <li>
                <a class="d-flex flex-column flex-lg-row gap-3 align-items-start align-items-lg-center py-3 link-body-emphasis text-decoration-none border-top"
                    href="{{ route('posts.show', $latestPost->id) }}">
                    <svg class="bd-placeholder-img" width="100%" height="96" xmlns="http://www.w3.org/2000/svg"
                        aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
                        <rect width="100%" height="100%" fill="#777" />
                    </svg>
                    <div class="col-lg-8">
                        <h6 class="mb-0">{{ $latestPost->title }}</h6>
                        <small class="text-body-secondary">{{ $latestPost->created_at->diffForHumans() }}</small>
                    </div>
                </a>
            </li>
        @endforeach

    </ul>
</div>
