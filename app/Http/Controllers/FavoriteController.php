<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class FavoriteController extends Controller
{
    public function __construct(){
        $this->middleware('auth:sanctum');
    }
    public function index()
    {
        return auth()->user()->favorites()->paginate(3);
    }
    public function store(Request $request)
    {
        auth()->user()->favorites()->attach($request->product_id);
        return response()->json([
            'success'=> true
        ]);
    }
    public function destroy($favorite_id)
    {
        if(auth()->user()->hasFavorites($favorite_id)){
            auth()->user()->favorites()->detach();
            return response()->json(['success'=> true]);
        }
        return response()->json(['success'=> false , 'msg' => 'favorites does not exist']);

    }
}
