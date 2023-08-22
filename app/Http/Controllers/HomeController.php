<?php

namespace App\Http\Controllers;

use App\Models\Picture;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index (){
        $pictures = Picture::all();

        return view('home.index', [
        'pictures' => $pictures
        ]);
    }
}
