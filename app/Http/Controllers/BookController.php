<?php

namespace App\Http\Controllers;

use App\Http\Requests\SaveBookRequest;
use App\Models\Author;
use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BookController extends Controller
{
    public function index()

    {
        $author = Author::all();

        $book = Book::orderBy('id', 'desc')->paginate();
        return view('books.index', compact('book', 'author'));
    }


    public function create()
    {
        $author = Author::all();

        return view('books.create', compact('author'));
    }


    public function store(SaveBookRequest $request)
    {


       


        $book = new Book($request->validated());

        $book->path_cover = $request->file('path_cover')->store('images', 'public');

        $book->save();

        return redirect()->route('books.show', $book->id);
    }


    public function show(Book $book)
    {
        return view('books.show', compact('book'));
    }


    public function edit(Book $book)
    {
        $author = Author::all();


        return view('books.edit', compact('book', 'author'));
    }


    public function update(SaveBookRequest $request, Book $book)
    {

        if ($request->hasFile('path_cover')) {

            Storage::delete($book->path_cover);

            $book = $book->fill( $request->validated() );

            $book->path_cover = $request->file('path_cover')->store('images', 'public');

            $book->save();
            
        } else {

            $book->update(array_filter($request->validated()));
        }





        return redirect()->route('books.show', compact('book'));
    }


    public function destroy(Book $book)

    {
        Storage::delete($book->path_cover);

        $book->delete();

        return redirect()->route('books.index', compact('book'));
    }
}
