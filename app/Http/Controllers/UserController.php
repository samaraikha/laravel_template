<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    public function index(Request $request)
    {
        $data = User::all();
        return view('pages.users.index',compact('data'));
    }

    public function create()
    {
        return view('pages.users.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'phone_no' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|same:confirm-password',
        ]);

        $input = $request->all();
        $input['password'] = Hash::make($input['password']);

        $user = User::create($input);
        Session::flash('success_message', 'User created successfully!');
        return redirect()->route('users.index');
    }

    public function show($id)
    {
        $user = User::find($id);
        return view('pages.users.show',compact('user'));
    }

    public function edit($id)
    {
        $user = User::find($id);

        return view('pages.users.edit',compact('user'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required',
            'phone_no' => 'required',
            'email' => 'required|email|unique:users,email,'.$id,
            'password' => 'same:confirm-password',
        ]);

        $input = $request->all();
        if(!empty($input['password'])){
            $input['password'] = Hash::make($input['password']);
        }else{
            $input = Arr::except($input,array('password'));
        }

        $user = User::find($id);
        $user->update($input);
        Session::flash('success_message', 'User updated successfully!');
        return redirect()->route('users.index');
    }

    public function destroy($id)
    {
        User::find($id)->delete();
        Session::flash('delete_message', 'User deleted successfully!');
        return redirect()->route('users.index');
    }
}
