<div class=" bg-gray-800 h-auto  justify-items-center  py-4 ">

    <header>
        <nav>

            <div class="container  h-auto grid md:grid-cols-6  w-auto  p-4 mx-auto mt-3 ">



                <p class="  border border-amber-300 mx-3  italic h-auto py-1 rounded-lg bg-amber-300  w-24">
                    <a href="{{ route('books.index') }}" class="{{ request()->routeIs('home') ? 'active' : '' }}">

                        <img src="{{ asset('storage/images/home.avif') }}" class="w-12 h-9 mx-auto">

                    </a>
                </p>



                <p class=" flex flex-col italic  bg-lime-600 h-10 mt-4 md:mt-none  text-xl text-white   py-1 rounded-lg text-center mx-2 w-28 ">

                    <a href="{{ route('books.create') }}">

                        Nuevo libro
                </p>

                </a>




            </div>
        </nav>
    </header>

</div>
