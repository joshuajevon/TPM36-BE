<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Category;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function welcome(){
        $books = Book::all();
        return view('welcome', compact('books'));
        // compact -> passing data
    }

    public function store(Request $request){
        Book::create([
            // nama atribut => $request->nama input
            'title' => $request->title,
            'author' => $request->author,
            'publication_date' => $request->publication_date,
            'stock' => $request->stock,
            'category_id' => $request->category_name
        ]);

        return redirect(route('welcome'));
    }
    // -> mengakses sebuah atribut
    // => db

    public function createBook(){
        $categories = Category::all();
        return view('createBook', compact('categories'));
    }
}
