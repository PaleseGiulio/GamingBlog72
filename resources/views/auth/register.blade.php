<x-layout>
    <x-navbar>

    </x-navbar>
    <x-header>
        <h2 class="display-1 text-white">Registrati</h2>
    </x-header>
    <div class="container ">
        <div class="row justify-content-center py-5">
            <div class="col-12 col-md-6">
                <form class="p-5 shadow" method="POST" action="{{route('register')}}">
                    
                    @if ($errors ->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors ->all() as $error)
                                <li>{{$error}}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    @csrf
                    <div class="mb-3">
                        <input type="text" name="name" placeholder="Il tuo nome e cognome" class="form-control" id="name" value="{{old('name')}}">
                    </div>
                    <div class="mb-3">
                        <input type="email" name="email" placeholder="Il tuo indirizzo e-mail" class="form-control" id="email" value="{{old('email')}}">
                    </div>
                    <div class="mb-3">
                        <input type="password" name="password" placeholder="La tua password" class="form-control" id="password">
                    </div>
                    <div class="mb-3">
                        <input type="password" name="password_confirmation" placeholder="Conferma password" class="form-control" id="password_confirmation">
                    </div>
                    <div class="d-flex justify-content-center">
                        <button type="submit" class="btn btn-primary mb-3">Register</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <x-footer>
    </x-footer>
</x-layout>
