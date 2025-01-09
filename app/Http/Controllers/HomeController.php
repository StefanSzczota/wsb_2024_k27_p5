<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Beats;

class HomeController extends Controller
{
    public function index()
    {

        $usersCount = User::count();
        $beatsCount = Beats::count();

        return view('admin.dashboard', compact('usersCount', 'beatsCount'));
    }
}
