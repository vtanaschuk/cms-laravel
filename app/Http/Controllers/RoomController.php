<?php

namespace App\Http\Controllers;

use App\Models\Room;
use Illuminate\Http\Request;


class RoomController extends Controller
{

    public function index()
    {
        $rooms = Room::all();
        return view('rooms', ['rooms' => $rooms]);
    }

    public function singleRoom(int $id)
    {
        $room = Room::find($id);
        return view('single-room', ['room' => $room]);
    }
}
