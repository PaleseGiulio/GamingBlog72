<x-layout>
    <x-navbar>

    </x-navbar>
    <x-header>
        <h2 class="display-1 text-white">Accedi</h2>
    </x-header>
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col12 col-md-8">
                <form action="{{ route('login') }}" method="POST" enctype="multipart/form-data" class="p-5 shadow">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>
                                        {{ $error }}
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    @csrf
                    <div class="mb-3">
                        <input type="email" name="email" value="{{ old('email') }}" placeholder="E-mail"
                            class="form-control" id="email">
                    </div>
                    <div class="mb-3">
                        <input type="password" name="password" class="form-control" placeholder="Password" id="password">
                    </div>
                    <div class="col-12">
                        <div class="form-check mb-3">
                            <input name="remember" class="form-check-input" type="checkbox" id="remember">
                            <label class="form-check-label" for="remember">
                                Remember me
                            </label>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary mb-3">Login</button>
                </form>
                <p>Se non sei ancora registrato clicca <a href="{{route('register')}}">qui</a></p>

            </div>
        </div>
    </div>
    <x-footer>
    </x-footer>
</x-layout>
