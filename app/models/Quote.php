<?php
class Quote extends Eloquent
{

    //protected $table = 'users';
    //public $timestamps = false;

    public function person() {

    	return $this->belongsTo('Person');
    }
    public function product() {

    	return $this->belongsTo('Product');
    }


}
