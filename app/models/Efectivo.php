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

    public function getMonedaAttribute($value)
    {
        switch ($value)
        {
            case 1:
                $value = 'Pesos';
                break;
            default:
                break;
        }

        return $value;

    }

}
