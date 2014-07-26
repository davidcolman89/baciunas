<?php


class FacturaItems extends Eloquent{

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'Facturas_Items';

    public function producto()
    {
        return $this->hasOne('Producto','Id','IdProducto');
    }

    public function alicuota()
    {
        return $this->hasOne('Alicuota','Id','IdAlicuota');
    }


}
