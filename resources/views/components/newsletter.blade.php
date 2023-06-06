<section class="container-fluid bg-smoke py-5">
    <div class="row justify-content-around">
        <div class="col-12 col-md-4">
            <form method="POST" action="{{route('newsletters')}}" class=" p-5 bg-smoke shadow">
                @csrf
                <!-- 2 column grid layout with text inputs for the first and last names -->
                <div class="row mb-4">
                    <div class="col">
                        <div class="form-outline">
                            <input  type="text" name="name" id="name" class="bg-smoke form-control" />
                            <label class="text-white form-label" for="name">Nome e cognome</label>
                        </div>
                    </div>
                </div>

                <!-- Email input -->
                <div class="form-outline mb-4">
                    <input type="email" name="email" id="email" class="bg-smoke form-control" />
                    <label class="text-white form-label" for="email">Indirizzo E-mail</label>
                </div>

                <!-- Checkbox -->
                <div class="form-check d-flex justify-content-center mb-4">
                    <input class="form-check-input me-2" type="checkbox" value="" id="check" checked />
                    <label class="text-white form-check-label" for="check">
                        Iscriviti alla nostra newsletter
                    </label>
                </div>

                <!-- Submit button -->
                <button type="submit" class="tx-white btn btn-outline-light btn-block mb-4">Sign up</button>

                <!-- Register buttons -->
                <div class="text-center text-white">
                    <p>Iscriviti con:</p>
                    <button type="button" class="btn btn-secondary btn-floating mx-1">
                        <i class="fab fa-facebook-f"></i>
                    </button>

                    <button type="button" class="btn btn-secondary btn-floating mx-1">
                        <i class="fab fa-google"></i>
                    </button>

                    <button type="button" class="btn btn-secondary btn-floating mx-1">
                        <i class="fab fa-twitter"></i>
                    </button>

                    <button type="button" class="btn btn-secondary btn-floating mx-1">
                        <i class="fab fa-github"></i>
                    </button>
                </div>
            </form>
        </div>
        <div class="col-12 col-md-6 nl-font d-flex align-items-center">
            <p class="text-enter text-white display-5 py-5">Iscriviti alla nostra NewsLetters per rimanere sempre aggiornato sulle ultime novità...!</p>
        </div>
    </div>
</section>
