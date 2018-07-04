<?php
/*Cart::add (array(['id'=>$id,'name'=>$addCart->name,'qty'=>1,'price'=>$addCart->price,'image'=>['img'=>$addCart->image]]));*/
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\product;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\DB;use App\Http\Controllers\Controller;
class CartController extends Controller
{
        public function add($id)
        {
            $addCart    = product::find($id);
            
            $content    =  Cart::add(['id'=>$id,'name'=>$addCart->name,'qty'=>1,'price'=>$addCart->price,'image'=>$addCart->image]);
            
           dd($content);

        //    Cart::get($rowId);

        //    Cart::store($id);

        //     Cart::instance('wishlist')->store($id);

            return view ('cart', compact('content'));
        }
        public function show()
        {
            $content = Cart::content();
            dd($content);
        }
}
