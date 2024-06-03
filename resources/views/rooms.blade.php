<!DOCTYPE html>
<html>
<head>
    <title>Posts Archive</title>
</head>
<body>
    <h1>Posts Archive</h1>

    @if($rooms->count())
        <ul>
            @foreach($rooms as $room)
                <li>
                    <a href="./rooms/{{$room->room_id}}">
                        <h2>{{ $room->room_name }}</h2>
                    </a>
                </li>
            @endforeach
        </ul>
    @else
        <p>No posts available.</p>
    @endif
</body>
</html>
