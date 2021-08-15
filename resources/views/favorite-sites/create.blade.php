<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>お気に入りサイト登録画面</title>
</head>

<body>
    <h1>お気に入りサイト登録ページ</h1>

    <form action="#" method="post">
        @csrf

        <label>サイト名
            <input type="text" name="name">
        </label>

        <label>URL
            <input type="text" name="url">
        </label>

        <button type="submit">登録</button>
    </form>

</body>

</html>
