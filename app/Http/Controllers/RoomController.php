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

    public function editSingleRoom(int $id)
    {
        $room = Room::find($id);
        return view('edit-single-room', ['room' => $room]);
    }

    public function update(Request $request, int $id)
    {
        $request->validate([
            'room_name' => 'required|string|max:255',
        ]);

        $room = Room::findOrFail($id);
        $room->room_name = $request->input('room_name');
        $room->save();

        return redirect()->to(url("/dashboard/rooms/{$id}"))->with('success', 'Room updated successfully');
    }

}
