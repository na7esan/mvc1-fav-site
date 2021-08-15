<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>お気に入りサイト一覧表示</title>
</head>

<body>
    <h1>お気に入りサイト一覧表示ページ</h1>
    @foreach ($favoriteSites as $favoriteSite)
        <p>ID:{{ $favoriteSite->id }}</p>
        <p>サイト名:{{ $favoriteSite->name }}</p>
        <p>URL:{{ $favoriteSite->url }}</p>
    @endforeach
</body>

</html>
