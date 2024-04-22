@include('layouts.header')
<section>
    <div class="pb-bg p-md-none">
        <h3 class="titre"> "Aligner votre style avec votre marque personnelle"</h3>
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
                    C'est bien plus qu'une simple esthétique : c'est votre essence, votre récit, votre marque
                    distinctive.
                </p>
                <p class="fs-5 pt-1">
                    Au cœur de cette formule, nous explorons les éléments essentiels pour
                    créer une image forte et mémorable. De la définition de votre identité
                    de marque à la gestion de votre présence en ligne, nous mettons en
                    lumière les clés de votre succès personnel et professionnel.

                </p>
                <div class="row">
                    <div class="col-md-6 text-center position-relative">
                        <img src={{ asset('img/pb-rounded-1.jpg') }} alt="" class="bg-img-3" alt="">
                        <p
                            class="pb-opacity-3 text-center  py-4 d-flex flex-column gap-3 opacity-75 text-white position-absolute">
                            <span class="fw-bold fs-5">Demander</span>
                            <span class="fw-bold fs-2 fst-italic">Votre</span>
                            <span class="text-uppercase fw-bold fs-5">BILAN D'IMAGE</span>
                        </p>
                    </div>

                    <div class="col-md-6 text-center position-relative">
                        <img src={{ asset('img/SHOP8.jpg') }} alt="" class="bg-img-2" alt="">
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
                    <img src={{ asset('img/logo-miadreams-noir.png') }} alt="" class="img-fluid" alt="">
                </div>
                <img src={{ asset('img/4e7af837-a1ef-405e-8a13-9e0bf855af23.jfif') }} alt="" class="bg-img-1" alt="">
                <p
                    class="pb-opacity-1 text-center  py-4 d-flex flex-column gap-3 opacity-75 text-white position-absolute">
                    <span class=" fw-bold fs-5">Offrez-vous </span>
                    <span class=" fw-bold fs-2 fst-italic">Votre</span>
                    <span class="text-uppercase fw-bold fs-5">Brand plateform</span>
                </p>
            </div>
        </div>

        <div class="text-center pb-4">
            <a class="pb-btn p-1"
                    href="{{ route('download', ['document' => 'Offre_Personal_Branding_2024.pdf']) }}">TELECHARGER NOTRE
                BROCHURE
            </a>
        </div>
    </div>
</section>
<section>
    <div class=" container-fluid bg-beige">
        <div class="row  px-5 ">
            <div class="col-md-3 text-center position-relative">
                <div class="align-middle">
                    <img src={{ asset('img/logo-miadreams-noir.png') }} alt="" class="img-fluid" alt="">
                </div>
                <img src={{ asset('img/mia-dreams-catalogue.png') }} alt="" class="bg-img-4" alt="">

                <a class="btn-bronchure-3 text-center opacity-75  text-white position-absolute"
                   href="{{ route('download', ['document' => 'Catalogue_Personal_Branding_&_Etiquette_3.pdf']) }}">
                    TELECHARGER NOTRE CATALOGUE 3
                </a>

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
                    <div class="col-md-6 text-center position-relative">
                        <img src={{ asset('img/mia-dreams.png') }} alt="" class="bg-img-5" alt="">

                        <a class="btn-bronchure opacity-75  text-white position-absolute"
                           href="{{ route('download', ['document' => 'Catalogue_Personal_Branding_&_Etiquette_2.pdf'])}}">
                            TELECHARGER NOTRE CATALOGUE 2
                        </a>
                    </div>

                    <div class=" col-md-6 text-center position-relative">
                        <img src={{ asset('img/miadreams-catalogue-2.png') }} alt="" class="bg-img-6" alt="">

                        <a class="btn-bronchure opacity-75  text-white position-absolute"
                           href="{{ route('download', ['document' => 'Catalogue_Personal_Branding_&_Etiquette_1.pdf']) }}">
                            TELECHARGER NOTRE CATALOGUE 1
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

@include('layouts.footer')
