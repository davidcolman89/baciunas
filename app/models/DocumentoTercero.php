<?php

class DocumentoTercero extends \Eloquent {
	protected $table = 'DocTer_Movimientos';
	protected $fillable = [];

	public function banco()
	{
		return $this->hasOne('Banco','Id','IdBanco');
	}

	public function cliente()
	{
		return $this->hasOne('Cliente','Id','CodCuenta');
	}

	public function tipoMovimiento()
	{
		return $this->hasOne('DocumentoTerceroTipoMovimiento','TipoMov','IdTipoMov');
	}

	public function estado()
	{
		return $this->hasOne('DocumentoTerceroEstado','Id','IdEstado');
	}

}