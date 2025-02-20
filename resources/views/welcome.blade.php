<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anime List</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; }
        table { width: 100%; border-collapse: collapse; margin-top: 20px; }
        th, td { border: 1px solid #ddd; padding: 10px; text-align: left; }
        th { background-color: #4a90e2; color: white; }
    </style>
</head>
<body>
    <h1>Top Anime List</h1>
    <table>
        <thead>
            <tr>
                <th>Title</th>
                <th>Description</th>
                <th>Rating</th>
            </tr>
        </thead>
        <tbody>
            @foreach($animeList as $anime)
            <tr>
                <td>{{ $anime['title'] }}</td>
                <td>{{ $anime['description'] }}</td>
                <td>{{ $anime['rating'] }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <p>References:
        <i>
            <a href="https://myanimelist.net/topanime.php" target="_blank">
                MyAnimeList Top Anime
            </a>
        </i>
    </p>
</body>
</html>
