<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        
    </head>
    <body class="antialiased">
        <h1>Sample Table list</h1>
            <div class='samples'>
                @foreach($samples as $sample)
                    <div class='sample'>
                        <h2 class='title'>{{ $sample->title }}</h2>
                        <p class='body'>{{ $sample->body }}</p>
                    </div>
                @endforeach
            </div>
        <div class='paginate'>{{ $samples->links() }}</div>
    </body>
</html>
