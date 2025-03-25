<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $post->title }}</title>
    @include('layout.head')
</head>

<body>
    @include('layout.colorMode')
    <div class="container">
        @include('layout.header', ['class' => 'posts'])
        <div class="row g-5">
            <div class="col-md-8">
                <h3 class="pb-4 mb-4 fst-italic border-bottom ">
                    From the Firehose
                </h3>

                <div class="mb-3 d-flex">
                    <button class="btn btn-outline-danger rounded-pill px-3 " data-bs-toggle="modal"
                        data-bs-target="#exampleModal">Delete Post</button>
                    <a class="btn btn-outline-success rounded-pill px-3 ms-3 "
                        href="{{ route('posts.edit', $post->id) }}">Edit Post</a>
                </div>

                @include('inc.modal', [
                    'title' => 'Delete Post',
                    'body' => 'Are You sure that you want to delete this Post?',
                    'action' =>
                        '<form action="' .
                        route('posts.destroy', $post->id) .
                        '" method="POST">
                                                                                                                                    ' .
                        csrf_field() .
                        '
                                                                                                                                    ' .
                        method_field('DELETE') .
                        '
                                                                                                        <input type="submit" value="Delete Post" class="btn btn-outline-danger rounded-pill px-3">
                                                                                                        </form>',
                ])



                <article class="blog-post">
                    <h2 class="display-5 link-body-emphasis mb-1">{{ $post->title }}</h2>
                    <p class="blog-post-meta">{{ $post->created_at->format('Y-m-d') }} by <a href="#">Mark</a></p>
                    <hr>
                    <p>{{ $post->content }}</p>


                </article>



                <nav class="blog-pagination" aria-label="Pagination">
                    @if ($previousPost)
                        <a class="btn btn-outline-danger rounded-pill"
                            href="{{ route('posts.show', $previousPost) }}">Previous</a>
                    @else
                        <button class="btn btn-outline-danger rounded-pill" disabled>Previous</button>
                    @endif

                    @if ($nextPost)
                        <a class="btn btn-outline-primary rounded-pill"
                            href="{{ route('posts.show', $nextPost) }}">Next</a>
                    @else
                        <button class="btn btn-outline-primary rounded-pill" disabled>Next</button>
                    @endif

                </nav>
            </div>

            <div class="col-md-4">
                <div class="position-sticky" style="top: 2rem;">
                    @include('layout.about')
                    @include('posts.recentPosts')

                    <div class="p-4">
                        <h4 class="fst-italic">Elsewhere</h4>
                        <ol class="list-unstyled">
                            <li><a href="#">GitHub</a></li>
                            <li><a href="#">Twitter</a></li>
                            <li><a href="#">Facebook</a></li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('layout.footer')
    @include('layout.scripts')

</body>

</html>
