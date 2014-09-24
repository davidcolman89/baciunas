<?php


class CtaBancoMovimientos extends Eloquent{

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'CtaBanco_Movimientos';

    public function cobranzaItems()
    {
        return $this->belongTo('CobranzaItems');
    }

}
