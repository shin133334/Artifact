<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        
    </head>
    <body class="antialiased">
        <h1>学習管理サイト</h1>
        <table>
            <div class='subject'>
                @foreach($subject as $sub)
                    <td>
                        <th><a href="/posts/{{ $sub->id }}"><h2 class='name'>{{ $sub->name }}</h2></th></a>
                        <form action="/posts/{{ $sub->id }}" id="form_{{ $sub->id }}" method="post">
                            @csrf
                            @method('DELETE')
                            <th><button type="button" onclick="deletePost({{ $sub->id }})">delete</button></th>
                        </form>
                        <th><a href="/posts/create">新しい教科を追加</a></th>
                    </td>
                @endforeach
            </div>
        </table>
        <script>
            function deletePost(id)
            {
                'use strict'
                
                if(confirm('削除すると復元できません．\n本当に削除しますか？'))
                {
                    document.getElementById(`form_${id}`).submit();
                }
            }
        </script>
    </body>
</html>
