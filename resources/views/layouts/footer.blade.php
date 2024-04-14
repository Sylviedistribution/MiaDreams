<footer>
    <div class="row d-sm-flex-row col-md-12">
        <div class="col-md-3">
            <img src={{ asset('img/logo-miadreams-noir.png') }} alt="" class="img" width="auto"
                 height="auto" alt="">
        </div>
        <div class="col-md-2">
            <h3 class="fw-light  fs-4">INFORATIONS</h3>
            <div class="fw-bolder">
                <a><p class="">Newsletter</p></a>
                <a><p class="">Guide de taille</p></a>
                <a><p class="">Nos catalogues</p></a>
            </div>
        </div>
        <div class="col-md-2">
            <h3 class="fw-light  fs-4">NOS MARQUES</h3>
            <div class="fw-bolder">
                <a><p class="">Mia Dreams</p></a>
                <a><p class="">Ma Petite Robe En Wax</p></a>
                <a><p class="">Formule Personal branding</p></a>
                <a><p class="">Bloa Otentik Mia</p></a>
            </div>
        </div>

        <div class="col-md-2">
            <h3 class="fw-light fs-4">CONTACTEZ NOUS</h3>
            <div class="fw-bolder">
                <p class="">3 rue Bégenger Ferraud; <br>au sein de CTIC DAKAR</p>

                <p class="">Télephone:+221 76 463 91 69</p>
            </div>

        </div>
        <div class="col-md-2">
            <h3 class="fw-light fs-4">NOUS SUIVRE</h3>
            <div class="d-flex flex-row py-2">
                <img src={{ asset('img/facebook.png') }} alt="" class="img-fluid "  alt="">
                <img src={{ asset('img/instagram.png') }} alt="" class="img-fluid " alt="">
                <img src={{ asset('img/youtube.png') }} alt="" class="img-fluid "  alt="">
            </div>
            <div class="d-flex flex-row">
                <img src={{ asset('img/logo-linkedin.png') }} alt="" class="img-fluid " alt="">
                <img src={{ asset('img/twitter.png') }} alt="" class="img-fluid "  alt="">
            </div>
        </div>
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="{{asset("js/bootstrap.min.js")}}"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- Votre script JavaScript pour l'animation -->
<script>
    $(document).ready(function() {
        $(".container-1,.container-2,.container-3,.container-4,.container-5,.container-6,.container-7,.container-8").addClass("animate__animated animate__fadeInDown");
    });
</script>

</body>
</html>
