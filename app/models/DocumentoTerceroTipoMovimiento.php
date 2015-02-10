<?php

class DocumentoTerceroTipoMovimiento extends \Eloquent {
	protected $table = 'DocTer_TipoMov';
	protected $fillable = [];

	public function documentoTercero()
	{
		return $this->belongsTo('DocumentoTercero','TipoMov','IdTipoMov');
	}
}