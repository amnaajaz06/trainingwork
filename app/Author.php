<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Book;
class Author extends Model
{
    protected $fillable=['id','name','address','phoneno','created_at','updated_at'];
    //
    public function book()
    {
    	return $this->hasOne('App\Book','foreign_key');
    }
}
