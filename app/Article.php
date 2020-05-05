<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    //
    protected $fillable = [
        'title', 'content', 'person_id', 'updated_at',
    ];
    public function author()
    {
        return $this->belongsTo('App\Person', 'person_id', 'id');
        
    }
}
