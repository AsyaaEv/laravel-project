<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home | News</title>

    <style>
        *{
            margin: 0;
            padding: 0;
        }
        .artikel{
            margin: 1rem;
            padding: 0;
        }
        .isi{
            margin-top: 1rem;
            border: 1px solid;
        }
    </style>
</head>
<body>
    <h1>Selamat Datang Di News</h1>
    <hr>
    <div class="artikel">
        @foreach ($news as $new)
        <div class="isi">
            <h5>Judul : <span>{{ $new->judul }}</span></h5>
            <h5>Artikel : <span>{{ $new->artikel }}</span></h5>
        </div>
    @endforeach    
    </div>
    <a href="/news/create">Buat artikel baru</a>
</body>
</html>