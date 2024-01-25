<?php namespace Swap2205\Auditable;

use Illuminate\Database\Eloquent\Model;

class Change extends Model {

	/**
	 * The table associated with the model.
	 * 
	 * @var string
	 */
	protected $table = 'auditable_changes';

	/**
	 * Gets the changes Changeset
	 * @return Swap2205\Auditable\Changeset
	 */
	public function changeset()
	{
		return $this->hasOne('Swap2205\Auditable\Changeset');
	}

}