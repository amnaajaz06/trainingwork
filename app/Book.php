<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Book;

class Book extends Model
{
     protected $fillable=['id','book_title','book_description','book_author','created_at','updated_at'];
    //
    public function author()
    {
        return $this->hasOne('App\Author');
    }
}