@include('layouts.header')
<section>
    <div class=" home-container-1 ">
        <div class="info fs-3 ">
            <h1>
                REVOLUTION <br>
                FASHION
            </h1>
            <h4>
                L'ARTISANAT EST AU COEUR<br>
                DE NOTRE METIER
            </h4>
        </div>
    </div>
</section>

<!-- Section "Vidéo et Description" -->
<section>
    <div class="container-fluid px-5 py-5">
        <div class="row">
            <div class=" col-md-6 video">
                <iframe src="https://www.youtube.com/embed/sTfEIkU309s" frameborder="0" allowfullscreen></iframe>

            </div>

            <div class=" col-md-6 section-text">
                <div class="pt-5">
                    <h2><strong>“Notre startup diffuse l’ensemble de la richesse culturelle
                            du continent africain”</strong></h2>

                </div>
                <div class="pt-5">
                    <p> Au-delà d'une simple entreprise ou d'une
                        marque de vêtements, nous incarnons un
                        univers contemporain de la mode africaine.
                        Notre savoir-faire dans l'industrie textile du
                        continent est empreint de valeurs vertueuses,
                        tout en embrassant l'innovation numérique.
                        Plaçant l'humain au cœur de notre métier, nous
                        faisons de chaque création une expression de
                        notre engagement envers l'excellence et
                        l'authenticité.
                    </p>
                </div>

            </div>
        </div>
    </div>
</section>

<!-- Section "Univers authentique" -->
<section>
    <div class="container py-3 home-container-3">

        <p class="fs-3">Plus qu'une entreprise, un univers authentique aux
            inspirations africaines et contemporaines.</p>

    </div>
</section>

<!-- Section "Découvrez nos produits" -->
<section>
    <div class="container">
        <div class="row  py-5">
            <div class="col-md-4 py-5 position-relative">
                <div class="container-black  position-absolute"></div>
                <img id="home-image2" src="{{ asset('img/home-image2.jpg') }}" alt="">
                <div class="image-text position-absolute">
                    <h5>DECOUVREZ</h5>
                    <p>Mia Dreams Brand</p>
                </div>
                <p class="description">Notre ligne de vêtements</p>
            </div>
            <div class="col-md-4 py-5 position-relative">
                <div class="container-brow  position-absolute"></div>
                <img id="home-image3" src="{{ asset('img/home-image3.jpg') }}" alt="">
                <div class="image-text-1 position-absolute">
                    <h5>DECOUVREZ</h5>
                    <p>Ma Petite Robe En Wa</p>
                </div>
                <p class="description">Notre application mobile</p>
            </div>
            <div class="col-md-4 py-5 position-relative">
                <div class="container-red  position-absolute"></div>
                <img id="home-image4" src="{{ asset('img/home-image4.jpg') }}" alt="">
                <div class="image-text position-absolute">
                    <h5>DECOUVREZ</h5>
                    <p>Fashion Program</p>
                </div>
                <p class="description"> Notre programme de formation</p>
            </div>
        </div>
    </div>
</section>


@include('layouts.footer')
