<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Field extends Model
{
    protected $primaryKey = 'field_id';

    public function division()
    {
        return $this->belongsTo('App\Division', 'division_id', 'division_id');
    }
}
