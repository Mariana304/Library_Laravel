@extends('layouts.plantilla')


@section('title', 'libros')





@section('contect')

    <h1>Hola desde la vista index</h1>







    <div class="container mx-auto mt-5 text-center rounded-lg  ">

        <header class="header bg-fixed h-72 sm:h-80  rounded-lg ">


            <p class=" p-28 sm:p-40  text-3xl sm:text-5xl italic font-bold text-center">Biblioteca</p>

        </header>

        <h1 class=" font-bold underline">Bienvenidos a la biblioteca</h1>


        <a href="{{ route('books.create') }}">Nuevo libro</a><br><br><br>

        <div class=" border  grid lg:grid-cols-2  2xl:grid-cols-3  bg-slate-100  mt-4 sm:px-1 sm:py-1  rounded-lg ">



            @foreach ($book as $book)
                <div
                    class="flex flex-col shadow-lg rounded-lg bg-white w-4/5 h-80 sm:h-80 md:h-60 mx-auto mb-12 mt-8 md:max-w-lg md:flex-row ">
                    <img class="h-48 w-full rounded-t-lg object-cover sm:h-48  md:w-48 md:h-auto md:rounded-none md:rounded-l-lg"
                        src="/storage/{{ $book->path_cover }}">


                    <div class="flex flex-col sm:h-80 justify-start p-6">

                        <h5 class="mb-2 text-lg   font-medium text-neutral-800">

                            <a href="{{ route('books.show', $book) }}"> * {{ $book->title }} </a>

                        </h5>

                        <p>

                            {{ Str::limit($book->summary, 30) }}
                        </p>

                        <p>

                            {{-- @foreach ($author as $author)
                                @if ($book->author_id = $author->id)
                                    {{ $author }}
                                @else
                                @endif
                            @endforeach --}}



                        </p>
                    </div>


                </div>
            @endforeach






        </div>

    </div>

@endsection
