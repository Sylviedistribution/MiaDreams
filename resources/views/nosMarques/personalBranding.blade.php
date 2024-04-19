@include('layouts.header')
<section>
    <div class=" pb-bg  p-md-none">
        <h3 class=""> "Aligner votre style avec votre marque personnelle"</h3>
    </div>
</section>
<section>
    <div class="container-fluid">
        <div class="row  px-5 ">
            <div class="col-md-9">
                <h1 class="pb-text-fr pt-5 ps-3 text-center">Construisez une Image Forte </h1>
                <p class="fs-5 pt-1">
                    Dans l'arène numérique d'aujourd'hui, votre image personnelle
                    est le pilier sur lequel repose votre succès professionnel.
                    C'est bien plus qu'une simple esthétique
                    : c'est votre essence, votre récit, votre marque distinctive.
                </p>
                <p class="fs-5 pt-1">
                    Au cœur de cette formule, nous explorons les éléments essentiels pour
                    créer une image forte et mémorable. De la définition de votre identité
                    de marque à la gestion de votre présence en ligne, nous mettons en
                    lumière les clés de votre succès personnel et professionnel.

                </p>
                <div class="row">
                    <div class="col-md-5 text-center position-relative">
                        <img src={{ asset('img/pb-rounded-1.jpg') }} alt="" class="bg-img-3">

                        <p
                            class="pb-opacity-3 text-center  py-4 d-flex flex-column gap-3 opacity-75 text-white position-absolute">
                            <span class="fw-bold fs-5">Demander</span>
                            <span class="fw-bold fs-2 fst-italic">Votre</span>
                            <span class="text-uppercase fw-bold fs-5">BILAN D'IMAGE</span>
                        </p>
                    </div>
                    <div class="col-md-1"></div>
                    <div class="col-5 text-center position-relative">
                        <img src={{ asset('img/SHOP8.jpg') }} alt="" class="bg-img-2">
                        <p
                            class="pb-opacity-2 text-center  py-4 d-flex flex-column gap-3 opacity-75 text-white position-absolute">
                            <span class="fw-bold fs-5">Retrouver votre AUTHENTICITE</span>
                            <span class="fw-bold fs-2 fst-itali">Elaborer</span>
                            <span class=" text-uppercase fw-bold fs-5">votre garde-robe stratégique</span>
                        </p>

                    </div>
                </div>

            </div>
            <div class="col-md-3 text-center position-relative">
                <div class="align-middle d-flex ">
                    <img src={{ asset('img/logo-miadreams-noir.png') }} alt="" class="img-fluid">
                </div>
                <img src={{ asset('img/4e7af837-a1ef-405e-8a13-9e0bf855af23.jfif') }} alt="" class="bg-img-1">
                <p
                    class="pb-opacity-1 text-center  py-4 d-flex flex-column gap-3 opacity-75 text-white position-absolute">
                    <span class=" fw-bold fs-5">Offrez-vous </span>
                    <span class=" fw-bold fs-2 fst-italic">Votre</span>
                    <span class="text-uppercase fw-bold fs-5">Brand plateform</span>
                </p>


            </div>
        </div>

        <div class="text-center  pb-4">
            <button class="pb-btn p-1">TELECHARGER NOTRE BRONCHURE</button>
        </div>
    </div>
</section>
<section>
    <div class="container-fluid bg-beige ">
        <div class="row  px-5 ">
            <div class="col-md-3 text-center position-relative">
                <div class="align-middle">
                    <img src={{ asset('img/logo-miadreams-noir.png') }} alt="" class="img-fluid">
                </div>
                <img src={{ asset('img/mia-dreams-catalogue.png') }} alt="" class="bg-img-4">

                <button class="btn-bronchure-3 text-center opacity-75  text-white position-absolute">
                    TELECHARGER NOTRE CATALOGUE 3
                </button>

            </div>
            <div class="col-md-9">
                <p class="fs-5 pt-5 ps-3">
                    MIA DREAMS PERSONAL BRANDING & ETIQUETTE est notre catalogue qui a
                    pour objectif de présenter les nouvelles collections de la marque de une
                    façon originale de vous présenter nos créations autour d'un art de vivre
                    d'une Afrique contemporaine, et de partager notre univers créatif
                    accompagné de petits articles, de citations, de conseils et astuces bien-être.
                </p>
                <div class="row">
                    <div class="col-md-5 text-center position-relative">
                        <img src={{ asset('img/mia-dreams.png') }} alt="" class="bg-img-5">

                        <button class="btn-bronchure-2 opacity-75  text-white position-absolute">
                            TELECHARGER NOTRE CATALOGUE 2
                        </button>
                    </div>
                    <div class="col-md-1"></div>
                    <div class="col-5 text-center position-relative">
                        <img src={{ asset('img/miadreams-catalogue-2.png') }} alt="" class="bg-img-6">

                        <button class="btn-bronchure-1 opacity-75  text-white position-absolute">
                            TELECHARGER NOTRE CATALOGUE 1
                        </button>
                    </div>
                </div>

            </div>
        </div>
    </div>
    </div>
</section>

@include('layouts.footer')
