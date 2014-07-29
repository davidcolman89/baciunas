    <?php


class CobranzaValores extends Eloquent{

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'Cobranzas_Valores';

    public function getTipoAttribute($value)
    {

        $row = DB::select('select dbo.f_TipoComprobante(?) as Tipo',array($value));

        return $row[0]->Tipo;
    }

    /*
    public function getCotizAttribute($value)
    {
        $row = DB::select('select dbo.f_Moneda(?) as Moneda',array((int)$value));

        return $row[0]->Moneda;
    }
    */


    public function item()
    {
        return $this->hasOne('CobranzaItems','IdComprobante','IDDato');
    }


    public function getMontoAttribute($value)
    {
        //setlocale(LC_MONETARY, 'it_IT');
        return money_format('%.2n', $value);
    }

}
