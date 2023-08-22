<?php

namespace App\Http\Controllers;

use App\Models\Picture;
use Illuminate\Http\Request;

class PictureController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pictures = Picture::all();

        return view('pictures.index',[

        'pictures' =>  $pictures
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pictures.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)

    { 

        $picture = new Picture;

        $picture->title = $request->titolo;
        $picture->description = $request->descrizione;
        $picture->price = $request->prezzo;

        if ($request->file('immagine')){
            $imageId = uniqid();
            $imageName = 'immagine-quadro-' . $imageId. '.' . $request->file('immagine')->extension();

            $picture->image = $imageName;
            $picture->image_id = $imageId;
    
            $image = $request->file('immagine')->storeAs('public', $imageName);

        }else {
            $picture->image = '';
            $picture->image_id = '';
        }

    
       

        $picture->save();

       return redirect()->route ('pictures.index');

    }

    /**
     * Display the specified resource.
     */
    public function show(Picture $picture)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Picture $picture)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Picture $picture)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Picture $picture)
    {
        //
    }
}
