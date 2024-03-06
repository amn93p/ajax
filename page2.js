window.addEventListener("load", function () {
    document.querySelector('#btnRemplir').addEventListener("click", loadTowns) 
    })

function loadTowns() {
    const xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
        if (xhttp.readyState == 4 && xhttp.status == 200) {
            document.querySelector("#resultat")
                .innerHTML = xhttp.responseText;
        }
    }
    xhttp.open("GET", "fichiers/villes.php");
    xhttp.send();
}