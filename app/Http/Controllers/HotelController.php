<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hotel;
use App\Models\Foto;
use App\Models\FotoHotel;
use App\Models\Categorias;
use App\Models\Calificacion;
use App\Models\CalificacionHotel;
class HotelController extends Controller
{
  
    public function getAll(Request $request)
    {
        //
        if($request->isJson()){
            return Hotel::all();
        } else{
            return response()->json(['error' => 'formato invalido'],status:406);
        }
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function organizar()
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
        if($request->isJson()){
            $data=request()->except('_token');
            if($request ->hasFile('Dirrecion ')){
                $data['Dirrecion ']=$request->file('Dirrecion ')->store('uploads','public');
            }
            Hotel::insert($data);
            Foto::insert($data['Dirrecion ']);
            FotoHotel::insert($data['id']);
        } else{
            return response()->json(['error' => 'formato invalido'],status:406);
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
        return Hotel::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function filtar($id)
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
        $hotel = Hotel::find($id);
        $hotel->update($request->all());
        return ['updated' => true];
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
        Hotel::destroy($id);
        return ['deleted' => true];
    }

    public function searchCategory($name)
    {
        $category= Categorias::SearchCategory($name)->first();
        $articles = $category->articles
    }
    public function searchCalification($name)
    {
        $category= Calificacion::SearchCalification($name)->first();
        $articles = $category->articles
    }
    public function findHotelPrecio($name)
    {
        $this->user = User::findOrFail($route->getParameter('users'));
        User::orderBy('id','DESC')
    }
    
}
