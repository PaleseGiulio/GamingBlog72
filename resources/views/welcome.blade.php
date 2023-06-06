<x-layout>
    @if(session('userdeleted'))
        <div class="alert alert-success text-center mb-0">
            {{session('userdeleted')}}
        </div>
    @endif
    @if(session('newslettersMail'))
        <div class="alert alert-success text-center mb-0">
            {{session('newslettersMail')}}
        </div>
    @endif
    <x-navbar>
    </x-navbar>
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="/storage/media/cod.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="/storage/media/assassins.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="/storage/media/batman.jpg" class="d-block w-100" alt="...">
            </div>
        </div>
        <section class="bg-dark border-bottom">
            <div class="container bg-dark">
                <div class="row justify-content-between">
                    <div class="col-12 col-md-4 py-5">
                        <div class="card ">
                            <img width="200" src="/storage/media/fms.jpg" class="card-img-top" alt="...">
                            <div class="card-body bg-dark">
                                <h5 class="card-title text-white">Ultime uscite</h5>
                                <p class="card-text text-white">Some quick example text to build on the card title and make up the
                                    bulk of the card's content.</p>
                                <a href="#" class="btn btn-outline-light">Go somewhere</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-7 py-5 d-flex align-items-center border-bottom">
                        <p class="text-white text-center decsription-font">Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                            Illo aspernatur consequatur assumenda placeat, nisi saepe doloribus delectus culpa.
                            Laudantium tempore illum, quae omnis sint vel nulla maiores quisquam animi iste!</p>>
                    </div>
                </div>
            </div>
            <div class="container bg-dark">
                <div class="row justify-content-between">
                    <div class="col-12 col-md-4 py-5">
                        <div class="card">
                            <img  width="200" src="/storage/media/spiderman.jpg" class="card-img-top" alt="...">
                            <div class="card-body bg-dark">
                                <h5 class="card-title text-white">Top 10</h5>
                                <p class="card-text text-white">Some quick example text to build on the card title and make up the
                                    bulk of the card's content.</p>
                                <a href="#" class="btn btn-outline-light">Go somewhere</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-7 py-5 d-flex align-items-center border-bottom">
                        <p class="text-white text-center decsription-font">Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis eligendi 
                            culpa nesciunt deserunt provident
                            molestiae consequuntur blanditiis officia numquam sint omnis,
                            eum non fugiat illum nobis consequatur adipisci! Sit, officiis?</p>>
                    </div>
                </div>
            </div>
            <div class="container bg-dark">
                <div class="row justify-content-between">
                    <div class="col-12 col-md-4 py-5">
                        <div class="card">
                            <img  width="200" src="/storage/media/god-of-war.webp" class="card-img-top" alt="...">
                            <div class="card-body bg-dark">
                                <h5 class="card-title text-white">Migliori di sempre</h5>
                                <p class="card-text text-white">Some quick example text to build on the card title and make up the
                                    bulk of the card's content.</p>
                                <a href="#" class="btn btn-outline-light">Go somewhere</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-7 py-5 d-flex align-items-center">
                        <p class="text-white text-center decsription-font">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Veniam ullam cumque 
                            magni molestias in voluptatem tenetur! Iusto quos, aliquam nobis, cum animi ad expedita saepe est adipisci sint 
                            aspernatur nulla.!</p>>
                    </div>
                </div>
            </div>
        </section>
        <x-newsletter>
        </x-newsletter>
        <x-footer>
        </x-footer>
</x-layout>
