/***** utilisation de la libraire jQuery ****/
tinymce.init({
    selector: "#content",
    menubar: false,
    plugins: "lists"
});

$(function() {
    $(".btn-action ul li").hover(function() {
        $(this)
            .children("ul")
            .stop(true, false, true)
            .slideToggle(500);
    });

    $("#sub-nav").click(function() {
        $(this)
            .children("ul")
            .toggleClass("active");
    });

    let heure = $("#h").text();
    let minute = $("#m").text();
    let seconde = $("#s").text();
    let time = heure + " " + minute + " " + seconde;

    /***** supprimer un article | un utilisateur | une catégorie ****/

    /*
    $(".deleted").click(function() {
        let id = $(this).attr("data-id");
        let name = $(this).attr("data-name");
        swal({
            title: "Êtes vous sure de supprimer ?",
            text: name,
            icon: "warning",
            buttons: true,
            dangerMode: true
        }).then(willDelete => {
            if (willDelete) {
                let v = (window.location = "/admin/users/" + id);
                console.log(v);
                swal(name + " a été supprimé", {
                    icon: "success"
                });
            }
        });
    });
    */
});
