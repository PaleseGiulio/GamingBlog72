<x-layout>
    <x-navbar>

    </x-navbar>
    <x-header>
        <h2 class="display-1 text-white">Recensisci un Videogioco</h2>
    </x-header>
    <div class="container-fluid py-5 bgGames">
        <div class="row justify-content-center">
            <div class="col12 col-md-6">
                <form action="{{route('game.store')}}" method="POST" enctype="multipart/form-data" class="p-5 bg-form shadow">
                    @if($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach($errors->all() as $error)
                            <li>
                                {{$error}}
                            </li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                    @csrf
                    <div class="mb-3">
                        <label for="title" class="form-label">Titolo Videogioco</label>
                        <input type="text" name="title" value="{{old('title')}}" class="form-control" id="title">
                    </div>
                    <div class="mb-3">
                        <label for="producer" class="form-label">Produttore</label>
                        <input type="text" name="producer" value="{{old('producer')}}" class="form-control" id="producer">
                    </div>
                    <div class="mb-3">
                        <label for="cover" class="form-label">Copertina</label>
                        <input type="file" name="cover" class="form-control" id="cover">
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Piccola descrizione</label>
                        <textarea name="description" id="description" cols="30" rows="7" class="form-control">{{old('description')}}</textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Inserisci il tuo Videogame</button>
                </form>
                
            </div>
        </div>
    </div>

    <x-footer>
    </x-footer>
</x-layout>