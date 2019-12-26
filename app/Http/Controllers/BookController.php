<?php

namespace App\Http\Controllers;

use App\Book;
use App\Author;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $book = Book::all()->where('id',$id);
        return response()->json(['book' => $book], 200);
    }
 /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $book = Book::create([
            'book_title' => $request->book_title,
            'book_description' => $request->book_description,
            'book_author' => $request->book_author,
        ]);
        $author = $book->author()->create([
            'name' => $request->name,
            'address' => $request->address,
            'phoneno' => $request->phoneno,
            'id' => $request->id,
        ]);
        return response()->json(['message' => 'Book Added Successfully'], 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
      /*  $data['book']=DB::table('books')
        ->join('authors', 'authors.name', '=', 'books.book_author')
        ->select('books.*', 'authors.name as book_author')
          ->get();
        if(count($data)>0)
         {
           return response()->json(['book' => $data], 200);
          }
          else
          {
           return response()->json(['message' => ' ABC'], 200);
          }*/

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function edit(Book $book)
    {
        //
    }
        /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Book $book)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function destroy(Book $book)
    {
        //
    }
}