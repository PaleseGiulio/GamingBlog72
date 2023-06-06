<div class="container-fluid index">
    <div class="row  justify-content-center">
        <div class="col-12">
            <nav class="navbar navbar-expand-lg navbar-dark bg-tr py-4">
                <div class="container-fluid">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mx-5 mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link mx-2 fs-4 tx-teal" aria-current="page" href="{{ route('welcome') }}">Home</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link fs-4 dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    Games
                                </a>
                                <ul class="dropdown-menu bg-tr" aria-labelledby="navbarDropdown">
                                    <li><a class="nav-link text-center" href="{{ route('gameCreate') }}">Recensisci un Videogioco</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="nav-link text-center" href="{{ route('gameIndex') }}">Lista Videogiochi</a></li>
                                </ul>
                            <li class="nav-item dropdown">
                                <a class="nav-link fs-4 dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    Consoles
                                </a>
                                <ul class="dropdown-menu bg-tr" aria-labelledby="navbarDropdown">
                                    <li><a class="nav-link text-center" href="{{ route('console.create') }}">Recensisci una Console</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="nav-link text-center" href="{{ route('console.index') }}">Lista delle Console</a></li>
                                </ul>
                            </li>
                            {{-- <li class="nav-item">
                                <a class="nav-link" href="{{ route('gameCreate') }}">Crea il tuo gioco</a>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('gameIndex') }}">Lista Videogiochi</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('console.create') }}">Crea la tua console</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('console.index') }}">Lista delle Console</a>
                            </li> --}}
                            @auth
                            <li class="nav-item dropdown absolutcustom text-end">
                                <a class="nav-link fs-4 dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        {{ Auth::User()->name }}
                                    </a>
                                    <ul class="dropdown-menu bg-tr text-end absolutcustom" aria-labelledby="navbarDropdown">
                                        <li><a class="nav-link text-center" href="{{ route('user.profile') }}">Profilo</a></li>
                                        <li>
                                            <hr class="dropdown-divider">
                                        </li>
                                        <li><a class="nav-link text-center" onclick="event.preventDefault(); document.querySelector('#form-logout').submit();" href="{{ route('login') }}">Logout</a></li>
                                        <form id="form-logout" method="POST" action="{{route('logout')}}" class="d-none">@csrf</form>
                                    </ul>
                                    @else
                                    <li class="nav-item dropdown absolutcustom text-end">
                                        <a class="nav-link fs-4 dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        Utente
                                    </a>
                                    <ul class="dropdown-menu bg-tr" aria-labelledby="navbarDropdown">
                                        <li><a class="nav-link text-center" href="{{ route('login') }}">Login</a></li>
                                        <li><a class="nav-link text-center" href="{{ route('register') }}">Register</a></li>
                                        <li>
                                            <hr class="dropdown-divider">
                                        </li>
                                        <li><a class="nav-link text-center" href="#">Something else here</a></li>
                                    </ul>
                                    @endauth
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
                <h1 class="fs-custom pb-2 bg-tr tx-smoke"><span class="tx-teal">G</span>amingBlog72</h1>
            </div>
        </div>
    </div>
    
    