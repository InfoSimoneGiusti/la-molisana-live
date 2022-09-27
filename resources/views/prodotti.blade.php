@extends('layout.app')

@section('page-title', 'Pagina dei prodotti!')

@section('content')
    <section class="prodotti">
        <h1>Lunga</h1>

        <div class="container">
            @foreach ($lunga as $formato)
                <div class="card">
                    <img src="{{$formato['src']}}" alt="{{$formato['titolo']}}">
                    <h3>{{ $formato['titolo'] }}</h3>
                </div>
            @endforeach
        </div>


        <h1>Corta</h1>

        <div class="container">
            @foreach ($corta as $formato)
                <div class="card">
                    <img src="{{$formato['src']}}" alt="{{$formato['titolo']}}">
                    <h3>{{ $formato['titolo'] }}</h3>
                </div>
            @endforeach
        </div>


        <h1>Cortissima</h1>

        <div class="container">
            @foreach ($cortissima as $formato)
                <div class="card">
                    <img src="{{$formato['src']}}" alt="{{$formato['titolo']}}">
                    <h3>{{ $formato['titolo'] }}</h3>
                </div>
            @endforeach
        </div>
    </section>
@endsection
