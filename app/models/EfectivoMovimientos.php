<?php


class EfectivoMovimientos extends Eloquent{

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'Efectivo_Movimientos';

    public function cobranzaItems()
    {
        return $this->belongTo('CobranzaItems');
    }

    public function efectivo()
    {
        return $this->hasOne('Efectivo','Id','IdEfectivo');
    }

}
