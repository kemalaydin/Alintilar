<?php
class Type extends Eloquent
{
	public $timestamps = false;

	public function product() {

		return $this->has_many('Product');
	}
}