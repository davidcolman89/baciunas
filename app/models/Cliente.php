<?php


class Cliente extends Eloquent
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'Clientes';


    public function cuentasCorrientes()
    {
        return $this->hasMany('CtaCteCliente', 'IdCliente', 'Id');
    }

    public function vistaCuentasCorrientes()
    {
        return $this->hasMany('CtaCteClienteVista', 'IdCliente', 'Id');
    }

    public function vendedor()
    {
        return $this->hasOne('Vendedor', 'Id', 'IdCobrador');
    }

    public function facturaProvincia()
    {
        return $this->hasOne('Provincia', 'Id', 'Fact_cProvincia');
    }

    public function facturaLocalidad()
    {
        return $this->hasOne('Localidad', 'Id', 'Fact_cLocalidad');
    }

    public function servicios()
    {
        return $this->hasMany('Servicio', 'IdCliente', 'Id');
    }

    public function serviciosProvincia()
    {
        return $this->hasOne('Provincia', 'Id', 'Prod_cProvincia');
    }

    public function serviciosLocalidad()
    {
        return $this->hasOne('Localidad', 'Id', 'Prod_cLocalidad');
    }

    public function cobranzaProvincia()
    {
        return $this->hasOne('Provincia', 'Id', 'Cob_cProvincia');
    }

    public function cobranzaLocalidad()
    {
        return $this->hasOne('Localidad', 'Id', 'Cob_cLocalidad');
    }

    public function chofer()
    {
        return $this->hasOne('Chofer', 'Id', 'IdChofer');
    }

    public function rubroEmpresario()
    {
        return $this->hasOne('RubroEmpresario', 'Id', 'IdRubroEmpresario');
    }

    public function categoriaIVA()
    {
        return $this->hasOne('CategoriaIva', 'Id', 'IdCategIVA');
    }

    public function condicionVenta()
    {
        return $this->hasOne('CondicionVenta', 'Id', 'IdCondVenta');
    }

    public function tipoCliente()
    {
        return $this->hasMany('TipoCliente', 'Id', 'IdTipoCliente');
    }

    public function usuarioAlta()
    {
        return $this->hasOne('User', 'Id', 'cUsuario');
    }

    public function usuarioModificacion()
    {
        return $this->hasOne('User', 'Id', 'cUsuario_Mod');
    }

    public function getEstadoAttribute($value)
    {

        $row = DB::select('select dbo.f_estados(?) as Estado',array($value));

        return $row[0]->Estado;
    }

}
