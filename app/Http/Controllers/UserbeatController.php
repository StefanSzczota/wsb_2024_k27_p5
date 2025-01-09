<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Beats;

class UserbeatController extends Controller
{
    


    public function index()
    {
        $beats = Beats::orderBy('id', 'desc')->get();
        $total = Beats::count();
        return view('dashboard', compact(['beats', 'total']));
    }


}