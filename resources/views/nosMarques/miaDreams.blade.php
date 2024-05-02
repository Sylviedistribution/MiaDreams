@include("layouts.header")
<!-- section header -->
<div class="container-fluid header1">
    <h1>APPORTER UNE TOUCHE D'AUTHENTICITE DANS VOTRE DRESSING !</h1>
</div>

<!-- section univers -->
<div class="container">
    <h1 class="title-uni">NOTRE UNIVERS</h1>
</div>

<div class="container univers">
    <div>
        <img src="{{asset("img/miadreams/img1.jpg")}}" class="img1" alt="">
    </div>
    <div>
        <img src="{{asset("img/miadreams/img2.jpg")}}" class="img2" alt="">
    </div>
    <div class="texte-uni">
        <p>Mia Dreams est une marque de mode et de style de vie aux influence <br> Afro-vintage , créé en 2011 pour
            apporter une touche d’authenticité <br> dans vos garde-robes. </p>
        <p>Toutes nos créations sont éditées en petites séries pour satisfaire <br> les adeptes d’exclusivité. Nous
            proposons des pièces modernes, <br> sophistiquées, élégantes et confortables.</p>
        <p>Mia signifie Made In AFrica, une volonté pour nous de promouvoir notre <br> culture et les savoir-faire des
            artisans. A cet effet nous produisons <br> toutes nos créations dans notre atelier au Sénégal depuis 2013.
        </p>
    </div>
</div>

<!-- section collection -->
<div class="container">
    <h6 class="collection-title">Collection <span>BCBG</span></h6>
</div>

<div class="container collection">
    <div>
        <img src="{{asset("img/miadreams/img3.jpg")}}" class="collection-img" alt="">
        <h4>Cape Scarlett</h4>
    </div>
    <div>
        <img src="{{asset("img/miadreams/img4.jpg")}}" class="collection-img" alt="">
        <h4>Tunique Lou</h4>
    </div>
    <div>
        <img src="{{asset("img/miadreams/img5.jpg")}}" class="collection-img" alt="">
        <h4>Julia Dress</h4>
    </div>
</div>



<!-- section  nouvelle gamme=====  -->

<div class="gamme container">
    <p class="N-gamme-title">NOUVELLE GAMME 100% COTON, ET TISSUS TEINTS A LA MAIN</p>
    <div class="N-gamme">
        <div>
            <img src="{{asset("img/miadreams/img6.jpg")}}" class="N-gamme-img" alt="">
        </div>
        <div>
            <img src="{{asset("img/miadreams/img7.jpg")}}" class="N-gamme-img" alt="">
        </div>
        <div>
            <img src="{{asset("img/miadreams/img8.jpg")}}" class="N-gamme-img" alt="">
        </div>
    </div>
</div>

@include("layouts.footer")
