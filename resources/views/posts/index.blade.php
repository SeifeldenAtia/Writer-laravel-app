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
        @include('layout.header')
        <h1>
            Posts
        </h1>
        <ul>
            @foreach ($posts as $post)
                <li>
                    <a href="{{ route('posts.show', $post->id) }}">
                        {{ $post->title }}
                    </a>
                </li>
            @endforeach
        </ul>
    </div>
    @include('layout.footer')
    @include('layout.scripts')
</body>

</html>
