<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Book;
use App\Models\Category;

use App\Models\User;

class BooksController extends Controller
{
    public function index(){
       
        $Books = Book::paginate(7);
        return view('Book.index',[
         'books' => $Books
        ]);
     }
   
     public function getlimitbookandgetMostBoughtbook(){
        $mostBoughtBooks = Book::orderBy('purchase_number', 'desc')->take(4)->get();

        $latestBooks = Book::latest()->take(4)->get();
        return view('Client.Home',[
            'latestBooks' => $latestBooks,
            'mostBoughtBooks' => $mostBoughtBooks
           ]);

     }
     public function create(){
       $categories=category::all();
    
         return view('Book.create',[
             'category'=>$categories,
            
 
 
         ]);
      }
      public function store(Request $request){
    $request->validate([
             'name' => 'required|String|max:255',
 'author' => 'required|String|max:255',
 'images' => 'nullable|image',
 'book_copy' => 'nullable',
 'description'=> 'required|String|max:255',
 'category_id' => 'required|int|exists:categories,id',
 'price'=>'required|int',
 'purchase_number'=>'required|int',
         ]);
         $data= $request->all();
        
         if($request->hasFile('image')){
             $file = $request->file('image');
             $data['book_image'] = $file->store('images','public');
         }
         
         if($request->hasFile('book_copy')){
            $file = $request->file('book_copy');
            $data['book_copy'] = $file->store('uploads');
        }
      
        //return $data;
         $book= Book::create($data);
        
         
 
        
       
         return redirect()->back()->with([
             'message_flash' => 'تمت اضافة الكتاب بنجاح'
         ]);
      }
      public function delete($id){
         $book= Book::findOrFail($id);
         $book->delete();
         return redirect()->back()->with([
             'message_flash' => 'تمت حذف الكتاب بنجاح'
         ]);
      }
      public function edit($id){
         $bookedit = Book::findOrFail($id);
 
         $categories=Category::all();
        
           return view('Book.update',[
             'book' => $bookedit,
               'category'=>$categories,
               
   
   
           ]);
        }
        public function update(Request $request, $id){
         
            $request->validate([
                'name' => 'required|String|max:255',
    'author' => 'required|String|max:255',
    'images' => 'nullable|image',
    'book_copy' => 'nullable',
    'description'=> 'required|String|max:255',
    'category_id' => 'required|int|exists:categories,id',
    'price'=>'required|int',
    'purchase_number'=>'required|int',
            ]);
         $data= $request->all();
        
         if($request->hasFile('image')){
            $file = $request->file('image');
            $data['book_image'] = $file->store('images','public');
        }
        
        if($request->hasFile('book_copy')){
           $file = $request->file('book_copy');
           $data['book_copy'] = $file->store('uploads','public');
       }
         $book = Book::findOrFail($id);
         $book->update($data);
 
 
        
       
         return redirect()->back()->with([
             'message_flash' => 'تمت تعديل الكتاب بنجاح'
         ]);
      }
}
