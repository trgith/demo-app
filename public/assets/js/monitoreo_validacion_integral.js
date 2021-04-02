$(document).ready(function(){

    $('#CardGrupo-9827').hide();
    $('#CardGrupo-9828').hide();
    $('#CardGrupo-9829').hide();
    $('#CardGrupo-9830').hide();
    $('#CardGrupo-9831').hide();

    $('#CardDetalles').hide();
    $('#CardAprobar').hide();

});

function VerParticipantes(numGrupo, porcentajeCompletado) {
    $('#CardGrupo-9827').hide();
    $('#CardGrupo-9828').hide();
    $('#CardGrupo-9829').hide();
    $('#CardGrupo-9830').hide();
    $('#CardGrupo-9831').hide();

    $('#CardDetalles').hide();

    $('#CabezeroCardDetalles1').text("Grupo " + numGrupo);

    $('#CerrarDetalles').attr('onclick', "CerrarDetalles(" + numGrupo + ")");

    $('#CardGrupo-' + numGrupo).fadeIn('slow');
    $('#CardAprobar').hide();
}

function CerrarVerParticipantes(numGrupo){

    $('#CardGrupo-9827').hide();
    $('#CardGrupo-9828').hide();
    $('#CardGrupo-9829').hide();
    $('#CardGrupo-9830').hide();
    $('#CardGrupo-9831').hide();
    $('#CardAprobar').hide();

}

function VerDetallesParticipante(reactivo, seccion, nombreUsuario){
    $('#CardGrupo-9827').hide();
    $('#CardGrupo-9828').hide();
    $('#CardGrupo-9829').hide();
    $('#CardGrupo-9830').hide();
    $('#CardGrupo-9831').hide();

    $('#CabezeroCardDetalles').text("Participante: " + nombreUsuario);
    $('#CardAprobar').hide();
    $('#CardDetalles').show();
}

function CerrarDetalles(numGrupo) {
    $('#CardGrupo-9827').hide();
    $('#CardGrupo-9828').hide();
    $('#CardGrupo-9829').hide();
    $('#CardGrupo-9830').hide();
    $('#CardGrupo-9831').hide();

    $('#CardGrupo-' + numGrupo).show();

    $('#CardDetalles').hide();
    $('#CardAprobar').hide();
}

function AprobarGrupo(numGrupo){
    $('#CardGrupo-9827').hide();
    $('#CardGrupo-9828').hide();
    $('#CardGrupo-9829').hide();
    $('#CardGrupo-9830').hide();
    $('#CardGrupo-9831').hide();

    $('#CabezeroCardAprobar').text("Aprobación de Grupo: " + numGrupo);
    $('#CardAprobar').show();
}

function CerrarAprobar() {
    $('#CardAprobar').hide();
}

function AnunciarObservacionGrupal(capitulo, inciso, seccion) {
    $('#CapituloRevision').val(capitulo);
    $('#IncisoRevision').val(inciso);
    $('#SeccionRevision').val(seccion);
    $('#modalGenerarObservacion').modal('toggle')
}