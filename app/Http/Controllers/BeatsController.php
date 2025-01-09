<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Beats;

class BeatsController extends Controller
{
    
    public function index()
    {
        $beats = Beats::orderBy('id', 'desc')->get();
        $total = Beats::count();
        return view('admin.beats.home', compact(['beats', 'total']));
    }

    public function create()
    {
        return view('admin.beats.create');
    }

    public function save(Request $request)
    {
        $validation = $request->validate([
            'title' => 'required',
            'ytlink' => 'required',
            'price' => 'required',
            'info' => 'nullable|string'
        ]);

        $data = Beats::create($validation);
        if ($data) {
            session()->flash('succes', 'Beat Added successfully');
            return redirect(route('admin/beats'));
        }
        else {
            session()->flash('error', 'some problem occure');
            return redirect(route('admin.beats/create'));
        }
    }

    public function edit($id)
    {
        $beats = Beats::findOrFail($id);
        return view('admin.beats.update', compact('beats'));
    }

    public function delete($id)
    {
        $beats = Beats::findOrFail($id)->delete();
        if ($beats) {
            session()->flash('success', 'Beat deleted successfully');
            return redirect(route('admin/beats'));
        }
        else {
            session()->flash('error', 'some problem ocure');
            return redirect(route('admin/beats'));
        }
    }

    public function update(Request $request, $id)
    {
        $beats = Beats::findOrFail($id);
        $title = $request->title;
        $ytlink = $request->ytlink;
        $info = $request->info;
        $price = $request->price;

        $beats->title = $title;
        $beats->ytlink = $ytlink;
        $beats->info = $info;
        $beats->price = $price;

        $data = $beats->save();
        if ($data) {
            session()->flash('success', 'Beat updated successfully');
            return redirect(route('admin/beats'));
        }
        else {
            session()->flash('error', 'some problem ocure');
            return redirect(route('admin/beats/update'));
        }
    }
}
