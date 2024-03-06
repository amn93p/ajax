window.addEventListener("load", function () {
    let form = document.querySelector("form");
    form.addEventListener("submit", function (event) {
        // La variable "event" est un objet qui représente l'évènement
        // sur lequel on a mis un écouteur (dans le cas présent event est un SubmitEvent)
        // La méthode "preventDefault" permet d'annuler le comportement par défaut
        // de l'évènement.
        // 
        event.preventDefault();
        const xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function () {
            if (xhttp.readyState == 4 && xhttp.status == 200) {
                document.querySelector("#content").innerHTML = xhttp.responseText;
            }
        }

        xhttp.open("POST", "login.php");
        let inputLogin = document.getElementsByName("login")[0];
        // Pour récupérer un élément HTML à partir d'un attribut, le sélecteur CSS va ressembler à
        // [attribut = 'valeur']
        // 

        // L'entête de requête 'content-type' doit être modifié pour faire une reqûete
        // AJAX en méthode post pour que les données soient bien encodées.
        // 
        let inputPassword = document.querySelector("[name='password']");
        let parametres = "login=" + inputLogin.value + "&password=" + inputPassword.value;
        xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xhttp.send(parametres);
    })
})