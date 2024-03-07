$(function () {
    console.log("execution du jQuery")
    $(".nav-link").on("click", function (eventClick) {
        eventClick.preventDefault();
        var link = $(this); // $(this) : représente l'élément sur lequel on a cliqué
        $.ajax({
            method: "get",
            url: link.attr("href"),
            dataType: "html", //dataType: précise le type de données de la réponse HTTP
            success: function (response) {
                $("#content").html(response);
            },
            error: function (jqXHR, error, status) {
                $("#content").html("<div class='alert alert-danger'>" + error + " - " + status + "</div>");
            }

        })
    })
});   