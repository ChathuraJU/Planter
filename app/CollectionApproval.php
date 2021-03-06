<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CollectionApproval extends Model
{
    protected $table = 'collection_approvals';

    public function approved_user()
    {
        return $this->belongsTo('App\User', 'user_id', 'id');
    }

    public function division_collections()
    {
        return $this->hasMany('App\DivisionCollection', 'division_collection_main_id', 'division_collection_main_id');
    }
}
