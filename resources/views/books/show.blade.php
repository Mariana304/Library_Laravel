@extends('layouts.plantilla')


@section('title', ' libros ')


@section('contect')

    <p class=" p-24  text-3xl sm:text-6xl italic font-bold text-center">{{ $book->title }}</p>

    <div class="container h-auto  w-auto   mx-auto ">

        <div class=" bg-orange-50 shadow-md mb-16 rounded-lg  w-96 sm:w-3/4 xl:w-2/4 2xl:w-3/5 flex flex-col  mx-auto ">


            <div class="grid justify-items-end ">

                <a class="mx-6 my-5 w-16 " href="{{ route('books.edit', $book) }}">

                    <img class="w-16" src="{{ asset('storage/images/editar.png') }}" alt="">

                </a>

            </div>



            <div class="grid grid-rows-3 grid-flow-col  mx-16 gap-4 ">

                <div class="row-span-4   border  my-auto">
                    <img class="h-full W-full rounded-lg object-cover sm:h-48  md:w-52 mx-auto md:h-auto "
                        src="/storage/{{ $book->path_cover }}">
                </div>
                <div class="col-span-2  ">

                </div>
                <div class="row-span-2 col-span-2 ">

                    <p class="text-2xl "><strong>TITULO:
                            {{ $book->title }}</strong></p><br>
                    <p class="text-xl mb-3">{{ $book->summary }}</p>

                    <span class="font-bold ">Nombre del autor:</span> {{ $book->author->name }}</p>

                    Número de páginas: {{ $book->pages }} <br>

                    Formato: {{ $book->format == 1 ? 'Impreso' : 'Ebook' }} <br>

                    Precio: {{ $book->price }}    


                    </p><br><br>


                    <br><br>
                </div>


            </div>

            <div class="grid justify-items-end ">

                <form action="{{ route('books.destroy', $book) }}" method="POST">
                    @csrf

                    @method('delete')



                    <p
                        class=" flex flex-col italic mt-4 bg-red-600 h-10  text-xl text-white mb-8  py-1 rounded-lg text-center mx-7 w-28 ">

                        <button type="submit">Eliminar</button>
                    </p>

                </form>

            </div>

        </div>

    @endsection
