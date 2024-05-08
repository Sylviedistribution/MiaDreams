@include('layouts.header')
<!-- Section "Bannière" -->
<section>
    <div class="home-container-1">
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

<div class="container home-container-2">
    <div class="container-fluid py-5">
        <div class="row">
            <div class=" col-md-6 video">
                <iframe src="https://www.youtube.com/embed/sTfEIkU309s" frameborder="0" allowfullscreen></iframe>

            </div>

            <div class=" col-md-6 section-text">
                <div class="pt-5">
                    <h2><strong>“Notre startup diffuse l’ensemble de la richesse culturelle
                            du continent africain”</strong>
                    </h2>
                </div>

                <div class="pt-2">
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
</div>

<!-- Section "Univers authentique" -->
<div class="container home-container-3">
    <p>Plus qu'une entreprise, un univers authentique aux
        inspirations africaines et contemporaines.</p>
</div>

<!-- Section "Découvrez nos produits" -->
<div class="container">
    <div class="home-container-4">
        <div class="image-container black">
            <img id="home-image2" src="{{asset("img/index/home-image2.jpg")}}" alt="">
            <div class="image-text">
                <h5>DECOUVREZ</h5>
                <p>Mia Dreams Brand</p>
            </div>
            <p class="description">Notre ligne de vêtements</p>
        </div>
        <div class="image-container-2 brown">
            <img id="home-image3" src="{{asset("img/index/home-image3.jpg")}}" alt="">
            <div class="image-text">
                <h5>DECOUVREZ</h5>
                <p>Ma Petite Robe En Wax</p>
            </div>
            <p class="description">Notre application mobile</p>
        </div>
        <div class="image-container red">
            <img id="home-image4" src="{{asset("img/index/home-image4.jpg")}}" alt="">
            <div class="image-text">
                <h5>DECOUVREZ</h5>
                <p>Fashion Program</p>
            </div>
            <p class="description"> Notre programme de formation</p>
        </div>
    </div>
</div>

<!-- Section "Nouvelle offre en Personal Branding" -->
<div class="container home-container-5">
    <!-- Image de l'offre -->
    <div class="row">
        <div class="col-md-5">
            <img id="home-image5" class="img-fluid" src="{{asset("img/index/home-image5.jpg")}}" alt="">
        </div>
        <div class="section-text col-md-7">
            <div class="titre1">
                <p>
                    <strong>NOUVEAU</strong><br>
                    OFFRE EN PERSONAL<br>
                    BRANDING
                </p>
            </div>
            <!-- Description de l'offre -->
            <div class="col-md-7">
                <p class="paragraphe"> Une méthode et un accompagnement uniques au service de votre leadership, qui vous
                    font
                    gagner du temps. Nous
                    allons vous aider à développer votre propre style, dans une démarche bienveillante. Notre approche
                    structurée et ultra-professionnelle vous permettra de constituer un dressing digne de la Haute
                    Couture.</p>
            </div>
            <br>
            <!-- Bouton pour découvrir la brochure -->
            <a class="btn" href="{{ route('personalBranding') }}">DECOUVREZ NOTRE OFFRE</a><br>
        </div>
    </div>

</div>

<!-- Section "ETHICAL FASHION" -->
<div class="container home-container-6">
    <div class="row">
        <div class="section-text col-md-7">
            <div class="titre2">
                <p>
                    <strong>ETHICAL FASHION</strong>
                </p>
            </div>
            <div class="col-md-7">
                <p class="paragraphe"> Chez Mia Dreams and Co, notre engagement envers une mode éthique et responsable
                    est
                    au
                    cœur de notre identité. Nous croyons fermement que la mode peut être une force positive, contribuant
                    non
                    seulement à
                    votre
                    style, mais également au bien-être de la planète et de ses habitants.
                </p>
            </div>
            <br>
            <!-- Bouton pour découvrir nos engagements -->
            <a class="btn" href="{{route('impact')}}">NOS ENGAGEMENTS</a><br>
        </div>
        <div class="col-md-5">
            <!-- Image illustrant la m1ode éthique -->
            <img id="home-image6" class="img-fluid" src="{{asset("img/index/home-image6.jpg")}}" alt="">
        </div>

    </div>

</div>

<div class="container home-container-7">
    <img id="home-image7" class="img-fluid w-100" src="{{asset("img/index/home-image7.webp")}}" alt="">

    <div>
        <h6><strong>NOS DERNIERS ARTICLES DE <span>BLOG</span></strong></h6><br>

        <p>WELCOME IN MY WORLD, bienvenue dans l'univers d'OTENTIK MIA !</p>

        <p class="paragraphe px-5">
            Si vous faites la découverte de ce blog pour la première fois, je me nomme Khady SY SAVANE, fondatrice de la
            startup MIA DREAMS & CO.
            MIA DREAMS & CO va au-delà de la simple entreprise : c'est un véritable univers qui gravite autour de la
            mode, du personal branding, de
            l’entreprenariat, de la décoration et de la gastronomie, influencé par une atmosphère africaine &
            contemporaine.
        </p><br>
        <a class="btn" href="https://otentikmia.wixsite.com/blog/accueil">DECOUVREZ</a><br><br>
    </div>
</div>
<div class="container-fluid home-container-8">
    <h1>Made In Africa</h1>
</div>

@include('layouts.footer')
