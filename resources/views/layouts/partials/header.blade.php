<header>
    <h1>Menu</h1>
    <nav>
        <ul>
            <li><a href="{{route('home')}}" class="{{request()->routeIs('home')? 'active' : ''}}">Home</a>

            </li>

            <li><a href="{{route('books.index')}}" class="{{request()->routeIs('books.*')? 'active' : ''}}">Biblioteca</a>
                
            </li>

            
        </ul>
    </nav>
</header>  