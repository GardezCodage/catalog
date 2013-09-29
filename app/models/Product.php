<?php

class Product extends Eloquent {
	protected $guarded = array();

	public static $rules = array();

	//Funciones... check it out please 
	
	//Funcion para definir que un producto pertenece una categoria
	
	public function categories()
	{
		return $this->belongsTo('Category');
	}
}
