$(document).ready(function() {
    $("#btnAnadirProducto").click(function() {
        event.preventDefault();
        agregarFila();
    });

    function agregarFila() {
        var htmlTags = '<tr> <td> miCodigo </td> <td> miCodigo </td> <td> miCodigo </td> <td> miCodigo </td> <td> miCodigo </td> <td> miCodigo </td> </tr>;'
        $('#tablaGeneral tbody').append(htmlTags);
    }

    $("#btn_logininiciar").click(function() {
        event.preventDefault();
        validarDato();
    });

    function validarDato() {
      alert("hola");
    }
});
