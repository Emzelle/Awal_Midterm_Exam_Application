<!DOCTYPE html>
<html>
<head>
    <title>Laravel CRUD Application</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
</head>
<body>
    <h1>Anime List</h1>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Genre</th>
                <th>Episodes</th>
                <th>Ratings</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($animeList as $anime)
                <tr>
                    <td>{{ $anime['id'] }}</td>
                    <td>{{ $anime['title'] }}</td>
                    <td>{{ $anime['genre'] }}</td>
                    <td>{{ $anime['episodes'] }}</td>
                    <td>{{ $anime['ratings'] }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>


</body>
</html>