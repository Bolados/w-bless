<?php

namespace App\Http\Controllers;

use App\Activity;
use App\Category;

class ActivitiesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $activites = Category::with('uploads')->orderByRaw('title ASC')->where('title', '!=', 'acceuil')->get();
        return view("frontend.activities.index", compact('activites'));
    }
}
