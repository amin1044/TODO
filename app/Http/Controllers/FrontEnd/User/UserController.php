<?php

namespace App\Http\Controllers\FrontEnd\User;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        $users = User::find(Auth::id());
        return view('FrontEnd.Users.user', compact('users'));

    }



    public function add_address($id)
    {
        $users = User::find($id);
        $city = DB::table('shahrestan')->get();
        return view('FrontEnd.Users.edit-address', compact('users', 'city'));
    }




    public function edit($id, Request $request)
    {
        $users = User::find($id);
        if ($request->ajax())
            return view('FrontEnd.Users.edit', compact('users'));
        else
            return view('errors.404');
    }

    public function update(Request $request, $id)
    {
        $input = $request->all();
        $input['password'] = Hash::make($input['password']);
        $user = User::find($id);
        $user->update($input);


        return redirect()->route('FrontEnd.user.users');

    }
}
