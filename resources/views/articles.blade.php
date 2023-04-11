<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Articles</title>
</head>

<body>
    @foreach ($posts as $post)
        <h1>{{ $post }} </h1>
    @endforeach

    <article>Liste des articles</article>
</body>

</html>
