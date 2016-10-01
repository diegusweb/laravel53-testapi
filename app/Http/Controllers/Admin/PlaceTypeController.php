<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\PlaceTypes;

class PlaceTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $placeTypes = PlaceTypes::all();
        return view('admin.placetypes.index', ["placetypes"=>$placeTypes]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $Place_types = new PlaceTypes;
       return view('admin.placetypes.create',["placeType" => $Place_types]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $product = new PlaceTypes;

        $product->name = $request->title;
        $product->description = $request->description;

        if($product->save()){
            return redirect('/bo/placetypes');
        }
        else{
            return view('admin.placetypes.create',["placetype" => $product]);
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

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $products = PlaceTypes::find($id);
       return view('admin.placetypes.edit',["placetype" => $products]);
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
        $product = PlaceTypes::find($id);

      $product->name = $request->title;
      $product->description = $request->description;


      if($product->save())
        return redirect('/bo/placetypes');
      else
         return view('admin.placetypes.edit',["placetype" => $product]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        PlaceTypes::destroy($id);

        return redirect('/bo/placetypes');
    }
}
