<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = ['name','author','release_date','description','category_id','price','book_copy','purchase_number','book_image'];
    protected $table ='books';
   
    protected $primaryKey = 'id';
    public function users(){
        return $this->belongsToMany(User::class,'client_book','book_id','client_id','id','id');
     }
    public function category(){
        return  $this->belongsTo(Category::class,'category_id','id')->withDefault([
            'name'=>'default category'
        ]);
    }
}
