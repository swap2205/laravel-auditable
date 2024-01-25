<?php namespace Swap2205\Auditable;

use Illuminate\Database\Eloquent\Model;

class Observer {

	public function saving($model)
    {
        $a = new Auditable;
        $a->record($model);
    }

}