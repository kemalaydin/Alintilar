<?php
class Product extends Eloquent
{

    public $timestamps = false;

    public function writer() {

    	return $this->hasMany('Quote');
    }

    public function type() {
    	
    	return $this->belongsTo('Type');
    }


}
