<x-layout>
    <x-navbar>

    </x-navbar>
    <x-header>
        <h2 class="display-1 text-white">Recensisci una Console</h2>
    </x-header>
    <div class="container-fluid py-5 bgConsols">
        <div class="row justify-content-center">
            <div class="col-12 col-md-6">
                <form action="{{route('console.store')}}" method="POST" enctype="multipart/form-data" class="p-5 bg-form shadow">
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
                        <label for="name" class="form-label">Nome console</label>
                        <input type="text" name="name" value="{{old('name')}}" class="form-control" id="name">
                    </div>
                    <div class="mb-3">
                        <label for="brand" class="form-label">Brand</label>
                        <input type="text" name="brand" value="{{old('brand')}}" class="form-control" id="brand">
                    </div>
                    <div class="mb-3">
                        <label for="logo" class="form-label">Logo</label>
                        <input type="file" name="logo" class="form-control" id="logo">
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Piccola descrizione</label>
                        <textarea name="description" id="description" cols="30" rows="7" class="form-control">{{old('description')}}</textarea>
                    </div>
                    <div class="mb-e">
                        <label for="" class="form-label">Giochi disponibili<span class="text-danger small"></span></label>
                        @foreach($games as $game)
                            <input type="checkbox" class="form-check" id="{{$game->id}}" name="games[]" value="{{$game->id}}">
                            <label for="{{$game->id}}" class="form-lable">{{$game->title}}</label><br>
                        @endforeach
                    </div>
                    <button type="submit" class="btn btn-primary">Inserisci la tua Console</button>
                </form>
                
            </div>
        </div>
    </div>
<x-footer>
</x-footer>
</x-layout>
