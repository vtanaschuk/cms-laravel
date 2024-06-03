<!DOCTYPE html>
<html>
<head>
    <title>Posts Archive</title>
</head>
<body>
    <h1>Single post</h1>
    <p>{{$room->room_id}}</p>
    <p>{{$room->room_name}}</p>

    <a href="/rooms">back</a>

    @auth
        <a href="/post/edit/{{$room->room_id}}">edit</a>
    @endauth
</body>
</html>
