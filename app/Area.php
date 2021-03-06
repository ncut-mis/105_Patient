<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    //
    protected $table ='areas';
    protected $fillable=[
        'area'
    ];

    public function clinic()
    {
        return $this->hasMany(Clinic::class);
    }
}
