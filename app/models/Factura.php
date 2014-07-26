<?php


class Factura extends Eloquent {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'Facturas';

    public function items()
    {
        return $this->hasMany('FacturaItems','IDFactura','Id');
    }

}
