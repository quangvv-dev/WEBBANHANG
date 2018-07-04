<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class user extends Model
{
    protected $table  =   'user';
    protected $fillable   =   ['pass','id_role','active'];
    public $timestamps  =   false;
    public function CN1vs1()
    {
        return $this->belongsTo('App\Models\roles','id_role','id');
    }
}
