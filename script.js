$(document).ready(function() {
    $("#encriptar").click(function() {
        var texto = $("#texto").val();
        $.ajax({
            url: "encriptar.php",
            type: "POST",
            data: {texto: texto},
            success: function(data) {
                $("#resultado").text("Texto encriptado: " + data);
            }
        });
    });
});
