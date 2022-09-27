<header>
    <div class='container'>
        <div class="logo">
            <img src="{{asset('images/logo.png')}}" alt="Logo Molisana">
        </div>
        <nav class='main-nav'>
            <ul>
                <li>
                    <a class="{{Request::route()->getName() == 'home'?'active':''}}" href="{{route('home')}}">Home</a>
                </li>
                <li>
                    <a class="{{(Request::route()->getName() == 'prodotti' || Request::route()->getName() == 'dettaglio-prodotto' )?'active':''}}"  href="{{route('prodotti')}}">Prodotti</a>
                </li>
                <li>
                    <a class="{{Request::route()->getName() == 'news'?'active':''}}"  href="{{route('news')}}">News</a>
                </li>
            </ul>
        </nav>
    </div>
</header>
