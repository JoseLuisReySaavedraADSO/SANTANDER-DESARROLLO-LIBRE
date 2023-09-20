$(document).ready(function() {
    console.log('holi');
    $(".barSearch__input").on("keyup", function() {
        var searchTerm = $(this).val().toLowerCase(); // Obtener el término de búsqueda en minúsculas

        $(".animal__info--name").each(function() {
            var text = $(this).text().toLowerCase(); // Obtener el texto del nombre en minúsculas

            // Mostrar u ocultar la tarjeta según si el término de búsqueda coincide con el nombre
            if (text.includes(searchTerm)) {
                $(this).closest(".card__animal").show();
            } else {
                $(this).closest(".card__animal").hide();
            }
        });
    });
});