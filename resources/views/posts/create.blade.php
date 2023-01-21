<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        
    </head>
    <body class="antialiased">
        <h1>Blog Name</h1>
        <form action="/posts" method="POST">
            @csrf
            <div class="user_id">
                <h2>User_id</h2>
                <input type="number" name="subject[user_id]" placeholder="1">
            </div>
            <div class="title">
                <h2>教科</h2>
                <!--<input Type="text" name=post[title] placeholder="タイトル"> -->
                <select name="subject[name]">
                    <option>国語</option>
                    <option>英語</option>
                    <option>数学</option>
                    <option>理科</option>
                    <option>社会</option>
                    <option>保健体育</option>
                    <option>技術</option>
                    <option>家庭科</option>
                </select>
            </div>
            <input type="submit" value="store">
        </form>
            <div class='footer'>
                <a href="/">戻る</a>
            </div>
    </body>
</html>