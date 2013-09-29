<?php

class Category extends Eloquent {
	protected $guarded = array();

	public static $rules = array();

	//Entonces... si un producto pertenece a una categoria, una categoria tiene muchos productos....

	public function products()
	{
		return $this->hasMany('Product');
	}
	
}
