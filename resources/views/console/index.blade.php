<x-layout>
    <x-navbar>
    </x-navbar>
    <x-header>
        <h2 class="display-1 text-white">All Consoles</h2>
    </x-header>
    @if(session('consolCreated'))
        <div class="alert alert-success text-center">
            {{session('consolCreated')}}
        </div>
    @endif
    @if(session('consoleupdate'))
        <div class="alert alert-success text-center">
            {{session('consoleupdate')}}
        </div>
    @endif
    @if(session('consoldelete'))
        <div class="alert alert-success text-center">
            {{session('consoldelete')}}
        </div>
    @endif
    @if(count($consols) > 0)
    <div class="container my-5">
        <div class="row justify-content-center">
            @foreach ($consols->sortByDesc('created_at') as $consol)
            <div class="col-12 col-md-3">
                <div class="card">
                    <p class="small">Creato da: {{$consol->user_id ? $consol->user->name : 'Utente Guest'}}</p>
                    <img src="{{Storage::url($consol->logo)}}" class="card-img-top" alt="{{$consol->name}}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $consol->name }}</h5>
                        <p class="small fst-italic text-muted">{{ $consol->brand }}</p>
                        <a class="btn btn-primary" href="{{route('console.show', compact('consol'))}}">Maggiori dettagli</a>
                        @if($consol->user_id && $consol->user->id=optional(Auth::user())->id)
                        <a class="btn btn-primary" href="{{route('console.edit', compact('consol'))}}">Aggiorna</a>
                        <form method="POST" action="{{route('console.destroy',compact('consol'))}}">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-danger mt-4">Cancella</button>
                        </form>
                        @endif
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    @else
    <div class="min-vh-100">
        <h2 class="text-center display-2 pt-5">Non sono ancora state create consol,torna più tardi!</h2>
    </div>
    @endif
    <x-newsletter>
    </x-newsletter>
    <x-footer>
    </x-footer>
</x-layout>