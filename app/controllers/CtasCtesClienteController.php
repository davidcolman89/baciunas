<?php

class CtasCtesClienteController extends \BaseController {

    /**
     * @var array
     */
    protected $tiposCuentas = [
        0 => 'Total Comprobante',
        1 => 'Efectivo',
        2 => 'Documentos',
        3 => 'Cheques',
    ];

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        return View::make('ctasctes.listado_clientes');
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

	public function show($id)
	{

        $ctacte = CtaCteCliente::find($id);
        $cliente = Cliente::find($ctacte->IdCliente);

        if(!empty($ctacte->IDCobranza)){
            //Recibos
            $items = $ctacte->cobranza->items()->orderBy('IdCuenta', 'DESC')->get();
            $valores = $ctacte->cobranza->valores()->get();
        }else{
            //Facturas
            $items = $ctacte->factura->items()->get();
            $valores = array();
        }

        if(empty($cliente->IdRubroEmpresario)){
            $bCuentaMadre = true;
        }else{
            $bCuentaMadre = false;
        }

        $layout = 'ctasctes.vista';
        $tiposCuenta = $this->tiposCuentas;
        return View::make($layout,compact('ctacte','cliente','bCuentaMadre','items','valores','tiposCuenta'));

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

    public function getListado($idCliente)
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
                'TotalHaber'   => $ctacte->Totalhaber,
            );
        }


        return array('data'=>$listado);

    }

    public function getRelaciones($id)
    {
        $array = array();
        $relaciones = CtaCteClienteRelacion::where('IdRelacion','=',$id)->get();

        if($relaciones->isEmpty()){
        #FAC

            $relaciones = CtaCteClienteRelacion::where('IdOrigen','=',$id)->get();

            if (!$relaciones->isEmpty()) {

                foreach ($relaciones as $relacion) {

                    $ctacteRelacionada = CtaCteCliente::find($relacion->IdRelacion);

                    $array[] = [
                        'ctacte_relacionada_id' => $ctacteRelacionada->Id,
                        'FechaRel' => $relacion->FechaRel,
                        'TipoDocumento' => $ctacteRelacionada->talonario->Talonario,
                        'Numero' => link_to_route('ctasCtesCli.show',$ctacteRelacionada->Numero,$relacion->IdRelacion),
                        'Aplicado' => $relacion->Aplicado,
                    ];
                }

            }

        }else{
        #REC

            foreach ($relaciones as $relacion) {
                $ctacteRelacionada = CtaCteCliente::find($relacion->IdOrigen);

                $array[] = [
                    'ctacte_relacionada_id' => $ctacteRelacionada->Id,
                    'FechaRel' => $relacion->FechaRel,
                    'TipoDocumento' => $ctacteRelacionada->talonario->Talonario,
                    'Numero' => link_to_route('ctasCtesCli.show',$ctacteRelacionada->Numero,$relacion->IdOrigen),
                    'Aplicado' => $relacion->Aplicado,
                ];
            }

        }

        return array('data'=>$array);

    }

    public function showAllClientes()
    {
        $clientes = Cliente::all(['Id as id','Razon as razon'])->toArray();
        $data = array('data' => $clientes);
        return $data;
    }


}
