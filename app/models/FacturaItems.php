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

    public function getNetoAttribute($value)
    {
        //setlocale(LC_MONETARY, 'it_IT');
        return money_format('%.2n', $value);
    }

    public function getKilosAttribute($value)
    {
        //setlocale(LC_MONETARY, 'it_IT');
        return money_format('%.3n', $value);
    }

    public function getContenedoresAttribute($value)
    {
        //setlocale(LC_MONETARY, 'it_IT');
        return money_format('%.2n', $value);
    }


}
