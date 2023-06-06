<x-layout>
    <x-navbar>

    </x-navbar>
    <x-header>
        <h2 class="display-1 text-white">Dettaglio Console</h2>
    </x-header>
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-6">
                <div class="card">
                    <img src="{{Storage::url($consol->logo)}}" class="card-img-top" alt="{{$consol->name}}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $consol->name }}</h5>
                        <p class="small fst-italic text-muted">{{ $consol->brand }}</p>
                        <p class="small fst-italic text-muted">{{ $consol->description }}</p>
                        <a class="btn btn-primary" href="{{route('console.index')}}">Torna indietro</a>
                        @if(count($consol->games))
                            <hr>
                            <h3>Giochi disponibili: </h3>
                            <ul>
                                @foreach($consol->games as $game)
                                    <li>{{$game->title}}, prodotto da {{$game->producer}}</li>
                                @endforeach
                            </ul>
                            <hr>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
    <x-footer>
    </x-footer>
</x-layout>