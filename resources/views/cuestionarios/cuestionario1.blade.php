<!--Librerias -->
@include('includes.header')

<!-- Contenido Principal -->
<main id="main">

    @include('cuestionarios.perfil_personal_operativo')

    @include('cuestionarios.aspectos_socioeconomicos')

    @include('cuestionarios.profesionalizacion')

    <!-- Modal -->
    <div id="dobleValidacion" class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    ¿Estás seguro de tu respuesta?
                </div>
                <div class="modal-footer">
                    <button type="button" id="RespuestaNegada" class="btn btn-danger" data-dismiss="modal">No del todo</button>
                    <button type="button" id="RespuestaConfirmada" class="btn btn-success">Sí, continuar</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->

    <!-- Modal -->
    <div id="respuestaVacia" class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    Es necesario responder esta pregunta
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-info" data-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->

</main>
<!-- Cierra Contenido Principal -->


<!-- Footer -->
@include('includes.footer')