<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Siachongco_Midterm exam</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        
        th,
        td {
            border: 1px solid #ddd;
            padding: 10px;
            margin: 10px;
            text-align: left;
        }

        th {
            background-color: #4a90e2;
            color: white;
        }

        tr:hover {
            background-color: aliceblue;
        }

        h1 {
            color: darkblue;
            text-align: center;
        }

        p,
        a {
            font-size: 10px;
            color: darkblue;
            font-style: italic;
        }
    </style>
</head>

<body>
    <h1>Favorite Anime List</h1>
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

    <p>
        <b>
            References:
        </b>
        <i>
            <a href="https://myanimelist.net/topanime.php" target="_blank">
                MyAnimeList Top Anime
            </a>
        </i>
    </p>
</body>

</html>