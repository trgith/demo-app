$(document).ready(function(){

    $('#CardGrupo-9827').hide();
    $('#CardGrupo-9828').hide();
    $('#CardGrupo-9829').hide();
    $('#CardGrupo-9830').hide();
    $('#CardGrupo-9831').hide();

    $('#CardDetalles').hide();

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
}

function VerDetallesParticipante(reactivo, seccion, nombreUsuario){
    $('#CardGrupo-9827').hide();
    $('#CardGrupo-9828').hide();
    $('#CardGrupo-9829').hide();
    $('#CardGrupo-9830').hide();
    $('#CardGrupo-9831').hide();

    $('#CabezeroCardDetalles').text("Participante: " + nombreUsuario);

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
}