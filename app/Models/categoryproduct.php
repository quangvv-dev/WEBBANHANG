<?php

namespace App\Models;
use App\Models\product;
use Illuminate\Database\Eloquent\Model;

class categoryproduct extends Model
{
    protected $table= 'product_category';
    protected $fillable =['name_category','active'];
    Public $timestamps=false;
    public function product()
    {
        return $this->hasMany(product::class,'id_category');
    }

    public function featureProduct() {
        return $this->hasMany(product::class,'id_category')->take(4);
    }
}
