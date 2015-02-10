<?php

class DocumentoTerceroEstado extends \Eloquent {
	protected $table = 'DocTer_Estados';
	protected $fillable = [];

	public function documentoTercero()
	{
		return $this->belongsTo('DocumentoTercero','Id','IdEstado');
	}
}