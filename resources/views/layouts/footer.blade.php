<footer>
    <div class="container-fluid">
        <div class="row gap-4 ">

            <div class="col-md-2  ">
                <img src={{ asset('img/logo-miadreams-noir.png') }} alt="logo_footer" class="img-fluid" width="auto" height="auto" alt="">
            </div>
            <div class="col-md-2 pt-5">
                <h3 class="span-lastica  fs-5">INFORMATIONS</h3>
                <div class="fw-bolder span-ind">
                    <a>
                        <p class="">Newsletter</p>
                    </a>
                    <a>
                        <p class="">Guide de taille</p>
                    </a>
                    <a>
                        <p class="">Nos catalogues</p>
                    </a>
                </div>
            </div>
            <div class="col-md-2 pt-5">
                <h3 class="span-lastica  fs-5">NOS MARQUES</h3>
                <div class="fw-bolder span-ind">
                    <a href={{ route('miaDreams') }} class="text-decoration-none  text-black link-danger">
                        <p class="">Mia Dreams</p>
                    </a>
                    <a href="{{ route('mprew') }}" class="text-decoration-none text-black link-danger">
                        <p class="">Ma Petite Robe En Wax</p>
                    </a>
                    <a href="{{ route('personalBranding') }}" class="text-decoration-none text-black link-danger">
                        <p class="">Formule Personal branding</p>
                    </a>
                    <a href="https://otentikmia.wixsite.com/blog/accueil" target="_blank"
                        class="text-decoration-none text-black link-danger">
                        <p class="">Blog Otentik Mia</p>
                    </a>
                </div>
            </div>

            <div class="col-md-2 pt-5">
                <h3 class="span-lastica  fs-5">CONTACTEZ NOUS</h3>
                <div class="fw-bolder span-ind">
                    <p class="">3 rue Bégenger Ferraud; <br>au sein de CTIC DAKAR</p>

                    <p class="">Télephone: +221 76 463 91 69</p>
                </div>

            </div>
            <div class="col-md-2 pt-5 ">
                <h3 class="span-lastica  fs-5">NOUS SUIVRE</h3>

                <a href="https://www.facebook.com/Madeinafricacouture" target="_blank"><img src={{ asset('img/facebook.png') }}
                        alt="" class=" logo-sociaux img-fluid " alt="" > </a>

                <a href="https://www.instagram.com/miadreams_brand/?hl=fr"  target="_blank"><img src={{ asset('img/instagram.png') }}
                        alt="" class="logo-sociaux img-fluid " alt="" "> </a>

                <a href="https://www.youtube.com/channel/UCwzzX2LzGR3K3Y37wiSDmLw"  target="_blank"><img src={{ asset('img/youtube.png') }} alt="" class="logo-sociaux img-fluid "
                        alt=""> </a>

                <a href="https://www.linkedin.com/company/ma-petite-robe-en-wax/"  target="_blank"><img
                        src={{ asset('img/logo-linkedin.png') }} alt="" class="logo-sociaux img-fluid "
                        alt=""> </a>

            </div>

        </div>
    </div>

</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


</body>

</html>
