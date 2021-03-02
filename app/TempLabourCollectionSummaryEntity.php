<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TempLabourCollectionSummaryEntity extends Model
{
    protected $table = 'tmp_labour_collection_summary';

    public function labour()
    {
        return $this->belongsTo('App\Person', "labour_id", "person_id");
    }

    public function field()
    {
        return $this->belongsTo('App\Field', "field_no", "field_id");
    }
}
