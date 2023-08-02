@extends('layouts.plantilla')


@section('title', 'libros')

    <style>
        .header{
            background-image: url({{ asset('storage/images/bg-library.png') }})
        }
    </style>



@section('contect')

    <h1>Hola desde la vista index</h1>







    <div class="container mx-auto mt-5 text-center rounded-lg  ">

        <header class="header bg-fixed h-72 sm:h-80  rounded-lg border ">

          
            <p class=" p-28 sm:p-40 text-white text-3xl sm:text-5xl italic font-bold text-center">Biblioteca</p>

        </header>

        <div class="grid justify-items-end py-2 mt-10  ">
            <div class=" mb-4 rounded-lg bg-lime-600 h-10  text-xl text-white  ">

                <a href="{{ route('books.create') }}">

                    <p class=" flex flex-col italic  h-9 py-1 rounded-lg text-center mx-2 w-28 ">Nuevo libro</p>

                </a>

            </div>
            
        </div>

        <div class=" border  grid lg:grid-cols-2  2xl:grid-cols-3  bg-slate-100  mt-4 sm:px-1 sm:py-1  rounded-lg ">



            @foreach ($book as $book)
                <div
                    class="flex flex-col overflow-hidden shadow-lg text-overflow rounded-lg bg-white w-4/5 h-80 sm:h-80 md:h-60 mx-auto mb-12 mt-8 md:max-w-lg md:flex-row ">
                    <img class="h-48 w-full rounded-t-lg object-cover sm:h-48  md:w-48 md:h-auto md:rounded-none md:rounded-l-lg"
                        src="/storage/{{ $book->path_cover }}">


                    <div class="flex flex-col sm:h-80 justify-start p-6">

                        <h5 class="mb-2 text-sm sm:text-lg font-medium text-neutral-800">

                            <a href="{{ route('books.show', $book) }}"> * {{ $book->title }} </a>

                        </h5>

                        <p class="">

                            {{ Str::limit($book->summary, 50) }}
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
