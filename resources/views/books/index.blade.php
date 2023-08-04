@extends('layouts.plantilla')


@section('title', 'libros')

<style>
    .header {
        background-image: url({{ asset('storage/images/bg-library.avif') }});
        filter: brightness(90%);
    }
</style>



@section('contect')






    <header class="header  bg-fixed h-72 sm:h-1/2 mb-24 ">

        <p class=" sm:p-40 brightness-none text-white text-3xl sm:text-7xl italic font-bold text-center">Biblioteca</p>

    </header>


    <div class="container mx-auto mt-5 text-center rounded-lg  ">



        <div class=" grid lg:grid-cols-2  mb-16   2xl:grid-cols-3  bg-orange-50  mt-4 sm:px-1 sm:py-1  rounded-lg ">



            @foreach ($book as $book)
                <div
                    class="flex flex-col overflow-hidden shadow-lg text-overflow rounded-lg bg-white w-4/5 h-80 sm:h-80 md:h-60 mx-auto mb-12 mt-8 md:max-w-lg md:flex-row ">
                    <img class="h-48 w-full rounded-t-lg object-cover sm:h-48  md:w-48 md:h-auto md:rounded-none md:rounded-l-lg"
                        src="/storage/{{ $book->path_cover }}">


                    <div class="flex flex-col sm:h-80 justify-start p-6">

                        <h5 class="mb-2 text-sm sm:text-lg font-medium text-neutral-800">

                            <a href="{{ route('books.show', $book) }}">{{ $book->title }} </a>

                        </h5>


                        <p class="mb-5">

                            {{ Str::limit($book->summary, 50) }}
                        </p>                       
                        <p>
                            {{ $book->author->name }}
                        </p>
                    </div>
                </div>
            @endforeach
        </div>

    </div>

@endsection
