<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;
use App\Tattoo;
use App\Type;
use App\Models\User;
use DB;

class UserViewController extends Controller
{
    public function contact()
    {
        return view('contact');
    }

    public function profile()
    {
        $user= Auth::user();
        
        $arts=Tattoo::where('artist_id', $user->id)->get();

        $types= Type::all();

        return view('profile', compact('user','arts','types'));
    }

    public function artistProfile($id)
    {
        $user= User::where('id', $id)->first();

        $arts=Tattoo::where('artist_id', $id)->get();

        $types= Type::all();

        return view('profile', compact('user','arts','types'));
    }
    
    public function artists(){
        $artists= User::where('role', 'artist')->get();
        $types= Type::all();

        return view('artists', compact('artists','types'));
    }

}
