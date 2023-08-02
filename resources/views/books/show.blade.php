@extends('layouts.plantilla')


@section('title', ' libros ')


@section('contect')

    <h1> {{ $book->title }} </h1>



    <a href="{{ route('books.edit', $book  ) }}">Editar libro</a>
    <p><strong>nombre:
            {{ $book->title }}</strong></p><br><br>



    <p>{{ $book->summary }}</p><br><br>

    <p>{{ $book->pages }}</p><br><br>




    <form action="{{ route('books.destroy', $book) }}" method="POST">
        @csrf

        @method('delete')

        <button type="submit">Eliminar</button>

    </form>

@endsection
