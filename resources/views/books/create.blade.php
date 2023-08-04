@extends('layouts.plantilla')


@section('title', 'Nuevo Libro')


@section('contect')




    <div
        class="container bg-orange-50  mb-16 rounded-lg   w-96 sm:w-3/4 xl:w-2/4 2xl:w-2/5 flex flex-col text-center mx-auto  mt-10">


        <div class="mt-12 uppercase text-2xl italic font-semibold">
            <h1>Nuevo libro</h1>
        </div>

        <form action="{{ route('books.store') }}" method="POST" enctype="multipart/form-data">

            @csrf


            <div class="text-center font-bo mx-auto w-auto text-xl  mb-9 mt-16 ">

                <div>
                    <label for="title">Titulo</label><br>
                </div>

                <input type="text" class="rounded-md border w-96 " name="title" value="{{ old('title') }}"><br>

                @error('title')
                    <small>-{{ $message }}</small>
                @enderror
            </div>





            <div class=" text-center mx-auto w-auto text-xl  mb-5  ">

                <div class="mb-3"><label for="summary">Descripción</label></div>

                <textarea name="summary" class="border rounded-md w-96 h-36">{{ old('summary') }}</textarea><br>

                @error('summary')
                    <small>-{{ $message }}</small>
                @enderror

            </div>





            <div class="px-6 py-3 rounded-lg ">
                <label for="author_id" class="text-xl">Autor</label>

                <select name="author_id">

                    <option class="text-center" selected disabled>Selecciona</option>

                    @foreach ($author as $author)
                        <option value="{{ $author->id }}">{{ $author->name }}</option>
                    @endforeach

                </select><br>
                @error('author_id')
                    <small>-{{ $message }}</small>
                @enderror

            </div>





            <div class="text-center font-bo mx-auto w-auto text-xl  mb-9 mt-16 ">

                <div>
                    <label for="pages">Numero de paginas</label><br>
                </div>

                <input type="text" class="rounded-md border w-96 " name="pages" value="{{ old('pages') }}"><br>

                @error('pages')
                    <small>-{{ $message }}</small>
                @enderror

            </div>






            <div class="text-center font-bo mx-auto w-auto text-xl  mb-9 mt-16 ">

                <div>
                    <label for="price">Precio</label><br>
                </div>

                <input class="rounded-md border w-96 " type="number" name="price" value="{{ old('price') }}"><br>
                @error('price')                
                    <small>-{{ $message }}</small>
                @enderror
            </div>





            <div class="text-center font-bo mx-auto w-auto text-xl  mb-9 mt-16 ">

                <input type="radio" name="format" value="1" {{ old('format') == 1 ? 'checked' : '' }}>
                <label for="format">Impreso</label>
            </div>

            <div>
                <input type="radio" name="format" value="2" {{ old('format') == 2 ? 'checked' : '' }}>
                <label for="format">E book</label>
            </div>


            @error('format')
                <br>
                <small>-{{ $message }}</small>
            @enderror
            <br>




            <div class="text-center font-bo mx-auto w-auto text-xl  mb-9 mt-16 ">

                <label for="path_cover">Portada del libro</label>
                <input type="file" name="path_cover" value="{{ old('path_cover') }}"><br><br>

                @error('path_cover')
                    <br>
                    <small>-{{ $message }}</small>
                @enderror
                <br>
            </div>

            <div class="px-6 py-3 rounded-lg  mb-7">

                <button class="border w-32 rounded-lg h-11 mx-4 bg-lime-600 text-white" type="submit">Agregar
                    libro</button>
            </div>





        </form>

    </div>



@endsection
