<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function profile()
    {
        $user = User::get()->first();
        return view('profile/profile')->with('user', $user);
    }

    public function floorUpdate(Request $request)
    {
        $this->validate($request,[
            'total_floors' => 'required',
            'total_rooms' => 'required',
            
        ]);

       // create posts
        $id = auth()->user()->id;

        $people = User::find($id);
        $people->total_rooms = $request->input('total_rooms');
        $people->total_floors = $request->input('total_floors');


        $success = $people->save();

        if ($success) {
            return redirect('/profile')->with('success', 'Floors and rooms updated successfully!');
        }else{
            return redirect('/profile')->with('error', 'There was a problem while updating floors!');
        }
    }
}
