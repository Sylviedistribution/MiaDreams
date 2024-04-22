<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset("css/style.css")}}">
    <link rel="stylesheet" href="{{asset("css/bootstrap.css")}}">
    <title>Accueil</title>

    <style>
        /* Ajoutez vos styles personnalisés ici */
        .heade {
            background-color: black;
            height: 90px;
            width: 100%;
        }

        .logomia {
            width: 110px;
            height: 100px;
            padding: 10px;
            margin-left: 45%;
            position: relative;
            bottom: 30%;
          

        }

        .heritage {
            background-image: url('img/back-heri.jpg');
            background-repeat: no-repeat;
            background-size: cover;
            height: 86vh;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            color: white;
        }

        .img-responsive {
            max-width: 100%;
            height: auto;
            margin-left: 40%;
            position: relative;
            left: 110%;
            top: 40%;
           
        }

        .img-responsive2 {
            max-width: 100%;
            height: auto;
            position: relative;
            left: 90%;
            top: 10%;
            
        }

        .texte-heri1 {
            color: black;
            font-size: 20px;
            font-family: serif;
            letter-spacing: 2px;
            font-weight: bold;
            text-transform: uppercase;
            position: relative;
            right:100%;
            bottom:40%;
        }

        .texte-heri2 {
            color: #805f27;
            font-size: 20px;
            font-family: serif;
            letter-spacing: 2px;
            text-transform: uppercase;
        }

        .welcome {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 30px;
            
            background-color: whitesmoke;
            padding: 20px;
            position: relative;
            top: 100px;
        }

        .img-welcome {
            max-width: 100%;
            height: auto;
        }

        .logo-welcome {
            width: 160px;
            height: 50px;
        }

        .pochette {
            background-image: url('img/heri5.jpg');
            background-repeat: no-repeat;
            background-size: cover;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            color: white;
        }

        .pochette p {
            font-size: 25px;
            font-family: serif;
            letter-spacing: 2px;
        }
    </style>
</head>
<body>

<div class="container-fluid heade">
    <img src="img/logo_MIA.png" class="logomia" alt="">
</div>

<div class="container-fluid heritage">
    <div class="row">
        <div class="col-md-6">
            
            <img src="img/heri1.jpg" class="img-responsive" alt="">
        </div>
        <div class="col-md-6">
        <img src="img/heri2.jpeg" class="img-responsive2" alt="">
            <div class="texte-heri1">
                <h1>Maison de couture</h1>
                <h2>De Père en Fille</h2>
                <h3>Depuis 1966</h3>
            </div>
        </div>
    </div>
</div>

<p class="texte-heri2">Un Héritage Culturel & Familial</p>

<hr>

<!-- section welcome -->

<div class="container">
    <div class="row">
        <div class="col-md-6">
            <img src="img/heri3.jpg" class="img-welcome" alt="">
        </div>
        <div class="col-md-6">
            <div class="welcome-titre">
                <h1>Welcome! <br>I'm Khady Sy Savané</h1>
                <img src="img/logo_MIA.png" class="logo-welcome" alt="">
            </div>
            <p>Dès son plus jeune âge, Khady SY SAVANE a côtoyé la culture du beau, de l’élégance et d’un art de vivre mêlant ses doubles origines, française et ivoirienne.
                Née d’un père couturier, styliste, modéliste diplômé de l’académie internationale de coupe LADEVEZE ROUSSEL & J.DARROUX en 1966, porter de beau vêtement était avant tout une marque de respect.</p>
            <p>Entreprendre dans le secteur de la mode c’est fait comme une évidence, un héritage familial et culturel, qui s’est transformé en passion. Son parcours atypique dans la vente, la police, et 10 années dans l’hôtellerie et la restauration haut de gamme ont développés sa persévérance,  son goût du luxe, de l’étiquette, du savoir-vivre et de la gastronomie.</p>
            <p>
                Cumulant plus d'une décennie d'expérience entrepreneuriale dans l'industrie de la mode, de retour au Sénégal, elle a créé sa startup en 2020, spécialisée dans la confection de produits artisanaux et le digital.
                La marque Mia Dreams créé en 2011, propose une ligne de vêtements féminins spécialement dédiée aux femmes cadres, dirigeantes et intellectuelles. Son esprit innovant s'est concrétisé à travers le projet de l'application mobile "Ma Petite Robe en Wax", une avancée majeure en tant que première plateforme de cocréation entre la cliente et l'artisan. Cette application permet de concevoir des robes sur-mesure et de les personnaliser avec aisance.</p>
            <p>Réaffirmant son engagement envers l'innovation et la profession d’artisan, elle a récemment enrichi son offre en introduisant un programme de formation dédié aux artisans tailleurs. Ce programme, axé sur le renforcement de compétences en coupe, couture et modélisme, intègre harmonieusement les aspects numériques et artisanaux, créant ainsi une synergie unique entre tradition et technologie.</p>
        </div>
    </div>
</div>

<!-- section pochette -->

<div class="container-fluid pochette">
    <p>Nous sommes animés par la passion et l’amour... </p>
</div>

<div class="container welcome">
    <div class="row">
        <div class="col-md-6">
            <img src="img/heri4.jpg" class="img-welcome" alt="">
        </div>
        <div class="col-md-6">
            <div class="welcome-titre">

            <h1>Hi! <br>I'm Orlane Selena Bouanga</h1>
<img src="img/logo_MIA.png" class="logo-welcome" alt="">
</div>
<p>Je détiens une licence en droit des affaires délivrée par l'Institut Supérieur de Management (ISM), où je poursuis actuellement mes études en Management de Projet.</p>
<p>Je me suis lancée dans le projet “ma petite robe en wax” par amour pour la découverte de la couture et l’aspect innovant du projet. Ce projet et la personne qui le portait m’ont plu et depuis lors, me voila dans l’aventure.</p>
<p>Au sein de notre Fashion Program, j'ai assumé le rôle de gestionnaire de projets. Mes responsabilités comprenaient la gestion administrative complète du programme, la coordination de la planification des intervenants et des apprenants, ainsi que la supervision de leur emploi du temps.</p>
<p>L’entreprenariat est un véritable engagement pour moi et une source d’épanouissement. Je m’enrichie chaque jour face au nouveau défis et aux challenges.</p>
</div>
</div>
</div>

<!-- Bootstrap JS et jQuery (obligatoire pour Bootstrap) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>






<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>

</body>
</html>