<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User as Users;

class UsersController extends Controller
{
    public function index()
    {
        $users = Users::get();
        $total = Users::count();
        return view('admin.users.home', compact(['users', 'total']));
    }

    public function edit($id)
    {
        $users = Users::findOrFail($id);
        return view('admin.users.update', compact('users'));
    }

    public function delete($id)
    {
        $users = Users::findOrFail($id)->delete();
        if ($users) {
            session()->flash('success', 'Beat deleted successfully');
            return redirect(route('admin/users'));
        }
        else {
            session()->flash('error', 'some problem ocure');
            return redirect(route('admin/users'));
        }
    }

    public function update(Request $request, $id)
    {
        $users = Users::findOrFail($id);
        $name = $request->name;
        $email = $request->email;

        $users->name = $name;
        $users->email = $email;

        $data = $users->save();
        if ($data) {
            session()->flash('success', 'Beat updated successfully');
            return redirect(route('admin/users'));
        }
        else {
            session()->flash('error', 'some problem ocure');
            return redirect(route('admin/users/update'));
        }
    }

}

