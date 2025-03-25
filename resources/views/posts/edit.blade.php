<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @include('layout.head')
    <title>Create a new Post</title>
</head>

<body>
    @include('layout.colorMode')
    <div class="container">
        @include('layout.header', ['class' => 'posts'])
        <h2 class="text-center text-info my-3">
            Create a new Post
        </h2>

        <form method="POST" action="{{ Route('posts.store') }}">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Post Title</label>
                <input type="text" class="form-control" id="title" name="title">
            </div>
            <div class="mb-3">
                <label for="content" class="form-label">Content</label>
                <textarea name="content" id="content" class="form-control" cols="30" rows="10"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

        <div class="row mb-2">


        </div>
    </div>
    @include('layout.footer')
    @include('layout.scripts')
</body>

</body>

</html>
