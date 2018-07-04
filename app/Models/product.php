<?php

namespace App\Models;
use App\Models\categoryproduct;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
   protected $table= 'product';
    protected $fillable=['name','description','image','price','id_category','active'];
    public $timestamps=false;
    public function CN1vs1()
    {
        return $this->belongsTo('App\Models\categoryproduct','id_category','id');
    }
}
