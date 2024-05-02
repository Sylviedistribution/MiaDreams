@include('layouts.header')
<div class="impact-1 container mt-3">
    <div class="row">
        <div class="col-md-7">
            <ul class="list-unstyled">
                <li>
                    <div class="culture-entreprise">
                        <img src="{{asset("img/symbole1.png")}}" class="symbole img-fluid"
                             alt="">
                        <div class="mt-4">
                            <h2>MISSION</h2>
                            <p> Rendre accessible l’artisanat africain
                                d’excellence </p>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="culture-entreprise">
                        <img src="{{asset("img/symbole2.png")}}" class="symbole img-fluid"
                             alt="">
                        <div class="mt-4">
                            <h2>VISION</h2>
                            <p> Faire de l’artisanat africain ce qui a de
                                plus noble et de plus abouti</p>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="culture-entreprise">
                        <img src="{{asset("img/symbole3.png")}}" class="symbole img-fluid"
                             alt="">
                        <div class="mt-4">
                            <h2>VALEUR</h2>
                            <ul class="list-unstyled" >
                                <li>Créativité et innovation</li>
                                <li>Professionnalisme</li>
                                <li>Mode responsable</li>
                                <li>Made In AFrica</li>
                            </ul>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
        <div class="engagements col-md-5 text-white">
            <h3>NOS ENGAGEMENTS</h3>
            <p>
                Chez nous, la durabilité n'est pas un simple point de
                destination, mais un périple incessant. Chaque jour,
                nous nous engageons dans ce voyage, guidés par
                notre conviction profonde. Chaque pas que nous
                faisons, aussi minuscule soit-il, est un pas vers une
                économie et une société qui célèbrent les artisans,
                honorent l'Afrique et préservent la nature. Chaque
                décision que nous prenons est une déclaration
                d'amour envers notre planète et envers ceux qui la
                peuplent.<br><br>
                Nous sommes pleinement conscients que notre
                parcours est semé d'embûches et de nouveaux défis
                surgissent chaque jour. Cependant, nous restons
                résolus à honorer notre engagement en tant
                qu'entreprise de mode responsable, focalisée sur la
                création et la fabrication de produits qui transcendent
                le temps tout en conservant leur qualité et leur
                pertinence.
            </p>
        </div>
    </div>
</div>
<div class="impact-2 container mt-5">
    <h1>NOTRE ATELIER DE CONFECTION</h1>
    <p> Toutes nos créations sont produits en série-limitée dans notre atelier de confection basé au
        Sénégal, afin de maitriser notre production et créer de l’emploi.
        Notre atelier à taille humaine est parfaitement équipée avec des machines de qualité pour ofrir de
        belles finition.</p>
    <div class="container-fluid d-flex justify-content-center align-items-center">
        <img src="{{asset("img/impact.jpg")}}" class="img-fluid w-100"
             alt="Soutenez nos différentes initiatives pour donner accès à la FORMATION">
        <h2 class="text-center">
            Un atelier de confection parfaitement équipé
        </h2>
    </div>

</div>
<div class="impact-3 container">
    <h1 class="display-4 text-center" >UNE MODE RESPONSABLE</h1>
    <img src="{{asset("img/impact1.jpg")}}" class="img-fluid w-100"
         alt="">
</div>
@include('layouts.footer')
