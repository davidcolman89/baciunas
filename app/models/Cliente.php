<?php


class Cliente extends Eloquent
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'Clientes';

    public function cuentacorriente()
    {
        return $this->hasMany('CtaCteCliente', 'IdCliente', 'Id');
    }

    public function vendedor()
    {
        return $this->hasMany('Vendedor', 'Id', 'IdCobrador');
    }

    public function facturaProvincia()
    {
        return $this->hasMany('Provincia', 'Id', 'Fact_cProvincia');
    }

    public function facturaLocalidad()
    {
        return $this->hasMany('Localidad', 'Id', 'Fact_cLocalidad');
    }

    public function serviciosProvincia()
    {
        return $this->hasMany('Provincia', 'Id', 'Prod_cProvincia');
    }

    public function serviciosLocalidad()
    {
        return $this->hasMany('Localidad', 'Id', 'Prod_cLocalidad');
    }

    public function chofer()
    {
        return $this->hasMany('Chofer', 'Id', 'IdChofer');
    }

    public function rubroEmpresario()
    {
        return $this->hasMany('RubroEmpresario', 'Id', 'IdRubroEmpresario');
    }

    public function categoriaIVA()
    {
        return $this->hasMany('CategoriaIva', 'Id', 'IdCategIVA');
    }

    public function condicionVenta()
    {
        return $this->hasMany('CondicionVenta', 'Id', 'IdCondVenta');
    }

    public function tipoCliente()
    {
        return $this->hasMany('TipoCliente', 'Id', 'IdTipoCliente');
    }

    public function usuarioAlta()
    {
        return $this->hasMany('User', 'Id', 'cUsuario');
    }

    public function usuarioModificacion()
    {
        return $this->hasMany('User', 'Id', 'cUsuario_Mod');
    }

}
