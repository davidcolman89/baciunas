<?php


class CtaCteCliente extends Eloquent {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'CtasCtes_Clien';


    public function talonario()
    {
        return $this->hasOne('Talonario','Id','IdTalonario');
    }

    public function relaciones()
    {
        return $this->hasMany('CtaCteClienteRelacion','IdRelacion','Id');
    }

    public function origenes()
    {
        return $this->hasMany('CtaCteClienteRelacion','IdOrigen','Id');
    }

    public function cobranza()
    {
        return $this->hasOne('Cobranza','IDCobranza','IDCobranza');
    }

    public function factura()
    {
        return $this->hasOne('Factura','Id','IDFactura');
    }

    public function fromDateTime($value)
    {
        return $value;
    }

    public function getFechaIngAttribute($value)
    {
        return Fecha::formatMssqlToDate("d/m/Y", $value);
    }

    public function getFechaDocAttribute($value)
    {
        return Fecha::formatMssqlToDate("d/m/Y", $value);
    }

    public function getFechaContAttribute($value)
    {
        return Fecha::formatMssqlToDate("d/m/Y", $value);
    }

}
