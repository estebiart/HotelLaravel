<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hotel;
use App\Models\Foto;
use App\Models\Categorias;
use App\Models\Calificacion;


class HotelController extends Controller
{
  
    public function getAll(Request $request)
    {
       
        if($request->isJson()){
 

        return Hotel::all();

   
           
        } else{
            return response()->json(['error' => 'formato invalido'],status:406);
        }
       
    }
    public function filtrar(Request $request,$filtro,$tipo)
    {
        if($request->isJson()){
            
            // filtro tabla que servira de filtro
    
         // tipo si ascendente o descendente
    
            $hotel = Hotel::buscarpor($filtro,$tipo);
    
     
               return  $hotel;// Hotel::all();
               
            } else{
                return response()->json(['error' => 'formato invalido'],status:406);
            }
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
            if($request ->hasFile('img')){
                $data['img']=$request->file('img')->store('uploads','public');
            }
        $hotel= new Hotel;
        $hotel->HotelName = $request->HotelName;
        $hotel->Precio = $request->Precio;
        $hotel->save();
 
        $this->validate($request, [
 
            'HotelName' => 'required',
            'img.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'
 
        ]);        
 
        $files = $request->file('img');

        foreach($files as $file){
            $foto= new Foto;
            $foto->nombre = $file->nombre;
            $foto->hotel_id = $file->id_foto;
            $foto->formato = $file->formato;
            $foto->Url= $file->Url;
            $foto->save();
      
        }  
           
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

  
}
