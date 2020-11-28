<?php

namespace App\Http\Controllers;

use App\Category;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $homeImages = Category::with('uploads')
            ->orderByRaw('title ASC')
            ->where('title', '=', 'acceuil')
            ->get()->first()->uploads;
        return view("frontend.home.index", compact('homeImages'));
    }
}
