<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Categoria;
use App\Producto;

class CategoriaProductoController extends Controller
{
    /**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index($idCategoria)
	{
		
		$categoria=Categoria::find($idCategoria);
 
		if (! $categoria)
		{
			
			return response()->json(['errors'=>array(['code'=>404,'message'=>'No se encuentra una categoria con ese código.'])],404);
		}
 
		return response()->json(['status'=>'ok','data'=>$categoria->productos()->get()],200);
		
	}
 
	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create($idCategoria)
	{
		//
		return "Se muestra formulario para crear un producto de la categoria $idCategoria.";
	}
 
	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}
 
	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($idCategoria,$idProducto)
	{
		//
		return "Se muestra producto $idProducto de la categoria $idCategoria";
	}
 
	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($idCategoria,$idProducto)
	{
		//
		return "Se muestra formulario para editar el producto $idProducto de la categoria $idCategoria";
	}
 
	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($idCategoria,$idProducto)
	{
		//
	}
 
	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($idCategoria,$idProducto)
	{
		//
	}
}
	