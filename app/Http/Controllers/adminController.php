<?php

namespace App\Http\Controllers;
use App\Models\product;
use Illuminate\Http\Request;

class adminController extends Controller
{
    public function addP()
    {
        return view('addProduct');
    }
    public function addSP(Request $request)
    {
        $sql = new product();
        $sql ->id= $request->get('txtID');
        $sql ->name= $request->get('txtName');
        $sql ->description= $request->get('txtDes');
        $sql ->price= $request->get('txtPrice');
        $sql ->id_category= $request->input('txtIDCategory');
        $sql ->active= $request->get('txtActive');
        if($request->hasFile ('txtImage'))
        {
            $file   =   $request->file('txtImages');
            $duoi = $file->getClientOriginalExtensions();
            if($duoi != 'jpg'&& $duoi != 'png' && $duoi != 'jpeg')
            {
                return redirect('/add');
            }
            $file_name = $file->getClientOriginalName();
            $image  =   str_random(4)."_".$file_name;
            while(file_exists("images".$image))
            {
                $image  =   str_random(4)."_".$file_name;
            }
            $file->move("images",$image);
            $sql->image = $file_name;
            /*return $image;*/

        }
        else{
            $sql->image = "";
        }
        $sql->save();    
        return redirect('/');
    }
    public function create()
    {
        $categories = product::pluck('image');
        return view('Upload', compact('categories'));
    }
    public function store(Request $request)
    {
            $this->validate($request, ['input_img' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',]);

            $image = new image();

            if ($request->hasFile('image')) {
                $image = $request->file('image');
                $name = str_slug($request->title).'.'.$image->getClientOriginalExtension();
                $destinationPath = public_path('/images');
                $imagePath = destinationPath. "/".  $name;
                $image->move($destinationPath, $name);
                $product->image = $name;
            }
            $$product->image = $request->get('image');
            $product->save();
            return back()->with('success', 'Your article has been added successfully. Please wait for the admin to approve.');
    }
    /*public function uploadFile(Request $request){
        return view('Upload');
    	// Thông báo khi xảy ra lỗi
        $messages = [
            'image' => 'Định dạng không cho phép',
            'max' => 'Kích thước file quá lớn',
        ];
        // Điều kiện cho phép upload
    	$this->validate($request, [
		    'file' => 'image|max:2028',
		], $messages);
        // Kiểm tra file hợp lệ
        if ($request->file($images)->isValid()){
            // Lấy tên file
            $file_name = $request->file($images)->getClientOriginalName();
            // Lưu file vào thư mục upload với tên là biến $filename
            $request->file($images)->move('/images',$file_name);
        }
    }*/
}
