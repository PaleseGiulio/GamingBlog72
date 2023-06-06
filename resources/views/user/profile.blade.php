<x-layout>
    <x-navbar>
    </x-navbar>
    <x-header>
        <h2 class="display-1 text-white">Benvenuto nel tuo profilo {{ Auth::User()->name }}</h2>
    </x-header>
    <div class="container">
        <div class="row">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">I tuoi dati</h5>
                    <p class="small fst-italic text-muted"> Il tuo nome :{{ Auth::user()->name }}</p>
                    <p class="small fst-italic text-muted">La tua E-mail: {{ Auth::user()->email }}</p>
                    <p class="small fst-italic text-muted">Iscritto il: {{ Auth::user()->created_at }}</p>
                    <button type="button" class="btn btn-danger mt-4" data-bs-toggle="modal" data-bs-target="#userdestroy">
                        Cancella iscrizione
                    </button>
                </div>
            </div>
        </div>
    </div>
    @if (session('consolCreated'))
        <div class="alert alert-success text-center">
            {{ session('consolCreated') }}
        </div>
    @endif
    @if (session('consoleupdate'))
        <div class="alert alert-success text-center">
            {{ session('consoleupdate') }}
        </div>
    @endif
    @if (session('consoldelete'))
        <div class="alert alert-success text-center">
            {{ session('consoldelete') }}
        </div>
    @endif
    {{-- @if (count($consols) > 0) --}}
    <div class="container my-5">
        <div class="row justify-content-center">
            @foreach (Auth::User()->consols->sortByDesc('created_at') as $consol)
                <div class="col-12 col-md-3">
                    <div class="card">
                        <p class="small">Creato da: {{ $consol->user_id ? $consol->user->name : 'Utente Guest' }}</p>
                        <img src="{{ Storage::url($consol->logo) }}" class="card-img-top" alt="{{ $consol->name }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $consol->name }}</h5>
                            <p class="small fst-italic text-muted">{{ $consol->brand }}</p>
                            <a class="btn btn-primary" href="{{ route('console.show', compact('consol')) }}">Maggiori
                                dettagli</a>
                            @if ($consol->user_id && ($consol->user->id = optional(Auth::user())->id))
                                <a class="btn btn-primary"
                                    href="{{ route('console.edit', compact('consol')) }}">Aggiorna</a>
                                <form method="POST" action="{{ route('console.destroy', compact('consol')) }}">
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
    {{-- @else --}}
    {{-- <div class="min-vh-100">
        <h2 class="text-center display-2 pt-5">Non sono ancora state create consol,torna più tardi!</h2>
    </div> --}}
    {{-- @endif --}}
    <x-footer>
    </x-footer>
    <div class="modal" tabindex="-1" id="userdestroy">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Sicuro di volerti cancellare?</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>l'operazione non è reversibile</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <form method="POST" action="{{ route('user.destroy')}}" class="d-inline">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-danger">Cancella iscrizione</button>
                    </form>                
                </div>
            </div>
        </div>
    </div>
</x-layout>
