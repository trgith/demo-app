<!--Librerias -->
@include('includes.header')


<!-- Contenido Principal -->
<main id="main">
    <section id="about" class="about">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div data-aos="fade-up">
                        <h3>Encuesta Institucional <?php echo date("Y"); ?> </h3>
                    </div>
                </div>
            </div>
            <br>
            <div class="row">
                <p>
                    Instrucciones para la Aplicación de la Encuesta:
                </p>
            </div>
            <div class="row">
                <div class="col-12">
                    <table class="table" style="text-align: justify; text-justify: inter-word;">
                        <tbody>
                            <tr>
                                <th scope="row">I.</th>
                                <td>
                                    El cuestionario es de aplicación anónima y está orientado a conocer la percepción del personal operativo de
                                    las instituciones policiales, de procuración de justicia y del sistema penitenciario de las entidades federativas
                                    en temas tales como: Perfil, Aspectos socioeconómicos, Profesionalización, Capacitación, Evaluación Policial,
                                    Equipamiento, Uso de tecnología, Infraestructura, Condiciones laborales, Hábitos y Problemas en el trabajo.
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">II.</th>
                                <td>
                                    El encuestador o responsable de la aplicación de la encuesta electrónica deberá llenar la totalidad de los
                                    campos del encabezado de la encuesta.
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">III.</th>
                                <td>
                                    La encuesta podrá ser aplicada mediante una entrevista preferentemente directa o conjunta del encuestador
                                    hacia el personal seleccionado, o bien, bajo la metodología que determine el evaluador externo en caso de
                                    que sea mediante aplicación electrónica.
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">IV.</th>
                                <td>
                                    En todas las preguntas se presentan respuestas de opción múltiple, por lo que ninguna pregunta puede
                                    quedar sin contestar, a excepción de aquellas que están condicionadas a la respuesta de otras preguntas.
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">V.</th>
                                <td>
                                    En caso de que el encuestado no conteste o no sepa la respuesta de la pregunta número l (uno), no deberá
                                    continuar con la aplicación de la encuesta y en caso de haber contestado la totalidad de la encuesta
                                    salvo la pregunta número l (uno), la encuesta se deberá considerar NO VÁLIDA, por lo que no deberá ser
                                    registrada en la base de datos correspondiente.
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">VI.</th>
                                <td>
                                    Antes de concluir con la aplicación de la encuesta, el encuestador o responsable de la aplicación de la
                                    encuesta electrónica deberá revisar que todas las preguntas hayan sido contestadas y, en su caso, solicitar
                                    al encuestado indicar su(s) respuesta(s) correspondiente(s a las pregunta(s) faltante(s) por contestar.
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>

    <section class="about">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="card text-white">
                        <div class="card-header bg-dark">Formato del Cuestionario</div>
                        <div class="card-body">
                            <table class="table text-dark">
                                <tbody>
                                    <tr>
                                        <td class="text-center">
                                            Entidad Federativa: [ ] [ ]<br>
                                            Anotar la clave de entidades del INEGI
                                        </td>
                                        <td class="text-center">
                                            No. de Folio: [ ] [ ] [ ] [ ] <br>
                                            Número consecutivo [ ]
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">
                                            Firma del Encuestador: <br>
                                            No aplica para aplicación electrónica de la encuesta
                                        </td>
                                        <td class="text-center">
                                            Fecha de Aplicación: [ ] [ ] / [ ] [ ] / <?php echo date("Y"); ?> <br>
                                            Considerar el formato (dd/mm/aaaa)
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="about">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <button class="btn btn-outline-dark">
                        <a href="/cuestionario1">
                            Comenzar Cuestionario
                        </a>
                    </button>
                </div>
            </div>
        </div>
    </section>
</main>
<!-- Cierra Contenido Principal -->

<!-- Footer -->
@include('includes.footer')
