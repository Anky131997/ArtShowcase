<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;
use App\Http\Requests\Tattoos\CreateTattooRequest;
use App\Http\Requests\Tattoos\UpdateTattooRequest;
use Illuminate\Support\Facades\Storage;

use App\Tattoo;
use App\Type;
use App\Models\User;

class TattooController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('adminpanel.tattoos.index')->with('tattoos', Tattoo::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('adminpanel.tattoos.create')->with('types', Type::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateTattooRequest $request)
    {
        $image = $request->image->store('tattoos');

        $tattoo = new Tattoo();
        $user= Auth::user();

        $tattoo->name = $request->name;
        $tattoo->description = $request->description;
        $tattoo->type_id = $request->type;
        $tattoo->artist_id = $user->id;
        $tattoo->color = $request->color;
        $tattoo->image = $image;

        $tattoo->save();

        session()->flash('success', 'Tattoo Successfully Created');

        return redirect(route('tattoos.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Tattoo $tattoo)
    {
        return view('show', compact('tattoo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Tattoo $tattoo)
    {
        $types = Type::all();

        return view('adminpanel.tattoos.create', compact('tattoo','types'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTattooRequest $request,Tattoo $tattoo)
    {
        $data = $request->only(['name','description','color','type']);

        if($request->hasFile('image')){

            $image = $request->image->store('tattoos');

            Storage::delete($tattoo->image);

            $data['image'] = $image;

        }
        else{
            $data['image'] = $tattoo->image;
        }

        $tattoo->name = $data['name'];
        $tattoo->description = $data['description'];
        $tattoo->color = $data['color'];
        $tattoo->type_id = $data['type'];
        $tattoo->image = $data['image'];

        $tattoo->save();

        session()->flash('success', 'Tattoo Successfully Edited');

        return redirect(route('tattoos.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tattoo $tattoo)
    {
        Storage::delete($tattoo->image);

        $tattoo->delete();

        session()->flash('success', 'Post Deleted Successfully!!');

        return redirect(route('tattoos.index'));
    }
}
