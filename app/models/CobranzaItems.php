    <?php


class CobranzaItems extends Eloquent{

    /**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'Cobranzas_Items';

    public function getTiposCuentas()
    {
        return $this->tiposCuentas;
    }

    public function cobranza()
    {
        return $this->belongTo('Cobranza');
    }

    public function comprobante()
    {
        return $this->hasOne('CtaCteCliente','Id','IdComprobante');
    }

    public function cuenta()
    {
        return $this->hasOne('CuentaContable','Id','IdCuenta');
    }

    public function efectivoMovimientos()
    {
        return $this->hasOne('EfectivoMovimientos','Id','IdComprobante');
    }

    public function getImporteAttribute($value)
    {
        //setlocale(LC_MONETARY, 'it_IT');
        return money_format('%.2n', $value);
    }

//    public function getTipoCuenta()
//    {
//        return $this->tiposCuentas[$this->attributes['IdCuenta']];
//    }


}
