<?php

class WebRequest extends Eloquent {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'requests';

	protected $fillable = ['payload','server'];

}
