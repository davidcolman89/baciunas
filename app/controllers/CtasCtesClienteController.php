<?php

/**
 * Class CtasCtesClienteController
 */
class CtasCtesClienteController extends \BaseController
{

    /**
     * @var
     */
    protected $ctacte;
    /**
     * @var
     */
    protected $cliente;
    /**
     *
     */
    const ID_CUENTA_1 = 1;
    /**
     *
     */
    const ID_CUENTA_2 = 2;
    /**
     *
     */
    const ID_CUENTA_3 = 3;
    /**
     *
     */
    const ID_CUENTA_0 = 0;

    /**
     * @var array
     */
    protected $tiposCuentas = [
        self::ID_CUENTA_0 => 'Total Comprobante',
        self::ID_CUENTA_1 => 'Efectivo',
        self::ID_CUENTA_2 => 'Documentos',
        self::ID_CUENTA_3 => 'Cheques',
    ];

    /**
     * @return mixed
     */
    public function getCliente()
    {
        return $this->cliente;
    }

    /**
     * @param $cliente
     */
    public function setCliente($cliente)
    {
        $this->cliente = $cliente;
    }

    /**
     * @return mixed
     */
    public function getCtacte()
    {
        return $this->ctacte;
    }

    /**
     * @param $ctacte
     */
    public function setCtacte($ctacte)
    {
        $this->ctacte = $ctacte;
    }

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

    /**
     * @param $id
     * @return array
     */
    public function show($id)
    {

        $ctacte = CtaCteCliente::find($id);
        $this->setCtacte($ctacte);

        $items = $this->getItems();

        $valores = $this->getValores();

        $cliente = Cliente::find($this->ctacte->IdCliente);

        $bCuentaMadre = false;

        if (empty($cliente->IdRubroEmpresario)) $bCuentaMadre = true;

        return View::make('ctasctes.vista', compact('ctacte', 'cliente', 'bCuentaMadre', 'items', 'valores'));

    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  int $id
     * @return Response
     */
    public function update($id)
    {
        //
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }

    /**
     * @param $idCliente
     * @return mixed
     */
    public function getListado($idCliente)
    {
        $cliente = Cliente::find($idCliente);

        return View::make('ctasctes.listado', compact('cliente'));
    }

    /**
     * @param $idCliente
     * @return array
     */
    public function showAll($idCliente)
    {
        $listado = array();
        $ctasctes = CtaCteClienteVista::where('IdCliente', '=', $idCliente)->get();

        foreach ($ctasctes as $ctacte) {
            $listado[] = array(
                'Id' => $ctacte->Id,
                'TipoComp' => $ctacte->TipoComp,
                'Numero' => link_to_route("ctasCtesCli.show", $ctacte->Numero, $ctacte->Id),
                'FechaIng' => $ctacte->FechaIng,
                'Debe' => $ctacte->Debe,
                'TotalDebe' => $ctacte->TotalDebe,
                'Haber' => $ctacte->Haber,
                'TotalHaber' => $ctacte->Totalhaber,
            );
        }


        return array('data' => $listado);

    }

    /**
     * @param $id
     * @return array
     */
    public function getRelaciones($id)
    {
        $array = array();
        $relaciones = CtaCteClienteRelacion::where('IdRelacion', '=', $id)->get();

        if ($relaciones->isEmpty()) {
            #FAC

            $relaciones = CtaCteClienteRelacion::where('IdOrigen', '=', $id)->get();

            if (!$relaciones->isEmpty()) {

                foreach ($relaciones as $relacion) {

                    $ctacteRelacionada = CtaCteCliente::find($relacion->IdRelacion);

                    $array[] = [
                        'ctacte_relacionada_id' => $ctacteRelacionada->Id,
                        'FechaRel' => $relacion->FechaRel,
                        'TipoDocumento' => $ctacteRelacionada->talonario->Talonario,
                        'Numero' => link_to_route('ctasCtesCli.show', $ctacteRelacionada->Numero, $relacion->IdRelacion),
                        'Aplicado' => $relacion->Aplicado,
                    ];
                }

            }

        } else {
            #REC

            foreach ($relaciones as $relacion) {
                $ctacteRelacionada = CtaCteCliente::find($relacion->IdOrigen);

                $array[] = [
                    'ctacte_relacionada_id' => $ctacteRelacionada->Id,
                    'FechaRel' => $relacion->FechaRel,
                    'TipoDocumento' => $ctacteRelacionada->talonario->Talonario,
                    'Numero' => link_to_route('ctasCtesCli.show', $ctacteRelacionada->Numero, $relacion->IdOrigen),
                    'Aplicado' => $relacion->Aplicado,
                ];
            }

        }

        return array('data' => $array);

    }

    /**
     * @return array
     */
    public function showAllClientes()
    {
        $clientes = Cliente::all(['Id as id', 'Razon as razon'])->toArray();
        $data = array('data' => $clientes);
        return $data;
    }

    /**
     * @param $idCuenta
     * @return mixed
     */
    public function getTipoCuenta($idCuenta)
    {
        return $this->tiposCuentas[$idCuenta];
    }

    /**
     * @param $item
     * @return string
     */
    public function getContenido($item)
    {
        if ($item->IdCuenta == self::ID_CUENTA_1) {
            return $item->efectivoMovimientos->efectivo->Descripcion;
        }

        if ($item->IdCuenta == self::ID_CUENTA_2 or $item->IdCuenta == self::ID_CUENTA_3) {
            if($item->ctaBancoMovimientos) return $item->ctaBancoMovimientos->Leyenda;
        }

        return '';
    }

    /**
     * @return array
     */
    private function getItems()
    {
        //Recibos
        if (!empty($this->ctacte->IDCobranza)) return $this->getItemsRecibo();

        //Facturas
        return $this->getItemsFactura();
    }

    /**
     * @return array
     */
    public function getValores()
    {
        //Recibos
        if (!empty($this->ctacte->IDCobranza)) return $this->ctacte->cobranza->valores()->get();

        //Facturas
        return [];

    }
    
    public function getItemsFactura()
    {
       $registros = $this->ctacte->factura->items()->get();

       foreach($registros as $item)
       {
           $producto = $item->producto->Producto;
           $contenedores = $item->Contenedores;
           $kilos = $item->Kilos;
           $notaFactura = $item->NotaFactura;
           $neto = $item->Neto;

           $items[] = compact('producto','contenedores','kilos','notaFactura','neto');
       }

       return $items;
    }

    /**
     * @return array
     */
    private function getItemsRecibo()
    {
        $registros = $this->ctacte->cobranza->items()->orderBy('IdCuenta', 'DESC')->get();

        foreach ($registros as $item) {
            $tipoCuenta = $this->getTipoCuenta($item->IdCuenta);
            $moneda = '';
            $contenido = $this->getContenido($item);
            $importe = $item->Importe;

            $items[] = compact('tipoCuenta', 'contenido', 'importe', 'moneda');
        }

        return $items;
    }


}
