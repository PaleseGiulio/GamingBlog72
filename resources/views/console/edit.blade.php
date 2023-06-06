<x-layout>
    <x-navbar>

    </x-navbar>
    <x-header>
        <h2 class="display-1 text-white">Aggiorna la tua console</h2>
    </x-header>
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col12 col-md-8">
                <form action="{{route('console.update',compact('consol'))}}" method="POST" enctype="multipart/form-data" class="p-5 shadow">
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
                    @method('put')
                    <div class="mb-3">
                        <label for="name" class="form-label">Nome console</label>
                        <input type="text" name="name" value="{{$consol->name}}" class="form-control" id="name">
                    </div>
                    <div class="mb-3">
                        <label for="brand" class="form-label">Brand</label>
                        <input type="text" name="brand" value="{{$consol->brand}}" class="form-control" id="brand">
                    </div>
                    <div class="mt-3 text-center d-flex flex-column align-items-center">
                        <label for="actual-logo" class="form-lable">Logo attuale</label>
                        <img width="200" src="{{Storage::url($consol->logo)}}" alt="....">
                    </div>
                    <div class="mb-3">
                        <label for="logo" class="form-label">Logo</label>
                        <input type="file" name="logo" class="form-control" id="logo">
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Piccola descrizione</label>
                        <textarea name="description" id="description" cols="30" rows="7" class="form-control">{{$consol->description}}</textarea>
                    </div>
                    @if(count($consol->games))
                            <hr>
                            <h3>Giochi attualmente inseriti: </h3>
                            <ul>
                                @foreach($consol->games as $game)
                                    <li>{{$game->title}}, Prodotto da: {{$game->producer}} <a href="{{route('console.detach',compact('consol','game'))}}" class=btn btn-button><i class="ms-3 fs-3 fa-brands fa-xbox"></i></a></li>
                                    
                                    {{-- <span title="cancella relazione"><i class="ms-3 fs-3 fa-brands fa-xbox"></i></span> --}}
                                @endforeach
                            </ul>
                        @endif
                        <hr>
                        @if(session('gamedetached'))
                            <div class="alert alert-success">
                                {{session('gamedetached')}}
                            </div>
                        @endif
                    @foreach($games->diff($consol->games) as $game)
                        <h4>Giochi disponibili</h4>
                        <input type="checkbox" class="form-check" id="{{$game->id}}" name="games[]" value="{{$game->id}}">
                        <label for="{{$game->id}}" class="form-lable">{{$game->title}}</label><br>
                    @endforeach
                    <hr>
                    <button type="submit" class="btn btn-primary">Aggiorna</button>
                </form>
                
            </div>
        </div>
    </div>
<x-footer>
</x-footer>
</x-layout>
