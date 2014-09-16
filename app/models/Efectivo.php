<?php


class Efectivo extends Eloquent{

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'Efectivo';

    public function efectivoMovimientos()
    {
        return $this->belongTo('EfectivoMovimiento');
    }

}
