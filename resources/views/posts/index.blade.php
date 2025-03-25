<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @include('layout.head')
    <title>Posts</title>
</head>

<body>

    @include('layout.colorMode')
    <div class="container">
        @include('layout.header', ['class' => 'posts'])
        <h1>
            Posts
        </h1>
        <br>
        <a class="btn btn-info mb-4" href="{{ Route('posts.create') }}">
            @include('inc.icons.plus')
            Add a new Post
        </a>

        <div class="col-12">
            @include('inc.message')
        </div>
        <div class="row mb-2">

            @foreach ($posts as $post)
                <div class="col-md-6">
                    <div
                        class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                        <div class="col p-4 d-flex flex-column position-static">
                            <strong class="d-inline-block mb-2 text-primary-emphasis">Static Tag</strong>
                            <h5 class="mb-0">{{ $post->title }}</h5>
                            <div class="mb-1 text-body-secondary">{{ $post->created_at->diffForHumans() }}</div>
                            <p class="card-text mb-auto">{{ Str::limit($post->content, 50, '...') }}</p>
                            <a href="{{ route('posts.show', $post->id) }}"
                                class="icon-link gap-1 icon-link-hover stretched-link">
                                Continue reading
                                <svg class="bi">
                                    <use xlink:href="#chevron-right" />
                                </svg>
                            </a>

                        </div>
                        <div class="col-auto d-none d-lg-block">
                            <svg class="bd-placeholder-img" width="200" height="250"
                                xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail"
                                preserveAspectRatio="xMidYMid slice" focusable="false">
                                <title>Placeholder</title>
                                <rect width="100%" height="100%" fill="#55595c" /><text x="50%" y="50%"
                                    fill="#eceeef" dy=".3em">Thumbnail</text>
                            </svg>
                        </div>


                    </div>
                </div>
            @endforeach
        </div>
    </div>
    @include('layout.footer')
    @include('layout.scripts')
</body>

</html>
