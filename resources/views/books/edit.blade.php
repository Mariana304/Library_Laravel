@extends('layouts.plantilla')


@section('title', 'edicion libros')


@section('contect')

        <h1>Actualizar tarea</h1>


        <form action=" {{ route('books.update', $book , $author) }}" method="POST" enctype="multipart/form-data" >

            @csrf
            @method('patch')


            <label for="title">Libro</label><br>


            <input type="text" name="title" value="{{ old('title', $book->title) }}"><br><br>


            <label for="summary">Descripción</label><br>

            <textarea name="summary">{{ old('summary', $book->summary) }}</textarea><br><br>
            </div>



            <select name="author_id">

                @foreach ($author as $author)
                    <option value="{{ $author->id }}">{{ old('author', $author->name) }}</option>
                @endforeach

            </select><br><br>



            <label for="pages">Numero de paginas</label>
            <input type="number" name="pages" value="{{ old('pages', $book->pages) }}"><br><br>

            <label for="price">Precio</label>
            <input type="number" name="price" value="{{ old('price', $book->price) }}"><br><br>

            <label for="path_cover">Portada del libro</label>
            <input type="file" name="path_cover" value="{{ old('path_cover' , $book->path_cover) }}"><br><br>



            <button type="submit">Actualizar</button>


        </form>




    @endsection
