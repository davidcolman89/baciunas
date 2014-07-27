<?php


class CtaCteClienteVista extends Eloquent {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'vCtasCtes_Clien';

    public function getFechaIngAttribute($value)
    {
        return Fecha::formatMssqlToDate("Y/m/d", $value);
    }

}
