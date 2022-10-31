<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateUsuarioRequest;
use App\Http\Requests\UpdateUsuarioRequest;
use App\Models\Usuario as ModelsUsuario;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return ModelsUsuario::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store( CreateUsuarioRequest $request )
    {
        $postData = $request->all();
        ModelsUsuario::create( $postData );
        return response()->json([
                'mensaje' => 'Nuevo usuario creado.'
            ],
            200
        );
    }

    /**
     * Display the specified resource.
     *
     * @param  ModelsUsuario  $user
     * @return \Illuminate\Http\Response
     */
    public function show( ModelsUsuario $user )
    {
        return $user;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update( UpdateUsuarioRequest $request, ModelsUsuario $user )
    {
        $putData = $request->all();
        $user->update( $putData );
        return response()->json([
                'mensaje' => 'Datos de usuario modificaddos.'
            ],
            200
        );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id )
    {
        ModelsUsuario::destroy( $id );
        return response()->json([
                'mensaje' => 'Usuario eliminado.'
            ],
            200
        );
    }
}
