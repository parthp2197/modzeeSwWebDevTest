<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Photographer;
use App\Models\Album;

class PhotographerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $photographer = Photographer::all();

        // dump($photographer->toJson(JSON_PRETTY_PRINT));
        return response()->json($photographer);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $photographer = Photographer::find($id);
        // dump($photographer->toJson(JSON_PRETTY_PRINT));
        $albums = Album::where('photographer_id', $id)->get();
        
        $album_array = array();
        foreach($albums->toArray() as $key => $value)
        {
            unset($value['photographer_id']);
            $album_array[] = $value;
        }
        $albums = array("album" => $album_array);
        $merged = array_merge($photographer->toArray(), $albums);
        return response()->json($merged);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function loadView()
    {
        return view('show');
    }

    public function getJsonData()
    {
        return response()->file(resource_path() . '\assets\js\data\landscapes.json');
    }

}
