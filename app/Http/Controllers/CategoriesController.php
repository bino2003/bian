<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Book;
use App\Models\Category;

use App\Models\User;
class CategoriesController extends Controller
{
    public function index(){
    $Categories = Category::paginate(7);
    return view('Categories.index',[
     'categories' => $Categories
    ]);
 }
 public function create(){
     return view('Categories.create',[
      

     ]);
  }
  public function store(Request $request){
    $request->validate([
        'name' => 'required|string',
    ]);
    
    $data =$request->all();
    $data['user_id']=2;
    $category =Category::create($data);
    return redirect()->back()->with([
        'message_flash'=> 'تم اضافة التصنيف بنجاح'
    ]);
}
  public function delete($id){
     $category= Category::findOrFail($id);
     $category->delete();
     return redirect()->back()->with([
         'message_flash' => 'تمت حذف التصنيف بنجاح'
     ]);
  }
  public function edit($id){
     $categoriesedit = Category::findOrFail($id);

  
       return view('Categories.edit',[
         'category' => $categoriesedit,
          

       ]);
    }
    public function update(Request $request, $id){
     
     $request->validate([
         'name' => 'required|String|max:255',

     ]);
     $data= $request->all();
    

     $category = Category::findOrFail($id);
     $category->update($data);
     

    
   
     return redirect()->back()->with([
         'message_flash' => 'تمت تعديل التصنيف بنجاح'
     ]);
  }
}
