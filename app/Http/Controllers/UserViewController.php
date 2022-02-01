<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Tattoo;
use App\Type;

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
}
