$(document).ready(function(){

    /* Wizard */
    //Initialize tooltips
    $('.nav-tabs > li a[title]').tooltip();

    //Wizard
    $('a[data-toggle="tab"]').on('show.bs.tab', function (e) {

        var $target = $(e.target);

        if ($target.parent().hasClass('disabled')) {
            return false;
        }
    });

    $(".next-step").click(function (e) {

        var $active = $('.wizard .nav-tabs li.active');
        $active.next().removeClass('disabled');
        nextTab($active);

    });
    $(".prev-step").click(function (e) {

        var $active = $('.wizard .nav-tabs li.active');
        prevTab($active);

    });

    //$('#1-1-1').hide();
    $('.botonCambiandoSeccion').hide();
    $('#1-2').hide();
    $('#2-1').hide();
    $('#2-2').hide();
    $('#3-1').hide();
    //$('#3-2').hide();
    $('#1-1-2').hide();
    $('#1-2-1').hide();
    $('#2-1-1').hide();
    $('#2-1-2').hide();
    $('#2-2-1').hide();
    $('#2-2-2').hide();
    $('#3-1-1').hide();
    //$('#3-1-2').hide();

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
                    /* PARA EL CASO DE UN POLICIA */
                    case 'policia@gmail.com':
                        location.href = '/modulo_institucional';
                        break;
                    /* PARA EL CASO DE UN FUNCIONARIO ESTATAL */
                    case 'funcionario_estatal@gmail.com':
                        location.href = '/modulo_integral';
                        break;
                    /* PARA EL CASO DE UN FUNCIONARIO FEDERAL */
                    case 'funcionario_federal@gmail.com':
                        location.href = '/modulo_integral';
                        break;
                    /* PARA EL CASO DE UN ENLACE ESTATAL */
                    case 'enlace_estatal@gmail.com':
                        location.href = '/monitoreo_seguimiento';
                        break;
                    /* PARA EL CASO DE UN EVALUADOR EXTERNO */
                    case 'evaluador_externo@gmail.com':
                        location.href = '/monitoreo_seguimiento';
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
    $('#Parte2').hide();
    $('#Parte3').hide();



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
        setTimeout(() => {  $('#SeccionRevisada').show();$("#SeccionRevisada").toast('show'); }, 0);
    });


    /* Cuestionario Institucional */
    /* Se ocultan los divs de las preguntas de la seccion 1 */
    for(var i = 2; i < 8; i++){
        $('#SeccionCap1Pre' + i).hide();
    }
    /* Se ocultan los divs de las preguntas de la seccion 2 */
    for(var i = 2; i < 5; i++){
        $('#SeccionCap2Pre' + i).hide();
    }
    /* Se ocultan los divs de las preguntas de la seccion 3 */
    for(var i = 2; i < 7; i++){
        $('#SeccionCap3Pre' + i).hide();
    }
});

/* Wizard */
function nextTab(elem) {
    $(elem).next().find('a[data-toggle="tab"]').click();
}
function prevTab(elem) {
    $(elem).prev().find('a[data-toggle="tab"]').click();
}
/* Wizard */

function CambiarSeccion(capituloActual, capituloSiguiente, seccionActual, seccionSiguiente){
    $('.botonCambiarSeccion').hide();
    $('.botonCambiandoSeccion').show();

    setTimeout(() => {

        //Se cambia de Capitulo
        $('#' + capituloActual).hide();
        $('#' + capituloSiguiente).show();

        //Se cambia de Seccion
        $('#' + seccionActual).hide();
        $('#' + seccionSiguiente).show();

        //Botones
        $('.botonCambiarSeccion').show();
        $('.botonCambiandoSeccion').hide();

        window.scrollTo(0,0);
    }, 500);
}


/* Parte 1: Perfil Personal Operativo */
/* Funcion que nos lleva a la siguiente pregunta */
function EndPreguntaCapitulo1(siguienteSeccion, preguntaActual, tipoValidacion){
    var puedeContinuar = validarRespuestasCap1(preguntaActual, tipoValidacion);
    if(puedeContinuar){
        switch(siguienteSeccion){
            case 8:
                $('#Parte1').hide();
                $('#Parte2').show();
                break;
            default:
                for(var i = 1; i < 9; i++){
                    $('#SeccionCap1Pre' + i).hide();
                }
                $('#SeccionCap1Pre' + siguienteSeccion).show();
                break;
        }
    }
    else{
        alert('Debes responder la pregunta antes de continuar');
    }
}

function validarRespuestasCap1(preguntaActual, tipoValidacion){
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


/* Parte 2: Aspectos Socioeconómicos */
function EndPreguntaCapitulo2(siguienteSeccion, preguntaActual, tipoValidacion){
    var puedeContinuar = validarRespuestasCap2(preguntaActual, tipoValidacion);
    if(puedeContinuar){

        switch(siguienteSeccion){
            case 4:
                /* Si respondio que si tenia un ingreso extra se muestra esa pregunta
                    si no, se termina esa seccion
                 */
                if($('#Cap2Pre3Opc1').is(':checked')){
                    for(var i = 1; i < 5; i++){
                        $('#SeccionCap2Pre' + i).hide();
                    }
                    $('#SeccionCap2Pre' + siguienteSeccion).show();
                } else {
                    $('#Parte2').hide();
                    $('#Parte3').show();
                }
                break;
            case 5:
                /*
                En caso de que si se mostro la 5ta pregunta, ya sería la ultima.
                 */
                $('#Parte2').hide();
                $('#Parte3').show();
                break;
            default:
                for(var i = 1; i < 5; i++){
                    $('#SeccionCap2Pre' + i).hide();
                }
                $('#SeccionCap2Pre' + siguienteSeccion).show();
                break;
        }
    }
    else{
        alert('Debes responder la pregunta antes de continuar');
    }
}

function validarRespuestasCap2(preguntaActual, tipoValidacion){
    var respuesta = false;
    switch (tipoValidacion){
        case 'radioButton':
            if($("input[name='Cap2Pre" + preguntaActual + "']:checked").val()){
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


/* Parte 3: Profesionalización */
function EndPreguntaCapitulo3(siguienteSeccion, preguntaActual, tipoValidacion){
    var puedeContinuar = validarRespuestasCap3(preguntaActual, tipoValidacion);
    if(puedeContinuar){
        switch(siguienteSeccion) {
            case 3:
                if($('#Cap3Pre2Opc1').is(':checked')){
                    for(var i = 1; i < 7; i++){
                        $('#SeccionCap3Pre' + i).hide();
                    }
                    $('#SeccionCap3Pre' + siguienteSeccion).show();
                } else {
                    for(var i = 1; i < 7; i++){
                        $('#SeccionCap3Pre' + i).hide();
                    }
                    $('#SeccionCap3Pre5').show();
                }
                break;
            default:
                for(var i = 1; i < 7; i++){
                    $('#SeccionCap3Pre' + i).hide();
                }
                $('#SeccionCap3Pre' + siguienteSeccion).show();
                break;
        }
    }
    else{
        alert('Debes responder la pregunta antes de continuar');
    }
}

function validarRespuestasCap3(preguntaActual, tipoValidacion){
    var respuesta = false;
    switch (tipoValidacion){
        case 'radioButton':
            if($("input[name='Cap3Pre" + preguntaActual + "']:checked").val()){
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