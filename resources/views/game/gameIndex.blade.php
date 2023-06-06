<x-layout>
    <x-navbar>

    </x-navbar>
    <x-header>
        <h2 class="display-1 text-white">All Games</h2>
    </x-header>
    @if(session('gameCreated'))
        <div class="alert alert-success text-center">
            {{session('gameCreated')}}
        </div>
    @endif
    <div class="container my-5">
        <div class="row justify-content-center">
            @foreach ($games->sortByDesc('created_at') as $game)
            <div class="col-12 col-md-3">
                <div class="card">
                    <img src="{{Storage::url($game->cover)}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{ $game->title }}</h5>
                        <p class="small fst-italic text-muted">{{ $game->producer }}</p>
                        <p class="card-text">{{ $game->description }}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    <x-newsletter>
    </x-newsletter>
    <x-footer>
    </x-footer>
</x-layout>
