<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    //
    protected  $fillable = [

        'category_id',
        'photo_id',
        'title',
        'description',
    ];

    //Job has one user
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    //Job has one photo
    public function photo()
    {
        return $this->belongsTo('App\Photo');
    }

    //Job has one category
    public function category()
    {
        return $this->belongsTo('App\Category');
    }
}
