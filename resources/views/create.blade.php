<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create News</title>
</head>
<body>
    <h1>Pembuatan Artikel</h1>
    <hr>
    <h4>Artikel :</h4>
    <form action="/news/create/new" method="post">
        @csrf 
        <input type="text" placeholder="isi Judul" name="judul">
        <input type="text" placeholder="isi Artikel" name="artikel">
        <input type="submit" value="Create">
    </form>

</body>
</html>