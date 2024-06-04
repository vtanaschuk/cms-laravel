<?php

namespace App\Http\Controllers;
use App\Models\Room;
use App\Models\User;



use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function show() {
        $rooms = Room::all();
        $user = User::all();

        return view('dashboard', ['rooms' => $rooms, 'users'=> $user]);
    }

}
