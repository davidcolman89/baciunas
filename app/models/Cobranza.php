<?php


class Cobranza extends Eloquent{

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'Cobranzas';

    public function items()
    {
        return $this->hasMany('CobranzaItems','IdCobranza','IDCobranza');
    }

    public function valores()
    {
        return $this->hasMany('CobranzaValores','IDCobranza','IDCobranza');
    }


}
