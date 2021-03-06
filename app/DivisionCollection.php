<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DivisionCollection extends Model
{
    protected $table = 'division_collections';
    protected $primaryKey = 'division_collection_id';

    public function division()
    {
        return $this->belongsTo('App\Division', 'division_id', 'division_id');
    }
}
