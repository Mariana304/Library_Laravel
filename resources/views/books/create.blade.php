@extends('layouts.plantilla')


@section('title', 'Nuevo Libro')


@section('contect')




    <div class="container bg-slate-100 shadow-lg  rounded-lg   w-96 sm:w-3/4 xl:w-2/4 2xl:w-2/5 flex flex-col text-center mx-auto  mt-10">


        <div class="mt-12 uppercase text-2xl italic font-semibold">
            <h1>Nuevo libro</h1>
        </div>

        <form action="{{ route('books.store') }}" method="POST" enctype="multipart/form-data">

            @csrf


            <div class="text-center font-bo mx-auto w-auto text-xl  mb-9 mt-16 ">

                <div>
                    <label for="title">Titulo</label><br>
                </div>

                <input type="text" class="rounded-md border w-96 " name="title" value="{{ old('title') }}">
            </div>


            <div class=" text-center mx-auto w-auto text-xl  mb-5  ">

                <div class="mb-3"><label for="">Descripción</label></div>

                <textarea name="summary" class="border rounded-md w-96 h-36" value="{{ old('summary') }}"></textarea>
            </div>



            <div class="px-6 py-3 rounded-lg ">
                <label for="author_id" class="text-xl">Autor</label>

                <select name="author_id">

                    @foreach ($author as $author)
                        <option value="{{ $author->id }}">{{ $author->name }}</option>
                    @endforeach

                </select><br><br>
            </div>



            <div class="text-center font-bo mx-auto w-auto text-xl  mb-9 mt-16 ">

                <div>
                    <label for="pages">Numero de paginas</label><br>
                </div>

                <input type="text" class="rounded-md border w-96 " name="pages" value="{{ old('pages') }}">
            </div>


            <div class="text-center font-bo mx-auto w-auto text-xl  mb-9 mt-16 ">

                <div>
                    <label for="price">Precio</label><br>
                </div>

                <input class="rounded-md border w-96 " type="number" name="price" value="{{ old('price') }}">
            </div>



            <div class="text-center font-bo mx-auto w-auto text-xl  mb-9 mt-16 ">

                <input type="radio" name="format" value="{{ old('format') }} 1" checked>
                <label for="2">Impreso</label>
            </div>

            <div>
                <input type="radio" name="format" value="2">
                <label for="format">E book</label>
            </div><br><br>
   



    <div class="text-center font-bo mx-auto w-auto text-xl  mb-9 mt-16 ">

        <label for="path_cover">Portada del libro</label>
        <input type="file" name="path_cover" value="{{ old('path_cover') }}"><br><br>

    </div>



    <div class="px-6 py-3 rounded-lg  mb-7">

        <button class="border w-32 rounded-lg h-11 mx-4 bg-lime-600 text-white" type="submit">Agregar
            libro</button>
    </div>



    

    </form>

</div>



@endsection
