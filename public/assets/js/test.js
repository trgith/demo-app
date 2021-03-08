$(document).ready(function(){
    $('#EnviarTest').click(function(){
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            type: 'POST',
            url: '/saveTest',
            data: $('#FormTest').serialize(),
            dataType: 'json',
            success: function(data){
                console.log(data);
                var response = data.response;
                console.log(response);
                $('#Table').append("<tr>" +
                                    "<td>" + response.uno + "</td>" +
                                    "<td>" + response.dos + "</td>" +
                                  "</tr>");
            }
        });
    });

    /* Funcion para validar usuario */
    $('#sendUser').click(function(){
        console.log("entrando");
        var obj = {
            email: "dddd",
            name: "eeeeee"
        };

        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            type: 'GET',
            url: '/validateUser',
            data: {
                email: $("input[name=email]").val(),
                name: "Test"
            },
            success: function(data){
                var response = data.response;
                switch (data){
                    case 'policia@gmail.com':
                        location.href = '/modulo_institucional';
                        break;
                    case 'evaluador_externo@gmail.com':
                        location.href = '/monitoreo_seguimiento';
                        break;
                    case 'enlace_estatal@gmail.com':
                        location.href = '/monitoreo_seguimiento';
                        break;
                    case 'funcionario_publico@gmail.com':
                        location.href = '/modulo_integral';
                        break;
                    default :
                        location.href = '/';
                        break;
                }
            }
        });
    });

    /* Se esconden notificaciones */
    $('#SeccionRevisada').hide();



    /* Inciso A */
    $('#Cap111IncisoANegativa').hide();
    $('#Cap111IncisoAPositiva').hide();

    $( "#Cap111incisoAPositivo" ).change(function() {
        $('#Cap111IncisoANegativa').hide();
        $('#Cap111IncisoAPositiva').slideToggle( "slow" );
    });

    $( "#Cap111incisoANegativo" ).change(function() {
        /* Se vacia la tabla */
        $('#Cap111TablaBienes').children( 'tr:not(:first)' ).remove();
        $( "#Cap1NombreBien" ).val(' ');
        $( "#Cap1Programado2020" ).val(' ');
        $( "#Cap1Adquirido2020" ).val(' ');
        $( "#Cap1Alcanzado2020" ).val(' ');
        $('#Cap1IncisoAPositiva').hide();
        $('#Cap111IncisoAPositiva').hide();
        $('#Cap111IncisoANegativa').slideToggle( "slow" );
    });

    /* Tabla de inciso B */
    $( "#AgregarBienCap111" ).click(function() {
        $( "#Cap111TablaBienes" ).append( "<tr>" +
                                            "<td>" + $( "#Cap1NombreBien" ).val() + "</td>" +
                                            "<td>" + $( "#Cap1Programado2020" ).val() + "</td>" +
                                            "<td>" + $( "#Cap1Adquirido2020" ).val() + "</td>" +
                                            "<td>" + $( "#Cap1Alcanzado2020" ).val() + "</td>" +
                                            "<td><button type='button' class='btn btn-danger RemoverFilaCap1Tabla'><i class='bx bx-x-circle' ></i></button></td>" +
                                        "</tr>" );
        $( "#Cap1NombreBien" ).val(' ');
        $( "#Cap1Programado2020" ).val(' ');
        $( "#Cap1Adquirido2020" ).val(' ');
        $( "#Cap1Alcanzado2020" ).val(' ');
    });

    $(document).on("click",".RemoverFilaCap1Tabla",function(){
        $(this).parent().parent().remove();
    });

    $( "#EnviarARevision" ).click(function() {
        setTimeout(() => {  $('#SeccionRevisada').show();$("#SeccionRevisada").toast('show'); }, 2000);
    });


    /* Cuestionario Institucional */
    /* Se ocultan los divs de las preguntas que no se deben mostrar hasta responder la 1 */
    for(var i = 2; i < 8; i++){
        $('#SeccionCap1Pre' + i).hide();
    }
});

/* Funcion que nos lleva a la siguiente pregunta */
function EndPreguntaCapitulo1(siguienteSeccion, preguntaActual, tipoValidacion){

    var puedeContinuar = validarRespuestas(preguntaActual, tipoValidacion);

    if(puedeContinuar){
        for(var i = 0; i < 10; i++){
            $('#SeccionCap1Pre' + (i + 1)).hide();
        }
        $('#SeccionCap1Pre' + siguienteSeccion).show();
    }
    else{
        alert('Debes responder la pregunta antes de continuar');
    }
}

function validarRespuestas(preguntaActual, tipoValidacion){

    var respuesta = false;

    switch (tipoValidacion){
        case 'radioButton':
            if($("input[name='Cap1Pre" + preguntaActual + "']:checked").val()){
                respuesta = true;
            }
            break;
        case 'select':
            respuesta = true;
            break;
        default:
            console.log('Algo salio mal.');
    }

    return respuesta;
}