<?php

namespace App\Http\Controllers;
use App\Models\Book;

class BooksController extends Controller
{
    
    public function index()
    {
        return book::all();
    }

    public function show($id)
    {

        try{
        $book = book::findOrFail($id);

        if($book){
            return $book;
        }
    }
        catch (\Throwable $th){
            return response(
                ['message' => 'Book not found'], 404
            );
        }


    }

}
