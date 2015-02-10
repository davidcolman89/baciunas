<?php

class DocumentosTercerosController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /documentosterceros
	 *
	 * @return Response
	 */
	public function index()
	{
		return View::make('documetos_terceros.listado');
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /documentosterceros/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /documentosterceros
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 * GET /documentosterceros/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$documento = DocumentoTercero::find($id);

		return View::make('documentos_terceros.view')->with(compact('documento'));
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /documentosterceros/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /documentosterceros/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /documentosterceros/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}