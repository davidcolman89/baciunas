<?php

class Banco extends \Eloquent {
	protected $table = 'Bancos';
	protected $fillable = [];

	public function documentoTercero()
	{
		return $this->belongsTo('DocumentoTercero','Id','IdBanco');
	}
}