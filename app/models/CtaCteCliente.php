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


}
