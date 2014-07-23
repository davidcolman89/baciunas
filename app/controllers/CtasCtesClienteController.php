<?php

class CtasCtesClienteController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{

	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
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
	public function show($id)
	{




	}


	/**
	 * Show the form for editing the specified resource.
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
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

    public function listado($idCliente)
    {
        $cliente = Cliente::find($idCliente);

        return View::make('ctasctes.listado',compact('cliente'));
    }

    public function showAll($idCliente)
    {
        $listado = array();
        $ctasctes = CtaCteClienteVista::where('IdCliente','=',$idCliente)->get();

        foreach($ctasctes as $ctacte)
        {
            $listado[] = array(
                'Id'           => $ctacte->Id,
                'TipoComp'     => $ctacte->TipoComp,
                'Numero'       => link_to_route("ctasCtesCli.show", $ctacte->Numero,$ctacte->Id),
                'FechaIng'     => $ctacte->FechaIng,
                'Debe'         => $ctacte->Debe,
                'TotalDebe'    => $ctacte->TotalDebe,
                'Haber'        => $ctacte->Haber,
                'TotalHaber'   => $ctacte->TotalHaber,
            );
        }


        return array('data'=>$listado);

    }


}
