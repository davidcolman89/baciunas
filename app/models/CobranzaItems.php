    <?php


class CobranzaItems extends Eloquent{

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'Cobranzas_Items';

    public function comprobante()
    {
        return $this->hasOne('Factura','Id','IdComprobante');
    }

    public function cuenta()
    {
        return $this->hasOne('CuentaContable','Id','IdCuenta');
    }

}
