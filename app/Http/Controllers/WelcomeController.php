<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Tattoo;
use App\Type;

class WelcomeController extends Controller
{
    public function index()
    {
        $allTattoos = Tattoo::all();
        $tattoos = Tattoo::all();
        $otherPage = 'nasa';
        $response = file_get_contents("https://instagram.com/artificetattoostudio/?__a=1");
        // if ($response !== false) {
        //     $data = json_decode($response, true);
        //     if ($data !== null) {
        //         $follows = $data['graphql']['user']['edge_follow']['count'];
        //         $followedBy = $data['graphql']['user']['edge_followed_by']['count'];
        //     }
        // }
        return view('welcome', compact('tattoos','allTattoos'));
    }
}
