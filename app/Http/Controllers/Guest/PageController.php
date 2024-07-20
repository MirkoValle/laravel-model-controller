<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Movie;
use Illuminate\Http\Request;

class PageController extends Controller
{
    //Restituisce la homepage
    public function index(){
        $movies = Movie::all();
        return view("pages.home", compact('movies'));
    }
}