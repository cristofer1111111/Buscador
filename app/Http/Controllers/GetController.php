<?php

namespace App\Http\Controllers;
use App\Models\Search;
use Illuminate\Http\Request;

class GetController extends Controller
{
    function getSearchid(Request $request){
        $busqueda = $request->get('buscador');
       if (strlen($busqueda) >= 3) {
               $busqueda  = Search::where('name',$busqueda)
                 ->orwhere('description',$busqueda)
                 ->orwhere('type', $busqueda ) ->get();

                } elseif (strlen($busqueda) == 0) {
                     $busqueda  = 0;
            return view('get.search', compact('busqueda'));
     }
     }
}
