<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Place;
use App\PlaceTypes;
use Illuminate\Support\Facades\DB;

class PlaceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $places = DB::table('places')
            ->Join('place_types', 'place_types.id', '=', 'places.place_type_id')
            ->select('places.*', 'place_types.name as place_type_name')
            ->get();

        //$places = Place::all();
        //return $places;
        return view('admin.place.index', ["places"=>$places]);
    }

    public function listall(Request $request)
    {
        $places = DB::table('places')
            ->Join('place_types', 'place_types.id', '=', 'places.place_type_id')
            ->select('places.*', 'place_types.name as place_type_name')
            ->paginate(5);

      return view('admin.place.listPlace',compact('places'))
        ->with('i', ($request->input('page', 1) - 1) * 5);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $Places = new Place;
        $categories = PlaceTypes::orderBy('id', 'desc')->pluck('name', 'id');
       return view('admin.place.create',["place" => $Places, "categories" => $categories]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $product = new Place;

        $product->name = $request->title;
        $product->user_id = 1;
        $product->description = $request->description;
        $product->status = $request->status;
        $product->email = $request->email;
        $product->path = $request->path;
        $product->place_type_id = $request->id;

        if($product->save()){
            return redirect('/bo/place');
        }
        else{
            return view('admin.place.create',["place" => $product]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
}
