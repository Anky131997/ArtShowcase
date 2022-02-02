<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;
use App\Tattoo;
use App\Type;
use App\Models\User;

class UserViewController extends Controller
{
    
    public function bigTattoos()
    {
        $tattoos = Tattoo::where('type_id', 1)->get();

        return view('allTattoos', compact('tattoos'));
    }

    public function smallTattoos()
    {
        $tattoos = Tattoo::where('type_id', 2)->get();
        
        return view('allTattoos', compact('tattoos'));
    }

    public function contact()
    {
        return view('contact');
    }

    public function profile()
    {
        $user= Auth::user();
        
        return view('profile', compact('user'));
    }
}
