<?php


class CtaCteClienteRelacion extends Eloquent {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'CtasCtes_Clien_Relaciones';

    public function getFechaRelAttribute($value)
    {
        return Fecha::formatMssqlToDate("Y/m/d", $value);
    }

}
