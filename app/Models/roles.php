<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class roles extends Model
{
    protected $table  =   'role_category';
    protected $fillable   =   ['name'];
    public $timestamps  =   false;
    public function CN1vsN()
    {
        return $this->hasMany( 'App\Models\user','id_role', 'id' );
    }
}
