<?php
class Person extends Eloquent
{
	public $timestamps = false;

	public function quotes() {

		return $this->has_many('Quote');
	}
}