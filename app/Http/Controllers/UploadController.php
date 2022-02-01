<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\Tattoos\CreateTattooRequest;
use App\Http\Requests\Tattoos\UpdateTattooRequest;
use Illuminate\Support\Facades\Storage;

use App\Tattoo;
use App\Type;

class UploadController extends Controller
{
    public function upload(){
        $types= Type::all();

        return view('upload', compact('types'));
    }

    public function store(CreateTattooRequest $request){
        $image = $request->image->store('tattoos');

        $tattoo = new Tattoo();

        $tattoo->name = $request->name;
        $tattoo->description = $request->description;
        $tattoo->type_id = $request->type;
        $tattoo->color = $request->color;
        $tattoo->image = $image;

        $tattoo->save();

        // session()->flash('success', 'Tattoo Successfully Created');

        return redirect(route('welcome'));
    }
}
