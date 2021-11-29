<?php

namespace App\Http\Controllers;

use App\Models\Search;
use App\Models\Images;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function index()
    {
        $buscadores=Search::all();
        return view('index', compact('buscadores'));
    }
}
