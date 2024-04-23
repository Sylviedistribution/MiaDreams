window.addEventListener('DOMContentLoaded', function() {
    // Vérifier si la page actuelle est la page d'accueil
    if (window.location.pathname === '/index') {
        // Récupérer la référence de la boîte modale
        var modal = document.getElementById("newsLetter");

        // Récupérer la référence du bouton de fermeture
        var span = document.getElementsByClassName("close")[0];

        // Afficher la boîte modale
        modal.style.display = "block";

        // Fermer la boîte modale lorsqu'on clique sur le bouton de fermeture
        span.onclick = function() {
            modal.style.display = "none";
        }
    }
});
