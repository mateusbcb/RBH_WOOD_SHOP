@extends('layouts.default')

@section('title', 'Home')

@section('content')
    <section data-bs-version="5.1" class="header6 cid-tj7EAAH8Sw" id="header6-1">
        <div class="align-center container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-10">
                    <h1 class="mbr-section-title mbr-fonts-style mbr-white mb-3 display-1" style="font-family: oswald; letter-spacing: 15px;">
                        <strong>RBH WOOD SHOP</strong>
                    </h1>
                    <div class="mbr-section-btn mt-3">
                        <a class="btn btn-white display-4 shadow" href="#gallery2-2">
                            <span class="mobi-mbri mobi-mbri-arrow-down mbr-iconfont mbr-iconfont-btn"></span>
                            Portfolio
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section data-bs-version="5.1" class="gallery2 cid-tj7EI9Nwsf" id="gallery2-2">
        <div class="container">
            <div class="mbr-section-head">
                <h4 class="mbr-section-title mbr-fonts-style align-center mb-0 display-2">
                    <strong>Portfolio</strong>
                </h4>
            </div>

            {{--  <div class="row w-75 mx-auto my-4" id="filter">
                <div class="col-3">
                    <button id="all" class="btn btn-white w-100" onclick="filter(this)">
                        All
                    </button>
                </div>
                @foreach ($categories as $category)
                    <div class="col-3">
                        <button id="{{ str_replace(' ', '_', $category->category) }}" class="btn btn-white w-100" onclick="filter(this)">
                            {{ $category->category }}
                        </button>
                    </div>
                @endforeach
            </div>  --}}

            <div class="row mt-4">
                @forelse ($jobs as $job)
                    <div id="img_{{ str_replace(' ', '_', $job->category) }}" class="item features-image сol-12 col-md-6 col-lg-3">
                        <div class="item-wrapper">
                            <div class="item-img">
                                <a href="{{ route('portfolio.show', ['id' => $job->id]) }}">
                                    <img src="{{ asset('storage/'.$job->cover) }}" alt="{{ $job->title }}">
                                </a>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col">
                        <h3 class="text-center text-primary">Not Portfolio item!</h3>
                    </div>
                @endforelse
                {{ $jobs->links() }}
            </div>
        </div>
    </section>

    <section data-bs-version="5.1" class="contacts3 map1 cid-tj8zFZi8DP" id="contacts3-g">
        <div class="container">
            <div class="mbr-section-head">
                <h3 class="mbr-section-title mbr-fonts-style align-center mb-0 display-2">
                    <strong>Contacts</strong>
                </h3>
            </div>
            <div class="row justify-content-center mt-4">
                <div class="card col-12 col-md-6">
                    <div class="card-wrapper">
                        <div class="image-wrapper">
                            <span class="mbr-iconfont mobi-mbri-globe mobi-mbri"></span>
                        </div>
                        <div class="text-wrapper">
                            <h6 class="card-title mbr-fonts-style mb-1 display-5">
                                <strong>Phone</strong>
                            </h6>
                            <p class="mbr-text mbr-fonts-style display-7">
                                <a href="tel:+19548818474" class="text-primary">+1 (954) 881-8474</a> Rodney
                            </p>
                        </div>
                    </div>
                    <div class="card-wrapper">
                        <div class="image-wrapper">
                            <span class="mbr-iconfont mobi-mbri-globe mobi-mbri"></span>
                        </div>
                        <div class="text-wrapper">
                            <h6 class="card-title mbr-fonts-style mb-1 display-5">
                                <strong>Email</strong>
                            </h6>
                            <p class="mbr-text mbr-fonts-style display-7">
                                <a href="mailto:rodneyhoddinott222@gmail.com" class="text-primary">rodneyhoddinott222@gmail.com</a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="map-wrapper col-12 col-md-6">
                    <div class="google-map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d28611.89123290239!2d-80.1135915928387!3d26.310744881759128!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88d8e260f9def71d%3A0x640adcff789e8104!2sDeerfield%20Beach%2C%20Fl%C3%B3rida%2033441%2C%20EUA!5e0!3m2!1spt-BR!2sbr!4v1665606690707!5m2!1spt-BR!2sbr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{--  <section data-bs-version="5.1" class="share3 cid-tj8zGCGntx" id="share3-h">
        <div class="container">
            <div class="media-container-row">
                <div class="col-12">
                    <h3 class="mbr-section-title align-center mb-3 mbr-fonts-style display-2">
                        <strong>Follow Us!</strong>
                    </h3>
                    <div class="social-list align-center">
                        <a class="iconfont-wrapper bg-facebook m-2 " target="_blank" href="https://www.facebook.com/profile.php?id=100064042710217">
                            <span class="socicon-facebook socicon"></span>
                        </a>
                        <a class="iconfont-wrapper bg-instagram m-2" href="https://mobiri.se" target="_blank">
                            <span class="socicon-instagram socicon"></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>  --}}

    <script>
        function filter(event)
        {
            var categories = event.id
            var all_categories = document.querySelectorAll('#img_'+categories);
            var all_items = document.querySelectorAll('.item');

            // Limpa o filtro
            if (categories == "all") {
                all_items.forEach(a => {
                    a.classList.remove('d-none');
                    event.classList.remove('active')
                })
            }

            // passa por todos as categorias
            all_categories.forEach(c => {

                var id = c.id.split('img_')[1]; // pega a categoria clicada

                // passa por todos os itens
                all_items.forEach(all => {

                    var all_id = all.id.split('img_')[1]; // pega todas as categorias

                    // verifica se a categoria clicada é diferente da categoria atual
                    if(id != all_id) {
                        // se verdadeiro remove os outros itens não selecionado
                        all.classList.add('d-none');
                    }else {
                        // caso contrário exibe os itens novamente
                        all.classList.remove('d-none');
                        event.classList.remove('active')
                    }

                })
            })
        }
    </script>
@endsection

